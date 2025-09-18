<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fbc562;
        }
        .ot-form-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
            padding: 2rem;
            max-width: 600px;
            margin: 3rem auto;
        }
        h2 {
            color: #4278c5;
            font-weight: bold;
        }
        .btn-custom {
            background: #ea9d2d;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="ot-form-card">
    <h2 class="mb-4 text-center">Registration</h2>

    {{-- Validation Errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $otError)
                    <li>{{ $otError }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        <div class="mb-3">
            <label for="otFirstname" class="form-label">First Name</label>
            <input type="text" name="otFirstname" id="otFirstname" class="form-control" value="{{ old('otFirstname') }}">
        </div>
        <div class="mb-3">
            <label for="otLastname" class="form-label">Last Name</label>
            <input type="text" name="otLastname" id="otLastname" class="form-control" value="{{ old('otLastname') }}">
        </div>
        <div class="mb-3">
            <label for="otEmail" class="form-label">Email</label>
            <input type="email" name="otEmail" id="otEmail" class="form-control" value="{{ old('otEmail') }}">
        </div>
        <div class="mb-3">
            <label for="otAge" class="form-label">Age</label>
            <input type="number" name="otAge" id="otAge" class="form-control" value="{{ old('otAge') }}">
        </div>
        <div class="mb-3">
            <label for="otPassword" class="form-label">Password</label>
            <input type="password" name="otPassword" id="otPassword" class="form-control">
        </div>
        <button type="submit" class="btn btn-custom w-100">Submit</button>
    </form>
</div>
</body>
</html>
