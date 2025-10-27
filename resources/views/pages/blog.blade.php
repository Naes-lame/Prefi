@extends('vendor.layouts.master')

@section('title', 'Blog')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4">Our Blog</h1>
        </div>
    </div>

    <div class="row">
        <!-- Blog Posts -->
        <div class="col-lg-8">
            <!-- Blog Post 1 -->
            <div class="card shadow mb-4">
                <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Blog Post">
                <div class="card-body">
                    <h5 class="card-title">Latest Trends in E-commerce</h5>
                    <p class="text-muted"><i class="far fa-calendar-alt me-2"></i> October 25, 2023</p>
                    <p class="card-text">
                        Discover the latest trends in e-commerce and how they're shaping the future of online shopping.
                        From AI-powered recommendations to sustainable packaging, the e-commerce landscape is evolving rapidly.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="card shadow mb-4">
                <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Blog Post">
                <div class="card-body">
                    <h5 class="card-title">Sustainable Shopping</h5>
                    <p class="text-muted"><i class="far fa-calendar-alt me-2"></i> October 20, 2023</p>
                    <p class="card-text">
                        Learn how to make more sustainable shopping choices and reduce your environmental impact while
                        still enjoying the products you love.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Categories -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Categories</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none">E-commerce</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">Technology</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">Shopping Tips</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none">Sustainability</a></li>
                    </ul>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Recent Posts</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="#" class="text-decoration-none">Latest Trends in E-commerce</a>
                        <p class="small text-muted mb-0">October 25, 2023</p>
                    </div>
                    <div class="mb-3">
                        <a href="#" class="text-decoration-none">Sustainable Shopping</a>
                        <p class="small text-muted mb-0">October 20, 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1) !important;
    }
    .card-title {
        color: #4e73df;
    }
</style>
@endpush
@endsection
