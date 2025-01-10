@extends('frontend.layouts.app')
@section('title', 'Contact Us')

@section('content')
    <div class="container">
        <div class="contact-header">
            <h1 style="font-size: 40px;">Contact Us</h1>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="contact-section">
            <!-- Contact Information -->
            <div class="contact-info">
                <div class="single_wrapper">
                    <h4>Call Us</h4>
                    <p><i class="glyphicon glyphicon-earphone"></i> +91-8171810360</p>
                    <p><i class="glyphicon glyphicon-earphone"></i> +1 (650) 254-9452</p>
                </div>
                <div class="single_wrapper">
                    <h4>Email</h4>
                    <p><i class="glyphicon glyphicon-envelope"></i> admin@dizams.com</p>
                </div>
                <div class="single_wrapper">
                    <h4>Office</h4>
                    <p><i class="glyphicon glyphicon-map-marker"></i> 11-B Shanti Nagar, Maholi Road, Mathura 281001</p>
                    <p><i class="glyphicon glyphicon-map-marker"></i> Sector 62, Noida 201309</p>
                    <p><i class="glyphicon glyphicon-map-marker"></i> Bentonville, A, USA 72712</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contactus-form">
                <h4>Contact Us</h4><br>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="w-full">
                        <label class="form-label">Name</label><br>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="w-full">
                        <label class="form-label">Email</label><br>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="w-full">
                        <label class="form-label">Phone</label><br>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="w-full">
                        <label class="form-label">Subject</label><br>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="w-full">
                        <label class="form-label">Message</label><br>
                        <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.getElementsByClassName('alert alert-success');
            if (alerts.length > 0) {
                Array.from(alerts).forEach(alert => {
                    setTimeout(() => {
                        alert.style.transition = 'opacity 0.5s';
                        alert.style.opacity = '0';
                        setTimeout(() => alert.remove(), 500);
                    }, 5000);
                });
            }
        });
    </script>
@endsection
