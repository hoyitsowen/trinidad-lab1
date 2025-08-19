<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Owen Trinidad - Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0b0b0f;
      color: #eaeaea;
      scroll-behavior: smooth;
    }
    .text-gradient {
      background: linear-gradient(135deg, #7928ca, #ff0080);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .hero {
      padding: 120px 0 80px;
    }
    .card {
      background: #161616;
      border: none;
      border-radius: 12px;
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    footer {
      background: #111;
      color: #aaa;
      padding: 30px 0;
    }
    .navbar {
      background: #111 !important;
    }
    .navbar-nav .nav-link {
      color: #fff !important;
      margin-right: 15px;
      transition: color 0.3s;
    }
    .navbar-nav .nav-link:hover {
      color: #ff66b3 !important;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-gradient" href="#">Owen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#education">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="hero" class="hero container">
    <div class="row align-items-center">
      <div class="col-md-7">
        <p class="text-muted">Hello, I am</p>
        <h1 class="fw-bold">Owen <span class="text-gradient">Dela Cruz</span></h1>
        <h3 class="fw-light">Passionate Web & UI/UX Designer</h3>
        <p>With years of experience, I bring ideas to life through web development and creative design.</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="btn btn-primary">Download CV</a>
          <a href="#contact" class="btn btn-outline-light">Hire Me</a>
        </div>
        <div class="d-flex gap-5 mt-4">
          <div><h3 class="text-gradient">02+</h3><small>Years Exp.</small></div>
          <div><h3 class="text-gradient">40+</h3><small>Projects</small></div>
          <div><h3 class="text-gradient">18+</h3><small>Clients</small></div>
        </div>
      </div>
      <div class="col-md-5 text-center">
        <img src="https://via.placeholder.com/300x300" alt="profile" class="img-fluid rounded-circle border border-4 border-secondary">
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="py-5 bg-black">
    <div class="container text-center">
      <h2 class="fw-bold mb-5 text-gradient">My Services</h2>
      <div class="row g-4">
        <div class="col-md-3"><div class="card p-3"><h5>UI/UX Design</h5><p>Design clean and user-friendly experiences.</p></div></div>
        <div class="col-md-3"><div class="card p-3"><h5>Web Development</h5><p>Responsive websites using Laravel & Bootstrap.</p></div></div>
        <div class="col-md-3"><div class="card p-3"><h5>App Design</h5><p>Mobile-first designs for Android/iOS apps.</p></div></div>
        <div class="col-md-3"><div class="card p-3"><h5>Branding</h5><p>Helping brands build digital identity.</p></div></div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-5">
    <div class="container">
      <h2 class="fw-bold mb-5 text-center text-gradient">My Work</h2>
      <div class="row g-4">
        <div class="col-md-6"><img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Project"></div>
        <div class="col-md-6"><img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Project"></div>
        <div class="col-md-6"><img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Project"></div>
        <div class="col-md-6"><img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Project"></div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-5 bg-black">
    <div class="container text-center">
      <h2 class="fw-bold mb-5 text-gradient">My Skills</h2>
      <div class="d-flex justify-content-center gap-5 flex-wrap">
        <div class="p-3 bg-dark rounded">Figma</div>
        <div class="p-3 bg-dark rounded">Adobe XD</div>
        <div class="p-3 bg-dark rounded">Illustrator</div>
        <div class="p-3 bg-dark rounded">Bootstrap</div>
      </div>
    </div>
  </section>

  <!-- Education & Experience -->
  <section id="education" class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6">
          <h2 class="fw-bold text-gradient mb-4">Education</h2>
          <ul class="list-group list-group-flush bg-transparent">
            <li class="list-group-item bg-transparent text-light">2019-2021 - Senior High School - UST</li>
            <li class="list-group-item bg-transparent text-light">2021-2023 - IT Program - UST</li>
            <li class="list-group-item bg-transparent text-light">2023-2024 - UI/UX Course - Google</li>
            <li class="list-group-item bg-transparent text-light">2024-2028 - BS IT - UST</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold text-gradient mb-4">Experience</h2>
          <ul class="list-group list-group-flush bg-transparent">
            <li class="list-group-item bg-transparent text-light">2024-2025 - Junior Web Developer - XYZ</li>
            <li class="list-group-item bg-transparent text-light">2025 - Present - Freelance Web Dev / UI Designer</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-5 bg-black text-center">
    <div class="container">
      <h2 class="fw-bold mb-4 text-gradient">Contact</h2>
      <p>Email: <a href="mailto:owen@example.com" class="text-decoration-none text-light">owen@example.com</a></p>
      <p>Phone: +63 912 345 6789</p>
      <p>LinkedIn: <a href="https://linkedin.com/in/owen" target="_blank" class="text-decoration-none text-light">linkedin.com/in/owen</a></p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <p>&copy; 2025 Owen Trinidad - All Rights Reserved</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
