@extends('themes.xylo.layouts.master')

@section('title', 'Our Services')

@section('content')
<!-- Page Title -->
<div class="page-title bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="mb-0">Our Services</h1>
                <h4 class="text-muted mb-0">What we offer to our customers</h4>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="icon-box bg-primary text-white mb-4">
                            <i class="fas fa-shipping-fast fa-2x"></i>
                        </div>
                        <h4>Fast Shipping</h4>
                        <p class="text-muted">We offer fast and reliable shipping to all our customers. Your order will be delivered in no time!</p>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="icon-box bg-success text-white mb-4">
                            <i class="fas fa-undo-alt fa-2x"></i>
                        </div>
                        <h4>Easy Returns</h4>
                        <p class="text-muted">Not satisfied with your purchase? We offer easy returns within 30 days of delivery.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="icon-box bg-info text-white mb-4">
                            <i class="fas fa-headset fa-2x"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="text-muted">Our customer support team is available 24/7 to assist you with any questions or concerns.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Why Choose Us</h2>
            <p class="lead">We provide the best shopping experience</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle text-success"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Quality Products</h4>
                        <p>We source only the highest quality products from trusted suppliers.</p>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle text-success"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Secure Payment</h4>
                        <p>Your payment information is processed securely with 256-bit encryption.</p>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle text-success"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Customer Satisfaction</h4>
                        <p>Your satisfaction is our top priority. We go above and beyond to ensure you're happy with your purchase.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('themes/xylo/images/services.jpg') }}" alt="Our Services" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-primary text-white">
    <div class="container text-center">
        <h2>Have Questions?</h2>
        <p class="lead mb-4">Our support team is here to help you with any questions you may have.</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Contact Us</a>
    </div>
</section>
@endsection

@push('styles')
<style>
    .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .feature-box {
        display: flex;
        margin-bottom: 30px;
    }
    .feature-icon {
        margin-right: 20px;
        font-size: 24px;
    }
    .feature-content h4 {
        margin-bottom: 10px;
    }
</style>
@endpush
