<!DOCTYPE html>
<html>

<head>
    <title>New Resume Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ff545a;
            color: white;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2 class="mb-0">New Resume Submission</h2>
        </div>
        <table id="customers">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>LinkedIn Profile</th>
                <th>Education</th>
                <th>Job Details</th>
                <th>Job Description</th>
            </tr>
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
        </table>
    </div>
</body>

</html>
