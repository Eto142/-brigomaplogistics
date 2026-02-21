@include('partials.header')

<!-- BANNER SECTION -->
<section class="innerpage headerbt">
<img src="../wp-content/uploads/2025/06/services-banner.jpg" alt="Track Your Shipment" title="Track Your Shipment">
<div class="inbannerCvr">     
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="inleftbanner" data-aos="fade-up" data-aos-duration="1000">
<h1>Track Your Shipment</h1>
<p>Enter your tracking number below to get real-time updates<br />
on the status of your shipment.</p>
</div> 
</div>
</div>
</div>
</div>
</section>

<!-- TRACKING FORM SECTION -->
<section class="abtsec01">
<div class="container">
<div class="row">
<div class="col-lg-8 ms-auto me-auto">

<div class="abtitop" data-aos="fade-up" data-aos-duration="1500">

@if(session('error'))
<div class="alert alert-danger" style="border-radius: 8px;">
{{ session('error') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger" style="border-radius: 8px;">
{{ $errors->first('tracking_number') }}
</div>
@endif

<style>
.trackingFormCard {
    background: #fff;
    border-radius: 16px;
    padding: 40px 35px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}
.trackingFormCard h2 {
    font-size: 1.6rem;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 8px;
}
.trackingFormCard p.subtitle {
    color: #666;
    font-size: 0.95rem;
    margin-bottom: 25px;
}
.trackingFormCard .form-label {
    font-weight: 600;
    color: #333;
    font-size: 0.9rem;
    margin-bottom: 8px;
}
.trackingFormCard .tracking-input {
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    padding: 14px 18px;
    font-size: 1.05rem;
    transition: border-color 0.3s ease;
    letter-spacing: 1px;
}
.trackingFormCard .tracking-input:focus {
    border-color: #003366;
    box-shadow: 0 0 0 3px rgba(0,51,102,0.1);
    outline: none;
}
.trackingFormCard .tracking-input::placeholder {
    color: #bbb;
    letter-spacing: 0.5px;
}
.trackingFormCard .btn-track {
    background: linear-gradient(135deg, #003366, #004080);
    border: none;
    border-radius: 10px;
    padding: 14px 30px;
    font-size: 1.05rem;
    font-weight: 700;
    color: #fff;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}
.trackingFormCard .btn-track:hover {
    background: linear-gradient(135deg, #001f3f, #003366);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,51,102,0.3);
}
.trackingFormCard .btn-track i {
    font-size: 1.1rem;
}
.trackingFormCard .info-row {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 20px;
    padding: 12px 16px;
    background: #e6ecf5;
    border-radius: 10px;
    border-left: 4px solid #003366;
}
.trackingFormCard .info-row i {
    color: #003366;
    font-size: 1.2rem;
}
.trackingFormCard .info-row span {
    color: #555;
    font-size: 0.88rem;
}
</style>

<div class="trackingFormCard">
    <h2><i class="fas fa-search" style="color: #0d5fb8; margin-right: 10px;"></i>Shipment Tracking</h2>
    <p class="subtitle">Enter your tracking number to check the current status of your shipment.</p>

    <form method="POST" action="{{ route('shipment.track') }}">
        @csrf
        <div class="row align-items-end g-3">
            <div class="col-md-9">
                <label class="form-label">Tracking Number</label>
                <input type="text" 
                       name="tracking_number" 
                       class="form-control tracking-input" 
                       placeholder="e.g. BGL-12345678" 
                       value="{{ old('tracking_number') }}" 
                       required>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-track w-100">
                    <i class="fas fa-search"></i> TRACK
                </button>
            </div>
        </div>
    </form>

    
</div>

</div>

</div>
</div>
</div>
</section>
 
@include('partials.footer')
