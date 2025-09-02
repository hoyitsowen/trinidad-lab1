<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Owen Trinidad Portfolio</title>
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

    /* Contact Section */
    .contact-section {
      padding: 80px 0;
    }

    .contact-card {
      background: #111;
      border-radius: 20px;
      padding: 2.5rem;
      color: #ddd;
      box-shadow: 0 8px 25px rgba(255, 0, 204, 0.15);
    }

    .form-control {
      background: #1a1a1a;
      border: 1px solid #333;
      border-radius: 10px;
      padding: 12px;
      color: #fff;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
      border-color: #ff00cc;
      box-shadow: 0 0 8px rgba(255, 0, 204, 0.4);
      background: #1a1a1a;
      color: #fff;
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

    /* Social Links */
    .social-links a {
      display: block;
      font-size: 1.2rem;
      margin: 15px 0;
      color: #fff;
      text-decoration: none;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    .social-links a i {
      font-size: 1.5rem;
      margin-right: 10px;
    }

    .social-links a:hover {
      color: #ff00cc;
      transform: translateX(5px);
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
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="page-header">
    <div class="container">
      <h1 class="fw-bold">Contact Me</h1>
      <p class="lead">Let’s connect and build something amazing together.</p>
    </div>
  </header>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="row g-5">

        <!-- Contact Form -->
        <div class="col-lg-7">
          <div class="contact-card">
            <h2 class="text-gradient fw-bold mb-4">Send Me a Message</h2>
            <form action="#" method="POST">
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Your full name" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Message subject" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="5" placeholder="Write your message..." required></textarea>
              </div>
              <button type="submit" class="btn-gradient">
                <i class="bi bi-send-fill me-2"></i> Send Message
              </button>
            </form>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-5 d-flex align-items-center justify-content-center">
          <div class="text-center">
            <h2 class="text-gradient fw-bold mb-3">Connect With Me</h2>
            <p class="mb-4">I’m always open to collaborations and new opportunities.</p>
            <div class="social-links">
              <a href="https://linkedin.com/in/hoyitsowen" target="_blank">
                <i class="bi bi-linkedin"></i> LinkedIn
              </a>
              <a href="mailto:your-email@example.com">
                <i class="bi bi-envelope-fill"></i> owen.trindiad23@gmail.com
              </a>
              <a href="tel:+639123456789">
                <i class="bi bi-telephone-fill"></i> +63 915 498 4441
              </a>
            </div>
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
