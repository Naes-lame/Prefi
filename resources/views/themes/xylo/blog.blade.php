@extends('themes.xylo.layouts.master')

@section('title', 'Our Blog')

@section('content')
<!-- Page Title -->
<div class="page-title bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="mb-0">Our Blog</h1>
                <h4 class="text-muted mb-0">Latest news and updates</h4>
            </div>
        </div>
    </div>
</div>

<!-- Blog Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Blog Post 1 -->
                <div class="card mb-5">
                    <img src="{{ asset('themes/xylo/images/blog-1.jpg') }}" class="card-img-top" alt="Blog Post 1">
                    <div class="card-body">
                        <div class="post-meta mb-3">
                            <span class="text-muted"><i class="far fa-calendar-alt mr-2"></i>October 15, 2025</span>
                            <span class="mx-2">|</span>
                            <span class="text-muted"><i class="far fa-user mr-2"></i>By Admin</span>
                            <span class="mx-2">|</span>
                            <span class="text-muted"><i class="far fa-folder mr-2"></i>E-commerce</span>
                        </div>
                        <h2 class="card-title">The Future of E-commerce in 2025</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="card mb-5">
                    <img src="{{ asset('themes/xylo/images/blog-2.jpg') }}" class="card-img-top" alt="Blog Post 2">
                    <div class="card-body">
                        <div class="post-meta mb-3">
                            <span class="text-muted"><i class="far fa-calendar-alt mr-2"></i>October 10, 2025</span>
                            <span class="mx-2">|</span>
                            <span class="text-muted"><i class="far fa-user mr-2"></i>By Admin</span>
                            <span class="mx-2">|</span>
                            <span class="text-muted"><i class="far fa-folder mr-2"></i>Technology</span>
                        </div>
                        <h2 class="card-title">Top 10 Tech Gadgets of the Year</h2>
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="card mb-5">
                    <img src="{{ asset('themes/xylo/images/blog-3.jpg') }}" class="card-img-top" alt="Blog Post 3">
                    <div class="card-body">
                        <div class="post-meta mb-3">
                            <span class="text-muted"><i class="far fa-calendar-alt mr-2"></i>October 5, 2025</span>
                            <span class="mx-2">|</span>
                            <span class="text-muted"><i class="far fa-user mr-2"></i>By Admin</span>
                            <span class="mx-2">|</span>
                            <span class="text-muted"><i class="far fa-folder mr-2"></i>Lifestyle</span>
                        </div>
                        <h2 class="card-title">How to Stay Productive While Working From Home</h2>
                        <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Search</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">E-commerce <span class="badge badge-primary float-right">15</span></a></li>
                            <li class="mt-2"><a href="#">Technology <span class="badge badge-primary float-right">12</span></a></li>
                            <li class="mt-2"><a href="#">Lifestyle <span class="badge badge-primary float-right">8</span></a></li>
                            <li class="mt-2"><a href="#">Business <span class="badge badge-primary float-right">5</span></a></li>
                            <li class="mt-2"><a href="#">Marketing <span class="badge badge-primary float-right">7</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Recent Posts Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Recent Posts</h5>
                        <div class="media mb-3">
                            <img src="{{ asset('themes/xylo/images/blog-thumb-1.jpg') }}" class="mr-3" alt="Post Thumb" width="80">
                            <div class="media-body">
                                <h6 class="mt-0"><a href="#">The Future of E-commerce in 2025</a></h6>
                                <p class="text-muted small mb-0">October 15, 2025</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <img src="{{ asset('themes/xylo/images/blog-thumb-2.jpg') }}" class="mr-3" alt="Post Thumb" width="80">
                            <div class="media-body">
                                <h6 class="mt-0"><a href="#">Top 10 Tech Gadgets of the Year</a></h6>
                                <p class="text-muted small mb-0">October 10, 2025</p>
                            </div>
                        </div>
                        <div class="media">
                            <img src="{{ asset('themes/xylo/images/blog-thumb-3.jpg') }}" class="mr-3" alt="Post Thumb" width="80">
                            <div class="media-body">
                                <h6 class="mt-0"><a href="#">How to Stay Productive While Working From Home</a></h6>
                                <p class="text-muted small mb-0">October 5, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tags Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tags</h5>
                        <div class="tags">
                            <a href="#" class="badge badge-light">E-commerce</a>
                            <a href="#" class="badge badge-light">Technology</a>
                            <a href="#" class="badge badge-light">Gadgets</a>
                            <a href="#" class="badge badge-light">Productivity</a>
                            <a href="#" class="badge badge-light">Business</a>
                            <a href="#" class="badge badge-light">Marketing</a>
                            <a href="#" class="badge badge-light">Design</a>
                            <a href="#" class="badge badge-light">Development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mb-4">Subscribe to Our Newsletter</h2>
                <p class="lead mb-4">Get the latest updates, news and product offers sent straight to your inbox.</p>
                <form class="form-inline justify-content-center">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg mb-2">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .post-meta {
        font-size: 0.9rem;
    }
    
    .post-meta i {
        width: 16px;
        text-align: center;
    }
    
    .card {
        border: none;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 30px;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    
    .card-img-top {
        height: 250px;
        object-fit: cover;
    }
    
    .card-title {
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .tags .badge {
        margin: 0 5px 8px 0;
        padding: 5px 10px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .tags .badge:hover {
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
    }
    
    .pagination .page-link {
        color: #007bff;
        border: 1px solid #dee2e6;
        margin: 0 5px;
        border-radius: 4px !important;
    }
    
    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
    }
    
    .pagination .page-item.disabled .page-link {
        color: #6c757d;
    }
    
    .media img {
        border-radius: 4px;
    }
    
    .media h6 {
        font-size: 0.95rem;
        font-weight: 600;
    }
    
    .media h6 a {
        color: #333;
        transition: color 0.3s ease;
    }
    
    .media h6 a:hover {
        color: #007bff;
        text-decoration: none;
    }
</style>
@endpush
