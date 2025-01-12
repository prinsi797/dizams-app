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
            <h2 class="mb-0">New Contact Message</h2>
        </div>
        <table id="customers">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            <tr>
                <td>{{ $contactData['name'] }}</td>
                <td>{{ $contactData['email'] }}</td>
                <td>{{ $contactData['phone'] }}</td>
                <td>{{ $contactData['subject'] }}</td>
                <td>{{ $contactData['message'] }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
