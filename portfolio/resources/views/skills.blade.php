<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skills - Owen Trinidad Portfolio</title>
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

    /* Skills Section */
    .skills-section {
      padding: 60px 0;
    }

    .skill-card {
      background: #111;
      border-radius: 15px;
      padding: 2rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
    }

    .skill-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(255, 0, 204, 0.2);
    }

    .skill-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: #ff00cc;
    }

    .progress {
      height: 8px;
      background-color: #222;
      border-radius: 10px;
      overflow: hidden;
    }

    .progress-bar {
      background: linear-gradient(90deg, #ff00cc, #3333ff);
    }

    .skill-label {
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
      display: flex;
      justify-content: space-between;
      color: #bbb;
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
          <li class="nav-item"><a class="nav-link active" href="{{ route('skills') }}">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="page-header">
    <div class="container">
      <h1 class="fw-bold">My Skills</h1>
      <p class="lead">A collection of my technical and creative expertise.</p>
    </div>
  </header>

  <!-- Skills Section -->
  <section class="skills-section">
    <div class="container">
      <div class="row g-4">

        <!-- Frontend -->
        <div class="col-md-6">
          <div class="skill-card">
            <i class="bi bi-code-slash skill-icon"></i>
            <h5 class="text-gradient">Frontend Development</h5>
            <div class="skill-label">
              <span>React / Bootstrap / Tailwind</span>
              <span>90%</span>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 90%;"></div>
            </div>
            <p>Experienced in building responsive and interactive UIs with modern frontend frameworks.</p>
          </div>
        </div>

        <!-- Backend -->
        <div class="col-md-6">
          <div class="skill-card">
            <i class="bi bi-hdd-network skill-icon"></i>
            <h5 class="text-gradient">Backend Development</h5>
            <div class="skill-label">
              <span>PHP / Laravel / Node.js</span>
              <span>80%</span>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
            </div>
            <p>Building scalable APIs and secure backends with Laravel, Node.js, and MySQL.</p>
          </div>
        </div>

        <!-- UI/UX -->
        <div class="col-md-6">
          <div class="skill-card">
            <i class="bi bi-palette skill-icon"></i>
            <h5 class="text-gradient">UI/UX Design</h5>
            <div class="skill-label">
              <span>Figma / Prototyping</span>
              <span>85%</span>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 85%;"></div>
            </div>
            <p>Designing intuitive user interfaces with modern design principles and prototyping tools.</p>
          </div>
        </div>

        <!-- Mobile -->
        <div class="col-md-6">
          <div class="skill-card">
            <i class="bi bi-phone skill-icon"></i>
            <h5 class="text-gradient">Mobile Development</h5>
            <div class="skill-label">
              <span>React Native</span>
              <span>70%</span>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 70%;"></div>
            </div>
            <p>Building cross-platform mobile apps with React Native for Android and iOS.</p>
          </div>
        </div>

        <!-- Version Control -->
        <div class="col-md-6">
          <div class="skill-card">
            <i class="bi bi-git skill-icon"></i>
            <h5 class="text-gradient">Version Control</h5>
            <div class="skill-label">
              <span>Git / GitHub</span>
              <span>95%</span>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 95%;"></div>
            </div>
            <p>Managing collaborative projects with GitHub, branching strategies, and CI/CD workflows.</p>
          </div>
        </div>

        <!-- Other Tools -->
        <div class="col-md-6">
          <div class="skill-card">
            <i class="bi bi-tools skill-icon"></i>
            <h5 class="text-gradient">Other Tools</h5>
            <div class="skill-label">
              <span>Firebase / APIs / Hosting</span>
              <span>75%</span>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 75%;"></div>
            </div>
            <p>Skilled in integrating APIs, deploying apps, and working with Firebase services.</p>
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
