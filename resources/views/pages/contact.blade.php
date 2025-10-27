@extends('vendor.layouts.master')

@section('title', 'Contact Us')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4">Contact Us</h1>
        </div>
    </div>

    <div class="row">
        <!-- Contact Form -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Send us a Message</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Contact Information</h6>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6 class="font-weight-bold"><i class="fas fa-map-marker-alt me-2 text-primary"></i> Address</h6>
                        <p class="mb-0">123 Store Street</p>
                        <p>City, State 12345</p>
                    </div>
                    <div class="mb-4">
                        <h6 class="font-weight-bold"><i class="fas fa-phone me-2 text-primary"></i> Phone</h6>
                        <p class="mb-0">+1 (123) 456-7890</p>
                        <p>Mon - Fri, 9:00 AM - 6:00 PM</p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold"><i class="fas fa-envelope me-2 text-primary"></i> Email</h6>
                        <p class="mb-0">info@velstore.com</p>
                        <p>support@velstore.com</p>
                    </div>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Business Hours</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between py-2 border-bottom">
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 6:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                            <span>Saturday</span>
                            <span>10:00 AM - 4:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between py-2">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
    }
    .card-header {
        background-color: #f8f9fc;
        border-bottom: 1px solid #e3e6f0;
        border-radius: 10px 10px 0 0 !important;
    }
</style>
@endpush
@endsection
