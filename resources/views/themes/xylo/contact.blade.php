@extends('themes.xylo.layouts.master')

@section('title', 'Contact Us')

@section('content')
<!-- Page Title -->
<div class="page-title bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="mb-0">Contact Us</h1>
                <h4 class="text-muted mb-0">We'd love to hear from you</h4>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <h2 class="mb-4">Get In Touch</h2>
                <p class="mb-5">Have questions about our products or services? Fill out the form and we'll get back to you as soon as possible.</p>
                
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <div class="contact-icon mr-4">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <p class="mb-0 text-muted">123 E-Commerce St, Digital City, 10001</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="contact-icon mr-4">
                            <i class="fas fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p class="mb-0 text-muted">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="contact-icon mr-4">
                            <i class="fas fa-envelope fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="mb-0 text-muted">info@example.com</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="contact-icon mr-4">
                            <i class="fas fa-clock fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Working Hours</h5>
                            <p class="mb-0 text-muted">Monday - Friday: 9:00 - 18:00</p>
                            <p class="mb-0 text-muted">Saturday: 10:00 - 16:00</p>
                            <p class="mb-0 text-muted">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links mt-5">
                    <h5 class="mb-3">Follow Us</h5>
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Send Us a Message</h3>
                        <form id="contactForm" method="POST" action="{{ route('pages.contact.submit') }}">
                            @csrf
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                                    <label class="form-check-label" for="privacyPolicy">
                                        I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215209003327!2d-73.9873196845938!3d40.74844047932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
@endsection

@push('styles')
<style>
    .contact-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        border-radius: 50%;
    }
    
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f8f9fa;
        color: #333;
        margin-right: 10px;
        transition: all 0.3s ease;
    }
    
    .social-links a:hover {
        background: #007bff;
        color: #fff;
        text-decoration: none;
    }
    
    .map-container {
        width: 100%;
        height: 450px;
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }
    
    .form-control {
        border-radius: 0.25rem;
        padding: 0.75rem 1rem;
    }
    
    .btn-lg {
        padding: 0.75rem 2rem;
        font-weight: 600;
    }
</style>
@endpush

@push('scripts')
<script>
    // Form submission with AJAX
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Add your form submission logic here
        // You can use Fetch API or Axios to submit the form data
        
        // For now, we'll just show an alert
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
    });
</script>
@endpush
