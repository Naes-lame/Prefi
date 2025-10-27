@extends('themes.xylo.layouts.master')

@section('title', 'About Us')

@section('content')
<!-- Page Title -->
<div class="page-title bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="mb-0">About Us</h1>
                <h4 class="text-muted mb-0">Learn more about our company</h4>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Our Story</h2>
                <p class="lead">Welcome to our eCommerce store, where quality meets convenience.</p>
                <p>Founded in 2023, our mission has been to provide our customers with the best products at competitive prices, delivered with exceptional customer service.</p>
                <p>We believe in building lasting relationships with our customers by offering high-quality products and a seamless shopping experience.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('themes/xylo/images/about.jpg') }}" alt="About Us" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Our Team</h2>
            <p class="lead">Meet the people behind our success</p>
        </div>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <img src="{{ asset('themes/xylo/images/team-1.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="text-muted">CEO & Founder</p>
                    </div>
                </div>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-primary text-white">
    <div class="container text-center">
        <h2>Ready to shop with us?</h2>
        <p class="lead mb-4">Discover our amazing products and enjoy a seamless shopping experience.</p>
        <a href="{{ route('shop.index') }}" class="btn btn-light btn-lg">Shop Now</a>
    </div>
</section>
@endsection
