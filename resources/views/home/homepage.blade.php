@include('partials.header')
<section class="bannersec">
<div class="owl-carousel homebanner owl-theme"> 
<div class="item bannerCvr" style="background-image:url(wp-content/uploads/2025/12/banner-rights.png);">
<div class="container">
<div class="bannerCnt" data-aos="fade-up" data-aos-duration="1000">
<div class="row">
<div class="col-lg-8 ms-auto me-auto">
<div class="bannerLeft">
<div class="h1 animated" data-animation="fadeInDown">Global Logistics Solutions &amp; Seamless Shipment Visibility</div>
<div class="animated" data-animation="fadeInUp"><p>Fast, secure and cost-effective air, sea, and road freight solutions with global coverage,&nbsp;<br />
door-to &nbsp;door delivery, and advanced track &amp; trace capability.&nbsp;</p>
</div>
<a href="/track-now" title="Track Your Shipment" class="btn btn-primary no-bord animated" data-animation="zoomIn">Track Your Shipment</a>
<a href="/contact" target="_blank" title="Get an Instant Quote" class="btn btn-secondary animated" data-animation="zoomIn">Get an Instant Quote</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item bannerCvr" style="background-image:url(wp-content/uploads/2025/08/banner1-1.png);">
<div class="container">
<div class="bannerCnt" data-aos="fade-up" data-aos-duration="1000">
<div class="row">
<div class="col-lg-8 ms-auto me-auto">
<div class="bannerLeft">
<div class="h1 animated" data-animation="fadeInDown">Global Air Freight Solutions Fast, Secure, On Time</div>
<div class="animated" data-animation="fadeInUp"><p>Connecting your business to the world with precision and reliability.</p>
</div>
<a href="/track-now" title="Track Your Shipment" class="btn btn-primary no-bord animated" data-animation="zoomIn">Track Your Shipment</a>
<a href="/contact" target="_blank" title="Get an Instant Quote" class="btn btn-secondary animated" data-animation="zoomIn">Get an Instant Quote</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item bannerCvr" style="background-image:url(wp-content/uploads/2025/08/banner4.png);">
<div class="container">
<div class="bannerCnt" data-aos="fade-up" data-aos-duration="1000">
<div class="row">
<div class="col-lg-8 ms-auto me-auto">
<div class="bannerLeft">
<div class="h1 animated" data-animation="fadeInDown">Ship Smarter. Save Bigger. Go Farther</div>
<div class="animated" data-animation="fadeInUp"><p>Contracted rates and expert handling for all your ocean freight needs.</p>
</div>
<a href="/track-now" title="Track Your Shipment" class="btn btn-primary no-bord animated" data-animation="zoomIn">Track Your Shipment</a>
<a href="/contact" target="_blank" title="Get an Instant Quote" class="btn btn-secondary animated" data-animation="zoomIn">Get an Instant Quote</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item bannerCvr" style="background-image:url(wp-content/uploads/2025/08/banner6.png);">
<div class="container">
<div class="bannerCnt" data-aos="fade-up" data-aos-duration="1000">
<div class="row">
<div class="col-lg-8 ms-auto me-auto">
<div class="bannerLeft">
<div class="h1 animated" data-animation="fadeInDown">From Highways to Your Doorstep</div>
<div class="animated" data-animation="fadeInUp"><p>Seamless road freight solutions connecting every corner of the globe.</p>
</div>
<a href="/track-now" title="Track Your Shipment" class="btn btn-primary no-bord animated" data-animation="zoomIn">Track Your Shipment</a>
<a href="/contact" target="_blank" title="Get an Instant Quote" class="btn btn-secondary animated" data-animation="zoomIn">Get an Instant Quote</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="item bannerCvr" style="background-image:url(wp-content/uploads/2025/08/banner7-1.png);">
<div class="container">
<div class="bannerCnt" data-aos="fade-up" data-aos-duration="1000">
<div class="row">
<div class="col-lg-8 ms-auto me-auto">
<div class="bannerLeft">
<div class="h1 animated" data-animation="fadeInDown">When Size and Weight Defy Limits, We Deliver</div>
<div class="animated" data-animation="fadeInUp"><p>Specialised ODC transport solutions with precision planning and flawless execution.</p>
</div>
<a href="/track-now" title="Track Your Shipment" class="btn btn-primary no-bord animated" data-animation="zoomIn">Track Your Shipment</a>
<a href="/contact" target="_blank" title="Get an Instant Quote" class="btn btn-secondary animated" data-animation="zoomIn">Get an Instant Quote</a>
</div>
</div>
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
    border-color: #0d5fb8;
    box-shadow: 0 0 0 3px rgba(13,95,184,0.1);
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

    <div class="info-row">
        <i class="fas fa-info-circle"></i>
        <span>Your tracking number can be found on your shipment receipt or booking confirmation email.</span>
    </div>
</div>

</div>

</div>
</div>
</div>
</section>
 


<section class="sec03">
<div class="container">
<div class="row">
<div class="col-lg-10 ms-auto me-auto" data-aos="fade-up" data-aos-duration="1000">
<div class="homeabt">
<h1>Global Leader in Freight Forwarding and Complete Logistics Solutions</h1>
<p>Brigomap Logistics Ltd. is an independent freight forwarder established in 2004. We provide our customers with a comprehensive global partnership, enhancing every aspect of their logistics and forwarding requirements.</p>
<a href="{{url('about')}}" titl="Read More" class="btn btn-primary" title="Read More">Read More</a>
</div>
</div>
</div>
</div>
<div class="featImg" data-aos="fade-up" data-aos-duration="1000">
<img src="wp-content/uploads/2025/06/featured-image.jpg" alt="Right Logistics" titl="Right Logistics">
</div>
</section>
<section class="sec04">
<div class="container">
<div class="row">
<div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
<div class="Sec04Btm">
<div class="row">
<div class="col-md-6 col-lg-3">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/06/Global-Coverage.png" alt="Global Coverage" title="Global Coverage"></div>
<div class="sec04SMHeadin">Global Coverage</div>
<p>We partner with world&rsquo;s most successful freight forwarding networks to deliver your valuable cargo anywhere in the world.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/06/On-Time-Delivery.png" alt="On-Time Delivery" title="On-Time Delivery"></div>
<div class="sec04SMHeadin">On-Time Delivery</div>
<p>Achieve critical timeliness and work within budget parameters by ocean, air, land any combination of the three for moving anything in the world regardless of it size, weight and complexity.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/06/customer-support.png" alt="24x7 Customer Support" title="24x7 Customer Support"></div>
<div class="sec04SMHeadin">24x7 Customer Support</div>
<p>Our Customer service assist customers in making cost effective and correct use of our services and understand your business realities.</p>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/06/competitive-pricing.png" alt="Competitive Pricing" title="Competitive Pricing"></div>
<div class="sec04SMHeadin">Competitive Pricing</div>
<p>Partnership with our worldwide agents, airlines and ocean carriers we can offer competitive price to our customers.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="sec05" style="background: #003366; color: #fff;">
<div class="container">
<div class="row">
<div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
<div class="sec05left" data-aos="fade-up" data-aos-duration="1000">
<h2>Brigomap Logisticsby the Numbers</h2>
<p>Proven performance. Global reach. Trusted by thousands.</p>
</div>
</div>
<div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
<div class="counters" data-aos="fade-up" data-aos-duration="1000">
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="counterItmin">
<div class="counHeadin"><span class="counter">120</span><span class="plus">+</span></div>
<div class="couContin">Countries Network</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="counterItmin">
<div class="counHeadin"><span class="counter">10</span><span class="plus">+</span></div>
<div class="couContin">Years of Experience</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="counterItmin">
<div class="counHeadin"><span class="counter">100</span><span class="plus">+</span></div>
<div class="couContin">Full Time Employees</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="sec06">
<div class="container">
<div class="row">
<div class="col-lg-12 servicetop" data-aos="fade-up" data-aos-duration="1000"><h2>Our Services</h2></div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/services1.png" alt="Brigo Map Air" title="Brigo Map Air">
</div>
<div class="namesecwht">Brigo Map<br>Air</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map Air</div>
<div class="datesec desig"><p>Through our worldwide agency set up, key carrier partnership, we provide Customer specific and most direct, economic routing of your shipments.</p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/rightsea.png" alt="Brigo Map Sea" title="Brigo Map Sea">
</div>
<div class="namesecwht">Brigo Map<br>Sea</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map Sea</div>
<div class="datesec desig"><p>Be it full container loads, less than container loads or buyer???s consolidation. Our strength and expertise is your gain.</p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/rightmovers.png" alt="Brigo Map Movers" title="Brigo Map Movers">
</div>
<div class="namesecwht">Brigo Map<br>Movers</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map Movers</div>
<div class="datesec desig"><p>Brigo Map is unlike most other moving companies. We provide a complete door-to-door removals service for moving all your entire household items overseas. </p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/righthaz.png" alt="Brigo Map HAZ" title="Brigo Map HAZ">
</div>
<div class="namesecwht">Brigo Map<br>HAZ</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map HAZ</div>
<div class="datesec desig"><p>Brigomap Logisticsproviding strategic solutions for the safe handling and transportation of dangerous goods.</p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/rightprojects.png" alt="Brigo Map Projects" title="Brigo Map Projects">
</div>
<div class="namesecwht">Brigo Map<br>Projects</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map Projects</div>
<div class="datesec desig"><p>We offer tailor made solutions for project cargoes, employing all means of transport.</p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/right-d2d.png" alt="Brigo Map D2D" title="Brigo Map D2D">
</div>
<div class="namesecwht">Brigo Map<br>D2D</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map D2D</div>
<div class="datesec desig"><p>We can provide complete Door to Door solution for your shipments by air, ocean or sea/air ??? air sea worldwide.</p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/right-critical.png" alt="Brigo Map Critical" title="Brigo Map Critical">
</div>
<div class="namesecwht">Brigo Map<br>Critical</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map Critical</div>
<div class="datesec desig"><p>Providing innovative transportation solutions for time critical cargo is our business. In order to provide our customers with the quickest</p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/right-cold-chain.png" alt="Brigo Map Cold Chain" title="Brigo Map Cold Chain">
</div>
<div class="namesecwht">Brigo Map<br>Cold Chain</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map Cold Chain</div>
<div class="datesec desig"><p>When you have cargo that needs a constant temperature above or below freezing, you need a dependable and experienced freight forwarder who can provide you with refrigerated freight transportation services to and from virtually any location in the world. </p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 servBtm" data-aos="fade-up" data-aos-duration="1000">
<div class="serviceCvr">
<div class="placelisImg">
<img src="wp-content/uploads/2025/06/aog-shippers.png" alt="Brigo Map AOG / SHIPSPARE" title="Brigo Map AOG / SHIPSPARE">
</div>
<div class="namesecwht">Brigo Map<br>AOG / SHIPSPARE</div>
<div class="serHov">
<a href="/services" title="Services">
<div class="namesec">Brigo Map AOG / SHIPSPARE</div>
<div class="datesec desig"><p>Through our worldwide agency set up,key carrier partnership,we provide Customer specific and most direct, economic routing of your shipments</p>
</div>
<div class="btn btn-primary no-bord" title="Read More">Read More</div></a>
</div>
</div>
</div>
<div class="col-lg-12 text-center servBtn">
<a href="/services" title="View All" class="btn btn-primary">View All</a>
</div>
</div>
</div>
</section>
<section class="industriServ">
<div class="container">
<div class="idserhead"><h2>Industries We Serve</h2></div>
<div class="row">
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Automative.png" alt="Automotive" title="Automotive"></div>
<div class="sec04SMHeadin">Automotive</div>
<p>Reliable global transport for automotive parts, vehicles, and components with on-time delivery.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Oil-Gas.png" alt="Oil & Gas" title="Oil & Gas"></div>
<div class="sec04SMHeadin">Oil & Gas</div>
<p>Secure and compliant logistics for rigs, equipment, and critical oilfield supplies worldwide.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Pharmaceuticals.png" alt="Pharmaceuticals" title="Pharmaceuticals"></div>
<div class="sec04SMHeadin">Pharmaceuticals</div>
<p>Temperature-controlled, safe, and fast shipping for medicines and healthcare products.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/E-Commerce.png" alt="E-Commerce" title="E-Commerce"></div>
<div class="sec04SMHeadin">E-Commerce</div>
<p>End-to-end fulfillment, warehousing, and last-mile delivery for online businesses of all sizes.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Cold-Chain.png" alt="Cold Chain" title="Cold Chain"></div>
<div class="sec04SMHeadin">Cold Chain</div>
<p>Advanced temperature-controlled logistics for perishables, frozen goods, and sensitive cargo.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Industrial-Equipment.png" alt="Industrial Equipment" title="Industrial Equipment"></div>
<div class="sec04SMHeadin">Industrial Equipment</div>
<p>Specialized handling and transport for heavy machinery and industrial-grade equipment.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Electronics.png" alt="Electronics" title="Electronics"></div>
<div class="sec04SMHeadin">Electronics</div>
<p>Safe and efficient shipping for high-value electronic goods with real-time tracking.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Marine-Aviation.png" alt="Marine & Aviation" title="Marine & Aviation"></div>
<div class="sec04SMHeadin">Marine & Aviation</div>
<p>Logistics support for marine parts, aviation spares, and time-critical maintenance cargo.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Chemicals-DG.png" alt="Chemicals (DG)" title="Chemicals (DG)"></div>
<div class="sec04SMHeadin">Chemicals (DG)</div>
<p>Certified DG handling and global transport for hazardous chemicals with full compliance.</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-12 industservCvr">
<div class="abtsec4Cvr">
<div class="sec4Icon"><img src="wp-content/uploads/2025/12/Project-Cargo.png" alt="Project Cargo" title="Project Cargo"></div>
<div class="sec04SMHeadin">Project Cargo</div>
<p>Expert end-to-end movement of oversized, heavy, and complex project shipments.</p>
</div>
</div>
</div>
</div>
</section>
<section class="logsuply">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="logsupLeft">
<h2>Complete Logistics And<br />
Supply Chain Solutions</h2>
<p>A full suite of integrated services designed to support your end-to-end logistics and global supply chain needs.</p>
</div>
</div>
<div class="col-lg-7 ms-auto">
<div class="logsupRight servBtmcnt ">
<ul>
<li><strong>Global Freight Forwarding (Air, Sea &amp; Road)</strong><br />
Fast, reliable freight movement across global routes through optimized air, sea, and road networks.</li>
<li><strong>International Shipping</strong><br />
Seamless cross-border shipping with end-to-end coordination and documentation support.</li>
<li><strong>Container Shipping (20ft, 40ft, 40HQ)</strong><br />
Flexible container solutions for all cargo sizes with competitive rates and global coverage.</li>
<li><strong>DG Cargo Handling</strong><br />
Certified and compliant handling of hazardous goods with maximum safety and control.</li>
<li><strong>Customs Clearance</strong><br />
Hassle-free customs processing to ensure smooth and timely cargo movement.</li>
<li><strong>Warehousing &amp; Distribution</strong><br />
Secure storage and efficient distribution solutions for all types of cargo.</li>
<li><strong>Multi-Modal Transport</strong><br />
Integrated air, sea, and road combinations for faster and more cost-effective delivery.</li>
<li><strong>Project Cargo Management</strong><br />
Customized logistics for oversized, heavy, and complex industrial cargo.</li>
<li><strong>Last-Mile Delivery</strong><br />
Reliable final-stage delivery ensuring your shipment reaches its exact destination.</li>
<li><strong>Real-Time Track &amp; Trace</strong><br />
Stay updated with live shipment visibility and continuous status updates.</li>
<li><strong>VGM (Verified Gross Mass) Services</strong><br />
Accurate VGM certification to meet global shipping compliance requirements.</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="sec07">
<div class="container">
<div class="row">
<div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
<div class="sec7Box">
<div class="row">
<div class="col-lg-6">
<div class="sec7BxCvr">
<h3>Track Your Shipment</h3>
<p>Track your shipment in real time and stay informed about its status from dispatch to delivery.</p>
<a href="/track-now" title="Track Now" class="btn btn-primary">Track Now</a>
</div>
</div>
<div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
<div class="sec7Img">
<img src="wp-content/uploads/2025/06/sec07img1.png" alt="Track Your Shipment" title="Track Your Shipment">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
<div class="sec7Box">
<div class="row">
<div class="col-lg-6">
<div class="sec7BxCvr">
<h3>Contact us </h3>
<a href="/contact" title="Contact Us" class="btn btn-primary">Contact Us</a>
</div>
</div>
<div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
<div class="sec7Img">
<img src="wp-content/uploads/2025/06/sec07img2.png" alt="Contact Us" title="Contact Us">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="sec8">
<div class="container">
<div class="row">
<div class="faqtop" data-aos="fade-up" data-aos-duration="1000">
<h4>Frequently Asked Questions</h4>
</div>
<div class="col-lg-8 ms-auto me-auto" data-aos="fade-up" data-aos-duration="1000">
<div class="faqCvr">
<div class="accordion" id="accordionExample">
<div class="accordion-item">
<div class="accordion-header" id="heading1">
<div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
What services does Brigomap Logisticsoffer?                            </div>
</div>
<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p><span data-olk-copy-source="MessageBody">We provide global freight forwarding, air/sea/road transport, customs clearance, warehousing, project cargo, DG goods handling, and end-to-end supply chain solutions.</span></p>
</div>
</div>
</div>
<div class="accordion-item">
<div class="accordion-header" id="heading2">
<div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseOne">
Do you handle international shipments?                            </div>
</div>
<div id="collapse2" class="accordion-collapse collapse " aria-labelledby="heading2" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p><span data-olk-copy-source="MessageBody">Absolutely. We handle exports, imports, cross-trade, trans-shipment, and end-to-end global logistics across 120+ countries.</span></p>
</div>
</div>
</div>
<div class="accordion-item">
<div class="accordion-header" id="heading3">
<div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseOne">
Can I track my shipment in real-time?                            </div>
</div>
<div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p><span data-olk-copy-source="MessageBody">Yes. Our track &amp; trace system allows you to follow your shipment across air freight, ocean freight, container shipping, and road transport.</span></p>
</div>
</div>
</div>
<div class="accordion-item">
<div class="accordion-header" id="heading4">
<div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseOne">
What container sizes do you support?                            </div>
</div>
<div id="collapse4" class="accordion-collapse collapse " aria-labelledby="heading4" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p><span data-olk-copy-source="MessageBody">We support 20ft, 40ft, 40HQ, reefer containers, flat-rack, and open-top containers for both standard and OOG cargo.</span></p>
</div>
</div>
</div>
<div class="accordion-item">
<div class="accordion-header" id="heading5">
<div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseOne">
Do you ship dangerous goods (DG Cargo)?                            </div>
</div>
<div id="collapse5" class="accordion-collapse collapse " aria-labelledby="heading5" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p><span data-olk-copy-source="MessageBody">Yes. Our certified DG team handles chemical cargo, hazardous materials, and restricted items with full compliance.</span></p>
</div>
</div>
</div>
<div class="accordion-item">
<div class="accordion-header" id="heading6">
<div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseOne">
Do you provide door-to-door delivery?                            </div>
</div>
<div id="collapse6" class="accordion-collapse collapse " aria-labelledby="heading6" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p><span data-olk-copy-source="MessageBody">Yes. We offer door-to-door logistics solutions for air, sea, and combined modes, including customs clearance and last-mile delivery.</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
 
@include('partials.footer')