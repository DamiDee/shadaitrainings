<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->firstname }} {{ $user->lastname }} - Certificates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 40px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .btn-download {
            background-color: #28a745;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-download:hover {
            background-color: #218838;
        }
        .no-certificates {
            color: red;
            font-weight: bold;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>{{ $user->firstname }} {{ $user->lastname }}'s Certificates</h2>

    @if(count($certificates) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Certificate</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificates as $certificate)
                <tr>
                    <td>{{ basename($certificate) }}</td>
                    <td>
                        <a href="{{ route('admin.download.certificate', ['filename' => basename($certificate), 'user' => $user->id]) }}" class="btn-download">Download</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-certificates">No certificates found for this user.</p>
    @endif
</div>

</body>
</html>
