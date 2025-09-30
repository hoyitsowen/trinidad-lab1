<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-secondary">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}",
            confirmButtonText: 'OK'
        });
    </script>
@endif

<div class="container mt-5 mb-5 bg-white w-75 p-4">
        <div class="row">
            <div class="col-lg-8 col-md-6 offset-md-2">
                        <h1 class="text-center">Student Registration</h1>
                        <p class="text-center">Thank you for applying to our college. Please fill in the form below to complete the registration process for admission.</p>
                        <form action="/submit-form" method="POST">
                            @csrf
          
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="otFirstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control @error('otFirstname') is-invalid @enderror" name="otFirstname" placeholder="First Name">
                                    @error('otFirstname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="col">
                                    <label for="otLastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control @error('otLastname') is-invalid @enderror" name="otLastname" placeholder="Last Name">
                                    @error('otLastname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="otStudentNumber" class="form-label">Student Number</label>
                                    <input type="text" class="form-control @error('otStudentNumber') is-invalid @enderror" name="otStudentNumber" placeholder="Student Number">
                                    @error('otStudentNumber')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="col">
                                    <label class="form-label">Gender</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('otGender') is-invalid @enderror" type="radio" name="otGender" value="Female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otGender" value="Male">
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="otGender" value="others">
                                            <label class="form-check-label" for="others">Others</label>
                                        </div>
                                    </div>
                                    @error('otGender')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="otBirthdate" class="form-label">Birthday</label>
                                    <input type="date" class="form-control @error('otBirthdate') is-invalid @enderror" name="otBirthdate">
                                    @error('otBirthdate')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="col">
                                    <label for="otCourse" class="form-label">Course</label>
                                    <select class="form-select @error('otCourse') is-invalid @enderror" name="otCourse">
                                        <option value="">Select Course</option>
                                        <option value="BS Information Technology">BS Information Technology</option>
                                        <option value="BS Computer Science">BS Computer Science</option>
                                        <option value="BS Information Systems">BS Information Systems</option>
                                    </select>
                                    @error('otCourse')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="otEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control @error('otEmail') is-invalid @enderror" name="otEmail" placeholder="Email Address">
                                    @error('otEmail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="otContact" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control @error('otContact') is-invalid @enderror" name="otContact" placeholder="Contact Number">
                                    @error('otContact')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="otInfo" class="form-label">Additional Information</label>
                                <textarea class="form-control" name="otInfo" rows="3"></textarea>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>