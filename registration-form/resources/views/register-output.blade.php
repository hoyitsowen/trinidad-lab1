<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Output</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f7fa;
            font-family: 'Poppins', sans-serif;
        }
        .ot-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .ot-title {
            color: #1a3d7c;
            font-weight: 700;
            text-align: center;
        }
        .ot-btn {
            background-color: #ea9d2d;
            border: none;
        }
        .ot-btn:hover {
            background-color: #c87d1d;
        }
        .ot-label {
            font-weight: 600;
            color: #333;
        }
        .ot-value {
            color: #555;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="ot-card">
                <h2 class="ot-title mb-3">Registration Summary</h2>
                <p class="text-center text-muted">Here are the details you submitted.</p>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <tbody>
                            <tr>
                                <td class="ot-label">First Name</td>
                                <td class="ot-value">{{ $otData['otFirstname'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Last Name</td>
                                <td class="ot-value">{{ $otData['otLastname'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Student Number</td>
                                <td class="ot-value">{{ $otData['otStudentNumber'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Gender</td>
                                <td class="ot-value">{{ $otData['otGender'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Birthday</td>
                                <td class="ot-value">{{ $otData['otBirthday'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Course</td>
                                <td class="ot-value">{{ $otData['otCourse'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Email Address</td>
                                <td class="ot-value">{{ $otData['otEmail'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Contact Number</td>
                                <td class="ot-value">{{ $otData['otContact'] }}</td>
                            </tr>
                            <tr>
                                <td class="ot-label">Additional Info</td>
                                <td class="ot-value">{{ $otData['otInfo'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-grid mt-4">
                    <a href="{{ route('register.form') }}" class="btn ot-btn text-white fw-bold">Back to Registration</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
