<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
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
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="ot-card">
                <h2 class="ot-title mb-3">Student Registration</h2>
                <p class="text-center text-muted">
                    Fill out the form below to complete your registration process.
                </p>
                <form action="{{ route('register.submit') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="otFirstname" class="form-label">First Name</label>
                            <input type="text" name="otFirstname" id="otFirstname" class="form-control" placeholder="Juan">
                        </div>
                        <div class="col">
                            <label for="otLastname" class="form-label">Last Name</label>
                            <input type="text" name="otLastname" id="otLastname" class="form-control" placeholder="Dela Cruz">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="otStudentNumber" class="form-label">Student Number</label>
                        <input type="text" name="otStudentNumber" id="otStudentNumber" class="form-control" placeholder="2025123456">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="otGender" value="Female">
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="otGender" value="Male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="otGender" value="Others">
                            <label class="form-check-label">Others</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="otBirthday" class="form-label">Birthday</label>
                        <input type="date" name="otBirthday" id="otBirthday" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="otCourse" class="form-label">Course</label>
                        <select name="otCourse" id="otCourse" class="form-select">
                            <option value="">Select Course</option>
                            <option>BS Information Technology</option>
                            <option>BS Computer Science</option>
                            <option>BS Information Systems</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="otEmail" class="form-label">Email Address</label>
                        <input type="email" name="otEmail" id="otEmail" class="form-control" placeholder="student@ust.edu.ph">
                    </div>

                    <div class="mb-3">
                        <label for="otContact" class="form-label">Contact Number</label>
                        <input type="text" name="otContact" id="otContact" class="form-control" placeholder="09XXXXXXXXX">
                    </div>

                    <div class="mb-3">
                        <label for="otInfo" class="form-label">Additional Information</label>
                        <textarea name="otInfo" id="otInfo" rows="3" class="form-control" placeholder="Anything you'd like to add..."></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn ot-btn text-white fw-bold">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
