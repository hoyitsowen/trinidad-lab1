<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Owen Trinidad Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">

  <style>
    body, html {
      height: 100%;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      background: #000;
    }

    /* Navbar */
    .navbar {
      background: #111;
    }

    /* Page Header */
    .page-header {
      background: linear-gradient(to bottom, rgba(30, 0, 50, 0.9), rgba(0, 0, 0, 1)),
                  url('{{ asset("images/purpleBg.jpg") }}') no-repeat center/cover;
      color: #fff;
      padding: 120px 0;
      text-align: center;
    }

    /* Gradient Text */
    .text-gradient {
      background: linear-gradient(90deg, #ff00cc, #3333ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* About Section */
    .about-section {
      padding: 80px 0;
    }

    .about-card {
      background: #111;
      border-radius: 20px;
      padding: 2.5rem;
      color: #ddd;
      box-shadow: 0 8px 25px rgba(255, 0, 204, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .about-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(255, 0, 204, 0.3);
    }

    .about-img {
      border-radius: 20px;
      width: 100%;
      max-width: 380px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.6);
    }

    .highlight {
      color: #ff00cc;
      font-weight: 600;
    }

    .btn-gradient {
      background: linear-gradient(90deg, #ff00cc, #3333ff);
      border: none;
      border-radius: 30px;
      padding: 12px 28px;
      color: #fff;
      font-weight: 500;
      transition: 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .btn-gradient:hover {
      opacity: 0.85;
      transform: translateY(-2px);
    }

    /* Timeline Section */
    .timeline {
      position: relative;
      padding-left: 30px;
      border-left: 3px solid #ff00cc;
    }

    .timeline-item {
      margin-bottom: 40px;
      position: relative;
    }

    .timeline-item::before {
      content: "";
      position: absolute;
      left: -11px;
      top: 5px;
      width: 18px;
      height: 18px;
      background: linear-gradient(90deg, #ff00cc, #3333ff);
      border-radius: 50%;
      box-shadow: 0 0 10px rgba(255, 0, 204, 0.6);
    }

    .timeline-content {
      background: #111;
      padding: 1.5rem;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.5);
      transition: transform 0.3s ease;
    }

    .timeline-content:hover {
      transform: translateY(-5px);
    }

    .timeline h5 {
      color: #fff;
      margin-bottom: 0.3rem;
    }

    .timeline small {
      color: #aaa;
      font-size: 0.9rem;
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
          <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Skills</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="page-header">
    <div class="container">
      <h1 class="fw-bold">About Me</h1>
      <p class="lead">Get to know more about my journey, passion, and skills.</p>
    </div>
  </header>

  <!-- About Section -->
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center g-5">

        <!-- Profile Image -->
        <div class="col-lg-5 text-center">
          <img src="{{ asset('images/icon.png') }}" alt="Owen Profile" class="about-img">
        </div>

        <!-- Bio Content -->
        <div class="col-lg-7">
          <div class="about-card">
            <h2 class="text-gradient fw-bold mb-3">Who I Am</h2>
            <p>
              Hello! I'm <span class="highlight">Owen Trinidad</span>, a passionate 
              <span class="highlight">Frontend Developer</span> and 
              <span class="highlight">UI/UX Designer</span>.  
              I love turning ideas into interactive, visually appealing, and user-friendly digital experiences.  
            </p>
            <p>
              With expertise in <span class="highlight">React, Laravel, Tailwind, and Figma</span>,  
              I specialize in creating clean designs and scalable applications.  
              Beyond coding, I’m deeply interested in design systems, problem-solving, and delivering seamless digital products.
            </p>
            <p>
              My mission is simple:  
              <em>"To build products that connect technology with people in the most meaningful way."</em>
            </p>
            <a href="{{ route('contact') }}" class="btn-gradient mt-3">
              <i class="bi bi-envelope-fill me-2"></i> Get In Touch
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Timeline / Experience Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-gradient fw-bold text-center mb-5">My Journey</h2>
      <div class="timeline">

        <!-- Item 1 -->
        <div class="timeline-item">
          <div class="timeline-content">
            <h5>Frontend Developer</h5>
            <small>2025 - 2026 | TigerRoutes</small>
            <p>Building responsive websites and web applications using React, Laravel, and Tailwind. Focused on delivering fast, user-friendly, and scalable solutions for clients.</p>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="timeline-item">
          <div class="timeline-content">
            <h5>UI/UX Designer</h5>
            <small>2023 - 2025 | Personal Projects - Roar Call, Austin's Cafe & Gastro Pub, Pamana Restaurant</small>
            <p>Designed clean and modern interfaces with Figma. Worked on branding, design systems, and prototyping to create smooth user journeys.</p>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="timeline-item">
          <div class="timeline-content">
            <h5>BS Information Technology</h5>
            <small>2022 - 2026 | University of Santo Tomas</small>
            <p>Studied Information Technology with a focus on software engineering, web development, and design principles. Completed academic projects showcasing strong problem-solving skills.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-light py-4">
    <p>&copy; 2025 Owen Trinidad - All Rights Reserved</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
