<!DOCTYPE html>
<html>
<head>
    <title>OT Registration Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #88cafc;
        }
        .ot-output-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
            padding: 2rem;
            max-width: 600px;
            margin: 3rem auto;
        }
        h2 {
            color: #5fafbe;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="ot-output-card">
    <h2 class="mb-4 text-center">OT Registration Output</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>First Name:</strong> {{ $otData['otFirstname'] }}</li>
        <li class="list-group-item"><strong>Last Name:</strong> {{ $otData['otLastname'] }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $otData['otEmail'] }}</li>
        <li class="list-group-item"><strong>Age:</strong> {{ $otData['otAge'] }}</li>
        <li class="list-group-item"><strong>Password:</strong> {{ $otData['otPassword'] }}</li>
    </ul>
</div>
</body>
</html>
