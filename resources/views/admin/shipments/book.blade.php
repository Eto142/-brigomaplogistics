@include('admin.header')

<div class="main-content">

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1>Book Shipment</h1>
            <p class="text-muted mb-0">Create a new shipment (Admin)</p>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('shipment.store') }}">
        @csrf

        <!-- ================= SHIPMENT DETAILS ================= -->
        <div class="stat-card mb-4">
            <h5 class="section-title">Shipment Details</h5>

            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Tracking Number</label>
                    <input type="text" name="tracking_number" class="form-control" value="BGL-{{ strtoupper(Str::random(8)) }}" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Reference No</label>
                    <input type="text" name="reference_no" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Carrier</label>
                    <input type="text" name="carrier" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Origin</label>
                    <input type="text" name="origin" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Destination</label>
                    <input type="text" name="destination" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Shipment Mode</label>
                    <input type="text" name="shipment_mode" class="form-control" placeholder="e.g. Air Freight">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Shipment Type</label>
                    <input type="text" name="shipment_type" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Package Type</label>
                    <input type="text" name="package_type" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Product</label>
                    <input type="text" name="product" class="form-control">
                </div>
            </div>
        </div>

        <!-- ================= TIMING ================= -->
        <div class="stat-card mb-4">
            <h5 class="section-title">Timing Information</h5>
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Departure Time</label>
                    <input type="text" name="departure_time" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Expected Delivery Date</label>
                    <input type="text" name="expected_delivery_date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Pickup Date</label>
                    <input type="text" name="pickup_date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Pickup Time</label>
                    <input type="text" name="pickup_time" class="form-control">
                </div>
            </div>
        </div>

        <!-- ================= SHIPPER ================= -->
        <div class="stat-card mb-4">
            <h5 class="section-title">Shipper Information</h5>

            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Shipper Name</label>
                    <input name="shipper_name" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Company Name</label>
                    <input name="shipper_company" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Address</label>
                    <input name="shipper_address" class="form-control" required>
                </div>

                <div class="col-md-3">
                    <label class="form-label">City</label>
                    <input name="shipper_city" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Country</label>
                    <input name="shipper_country" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Phone</label>
                    <input name="shipper_phone" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Postal Code</label>
                    <input name="shipper_postal_code" class="form-control">
                </div>
            </div>
        </div>

        <!-- ================= RECEIVER ================= -->
        <div class="stat-card mb-4">
            <h5 class="section-title">Receiver Information</h5>

            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Receiver Name</label>
                    <input name="receiver_name" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Company Name</label>
                    <input name="receiver_company" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Address</label>
                    <input name="receiver_address" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">City</label>
                    <input name="receiver_city" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Country</label>
                    <input name="receiver_country" class="form-control">
                </div>
            </div>
        </div>

        <!-- ================= CARGO ================= -->
        <div class="stat-card mb-4">
            <h5 class="section-title">Tracking Details</h5>

            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-label">Quantity</label>
                    <input name="quantity" type="number" class="form-control">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Piece Type</label>
                    <input name="piece_type" class="form-control">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Height</label>
                    <input name="height" class="form-control">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Weight</label>
                    <input name="weight" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Description</label>
                    <input name="description" class="form-control">
                </div>

                <div class="col-12">
                    <label class="form-label">Comments</label>
                    <textarea name="comments" class="form-control" rows="2"></textarea>
                </div>
            </div>
        </div>

        <!-- ================= STATUS & PAYMENT ================= -->
        <div class="stat-card mb-4">
            <h5 class="section-title">Status & Payment</h5>

            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Initial Status</label>
                    <input name="status" type="text" class="form-control" value="Order Received" required>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Value</label>
                    <input name="value" type="text" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Payment Mode</label>
                    <input name="payment_mode" type="text" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Total Freight</label>
                    <input name="total_freight" type="text" class="form-control">
                </div>

                <div class="col-12 text-end">
                    <button class="btn btn-primary px-5 py-2">
                        <i class="fas fa-save me-2"></i> Book Shipment
                    </button>
                </div>
            </div>
        </div>

    </form>

    </form>
</div>

@include('admin.footer')







<!-- AWB Success Modal -->
@if(session('awb_number'))
<div class="modal fade show awb-success-modal" id="awbModal" tabindex="-1" aria-modal="true" role="dialog" style="display:block;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content shadow-lg border-0 rounded-4">
            
            <div class="modal-body text-center p-4">
                <!-- Icon -->
                <div class="mb-3">
                    <span class="success-icon">✓</span>
                </div>

                <!-- Title -->
                <h5 class="fw-semibold mb-2">Shipment Booked</h5>
                <p class="text-muted small mb-3">
                    Your shipment has been registered successfully.
                </p>

                <!-- AWB -->
                <div class="awb-box mb-4">
                    <span class="label">AWB Number</span>
                    <strong>{{ session('awb_number') }}</strong>
                </div>

                <!-- Action -->
                <a href="{{ session('pdf_path') }}" class="btn btn-primary w-100" download>
                    Download Receipt (PDF)
                </a>

                <p class="text-muted small mt-3">
                    This window will close automatically.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal-backdrop fade show"></div>

<script>
    setTimeout(() => {
        const modal = document.getElementById('awbModal');
        modal.classList.remove('show');
        modal.style.display = 'none';
        document.querySelector('.modal-backdrop')?.remove();
    }, 10000);
</script>
@endif


<script>
    // Trigger PDF download automatically
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('pdf_path'))
        const link = document.createElement('a');
        link.href = "{{ session('pdf_path') }}";
        link.download = "awb_{{ session('awb_number') }}.pdf";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        @endif
    });
</script>

<style>

    .awb-success-modal .modal-content {
    animation: scaleIn 0.25s ease-out;
}

@keyframes scaleIn {
    from {
        transform: scale(0.95);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

.success-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: #e0f2fe;
    color: #0369a1;
    font-size: 28px;
    font-weight: bold;
    border-radius: 50%;
}

.awb-box {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 12px;
}

.awb-box .label {
    display: block;
    font-size: 12px;
    color: #6c757d;
    margin-bottom: 2px;
}

</style>

