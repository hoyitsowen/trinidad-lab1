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
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

<div class="container mt-5 mb-5 bg-white w-75 p-4">
        <!-- @if($errors->any)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->


        <div class="row">
            <div class="col-lg-8 col-md-6 offset-md-2">
                        <h1 class="text-center">Student Registration</h1>
                        <p class="text-center">Thank you for applying to our college. Please fill in the form below to complete the registration process for admission.</p>
                        <form action="/submit-form" method="POST">
                            @csrf
          
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text"  class="form-control @error('firstname') is-invalid @enderror " name="firstname" placeholder="First Name" >
                                    @error('firstname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="col">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text"  class="form-control @error('lastname') is-invalid @enderror " name="lastname" placeholder="Last Name">
                                    @error('lastname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                                 
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="studentNumber" class="form-label">Student Number</label>
                                    <input type="text" class="form-control @error('stud') is-invalid @enderror " name="stud" placeholder="Student Number" >
                                    @error('stud')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                          
                                </div>
                                <div class="col">
                                    <label class="form-label">Gender</label>
                                    <div>
                                        <div class="form-check form-check-inline" required>
                                            <input class="form-check-input" type="radio" name="gender"value="Female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline" required>
                                            <input class="form-check-input" type="radio" name="gender" value="Male">
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline" required>
                                            <input class="form-check-input" type="radio" name="gender" value="others">
                                            <label class="form-check-label" for="others">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date" class="form-control @error('birthdate') is-invalid @enderror " name="birthdate">
                                    @error('birthdate')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="col">
                                    <label for="course" class="form-label">Course</label>
                                    <select class="form-select @error('course') is-invalid @enderror" name="course">
                                        <option value="">Select Course</option>
                                        <option value="BS Information Technology" {{ old('course') == 'BS Information Technology' ? 'selected' : '' }}>BS Information Technology</option>
                                        <option value="BS Computer Science" {{ old('course') == 'BS Computer Science' ? 'selected' : '' }}>BS Computer Science</option>
                                        <option value="BS Information Systems" {{ old('course') == 'BS Information Systems' ? 'selected' : '' }}>BS Information Systems</option>
                                    </select>
                                    @error('course')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror " name="email" placeholder="Email Address" >
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="contactNumber" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control @error('contact') is-invalid @enderror " name="contact" placeholder="Contact Number" >
                                    @error('contact')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="additionalInfo" class="form-label">Additional Information</label>
                                <textarea class="form-control" name="additionalInfo" rows="3 required"></textarea>
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