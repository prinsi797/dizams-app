@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
    <section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>Request for Resume Writing</h2>
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
                                {{-- <i class="flaticon-restaurant"></i> --}}
                            </div>
                            <h2><a href="{{ route('resume') }}">resume writing</a></h2>
                            {{-- <p>150 listings</p> --}}
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <h2><a href="{{ route('jobs.opening') }}">job openings</a></h2>
                            {{-- <p>214 listings</p> --}}
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h2><a href="#">human resources</a></h2>
                            {{-- <p>185 listings</p> --}}
                        </div>
                    </li>
                    <li>
                        <div class="single-list-topics-content">
                            <div class="single-list-topics-icon">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <h2><a href="https://linkedin.com/in/divyanshu007bansal/">career development</a></h2>
                            {{-- <p>200 listings</p> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->

    </section><!--/.list-topics-->
    <!-- Modals -->
    <!-- Human Resources Modal -->
    <div class="modal fade" id="hrModal" role="dialog" tabindex="-1" aria-labelledby="hrModalLabel" aria-hidden="true">
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
                    <img class="img-1" src="{{ asset('assets/images/works/resume.jpg') }}" alt="image"
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
    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>Pricing</h2>
                <p>To ensure the highest quality and support, some features are part of our paid plans</p>
            </div><!--/.section-header-->
            <div class="works-content">
                <div class="row">
                    @foreach ($packages as $package)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-how-works">
                                <div class="single-how-works-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h2><a href="#">{{ $package->title }}</a></h2>
                                <p>
                                    Was ${{ $package->original_price }} → Now ${{ $package->discounted_price }}
                                    ({{ round((($package->original_price - $package->discounted_price) / $package->original_price) * 100) }}%
                                    off)
                                </p>

                                <p>
                                    ${{ $package->per_resume_price }}/Resume
                                </p>
                                <button class="welcome-hero-btn how-work-btn"
                                    onclick="openRangeModal('{{ $package->modal_type }}')">
                                    Order Now
                                </button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div><!--/.container-->


        <div class="modal fade" id="rangeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Select Number of Resumes</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="resumeRange">Number of Resumes:</label>
                            <input type="range" class="form-control" id="resumeRange" min="1" max="12"
                                value="1">
                            <span id="rangeValue">1</span>
                        </div>
                        <div class="pricing-details">
                            <p>Cost per Resume: $<span id="costPerResume">10</span></p>
                            <h4>Total Amount: $<span id="totalAmount">10</span></h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="openOrderForm()">Order Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Complete Your Order</h4>
                    </div>
                    <div class="modal-body">
                        <form id="orderForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <input type="hidden" id="finalAmount" name="amount">
                            <button type="submit" class="btn btn-primary">Submit Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rangeInput = document.getElementById('resumeRange');
            const rangeValue = document.getElementById('rangeValue');
            const totalAmount = document.getElementById('totalAmount');

            // Set up jQuery AJAX default settings
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            rangeInput.addEventListener('input', function() {
                const value = this.value;
                rangeValue.textContent = value;
                const total = value * 10;
                totalAmount.textContent = total;
            });

            document.getElementById('orderForm').addEventListener('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                formData.append('amount', document.getElementById('totalAmount').textContent);
                let formObject = {};
                formData.forEach((value, key) => formObject[key] = value);

                $.ajax({
                    url: '/api/submit-order',
                    method: 'POST',
                    data: formObject,
                    beforeSend: function() {
                        const submitButton = document.querySelector(
                            '#orderForm button[type="submit"]');
                        submitButton.disabled = true;
                        submitButton.textContent = 'Submitting...';
                    },
                    success: function(response) {
                        console.log('Success:', response);
                        alert('Order submitted successfully!');
                        $('#orderModal').modal('hide');
                        document.getElementById('orderForm').reset();
                    },
                    error: function(xhr, status, error) {
                        console.log('Status:', status);
                        console.log('Error:', error);
                        console.log('Response:', xhr.responseJSON);

                        let errorMessage = 'Error submitting order. ';
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            errorMessage += Object.values(xhr.responseJSON.errors).join('\n');
                        }
                        alert(errorMessage);
                    },
                    complete: function() {
                        const submitButton = document.querySelector(
                            '#orderForm button[type="submit"]');
                        submitButton.disabled = false;
                        submitButton.textContent = 'Submit Order';
                    }
                });
            });
        });

        function openRangeModal(planType) {
            $('#rangeModal').modal('show');
            const rangeInput = document.getElementById('resumeRange');
            const costPerResume = document.getElementById('costPerResume');
            const totalAmount = document.getElementById('totalAmount');
            const rangeValue = document.getElementById('rangeValue');

            let min = 1,
                max = 12,
                cost = 10;

            if (planType === 'single') {
                min = 1;
                max = 12;
                cost = 10;
            } else if (planType === 'bulk12') {
                min = 12;
                max = 34;
                cost = 8.3;
            } else if (planType === 'bulk35') {
                min = 35;
                max = 100;
                cost = 7.1;
            }
            rangeInput.min = min;
            rangeInput.max = max;
            rangeInput.value = min;
            rangeValue.textContent = min;
            costPerResume.textContent = cost.toFixed(2);
            totalAmount.textContent = (min * cost).toFixed(2);

            rangeInput.oninput = function() {
                const value = this.value;
                rangeValue.textContent = value;
                totalAmount.textContent = (value * cost).toFixed(2);
            };
        }

        function openOrderForm() {
            $('#rangeModal').modal('hide');
            $('#orderModal').modal('show');
            const amount = document.getElementById('totalAmount').textContent;
            document.getElementById('finalAmount').value = amount;
        }
        // resume
        // Show the popup when the "Click Here" button is clicked
        document.getElementById('openResumePopup').addEventListener('click', function() {
            document.getElementById('resumePopup').style.display = 'block';
        });
        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('resumePopup').style.display = 'none';
        });
        window.addEventListener('click', function(event) {
            if (event.target == document.getElementById('resumePopup')) {
                document.getElementById('resumePopup').style.display = 'none';
            }
        });
    </script>
@endsection
