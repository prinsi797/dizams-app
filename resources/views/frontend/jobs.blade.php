@extends('frontend.layouts.app')
@section('title', 'jobs-openings')
@section('content')

    <section id="home" class="welcome-about">
        <div class="container">
            <div class="welcome-about-txt">
                <h2>Current Job Openings</h2>
            </div>
        </div>
    </section><br>
    <div class="container">
        <!-- Job Listings -->
        <div class="job-listings">
            <!-- Job 1 -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2 style="margin-top: 0;color:#ff545a;">
                                Ophthalmologist - Glaucoma Or Comprehensive
                            </h2><br>
                            <div class="job-tags" style="margin-bottom: 15px;">
                                <span class="label label-default">Hyattsville, Maryland</span>
                                <span class="label label-primary">Full Time</span>
                                <span class="label label-info">Physicians/Surgeons</span>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right">
                            <button class="btn btn-primary"><a href="mailto:Dave@Dizams.Com" style="color: white;">Apply
                                    Now</a></button>
                        </div>
                    </div>

                    <p class="text-muted">Our client is seeking a comprehensive, board certified, or board-eligible
                        Ophthalmologist with a fellowship training...</p><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Requirements:</h4><br>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-success"></i> Fellowship Trained</li>
                                <li><i class="fa fa-check text-success"></i> Board Certified in Ophthalmology</li>
                                <li><i class="fa fa-check text-success"></i> Hold state Licensure in Maryland</li>
                            </ul>
                        </div><br>
                        <div class="col-md-6">
                            <h4>Benefits:</h4><br>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-star text-warning"></i> Competitive Salary Package</li>
                                <li><i class="fa fa-star text-warning"></i> Paid Time Off</li>
                                <li><i class="fa fa-star text-warning"></i> Health & Dental Benefits</li>
                                <li><i class="fa fa-star text-warning"></i> 401K Match</li>
                                <li><i class="fa fa-star text-warning"></i> Employee and Family Discounts</li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-primary">Show More...</button><br>
                    <hr>
                    <p class="text-muted">
                        To apply, please send your application to:
                        <a href="mailto:Dave@Dizams.Com">Dave@Dizams.Com</a>
                    </p>
                </div>
            </div>

            <!-- Job 2 -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2 style="margin-top: 0;color:#ff545a;">
                                Medical Call Center Manager
                            </h2><br>
                            <div class="job-tags" style="margin-bottom: 15px;">
                                <span class="label label-default">Hyattsville, Maryland</span>
                                <span class="label label-primary">Full Time</span>
                                <span class="label label-info">Call Center</span>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right">
                            <button class="btn btn-primary"><a href="mailto:Dave@Dizams.Com" style="color: white;">Apply
                                    Now</a></button>
                        </div>
                    </div>

                    <p class="text-muted">We are seeking a compassionate and skilled Customer Care Agent to join our
                        dedicated medical call center team...</p><br>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Key Responsibilities:</h4><br>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-tasks text-info"></i> Act as the initial point of contact for customer
                                    inquiries</li>
                                <li><i class="fa fa-tasks text-info"></i> Provide empathetic support</li>
                                <li><i class="fa fa-tasks text-info"></i> Ensure customer satisfaction</li>
                            </ul>
                        </div>
                    </div><br>
                    <button class="btn btn-primary">Show More...</button><br>
                    <hr>
                    <p class="text-muted">
                        To apply, please send your application to:
                        <a href="mailto:Dave@Dizams.Com">Dave@Dizams.Com</a>
                    </p>
                </div>
            </div>

            {{-- job3 --}}
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2 style="margin-top: 0;color:#ff545a;">
                                Bookkeeper – Accounting & Administrative Support
                            </h2><br>
                            <div class="job-tags" style="margin-bottom: 15px;">
                                <span class="label label-default">Onsite</span>
                                <span class="label label-primary">Full Time</span>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right">
                            <button class="btn btn-primary"><a href="mailto:Dave@Dizams.Com" style="color: white;">Apply
                                    Now</a></button>
                        </div>
                    </div>

                    <p class="text-muted">Our client is seeking a detail-oriented and reliable Bookkeeper to join our
                        Accounting Department. This role involves managing essential bookkeeping tasks, assisting in
                        financial reporting, and supporting HR-related activities...</p><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Requirements:</h4><br>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-success"></i>Proficiency in accounting software and MS
                                    Office Suite, particularly Excel</li>
                                <li><i class="fa fa-check text-success"></i>Strong attention to detail, accuracy, and
                                    confidentiality</li>
                                <li><i class="fa fa-check text-success"></i>Excellent organizational and time-management
                                    skills</li>
                            </ul>
                        </div><br>
                        <div class="col-md-6">
                            <h4>Benefits:</h4><br>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-star text-warning"></i> 401(k)</li>
                                <li><i class="fa fa-star text-warning"></i> Dental insurance</li>
                                <li><i class="fa fa-star text-warning"></i> Health insurance</li>
                                <li><i class="fa fa-star text-warning"></i> Paid time off</li>
                                <li><i class="fa fa-star text-warning"></i> Monday to Friday</li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-primary">Show More...</button><br>
                    <hr>
                    <p class="text-muted">
                        To apply, please send your application to:
                        <a href="mailto:Dave@Dizams.Com">Dave@Dizams.Com</a>
                    </p>
                </div>
            </div>
            {{-- job4 --}}
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2 style="margin-top: 0;color:#ff545a;">
                                Optician
                            </h2><br>
                            <div class="job-tags" style="margin-bottom: 15px;">
                                <span class="label label-default">Onsite</span>
                                <span class="label label-primary">Full Time</span>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right">
                            <button class="btn btn-primary"><a href="mailto:Dave@Dizams.Com" style="color: white;">Apply
                                    Now</a></button>
                        </div>
                    </div>

                    <p class="text-muted">We are seeking a skilled and customer-oriented Optician to join our team...</p>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Requirements:</h4><br>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-success"></i>Previous experience as an Optician or in a
                                    related field is preferred.</li>
                                <li><i class="fa fa-check text-success"></i>Knowledge of medical terminology related to
                                    ophthalmology is a plus.</li>
                                <li><i class="fa fa-check text-success"></i>Strong retail sales experience with a focus on
                                    customer service excellence.</li>
                            </ul>
                        </div><br>
                        <div class="col-md-6">
                            <h4>Benefits:</h4><br>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-star text-warning"></i> 401(k)</li>
                                <li><i class="fa fa-star text-warning"></i> 401(k) matching</li>
                                <li><i class="fa fa-star text-warning"></i> Dental insurance</li>
                                <li><i class="fa fa-star text-warning"></i> Employee discount</li>
                                <li><i class="fa fa-star text-warning"></i> Health insurance</li>
                                <li><i class="fa fa-star text-warning"></i> Paid time off</li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-primary">Show More...</button><br>
                    <hr>
                    <p class="text-muted">
                        To apply, please send your application to:
                        <a href="mailto:Dave@Dizams.Com">Dave@Dizams.Com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .panel {
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease;
        }

        .panel:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .label {
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 5px;
            padding: 5px 10px;
        }

        .list-unstyled li {
            margin-bottom: 10px;
        }

        .list-unstyled li i {
            margin-right: 10px;
        }

        /* .btn-primary {
                                                                                                                                                                                                                                                                                                                                                                                                                    padding: 8px 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                } */

        @media (max-width: 768px) {
            .text-right {
                text-align: left;
                margin-top: 15px;
            }
        }
    </style>
@endsection
