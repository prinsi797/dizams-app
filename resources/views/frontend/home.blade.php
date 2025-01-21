@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')
    @push('scripts')
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8013371309995980"
            crossorigin="anonymous"></script>
    @endpush
    <section id="home" class="welcome-hero">
        <div class="container position-relative">
            <!-- Add this new div for the ad container -->
            {{-- <div class="left-side-ad">
                <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px"
                    data-ad-client="ca-pub-8013371309995980" data-ad-slot="3767729937">
                </ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div> --}}

            <div class="welcome-hero-txt">
                <h2>best place to find Services in <br> Recruitment and Consulting</h2>
                <p>
                    Find Resume Writing, Recruitment, Consulting, Placements, Career Services, and more in just one
                    click
                </p>
            </div>
            <div class="welcome-hero-serch-box">
                <div class="welcome-hero-form">
                    <div class="single-welcome-hero-form">
                        <h3>Are you looking for a professionally crafted resume?</h3>
                        <form action="index.html">
                            <input type="text" placeholder="If, Yes." />
                        </form>
                    </div>
                </div>
                <div class="welcome-hero-serch">
                    <button class="welcome-hero-btn" id="openResumePopup">
                        Click Here <i data-feather="search"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- resume popup --}}
    <div id="resumePopup" class="popup-form">
        <div class="popup-content">
            <span id="closePopup" class="close">&times;</span>
            <h2>Resume Writing</h2><br>
            <form id="resumeForm" action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>

                <label for="phone">Contact Number:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>

                <label for="linkedin">LinkedIn ID:</label>
                <input type="text" id="linkedin" name="linkedin" class="form-control" required>

                <label for="education">Education:</label>
                <input type="text" id="education" name="education" class="form-control" required>

                <label for="job_details">Job Details:</label>
                <textarea id="job_details" name="job_details" class="form-control" rows="4" required></textarea>

                <label for="resume">Resume (PDF):</label>
                <input type="file" id="resume" name="resume" accept=".pdf" class="form-control" required>

                <label for="job_description">Job Description (Optional):</label>
                <textarea id="job_description" name="job_description" class="form-control" rows="4"></textarea>

                <button type="submit">Submit Resume</button>
            </form>
        </div>
    </div>
    <!--list-topics start -->
    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="fa fa-book icon"></i>
                            </div>
                            <h2><a href="{{ route('resume') }}">resume writing</a></h2>

                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <h2><a href="{{ route('jobs.opening') }}">job openings</a></h2>

                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h2><a href="#">human resources</a></h2>

                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <h2><a href="https://linkedin.com/in/divyanshu007bansal/">career development</a></h2>

                        </div>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->
    </section>
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>How It Works</h2>
                <p>Get help for the following topics</p>
            </div>
            <div class="works-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <img class="img-1" src="{{ asset('assets/images/works/Resume Writing.png') }}"
                                    alt="image" loading="lazy">
                            </div>
                            <h2><a href="#">Resume Writing</a></h2>
                            <p class="text">
                                A professionally written resume is your ticket to securing the job of your dreams...
                            </p>
                            <button class="welcome-hero-btn how-work-btn" data-toggle="modal" data-target="#resumeModal">
                                Read More
                            </button>
                        </div>
                    </div>
                    <!-- Human Resources -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <img class="img-1" src="{{ asset('assets/images/works/HR.png') }}" alt="image"
                                    loading="lazy">
                            </div>
                            <h2><a href="#">Human Resources</a></h2>
                            <p class="text">
                                Human resources management (HRM) is the practice of managing an organization's employees to
                                achieve its goals...
                            </p>
                            <button class="welcome-hero-btn how-work-btn" data-toggle="modal" data-target="#hrModal">
                                Read More
                            </button>
                        </div>
                    </div>
                    <!-- Career Development Coaching -->
                    <div class="col-md-4 col-sm-6">
                        <div class="single-how-works">
                            <div class="single-how-works-icon">
                                <img class="img-1" src="{{ asset('assets/images/works/Career Coaching.jpg') }}"
                                    alt="image" loading="lazy">
                            </div>
                            <h2><a href="#">Career Development Coaching</a></h2>
                            <p class="text">
                                Career development coaching is a process that helps people achieve their career goals by
                                identifying areas...
                            </p>
                            <button class="welcome-hero-btn how-work-btn" data-toggle="modal" data-target="#careerModal">
                                Read More
                            </button>
                        </div>
                    </div>
                    <!-- Resume Writing -->

                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Human Resources Modal -->
    <div class="modal fade" id="hrModal" role="dialog" tabindex="-1" aria-labelledby="hrModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hrModalLabel">Human Resources</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Human resources management (HRM)</strong> is the practice of managing an organization's
                        employees to achieve its goals. It involves a variety of activities, including:</p>

                    <ul>
                        <li><strong>Recruitment</strong>: Attracting, interviewing, and hiring new employees</li>
                        <br>
                        <li><strong>Training</strong>: Developing employees' skills and knowledge</li>
                        <br>
                        <li><strong>Compensation and benefits</strong>: Planning and overseeing employee benefit programs
                        </li>
                        <br>
                        <li><strong>Policies and procedures</strong>: Creating and enforcing policies to ensure employee
                            safety and compliance with laws</li>
                        <br>
                        <li><strong>Employee relations</strong>: Building a positive workplace environment and ensuring good
                            working relationships</li>
                    </ul>
                    <br>
                    <img class="img-1" src="{{ asset('assets/images/works/HRM.jpeg') }}" alt="image" loading="lazy"
                        style="width: 100%; height: auto; max-height: 400px;"><br>
                    <br>
                    <p><strong>HRM</strong> is also known as human resources (HR). The term "<span
                            style="background-color: yellow;">human resources</span>" was first used in the early 1900s,
                        and
                        became more widely used in the 1960s.</p>
                    <br>
                    <p>HRM is important because it helps organizations make the most of their employees, which are often
                        considered a company's most valuable assets. The goal of HRM is to reduce risk and maximize return
                        on investment (ROI).</p>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Career Development Coaching Modal -->
    <div class="modal fade" id="careerModal" role="dialog" tabindex="-1" aria-labelledby="careerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="careerModalLabel">Career Development Coaching</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong> Career development coaching</strong> is a process that helps people achieve their career
                        goals by identifying areas for growth and developing strategies to succeed. A career development
                        coach is an expert who works with clients to help them overcome obstacles and navigate transitions
                    </p>
                    <br>
                    <strong>What does a career development coach do?</strong><br>
                    <br>
                    <ul>
                        <li>Helps clients identify their strengths and areas for development</li>
                        <br>
                        <li>Helps clients explore career options</li>
                        <br>
                        <li>Helps clients develop strategies for success</li>
                        <br>
                        <li>Helps clients optimize their professional documents, such as resumes and cover letters</li>
                        <br>
                        <li>Helps clients build confidence for job searches</li>
                    </ul>
                    <br>
                    <img class="img-1" src="{{ asset('assets/images/works/carrer-caching.jpg') }}" alt="image"
                        loading="lazy" style="width: 100%; height: auto; max-height: 400px;"><br>
                    <br>
                    <p><strong>Who might benefit from career development coaching?</strong></p><br>
                    <ul>
                        <li>People who want to change careers</li>
                        <br>
                        <li>People who want to move up the corporate ladder</li>
                        <br>
                        <li>People who want to find roles that suit their interests and needs</li>
                        <br>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Resume Writing Modal -->
    <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="resumeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resumeModalLabel">Resume Writing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>A professionally<strong> written resume</strong> is your ticket to securing the job of your dreams.
                        Our expert resume writing service is designed to highlight your skills, experience, and achievements
                        in a way that makes you stand out in today's competitive job market.</p><br>
                    <p><strong>What We Offer:</strong></p><br>
                    <p><strong>1. </strong>Customized Resumes:</p>
                    <ul>
                        <li>Tailored to your industry and specific career goals.</li>
                        <br>
                        <li>Emphasizes your strengths and unique qualifications.</li>
                    </ul>
                    <br>
                    <p><strong>2. </strong>Professional Formatting:</p>
                    <ul>
                        <li>Modern and clean layouts that catch the recruiter’s eye.</li>
                        <br>
                        <li><span style="background-color: yellow;">ATS-friendly (Applicant Tracking System)</span> designs
                            to ensure your resume gets noticed.</li>
                    </ul>
                    <img class="img-1" src="{{ asset('assets/images/works/Resume Writing.png') }}" alt="image"
                        loading="lazy" style="width: 100%; height: auto; max-height: 400px;"><br>
                    <br>
                    <p><strong>3. </strong>Content Optimization:</p>
                    <ul>
                        <li>Clear and concise language that highlights your accomplishments.</li>
                        <br>
                        <li>Use of powerful action verbs and keywords relevant to your field.</li>
                    </ul>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--reviews start -->
    <section id="reviews" class="reviews">
        {{-- <div class="section-header">
            <h2>Clients Reviews</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addReviewModal">
                Add Review
            </button>
            <p>What our clients say about us</p>
        </div> --}}
        <div class="section-header clearfix">
            <h2 class="pull-center">Clients Reviews</h2>
            <p>What our clients say about us</p>
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addReviewModal"
                style="margin-top: -56px;">
                Add Review
            </button>
        </div>
        <div class="reviews-content">
            <div class="testimonial-carousel" id="testimonial-carousel">
                <div class="testimonial-wrapper">
                    @foreach ($reviews as $review)
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img class="review-image"
                                            src="{{ $review->image ? asset('storage/' . $review->image) : asset('assets/images/avatar.png') }}"
                                            alt="{{ $review->name ?? 'Default Avatar' }}">
                                    </div>
                                    <div class="testimonial-person">
                                        <h2>{{ $review->name }}</h2>
                                        <h4>{{ $review->location }}</h4><br>
                                        <p>{{ $review->description }}</p>
                                        <div class="testimonial-person-star">
                                            @for ($i = 1; $i <= $review->rating; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                            @for ($i = $review->rating + 1; $i <= 5; $i++)
                                                <i class="fa fa-star-o"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-comment">
                                    <p>{{ $review->review }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--reviews end -->
    <!-- Add Review Modal -->


    <div class="modal fade" id="addReviewModal" tabindex="-1" role="dialog" aria-labelledby="addReviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('reviews.store.user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addReviewModalLabel">Add Review</h5>
                    </div>
                    <div class="modal-body">
                        <!-- Name Field -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <!-- Location Field -->
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <!-- Rating Field -->
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" name="rating" min="1" max="5" class="form-control"
                                id="rating" required>
                        </div>
                        <!-- Image Field -->
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <!-- Description Field -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" rows="4" class="form-control" id="description" required></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><br>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- statistics strat -->
    <section id="statistics" class="statistics">
        <div class="container">
            <div class="statistics-counter">
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            @foreach ($ratings as $rating)
                                <div class="counter">{{ $rating->listings }}</div> <span>K+</span>
                            @endforeach
                        </div>
                        <h3>listings</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            @foreach ($ratings as $rating)
                                <div class="counter">{{ $rating->categories }}</div> <span>K+</span>
                            @endforeach
                        </div>
                        <h3>listing categories</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            @foreach ($ratings as $rating)
                                <div class="counter">{{ $rating->visitors }}</div> <span>K+</span>
                            @endforeach
                        </div>
                        <h3>visitors</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-ststistics-box">
                        <div class="statistics-content">
                            @foreach ($ratings as $rating)
                                <div class="counter">{{ $rating->happy_client }}</div> <span>K+</span>
                            @endforeach
                        </div>
                        <h3>happy clients</h3>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- statistics end -->

    <!--blog start -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <h2>news and articles</h2>
                <p>Always upto date with our latest News and Articles </p>
            </div>
            @foreach ($articles as $article)
                <div class="blog-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-item">
                                <div class="single-blog-item-img">
                                    <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('assets/images/avatar.png') }}"
                                        alt="{{ $article->name ?? 'Default Avatar' }}">
                                </div>
                                <div class="single-blog-item-txt">
                                    <h2><a href="#">{{ $article->name }}</a></h2>
                                    <h4>posted <span>by:</span> <a href="#">{{ $article->author }}</a>
                                        {{ \Carbon\Carbon::parse($article->posted_date)->format('F Y') }}
                                    </h4>
                                    <p>
                                        {{ \Str::words($article->details, 20, '...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!--subscription strat -->
    <section id="contact" class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    Do you want to explore job services with us?
                </h2>
                <p>
                    Dizams offers you comprehensive resume writing services and career solutions,
                    helping
                    you
                    achieve
                    your professional goals effortlessly.
                </p>
                <br>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscription-input-group">
                        <button class="appsLand-btn subscribe-btn" id="manageSubscriptionButton">Manage
                            Subscription</button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>

    {{-- Main Subscription Popup --}}
    <div id="manageSubscriptionPopup" class="popup-form">
        <div class="popup-content">
            <span id="closeMainPopup" class="close">&times;</span>
            <h2>Manage Subscription</h2><br>
            <form id="mainForm">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />

                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required />

                <label for="linkedin">LinkedIn ID (Optional):</label>
                <input type="text" id="linkedin" name="linkedin" />

                <button type="button" id="subscribeButton">Subscribe</button><br>
                <br>
                <button type="button" id="unsubscribeButton">Unsubscribe</button>
            </form>
        </div>
    </div>

    {{-- Unsubscribe Reason Popup --}}
    <div id="unsubscribeReasonPopup" class="popup-form" style="display: none;">
        <div class="popup-content">
            <span id="closeReasonPopup" class="close">&times;</span>
            <h2>Unsubscribe</h2><br>
            <form id="reasonForm">
                @csrf
                <label for="reason" class="form-label">Reason for Unsubscribing:</label>
                <textarea class="form-control" id="reason" name="reason" required></textarea>
                <button type="button" id="submitUnsubscribe">Submit</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const wrapper = document.querySelector(".testimonial-wrapper");
            const testimonials = wrapper.innerHTML;
            wrapper.innerHTML += testimonials;
            wrapper.addEventListener("animationiteration", () => {
                wrapper.style.animation = "none";
                wrapper.offsetHeight;
                wrapper.style.animation = "";
            });
        });
    </script>

    <script>
        document.getElementById('manageSubscriptionButton').addEventListener('click', function() {
            document.getElementById('manageSubscriptionPopup').style.display = 'block';
        });

        // Close the main popup
        document.getElementById('closeMainPopup').addEventListener('click', function() {
            document.getElementById('manageSubscriptionPopup').style.display = 'none';
        });

        // Close the reason popup
        document.getElementById('closeReasonPopup').addEventListener('click', function() {
            document.getElementById('unsubscribeReasonPopup').style.display = 'none';
        });
        document.getElementById('subscribeButton').addEventListener('click', function() {
            const formElement = document.getElementById('mainForm');
            if (!formElement) {
                alert('Form not found!');
                return;
            }
            const formData = new FormData(formElement);
            formData.append('reason', ''); // Add empty reason for subscription

            fetch('{{ route('subscribe.store') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                        'Accept': 'application/json',
                    },
                })
                .then((response) => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then((data) => {
                    alert(data.message || 'Subscription successful!');
                    formElement.reset(); // Reset the form fields
                    document.getElementById('manageSubscriptionPopup').style.display = 'none'; // Close popup
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('An error occurred. Please check the console for details.');
                });
        });

        // Unsubscribe button logic
        document.getElementById('unsubscribeButton').addEventListener('click', function() {
            document.getElementById('manageSubscriptionPopup').style.display = 'none';
            document.getElementById('unsubscribeReasonPopup').style.display = 'block';
        });

        // Submit unsubscribe logic
        document.getElementById('submitUnsubscribe').addEventListener('click', function() {
            const mainFormData = new FormData(document.getElementById('mainForm'));
            const reason = document.getElementById('reason').value;

            if (reason.trim() === '') {
                alert('Please provide a reason for unsubscribing.');
                return;
            }

            mainFormData.append('reason', reason);

            fetch('{{ route('subscribe.store') }}', {
                    method: 'POST',
                    body: mainFormData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                        'Accept': 'application/json',
                    },
                })
                .then((response) => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then((data) => {
                    alert(data.message || 'Unsubscribed successfully!');
                    document.getElementById('reasonForm').reset();
                    document.getElementById('mainForm').reset();
                    document.getElementById('unsubscribeReasonPopup').style.display = 'none';
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('An error occurred. Please check the console for details.');
                });
        });
        // resume
        // Show the popup when the "Click Here" button is clicked
        document.getElementById('openResumePopup').addEventListener('click', function() {
            document.getElementById('resumePopup').style.display = 'block';
        });

        // Close the popup when the close button is clicked
        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('resumePopup').style.display = 'none';
        });

        // Close the popup if the user clicks outside the form
        window.addEventListener('click', function(event) {
            if (event.target == document.getElementById('resumePopup')) {
                document.getElementById('resumePopup').style.display = 'none';
            }
        });
    </script>
    <style>
        .single-blog-item-img {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .single-blog-item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.3s ease;
        }

        .single-blog-item-img:hover img {
            transform: scale(1.05);
        }

        .single-blog-item {
            /* height: 100%; */
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .single-blog-item-txt {
            padding: 15px;
        }

        .text {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .position-relative {
            position: relative;
        }

        .left-side-ad {
            position: absolute;
            left: -320px;
            top: 50px;
            width: 300px;
            height: 400px;
            background: transparent;
            z-index: 10;
        }

        @media (max-width: 1200px) {
            .left-side-ad {
                display: none;
            }
        }
    </style>
@endsection
