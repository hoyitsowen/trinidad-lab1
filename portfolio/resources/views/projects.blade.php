<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects - Owen Trinidad Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">

  <style>
    body, html {
      height: 100%;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      background: #000; /* fallback */
    }

    /* Navbar */
    .navbar {
      background: #111; /* slightly lighter than black */
    }

    /* Page Header with smooth gradient blend */
    .page-header {
      background: linear-gradient(to bottom, rgba(30, 0, 50, 0.9), rgba(0, 0, 0, 1)),
                  url('{{ asset("images/purpleBg.jpg") }}') no-repeat center/cover;
      color: #fff;
      padding: 120px 0;
      text-align: center;
      width: 100%;
    }

    /* Gradient Text */
    .text-gradient {
      background: linear-gradient(90deg, #ff00cc, #3333ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Main Section */
    main {
      min-height: calc(100vh - 250px);
      width: 100%;
      padding: 60px 0; /* adds breathing space */
    }

    /* Project Cards */
    .project-card {
      margin: 3rem 0;
    }
    .project-card img {
      border-radius: 10px;
      transition: transform 0.3s ease;
      max-width: 100%;
      height: auto;
    }
    .project-card img:hover {
      transform: scale(1.05);
    }

    /* Container */
    .container {
      max-width: 1200px;
      padding: 0 1.5rem;
      margin: 0 auto;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .project-card {
        text-align: center;
      }
      .project-card img {
        margin-bottom: 1.5rem;
      }
    }
  </style>
</head>
<body class="bg-black text-light">

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
          <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('projects') }}">Projects</a></li>
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
      <h1 class="fw-bold">My Projects</h1>
      <p class="lead">A showcase of my work — from concepts to fully built solutions.</p>
    </div>
  </header>

  <!-- Main Content -->
  <main>
    <div class="container py-5">

      <!-- Project 1 -->
      <div class="row align-items-center mb-5 project-card">
        <div class="col-md-6">
          <img src="{{ asset('images/Project1.png') }}" alt="TigerRoutes Web Page Design" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold text-gradient">TigerRoutes - Web Page Design</h3>
          <p>A modern web app for SHS Students built with ReactJS & Tailwind.</p>
          <a href="#" class="btn btn-outline-light btn-sm">View Case Study</a>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="row align-items-center mb-5 flex-md-row-reverse project-card">
        <div class="col-md-6">
          <img src="{{ asset('images/Project2.png') }}" alt="Pamana Restaurant Dashboard" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold text-gradient">Pamana Restaurant - Dashboard Page Design</h3>
          <p>Dashboard design for Pamana Restaurant, enhancing user experience with a modern interface.</p>
          <a href="#" class="btn btn-outline-light btn-sm">View Details</a>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="row align-items-center mb-5 project-card">
        <div class="col-md-6">
          <img src="{{ asset('images/Project3.png') }}" alt="TigerRoutes Mobile UI" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold text-gradient">TigerRoutes - Mobile UI Design</h3>
          <p>Mobile UI design for TigerRoutes, enhancing user experience on the go.</p>
          <a href="#" class="btn btn-outline-light btn-sm">Explore Project</a>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="row align-items-center mb-5 flex-md-row-reverse project-card">
        <div class="col-md-6">
          <img src="{{ asset('images/Project4.png') }}" alt="Austin's Cafe POS" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
          <h3 class="fw-bold text-gradient">Austin's Cafe - POS Design</h3>
          <p>POS System and UI/UX design for a local café.</p>
          <a href="#" class="btn btn-outline-light btn-sm">See Project</a>
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
