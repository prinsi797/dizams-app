@extends('frontend.layouts.app')
@section('title', 'Contact Us')
<style>
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@section('content')
    <section id="home" class="welcome-about2">
        <div class="container">
            <div class="welcome-about-txt">
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="contact-section">
            <!-- Contact Information -->
            {{-- {{ $settings }} --}}
            <div class="contact-info">
                <div class="single_wrapper">
                    <h4>Call Us</h4>
                    @if ($settings->has('Call Us'))
                        @foreach ($settings['Call Us'] as $callUs)
                            <p><i class="glyphicon glyphicon-earphone"></i> {{ $callUs->value }}</p>
                        @endforeach
                    @endif
                </div>
                <div class="single_wrapper">
                    <h4>Email</h4>
                    @if ($settings->has('Email'))
                        @foreach ($settings['Email'] as $email)
                            <p><i class="glyphicon glyphicon-envelope"></i> {{ $email->value }}</p>
                        @endforeach
                    @endif
                </div>
                <div class="single_wrapper">
                    <h4>Office</h4>
                    @if ($settings->has('Office'))
                        @foreach ($settings['Office'] as $office)
                            <p><i class="glyphicon glyphicon-map-marker"></i> {{ $office->value }}</p>
                        @endforeach
                    @endif
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
                    <div class="w-full">
                        <input type="checkbox" id="consent" name="consent" value="consent" style="width: 20px;"> By
                        providing your phone number, you agree to receive a text message from
                        Dizams.
                    </div>
                    <br>
                    <button type="submit" class="btn btn-custom btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    {{-- abouts  --}}
    <section id="home" class="welcome-about3">
        <div class="container">
            <div class="welcome-about-txt">
                <h2>About Us</h2>
            </div>
        </div>
    </section>
    <div class="contact-section">
        <div class="contact-grid">
            @foreach ($abouts as $about)
                <div class="contact-info" style="width:100%;">
                    <div class="single_wrapper">
                        <p>{!! nl2br(e($about->value)) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            if (document.getElementById('consent').checked) {
                // Get form data
                const formData = new FormData(this);
                const name = formData.get('name');
                const email = formData.get('email');
                const phone = formData.get('phone');
                const subject = formData.get('subject');
                const message = formData.get('message');

                // Build the WhatsApp message
                const messageBody =
                    `*Contact Details*\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\nMessage: ${message}`;

                // WhatsApp number
                const phoneNumber = '7041134556'; // Your WhatsApp number

                // Build the URL to open WhatsApp with pre-filled message
                const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(messageBody)}`;

                // Redirect to WhatsApp with the pre-filled message
                window.open(url, '_blank');

                // Submit the form after sending the message
                this.submit();
            } else {
                alert('Please check the consent checkbox before submitting.');
            }
        });
    </script>
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


{{-- new 1 --}}
{{-- @extends('frontend.layouts.app')
@section('title', 'Contact Us')
<style>
    #abouts {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .card {
        flex: 1 1 calc(50% - 20px);
        margin: 0;
        border: 2px solid transparent;
        border-radius: 20px 80px 20px;
        background-color: #f9f9f9;
        transition: all 0.3s ease;
    }

    .card-body {
        padding: 20px;
        text-align: justify;
        font-size: 1rem;
        color: #333;
        display: flex;
    }

    #abouts .card-body i {
        color: #ff545a;
        width: 20px;
        height: 20px;
        line-height: 20px;
        border-radius: 50%;
        text-align: center;
        font-size: 18px;
        display: inline-block;
        flex-shrink: 0;
    }

    .card:hover {
        border-color: #ff545a;
        transform: scale(1.03);
    }

    .about-container {
        margin-top: 40px;
    }
</style>
@section('content')
    <section id="home" class="welcome-about">
        <div class="container">
            <div class="welcome-about-txt">
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <div class="container">
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
                    <div class="w-full">
                        <input type="checkbox" id="consent" name="consent" value="consent" style="width: 20px;"> By
                        providing your phone number, you agree to receive a text message from
                        Dizams.
                    </div>
                    <br>
                    <button type="submit" class="btn btn-custom btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    {{-- abouts  --}}
{{-- <section id="home" class="welcome-about">
    <div class="container">
        <div class="welcome-about-txt">
            <h2>About Us</h2>
        </div>
    </div>
</section>
<section class="about-container">
    <div class="container">
        <div class="row" id="abouts">
            <!-- Card 1 -->
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-check-circle"></i>
                    <p style="padding-left: 5px;">
                        At Dizams, we specialize in crafting professional, SEO-optimized resumes designed to meet
                        industry-specific recruitment standards. Our tailored approach ensures your resume not only
                        showcases your skills and achievements effectively but also ranks higher in recruiter searches
                        on platforms like Dice, Monster, TechFetch, CareerBuilder, CEIPAL, and more.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-check-circle"></i>
                    <p style="padding-left: 5px;">
                        With our expertise, your resume gains a 170% increase in visibility, making it significantly
                        more likely to catch the attention of hiring managers during their screening process. By
                        aligning your resume with the latest recruitment trends and search algorithms, we help you stand
                        out in a competitive job market and secure more opportunities for interviews and career growth.
                        Let us empower your career journey by creating a resume that truly sets you apart.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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
@endsection --}}
