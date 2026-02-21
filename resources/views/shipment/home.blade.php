<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Brigomap Logistics Courier Service || Delivery Services Worldwide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="Brigomap Logistics Courier Service || Delivery Services Worldwide [Cargo, Air Freight, Land, Sea, Delivery all over the world]"/>
    <meta name="keywords" content="Brigomap Logistics Courier Service || Delivery Services Worldwide [Cargo, Air Freight, Land, Sea, Delivery all over the world]" />
    <meta name="author" content="Brigomap Logistics Courier Service">
    <meta property="og:image" content="img/cargo.jpeg" />
    <meta property="og:image:url" content="img/cargo.jpeg" />
    <meta property="og:image:secure_url" content="img/cargo.jpeg" />
    <link rel="shortcut icon" type="image/png" href="img/logo-2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #0056b3;
            --primary-dark: #003366;
            --accent-red: #8B0000;
            --accent-light: #e63946;
            --light-bg: #f8f9fa;
            --text-dark: #212529;
            --text-light: #6c757d;
            --white: #ffffff;
            --border-radius: 12px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            --transition: all 0.25s ease;
            --card-bg: #ffffff;
            --border-light: #e9ecef;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        /* Custom grid system (lightweight, like Bootstrap) */
        .container {
            width: 100%;
            padding-right: 20px;
            padding-left: 20px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }
        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }
        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-12, .col-md-6, .col-lg-4, .col-lg-8 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width: 768px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 992px) {
            .col-lg-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-lg-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        /* utility classes */
        .d-flex { display: flex; }
        .flex-wrap { flex-wrap: wrap; }
        .justify-content-center { justify-content: center; }
        .align-items-center { align-items: center; }
        .text-center { text-align: center; }
        .text-muted { color: var(--text-light); }
        .bg-white { background-color: var(--white); }
        .text-dark { color: var(--text-dark); }
        .text-primary { color: var(--primary-blue); }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-3 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 1.5rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-3 { margin-top: 1rem; }
        .mt-4 { margin-top: 1.5rem; }
        .p-2 { padding: 0.5rem; }
        .rounded { border-radius: 50px; }
        .small { font-size: 0.875rem; }
        .fw-bold { font-weight: 600; }
        .gap-3 { gap: 1rem; }
        .table-responsive { overflow-x: auto; }

        /* main header */
        .main-header {
            background-color: var(--white);
            padding: 18px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            position: relative;
            z-index: 1000;
        }
        .logo {
            height: 55px;
            transition: var(--transition);
        }
        .logo:hover { opacity: 0.9; }

        /* tracking hero */
        .tracking-hero {
            background: linear-gradient(145deg, var(--primary-blue), var(--primary-dark));
            padding: 60px 0 80px;
            color: var(--white);
            position: relative;
            margin-bottom: 50px;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        .tracking-badge {
            background-color: var(--accent-red);
            color: white;
            padding: 8px 24px;
            border-radius: 40px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            box-shadow: 0 8px 20px rgba(139,0,0,0.3);
        }
        .tracking-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .tracking-hero .badge-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 25px;
        }
        .badge-item {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(4px);
            padding: 12px 20px;
            border-radius: 60px;
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
            min-width: 160px;
        }
        .badge-item small {
            display: block;
            font-size: 0.75rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .badge-item strong {
            font-size: 1.1rem;
        }

        /* info cards */
        .info-card {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 30px;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.02);
            transition: var(--transition);
        }
        .info-card:hover {
            box-shadow: 0 20px 35px rgba(0,86,179,0.08);
        }
        .info-header {
            background-color: rgba(0,86,179,0.03);
            padding: 18px 24px;
            border-bottom: 1px solid var(--border-light);
            font-weight: 600;
            font-size: 1.2rem;
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .info-header i {
            color: var(--accent-red);
            font-size: 1.3rem;
        }
        .info-body {
            padding: 24px;
        }

        .info-row {
            display: flex;
            margin-bottom: 12px;
            border-bottom: 1px dashed #f0f0f0;
            padding-bottom: 8px;
        }
        .info-label {
            flex: 0 0 130px;
            font-weight: 500;
            color: var(--text-light);
            font-size: 0.9rem;
        }
        .info-value {
            flex: 1;
            font-weight: 500;
            color: var(--text-dark);
        }

        /* table styles */
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-bordered {
            border: 1px solid var(--border-light);
        }
        .table th, .table td {
            padding: 14px 12px;
            border: 1px solid var(--border-light);
            text-align: left;
        }
        .table thead {
            background: linear-gradient(145deg, var(--primary-blue), #0047a3);
            color: white;
        }
        .table tbody tr:hover {
            background-color: rgba(0,86,179,0.02);
        }

        /* package image */
        .package-image {
            max-width: 100%;
            border-radius: 16px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            margin: 20px 0;
            border: 3px solid white;
        }

        /* timeline */
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        .timeline:before {
            content: '';
            position: absolute;
            left: 10px;
            top: 10px;
            bottom: 10px;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-blue), var(--accent-light));
            border-radius: 2px;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 28px;
            display: flex;
            gap: 16px;
        }
        .timeline-dot {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            box-shadow: 0 5px 15px rgba(0,86,179,0.15);
            border: 2px solid var(--primary-blue);
            font-size: 1.1rem;
            z-index: 2;
            flex-shrink: 0;
        }
        .timeline-content {
            flex: 1;
            background: #fafbfc;
            padding: 16px 20px;
            border-radius: 14px;
            border-left: 4px solid var(--primary-blue);
        }
        .timeline-date {
            font-size: 0.85rem;
            color: var(--text-light);
            margin-bottom: 5px;
        }
        .timeline-status {
            font-weight: 700;
            color: var(--primary-dark);
            font-size: 1.1rem;
        }
        .timeline-location {
            font-size: 0.95rem;
            color: var(--accent-red);
        }
        .timeline-remarks {
            background: #fff3e0;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 0.9rem;
        }

        /* progress bar */
        .progress {
            height: 8px;
            background-color: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
        }
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--accent-red), #f05a5a);
            border-radius: 10px;
        }
        .bg-primary-blue {
            background-color: var(--primary-blue) !important;
        }
        .bg-danger {
            background-color: var(--accent-red) !important;
        }
        .bg-success {
            background-color: #28a745 !important;
        }
        .rounded-circle {
            border-radius: 50% !important;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        /* action buttons */
        .action-btn {
            background: linear-gradient(145deg, var(--primary-blue), #0047a3);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 40px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: var(--transition);
            cursor: pointer;
            text-decoration: none;
            border: 1px solid rgba(255,255,255,0.1);
            width: 100%;
            font-size: 1rem;
        }
        .action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(0,86,179,0.3);
            background: linear-gradient(145deg, #0047a3, var(--primary-blue));
        }

        /* footer */
        .main-footer {
            background: #1a2634;
            color: #b0c4de;
            padding: 60px 0 20px;
            margin-top: 60px;
        }
        .footer-heading {
            color: white;
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 12px;
        }
        .footer-heading:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--accent-red);
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            margin-bottom: 12px;
        }
        .footer-links a {
            color: #b0c4de;
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        .footer-links i {
            color: var(--accent-light);
            font-size: 0.8rem;
        }
        .social-links {
            display: flex;
            gap: 15px;
        }
        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--transition);
        }
        .social-links a:hover {
            background: var(--accent-red);
            transform: translateY(-3px);
        }
        .footer-bottom {
            text-align: center;
            padding-top: 40px;
            margin-top: 40px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* print styles */
        @media print {
            .no-print { display: none !important; }
            body { background: white; }
            .info-card { box-shadow: none; border: 1px solid #ddd; }
        }

        /* mobile fixes */
        @media (max-width: 767px) {
            .tracking-hero h1 { font-size: 1.8rem; }
            .badge-item { min-width: 140px; }
            .info-row { flex-direction: column; gap: 4px; }
            .info-label { flex: none; }
            .timeline { padding-left: 15px; }
            .timeline-dot { width: 32px; height: 32px; font-size: 0.9rem; }
        }
    </style>
</head>
<body>
    <header class="main-header no-print">
        <div class="container">
            <center>
                <a href="/">
                    <!-- using placeholder because asset() won't render in static demo, but kept original syntax -->
                    <img src="{{ asset('wp-content/uploads/2026/02/rights-logo.png') }}" alt="Company Logo" class="logo" onerror="this.src='https://via.placeholder.com/150x50?text=Brigomap+Logo'">
                </a>
            </center>
        </div>
    </header>

    <section class="tracking-hero">
        <div class="container">
            <span class="tracking-badge">
                <i class="fas fa-shipping-fast"></i> TRACKING DETAILS
            </span>
            <h1>Shipment Tracking</h1>
            <p style="font-size: 1.2rem; opacity: 0.95; margin-bottom: 2rem;">Tracking ID: {{ $shipment->tracking_number }}</p>
            
            <div class="badge-group">
                <div class="badge-item">
                    <small>Current Status</small>
                    <strong>{{ $shipment->status }}</strong>
                </div>
                <div class="badge-item">
                    <small>From</small>
                    <strong>{{ $shipment->origin }}</strong>
                </div>
                <div class="badge-item">
                    <small>To</small>
                    <strong>{{ $shipment->destination }}</strong>
                </div>
                <div class="badge-item">
                    <small>Expected Delivery</small>
                    <strong>{{ $shipment->expected_delivery_date }}</strong>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <!-- Main column (left) -->
            <div class="col-lg-8">
                <!-- Package Details Card -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-box-open"></i> Package Details
                    </div>
                    <div class="info-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 style="color: var(--accent-red); margin-bottom: 1.2rem;">
                                    <i class="fas fa-user-tie me-2"></i> Sender Information
                                </h5>
                                <div class="info-row">
                                    <div class="info-label">Name:</div>
                                    <div class="info-value">{{ $shipment->shipper_name }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Address:</div>
                                    <div class="info-value">{{ $shipment->shipper_address }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Origin:</div>
                                    <div class="info-value">{{ $shipment->origin }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 style="color: var(--accent-red); margin-bottom: 1.2rem;">
                                    <i class="fas fa-user me-2"></i> Receiver Information
                                </h5>
                                <div class="info-row">
                                    <div class="info-label">Name:</div>
                                    <div class="info-value">{{ $shipment->receiver_name }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Address:</div>
                                    <div class="info-value">{{ $shipment->receiver_address }}</div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Destination:</div>
                                    <div class="info-value">{{ $shipment->destination }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5 style="color: var(--accent-red); margin-bottom: 1.2rem;">
                                    <i class="fas fa-info-circle me-2"></i> Shipment Details
                                </h5>
                                <div class="info-row"><span class="info-label">Carrier:</span><span class="info-value">{{ $shipment->carrier }}</span></div>
                                <div class="info-row"><span class="info-label">Reference No:</span><span class="info-value">{{ $shipment->reference_no }}</span></div>
                                <div class="info-row"><span class="info-label">Shipment Mode:</span><span class="info-value">{{ $shipment->shipment_mode }}</span></div>
                                <div class="info-row"><span class="info-label">Type:</span><span class="info-value">{{ $shipment->shipment_type }}</span></div>
                            </div>
                            <div class="col-md-6">
                                <h5 style="color: var(--accent-red); margin-bottom: 1.2rem;">
                                    <i class="fas fa-clock me-2"></i> Timing Information
                                </h5>
                                <div class="info-row"><span class="info-label">Departure Time:</span><span class="info-value">{{ $shipment->departure_time }}</span></div>
                                <div class="info-row"><span class="info-label">Expected Delivery:</span><span class="info-value">{{ $shipment->expected_delivery_date }}</span></div>
                                <div class="info-row"><span class="info-label">Pickup Date:</span><span class="info-value">{{ $shipment->pickup_date }}</span></div>
                                <div class="info-row"><span class="info-label">Pickup Time:</span><span class="info-value">{{ $shipment->pickup_time }}</span></div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h5 style="color: var(--accent-red); margin-bottom: 1.2rem;">
                                    <i class="fas fa-boxes me-2"></i> Package Specifications
                                </h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr><th>Qty</th><th>Type</th><th>Height (cm)</th><th>Weight (kg)</th><th>Description</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $shipment->quantity }}</td>
                                                <td>{{ $shipment->piece_type }}</td>
                                                <td>{{ $shipment->height }}</td>
                                                <td>{{ $shipment->weight }}</td>
                                                <td>{{ $shipment->description }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h5 style="color: var(--accent-red); margin-bottom: 1.2rem;">
                                    <i class="fas fa-comment me-2"></i> Additional Information
                                </h5>
                                <div class="info-row">
                                    <div class="info-label">Comments:</div>
                                    <div class="info-value">{{ $shipment->comments }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package image -->
                <div class="text-center">
                    <img src="{{ $shipment->image_url ?? asset('img/package-default.png') }}" alt="Package Image" class="package-image img-fluid" onerror="this.src='https://via.placeholder.com/400x200?text=Package+Image'">
                </div>

                <!-- Shipment History -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-history"></i> Shipment History
                    </div>
                    <div class="info-body">
                        <div class="timeline">
                            @forelse($history as $item)
                            <div class="timeline-item">
                                <div class="timeline-dot">
                                    <i class="fas fa-{{ strpos($item->status, 'Received') !== false ? 'check' : (strpos($item->status, 'Transit') !== false ? 'shipping-fast' : (strpos($item->status, 'Delivery') !== false ? 'truck' : (strpos($item->status, 'Delivered') !== false ? 'check-circle' : 'info-circle'))) }}"></i>
                                </div>
                                <div class="timeline-content">
                                    <div class="timeline-date"><i class="far fa-calendar-alt"></i> {{ $item->date }} at {{ $item->time }}</div>
                                    <div class="timeline-status">{{ $item->status }}</div>
                                    <div class="timeline-location"><i class="fas fa-map-marker-alt"></i> {{ $item->location }}</div>
                                    @if(!empty($item->remarks))
                                    <div class="timeline-remarks mt-2"><i class="fas fa-comment-dots"></i> {{ $item->remarks }}</div>
                                    @endif
                                </div>
                            </div>
                            @empty
                            <p class="text-center text-muted">No tracking history available yet.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div> <!-- end col-lg-8 -->

            <!-- Sidebar (right) -->
            <div class="col-lg-4">
                <!-- Quick Summary -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-clipboard-list"></i> Quick Summary
                    </div>
                    <div class="info-body">
                        <div class="info-row"><span class="info-label">Package Type:</span><span class="info-value">{{ $shipment->package_type }}</span></div>
                        <div class="info-row"><span class="info-label">Total Weight:</span><span class="info-value">{{ $shipment->weight }}</span></div>
                        <div class="info-row"><span class="info-label">Shipment Type:</span><span class="info-value">{{ $shipment->shipment_type }}</span></div>
                        <div class="info-row"><span class="info-label">Product:</span><span class="info-value">{{ $shipment->product }}</span></div>
                        <div class="info-row"><span class="info-label">Value:</span><span class="info-value">{{ $shipment->value }}</span></div>
                        <div class="info-row"><span class="info-label">Payment Mode:</span><span class="info-value">{{ $shipment->payment_mode }}</span></div>
                        <div class="info-row"><span class="info-label">Total Freight:</span><span class="info-value">{{ $shipment->total_freight }}</span></div>
                    </div>
                </div>

                <!-- Shipping Route -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-route"></i> Shipping Route
                    </div>
                    <div class="info-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-center">
                                <div class="bg-primary-blue text-white p-2 rounded-circle">
                                    <i class="fas fa-map-pin"></i>
                                </div>
                                <div class="mt-2 fw-bold small">{{ $shipment->origin }}</div>
                            </div>
                            <div class="flex-grow-1 px-3">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $shipment->progress_percent ?? '45%' }}"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="bg-success text-white p-2 rounded-circle">
                                    <i class="fas fa-flag-checkered"></i>
                                </div>
                                <div class="mt-2 fw-bold small">{{ $shipment->destination }}</div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <small class="text-muted"><i class="fas fa-info-circle"></i> Current status: {{ $shipment->status }}</small>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="info-card no-print">
                    <div class="info-header">
                        <i class="fas fa-cogs"></i> Actions
                    </div>
                    <div class="info-body text-center">
                        <button class="action-btn" onclick="window.print()">
                            <i class="fas fa-print"></i> Print Details
                        </button>
                    </div>
                </div>

                <!-- Need Help -->
                <div class="info-card no-print">
                    <div class="info-header">
                        <i class="fas fa-headset"></i> Need Help?
                    </div>
                    <div class="info-body">
                        <p class="small">Our customer support team is available 24/7 to assist you with any questions about your shipment.</p>
                        <div class="text-center mt-3">
                            <a href="/contact" class="action-btn">
                                <i class="fas fa-envelope"></i> Contact Support
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-lg-4 -->
        </div> <!-- end row -->
    </div> <!-- end container -->

    <footer class="main-footer no-print">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-heading">Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Ocean Freight</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Sky Freight</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Cargo Express</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Logistics</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Warehousing</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Custom Brokerage</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-heading">Contact Us</h3>
                    <ul class="footer-links">
                        {{-- <li>
                            <a href="#"><i class="fas fa-map-marker-alt"></i> Clock Tower Street, VGN CH40 Plot no:2, Anna Nagar, Chennai, Pin :600040</a>
                        </li> --}}
                        <li>
                            <a href="mailto:support@brigomaplogistics.com"><i class="fas fa-envelope"></i> support@brigomaplogistics.com</a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="/"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="/about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="/services"><i class="fas fa-chevron-right"></i> Services</a></li>
                        <li><a href="/track-now"><i class="fas fa-chevron-right"></i> Track Shipment</a></li>
                        <li><a href="/contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="mb-0">&copy; {{ date('Y') }} Brigomap Logistics. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>