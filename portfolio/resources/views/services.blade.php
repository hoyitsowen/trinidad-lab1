<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Owen Trinidad Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
      .page-header {
        background: url('{{ asset("images/purpleBg.jpg") }}') no-repeat center/cover;
        color: #fff;
        padding: 120px 0;
        text-align: center;
      }
    </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="navbar-brand" style="width: 60px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="page-header">
    <div class="container">
      <h1 class="fw-bold">My Services</h1>
      <p class="lead">A deeper dive into what I can do for you.</p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="py-5 bg-black text-light">
    <div class="container">
      <div class="row g-4">

        <!-- Service 1 -->
        <div class="col-md-6">
          <div class="p-4 h-100 border rounded shadow-sm">
            <h4 class="fw-bold text-gradient mb-3">UI/UX Design</h4>
            <p>I specialize in creating intuitive and aesthetically pleasing designs that prioritize the user experience. From wireframes to high-fidelity prototypes, I make sure your app or site feels natural and enjoyable to use.</p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6">
          <div class="p-4 h-100 border rounded shadow-sm">
            <h4 class="fw-bold text-gradient mb-3">Web Design & Development</h4>
            <p>Whether it’s a personal portfolio, business site, or a custom web app, I build responsive and optimized websites that combine modern aesthetics with functionality. My focus: fast load times and clean interfaces.</p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6">
          <div class="p-4 h-100 border rounded shadow-sm">
            <h4 class="fw-bold text-gradient mb-3">App Design</h4>
            <p>I design seamless mobile app experiences that keep users engaged and satisfied. My process ensures consistent branding and user-friendly navigation on both iOS and Android platforms.</p>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6">
          <div class="p-4 h-100 border rounded shadow-sm">
            <h4 class="fw-bold text-gradient mb-3">Brand Identity & Design</h4>
            <p>Your brand is more than just a logo — it’s an experience. I help businesses create cohesive brand identities through logos, color palettes, typography, and consistent visuals across platforms.</p>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center text-light py-4">
    <p>&copy; 2025 Owen Trinidad - All Rights Reserved</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
