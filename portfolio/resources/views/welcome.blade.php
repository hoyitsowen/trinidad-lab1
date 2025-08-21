<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owen Trinidad - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
      .hero {
      position: relative;
      min-height: 100vh; /* instead of fixed height */
      display: flex;
      align-items: center; /* vertically center content */
      padding: 80px 0; /* reduce padding to balance */
      background: url('images/purpleBg.jpg') no-repeat center/cover;
      color: #fff;
    }
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="navbar-brand" style="width: 60px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#education">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

 <section id="hero" class="hero text-center text-white">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-7 text-md-start text-center">
        <p class="mb-2">My name is</p>
        <h1 class="fw-bold mb-3">Owen <span class="text-gradient">Trinidad</span></h1>
        <h3 class="fw-light mb-4">Passionate Web & UI/UX Designer</h3>
        <p class="mb-4">With years of experience, I bring ideas to life through web development and creative design. As a freelancer, I specialize in creating seamless, user-centered interfaces for apps, websites, and digital dashboards. Let's make your vision a reality.</p>
        <div class="d-flex gap-3 justify-content-md-start justify-content-center">
          <a href="#" class="btn btn-gradient">Download CV</a>
          <a href="https://www.linkedin.com/in/hoyitsowen" target="_blank" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width:45px; height:45px;">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://github.com/hoyitsowen" target="_blank" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width:45px; height:45px;">
            <i class="bi bi-github"></i>
          </a>
        </div>
      </div>
      <div class="col-md-5 text-center">
        <img src="images/icon.png" alt="profile" class="img-fluid rounded-circle border border-4 border-secondary">
      </div>
    </div>
  </div>
</section>


  <section id="services" class="py-5 bg-black">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 text-gradient">My Services</h2>
    <h3 class="fw-light mb-4 text-secondary">Bringing your ideas to life with tailored, user-centric design solutions</h3>
    <div class="row g-4 justify-content-center">  

      <div class="col-md-6 col-lg-5">
        <div class="skill-card p-4 h-100 d-flex flex-column justify-content-center text-start">
          <h5 class="mb-3 fw-bold text-gradient">01. UI/UX Design</h5>
          <p class="text-secondary">With a passion for simplicity and a focus on user experience, I design intuitive interfaces that make digital interactions seamless and enjoyable.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-5">
        <div class="skill-card p-4 h-100 d-flex flex-column justify-content-center text-start">
          <h5 class="mb-3 fw-bold text-gradient">02. Web Design</h5>
          <p class="text-secondary">I create visually compelling, user-centered websites that combine functionality with a memorable user experience, ensuring every interaction feels.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-5">
        <div class="skill-card p-4 h-100 d-flex flex-column justify-content-center text-start">
          <h5 class="mb-3 fw-bold text-gradient">03. App Design</h5>
          <p class="text-secondary">I design mobile applications that prioritize user ease and engagement, transforming ideas into intuitive, impactful experiences right at users' fingertips.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-5">
        <div class="skill-card p-4 h-100 d-flex flex-column justify-content-center text-start">
          <h5 class="mb-3 fw-bold text-gradient">04. Branding Design</h5>
          <p class="text-secondary">I craft cohesive brand identities that resonate with audiences, blending creativity and strategy to make lasting impressions across all touchpoints.</p>
        </div>
      </div>

    </div>
  </div>
</section>



  <section id="projects" class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-5 text-center text-gradient">My Work</h2>
      <h3 class="fw-light mb-4 text-secondary">Showcasing thoughtful desings crafted for real impact</h3>
      <div class="projects-grid">
  <div class="project-card">
    <img src="/images/Project1.png" alt="Project1">
    <div class="overlay">
      <h3>TigerRoutes - Web Page Design</h3>
      <p>A modern web app for SHS Students built with ReactJS & Tailwind.</p>
    </div>
  </div>

  <div class="project-card">
    <img src="/images/Project2.png" alt="Project2">
    <div class="overlay">
      <h3>Pamana Restaurant - Dashboard Page Design</h3>
      <p>Dashboard design for Pamana Restaurant, enhancing user experience with a modern interface.</p>
    </div>
  </div>

  <div class="project-card">
    <img src="/images/Project3.png" alt="Project3">
    <div class="overlay">
      <h3>TigerRoutes - Mobile UI Design</h3>
      <p>Mobile UI design for TigerRoutes, enhancing user experience on the go.</p>
    </div>
  </div>

  <div class="project-card">
    <img src="/images/Project4.png" alt="Project4">
    <div class="overlay">
      <h3>Austin's Cafe - POS Design</h3>
      <p>POS System and UI/UX design for a local café.</p>
    </div>
  </div>
</div>
    </div>
  </section>

 <section id="skills" class="py-5 bg-black">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 text-gradient">My Skills</h2>
    <h3 class="fw-light mb-4 text-secondary">Equipped with a diverse toolkit, bringing ideas to life with precision, creativity, and a focus on user-friendly design.</h3>
    <div class="row g-4 justify-content-center">

      <!-- Figma -->
      <div class="col-6 col-md-3">
        <div class="skill-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" class="skill-logo">
          <h5 class="mt-3">Figma</h5>
        </div>
      </div>      

      <!-- Adobe Photoshop -->
      <div class="col-6 col-md-3">
        <div class="skill-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" alt="Adobe Photoshop" class="skill-logo">
          <h5 class="mt-3">Photoshop</h5>
        </div>
      </div>

      <!-- HTML5 -->
      <div class="col-6 col-md-3">
        <div class="skill-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="skill-logo">
          <h5 class="mt-3">HTML5</h5>
        </div>
      </div>

      <!-- CSS3 -->
      <div class="col-6 col-md-3">
        <div class="skill-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="skill-logo">
          <h5 class="mt-3">CSS3</h5>
        </div>
      </div>

      <!-- React.js -->
      <div class="col-6 col-md-3 col-lg-2">
        <div class="skill-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React.js" class="skill-logo">
          <h5 class="mt-3">React.js</h5>
        </div>
      </div>

      <!-- Bootstrap -->
      <div class="col-6 col-md-3">
        <div class="skill-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="skill-logo">
          <h5 class="mt-3">Bootstrap</h5>
        </div>
      </div>

    </div>
  </div>
</section>


  <section id="education" class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6">
          <h2 class="fw-bold text-gradient mb-4">Education</h2>
          <ul class="list-group list-group-flush bg-transparent">
            <li class="list-group-item bg-transparent text-light">2022-2026 - Bachelor of Science in Information Technology - University of Santo Tomas</li>
            <li class="list-group-item bg-transparent text-light">2020-2022 - Senior High School - Paete Science and Business College Pagsanjan</li>
            <li class="list-group-item bg-transparent text-light">2016-2020 - Junior High School - Liceo De Pagsanjan</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold text-gradient mb-4">Experience</h2>
          <ul class="list-group list-group-flush bg-transparent">
            <li class="list-group-item bg-transparent text-light">2025-2026 - Junior Web Developer - TigerRoutes</li>
            <li class="list-group-item bg-transparent text-light">2025 - Junior Web Developer / UI Designer - Roar Call</li>
            <li class="list-group-item bg-transparent text-light">2024-2025 - Junior Web Developer / UI Designer - Austin's Cafe & Gastro Pub</li>
            <li class="list-group-item bg-transparent text-light">2024 - Front-End Developer / UI Designer - Pamana Restaurant</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="py-5 bg-black text-center">
  <div class="container">
    <h2 class="fw-bold mb-5 text-gradient">Contact Me</h2>
    <p class="mb-5 text-secondary">Let’s connect! Whether it’s a project, collaboration, or just a chat, I’d love to hear from you.</p>

    <div class="row g-4 justify-content-center">

      <!-- Email Card -->
      <div class="col-md-4 col-lg-3">
        <div class="contact-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <i class="bi bi-envelope-fill contact-icon"></i>
          <h5 class="mt-3 mb-2 text-gradient">Email</h5>
          <a href="mailto:owen.trinidad23@gmail.com" class="text-light text-decoration-none">owen.trinidad23@gmail.com</a>
        </div>
      </div>

      <!-- Phone Card -->
      <div class="col-md-4 col-lg-3">
        <div class="contact-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <i class="bi bi-telephone-fill contact-icon"></i>
          <h5 class="mt-3 mb-2 text-gradient">Phone</h5>
          <span class="text-light">+63 915 498 4441</span>
        </div>
      </div>

      <!-- LinkedIn Card -->
      <div class="col-md-4 col-lg-3">
        <div class="contact-card p-4 h-100 d-flex flex-column align-items-center justify-content-center">
          <i class="bi bi-linkedin contact-icon"></i>
          <h5 class="mt-3 mb-2 text-gradient">LinkedIn</h5>
          <a href="https://linkedin.com/in/hoyitsowen" target="_blank" class="text-light text-decoration-none">linkedin.com/in/hoyitsowen</a>
        </div>
      </div>

    </div>
  </div>
</section>

  <footer class="text-center">
    <p>&copy; 2025 Owen Trinidad - All Rights Reserved</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
