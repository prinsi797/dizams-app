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
        <div class="job-filters panel panel-default" style="padding: 20px; margin: 20px 0;">
            <form id="jobFilterForm">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="titleFilter">Job Title</label>
                            <input type="text" class="form-control" id="titleFilter" placeholder="Search by title">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="locationFilter">Location</label>
                            <input type="text" class="form-control" id="locationFilter" placeholder="Search by location">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="jobTypeFilter">Job Type</label>
                            <select class="form-control" id="jobTypeFilter">
                                <option value="">All Types</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Contract">Contract</option>
                                <option value="C2H">C2H</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group button-group" style="margin-top: 25px;">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                            <button type="button" class="btn btn-default btn-sm" onclick="clearFilters()">Clear</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <!-- Job Listings -->
        <div class="job-listings">
            {{-- jobs/index.blade.php --}}

            @foreach ($jobs as $job)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h2 style="margin-top: 0;color:#ff545a;">
                                    {{ $job->title }}
                                </h2><br>
                                <div class="job-tags" style="margin-bottom: 15px;">
                                    <span class="label label-default">{{ $job->location }}</span>
                                    <span class="label label-primary">{{ $job->job_type }}</span>
                                    <span class="label label-info">{{ $job->category }}</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-muted">{{ Str::limit($job->description, 150) }}</p><br>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Requirements:</h4><br>
                                <ul class="list-unstyled">
                                    <p>{!! nl2br($job->requirements) !!}</p>

                                </ul>
                            </div><br>
                            @if ($job->benefits !== null && !empty($job->benefits))
                                <div class="col-md-6">
                                    <h4>Benefits:</h4><br>
                                    <ul class="list-unstyled">
                                        <p>{!! nl2br($job->benefits) !!}</p>
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <button type="button" class="btn btn-link" data-toggle="modal"
                            data-target="#jobDetailsModal{{ $job->id }}">
                            Show More...
                        </button>
                        <hr>
                        <p class="text-muted">
                            <button class="btn btn-primary" onclick="openForm()">Apply Now</button>
                        </p>
                    </div>
                </div>

                <!-- Modal for each job -->
                <div class="modal fade" id="jobDetailsModal{{ $job->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="jobDetailsModalLabel{{ $job->id }}">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="jobDetailsModalLabel{{ $job->id }}">{{ $job->title }}
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Job Details</h4><br>
                                        <p><strong>Location:</strong> {{ $job->location }}</p>
                                        <p><strong>Job Type:</strong> {{ $job->job_type }}</p>
                                        <p><strong>Category:</strong> {{ $job->category }}</p>
                                        <br>
                                        <h4>Job description</h4><br>
                                        <p>{{ $job->description }}</p>
                                        <br>

                                        <h4>Responsibilities:</h4><br>
                                        <p>{!! nl2br($job->responsibilities) !!}</p>
                                        <br>

                                        <p><strong>Job Type: </strong>{{ $job->job_type }}</p>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="window.location.href='mailto:{{ $job->application_email }}'">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    {{--  --}}
    <div id="popupForm"
        style="display:none; position:fixed; top:30%; left:50%; transform:translate(-50%, -30%);
    background:white; padding:20px; box-shadow:0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius:8px; z-index:1000; opacity:1;">
        <h3 style="color:#ff545a">Apply for Job</h3><br>
        <button type="button" class="close" data-dismiss="modal" onclick="closeForm()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <form id="jobForm">
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
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="resume">Resume (PDF/DOC)</label>
                <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx"
                    required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button><br>
            <br>
            <button type="button" class="btn btn-secondary" onclick="closeForm()">Cancel</button>
        </form>
    </div>
    <script>
        document.getElementById('jobFilterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            filterJobs();
        });

        function filterJobs() {
            const title = document.getElementById('titleFilter').value.toLowerCase().trim();
            const location = document.getElementById('locationFilter').value.toLowerCase().trim();
            const jobType = document.getElementById('jobTypeFilter').value.toLowerCase().trim();

            const jobListings = document.querySelectorAll('.job-listings .panel.panel-default');

            jobListings.forEach(job => {
                const jobTitle = job.querySelector('h2').textContent.toLowerCase().trim();
                const jobLocation = job.querySelector('.label.label-default').textContent.toLowerCase().trim();
                const jobTypeText = job.querySelector('.label.label-primary').textContent.toLowerCase().trim();

                const titleMatch = title === '' || jobTitle.includes(title);
                const locationMatch = location === '' || jobLocation.includes(location);
                const typeMatch = jobType === '' || jobTypeText.includes(jobType);

                if (titleMatch && locationMatch && typeMatch) {
                    job.style.display = 'block';
                } else {
                    job.style.display = 'none';
                }

                console.log('Job:', {
                    title: jobTitle,
                    searchTitle: title,
                    titleMatch: titleMatch,
                    location: jobLocation,
                    searchLocation: location,
                    locationMatch: locationMatch,
                    type: jobTypeText,
                    searchType: jobType,
                    typeMatch: typeMatch,
                    visible: job.style.display === 'block'
                });
            });
        }

        function clearFilters() {
            document.getElementById('jobFilterForm').reset();

            const jobListings = document.querySelectorAll('.job-listings .panel.panel-default');
            jobListings.forEach(job => {
                job.style.display = 'block';
            });
        }

        document.getElementById('titleFilter').addEventListener('input', filterJobs);
        document.getElementById('locationFilter').addEventListener('input', filterJobs);
        document.getElementById('jobTypeFilter').addEventListener('change', filterJobs);
    </script>
    <script>
        function openForm() {
            document.getElementById('popupForm').style.display = 'block';
        }

        function closeForm() {
            document.getElementById('popupForm').style.display = 'none';
        }

        document.getElementById('jobForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);

            try {
                const response = await fetch('/api/jobs', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    alert('Application submitted successfully!');
                    closeForm();
                    e.target.reset();
                } else {
                    alert('Failed to submit application.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Something went wrong.');
            }
        });
    </script>
    <style>
        .button-group {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn-sm {
            padding: 5px 15px;
            font-size: 14px;
        }

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


        @media (max-width: 768px) {
            .text-right {
                text-align: left;
                margin-top: 15px;
            }
        }
    </style>
@endsection
