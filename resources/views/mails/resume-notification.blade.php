<!DOCTYPE html>
<html>

<head>
    <title>New Resume Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .table{
            border-color: #dee2e6;
        }
        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        .email-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #ff545a;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2 class="mb-0">New Resume Submission</h2>
        </div>

        <div class="email-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>LinkedIn Profile</th>
                            <th>Education</th>
                            <th>Job Details</th>
                            <th>Job Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $resumeData['name'] }}</td>
                            <td>{{ $resumeData['email'] }}</td>
                            <td>{{ $resumeData['phone'] }}</td>
                            <td><a href="{{ $resumeData['linkedin'] }}" class="text-decoration-none"
                                    target="_blank">{{ $resumeData['linkedin'] }}</a></td>
                            <td>{{ $resumeData['education'] }}</td>
                            <td>{{ $resumeData['job_details'] }}</td>
                            <td>
                                @if ($resumeData['job_description'])
                                    {{ $resumeData['job_description'] }}
                                @elseif(!$resumeData['job_description'])
                                    {{ 'No any Description' }}
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
