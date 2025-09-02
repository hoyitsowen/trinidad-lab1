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
    /* Page Header with smooth gradient blend */
    .page-header {
      background: linear-gradient(to bottom, rgba(30, 0, 50, 0.9), rgba(0, 0, 0, 1)),
                  url('{{ asset("images/purpleBg.jpg") }}') no-repeat center/cover;
      color: #fff;
      padding: 120px 0;
      text-align: center;
      width: 100%;
    }
    .page-header h1 {
      font-weight: 700;
    }
    .page-header p {
      font-size: 1.1rem;
      opacity: 0.85;
    }
    .tech-item img {
    height: 60px;
    transition: transform 0.3s ease, filter 0.3s ease, box-shadow 0.3s ease;
  }

  .tech-item:hover img {
    transform: scale(1.15);
    filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.8));
  }

  /* GitHub logo is black by default, invert for dark background */
  .invert-dark {
    filter: invert(1);
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
            <h4 class="fw-bold text-gradient mb-3">01. UI/UX Design</h4>
            <p>I specialize in creating intuitive and aesthetically pleasing designs that prioritize the user experience. From wireframes to high-fidelity prototypes, I make sure your app or site feels natural and enjoyable to use.</p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6">
          <div class="p-4 h-100 border rounded shadow-sm">
            <h4 class="fw-bold text-gradient mb-3">02. Web Design & Development</h4>
            <p>Whether it’s a personal portfolio, business site, or a custom web app, I build responsive and optimized websites that combine modern aesthetics with functionality. My focus: fast load times and clean interfaces.</p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6">
          <div class="p-4 h-100 border rounded shadow-sm">
            <h4 class="fw-bold text-gradient mb-3">03. App Design</h4>
            <p>I design seamless mobile app experiences that keep users engaged and satisfied. My process ensures consistent branding and user-friendly navigation on both iOS and Android platforms.</p>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6">
          <div class="p-4 h-100 border rounded shadow-sm">
            <h4 class="fw-bold text-gradient mb-3">04. Brand Identity & Design</h4>
            <p>Your brand is more than just a logo — it’s an experience. I help businesses create cohesive brand identities through logos, color palettes, typography, and consistent visuals across platforms.</p>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Tools & Technologies -->
<section class="py-5 bg-dark text-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Tools & Technologies</h2>
    <p class="mb-5">The technologies and platforms I use to design, develop, and deliver high-quality digital experiences.</p>

    <div class="row g-4 justify-content-center align-items-center">

      <!-- Tool 1: Figma -->
      <div class="col-4 col-md-2 tech-item">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" class="img-fluid">
        <p class="mt-2">Figma</p>
      </div>

      <!-- Tool 2: React -->
      <div class="col-4 col-md-2 tech-item">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="img-fluid">
        <p class="mt-2">React</p>
      </div>

      <!-- Tool 3: Bootstrap -->
      <div class="col-4 col-md-2 tech-item">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="img-fluid">
        <p class="mt-2">Bootstrap</p>
      </div>

      <!-- Tool 4: Photoshop -->
      <div class="col-4 col-md-2 tech-item">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" alt="Photoshop" class="img-fluid">
        <p class="mt-2">Photoshop</p>
      </div>

      <!-- Tool 5: GitHub -->
      <div class="col-4 col-md-2 tech-item">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" class="img-fluid invert-dark">
        <p class="mt-2">GitHub</p>
      </div>

      <!-- Tool 6: MySQL -->
      <div class="col-4 col-md-2 tech-item">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="img-fluid">
        <p class="mt-2">MySQL</p>
      </div>

    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-center bg-black text-light">
  <div class="container">
    <h2 class="fw-bold mb-3">Let’s Build Something Amazing Together</h2>
    <p class="mb-4">Have an idea in mind or a project you’d like to start? I’d love to hear from you and turn your vision into reality.</p>
    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4 py-2">
      Get in Touch
    </a>
  </div>
</section>



  <!-- Footer -->
  <footer class="text-center text-light py-4">
    <p>&copy; 2025 Owen Trinidad - All Rights Reserved</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
