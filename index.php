<?php
require __DIR__ . "/app/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SynTech- MASL</title>
<link rel="icon" type="image/png" href="storage/syntech-logo.png">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg: #07070f;
    --bg2: #0d0d1a;
    --bg3: #111125;
    --border: rgba(255,255,255,0.07);
    --border-hover: rgba(255,255,255,0.15);
    --text: #e8e8f0;
    --muted: #7070a0;
    --accent: #d4a853;
    --accent2: #a87fd4;
    --glow: rgba(140, 80, 220, 0.35);
    --glow2: rgba(212, 168, 83, 0.2);
    --font-display: 'Syne', sans-serif;
    --font-body: 'DM Sans', sans-serif;
  }

  html { scroll-behavior: smooth; }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: var(--font-body);
    font-size: 15px;
    line-height: 1.7;
    overflow-x: hidden;
  }

  /* ── NAV ── */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 48px;
    background: rgba(7,7,15,0.75);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid var(--border);
  }
  .nav-logo {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 700;
    letter-spacing: 0.06em;
    color: var(--text);
    display: flex; align-items: center; gap: 8px;
  }
  .nav-logo span {
    width: 8px; height: 8px;
    background: var(--accent);
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 8px var(--accent);
  }

  .nav-logo img {
    width: 30px; 
    height: 30px;
  }
  .nav-links {
    display: flex;
    gap: 32px;
    list-style: none;
  }
  .nav-links a {
    color: var(--muted);
    text-decoration: none;
    font-size: 13px;
    letter-spacing: 0.04em;
    transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--text); }
  .nav-cta {
    font-size: 13px;
    padding: 8px 20px;
    border: 1px solid rgba(212,168,83,0.4);
    border-radius: 99px;
    color: var(--accent);
    background: rgba(212,168,83,0.06);
    cursor: pointer;
    font-family: var(--font-body);
    transition: all 0.2s;
  }
  .nav-cta:hover {
    background: rgba(212,168,83,0.14);
    border-color: var(--accent);
  }

  /* ── HERO ── */
  .hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 120px 48px 80px;
  }

  /* Container handles position, size, and centering */
  .orb-container {
    position: absolute;
    top: 20%;
    right: 5%;
    width: 520px;
    height: 520px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* The orb fills the container behind the image */
  .hero-orb {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 40% 40%, #7c3aed 0%, #4c1d95 35%, #1e0a4a 65%, transparent 80%);
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0.55;
    animation: pulse 6s ease-in-out infinite;
    z-index: 1;
  }

  /* The profile photo stays sharp in front */
  .profile-img {
    position: relative;
    z-index: 2;
    max-width: 80%;
    max-height: 80%;
    object-fit: cover;

    /* Adjust scale: 1.2 zooms in 20%, 1.5 zooms in 50%, etc. */
    transform: scale(1.5); 
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.55; }
    50% { transform: scale(1.06); opacity: 0.7; }
  }

  .hero-content { position: relative; z-index: 2; max-width: 800px; }

  .hero-greeting {
    font-size: 16px;
    color: var(--muted);
    margin-bottom: 12px;
    letter-spacing: 0.02em;
  }
  .hero-name {
    font-family: var(--font-display);
    font-size: clamp(48px, 8vw, 60px);
    font-weight: 800;
    line-height: 1.05;
    margin-bottom: 20px;
    background: linear-gradient(135deg, #ffffff 30%, #c4a0f0 70%, #a078e0 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .hero-title {
    font-family: var(--font-display);
    font-size: clamp(18px, 3vw, 24px);
    font-weight: 500;
    color: var(--accent);
    margin-bottom: 20px;
    letter-spacing: 0.02em;
  }
  .hero-desc {
    color: var(--muted);
    font-size: 15px;
    line-height: 1.75;
    max-width: 440px;
    margin-bottom: 36px;
  }
  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    padding: 5px 12px;
    border-radius: 99px;
    background: rgba(100,255,150,0.08);
    border: 1px solid rgba(100,255,150,0.2);
    color: #6dffaa;
    margin-bottom: 28px;
  }
  .badge-dot {
    width: 6px; height: 6px;
    background: #6dffaa;
    border-radius: 50%;
    box-shadow: 0 0 6px #6dffaa;
    animation: blink 2s ease-in-out infinite;
  }
  @keyframes blink { 0%,100%{opacity:1} 50%{opacity:0.4} }

  .hero-btns { display: flex; gap: 12px; flex-wrap: wrap; }
  .btn-primary {
    font-family: var(--font-body);
    font-size: 14px;
    padding: 12px 28px;
    background: linear-gradient(135deg, #7c3aed, #5b21b6);
    color: #fff;
    border: none;
    border-radius: 99px;
    cursor: pointer;
    box-shadow: 0 0 24px rgba(124,58,237,0.4);
    transition: all 0.25s;
  }
  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 36px rgba(124,58,237,0.6);
  }
  .btn-ghost {
    font-family: var(--font-body);
    font-size: 14px;
    padding: 12px 28px;
    background: transparent;
    color: var(--text);
    border: 1px solid var(--border-hover);
    border-radius: 99px;
    cursor: pointer;
    transition: all 0.25s;
  }
  .btn-ghost:hover { border-color: rgba(255,255,255,0.35); background: rgba(255,255,255,0.05); }

  /* ── SKILLS STRIP ── */
  .skills-strip {
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    background: var(--bg2);
    padding: 18px 48px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    align-items: center;
  }
  .skills-strip-label {
    font-size: 11px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--muted);
    margin-right: 8px;
  }
  .skill-tag {
    font-size: 12px;
    padding: 5px 14px;
    border-radius: 99px;
    border: 1px solid var(--border);
    color: var(--muted);
    background: rgba(255,255,255,0.02);
    transition: all 0.2s;
  }
  .skill-tag:hover { border-color: var(--accent2); color: var(--accent2); background: rgba(168,127,212,0.08); }

  /* ── SECTION SHARED ── */
  section { padding: 96px 48px; }
  .section-eyebrow {
    font-size: 11px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 16px;
    display: flex; align-items: center; gap: 10px;
  }
  .section-eyebrow::after {
    content: '';
    display: block;
    width: 40px; height: 1px;
    background: var(--accent);
    opacity: 0.5;
  }
  .section-title {
    font-family: var(--font-display);
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 700;
    line-height: 1.15;
    margin-bottom: 16px;
  }

  /* ── ABOUT ── */
  .about { background: var(--bg2); }
  .about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    margin-top: 48px;
  }
  .about-text { color: var(--muted); line-height: 1.85; }
  .about-text p + p { margin-top: 16px; }
  .about-text strong { color: var(--text); font-weight: 500; }

  .about-stats { display: flex; flex-direction: column; gap: 12px; }
  .stat-item {
    background: var(--bg3);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 20px 24px;
    display: flex;
    align-items: center;
    gap: 20px;
    transition: border-color 0.2s;
  }
  .stat-item:hover { border-color: var(--border-hover); }
  .stat-num {
    font-family: var(--font-display);
    font-size: 32px;
    font-weight: 800;
    color: var(--accent2);
    min-width: 70px;
  }
  .stat-info .stat-name { font-size: 14px; font-weight: 500; color: var(--text); }
  .stat-info .stat-desc { font-size: 12px; color: var(--muted); margin-top: 2px; }

  .services-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 16px;
    margin-top: 16px;
  }
  .service-card {
    background: var(--bg3);
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 24px;
    transition: all 0.25s;
    cursor: default;
  }
  .service-card:hover {
    border-color: rgba(168,127,212,0.35);
    background: rgba(168,127,212,0.05);
    transform: translateY(-3px);
  }
  .service-icon {
    font-size: 24px;
    margin-bottom: 14px;
  }
  .service-card h3 { font-size: 14px; font-weight: 500; margin-bottom: 8px; }
  .service-card p { font-size: 13px; color: var(--muted); line-height: 1.65; }

  /* ── PORTFOLIO ── */
  .portfolio { background: var(--bg); }
  .portfolio-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-top: 48px;
  }
  .portfolio-card {
    background: var(--bg2);
    border: 1px solid var(--border);
    border-radius: 14px;
    overflow: hidden;
    transition: all 0.25s;
    cursor: pointer;
  }
  .portfolio-card:hover {
    border-color: var(--border-hover);
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
  }
  .portfolio-thumb {
    aspect-ratio: 16/9;
    background: var(--bg3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
  }
  .portfolio-thumb-1 { background: linear-gradient(135deg, #1a0a3a, #3b1a7a); }
  .portfolio-thumb-2 { background: linear-gradient(135deg, #0a2a1a, #1a5a3a); }
  .portfolio-thumb-3 { background: linear-gradient(135deg, #2a1a0a, #5a3a1a); }
  .thumb-label {
    font-family: var(--font-display);
    font-size: 11px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.3);
  }
  .portfolio-body { padding: 20px; }
  .portfolio-tags { display: flex; gap: 6px; flex-wrap: wrap; margin-bottom: 10px; }
  .ptag {
    font-size: 10px;
    padding: 3px 9px;
    border-radius: 99px;
    border: 1px solid var(--border);
    color: var(--muted);
  }
  .portfolio-body h3 { font-size: 15px; font-weight: 500; margin-bottom: 6px; }
  .portfolio-body p { font-size: 13px; color: var(--muted); line-height: 1.6; }
  .portfolio-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: var(--accent2);
    margin-top: 12px;
    text-decoration: none;
    transition: gap 0.2s;
  }
  .portfolio-link:hover { gap: 10px; }

  .portfolio-cta {
    text-align: center;
    margin-top: 48px;
    padding: 32px;
    border: 1px dashed var(--border-hover);
    border-radius: 14px;
    color: var(--muted);
    font-size: 14px;
  }
  .portfolio-cta strong { color: var(--accent); }

  /* ── CONTACT ── */
  .contact { background: var(--bg2); }
  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    margin-top: 48px;
  }
  .contact-info-items { display: flex; flex-direction: column; gap: 16px; margin-top: 24px; }
  .contact-row {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 14px;
    color: var(--muted);
  }
  .contact-icon {
    width: 36px; height: 36px;
    border: 1px solid var(--border);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    font-size: 16px;
    flex-shrink: 0;
    background: var(--bg3);
  }
  .contact-row a { color: var(--muted); text-decoration: none; }
  .contact-row a:hover { color: var(--text); }

  .contact-form { display: flex; flex-direction: column; gap: 14px; }
  .form-group { display: flex; flex-direction: column; gap: 6px; }
  .form-group label { font-size: 12px; color: var(--muted); letter-spacing: 0.04em; }
  .form-group input,
  .form-group textarea {
    background: var(--bg3);
    border: 1px solid var(--border);
    border-radius: 10px;
    color: var(--text);
    font-family: var(--font-body);
    font-size: 14px;
    padding: 12px 16px;
    outline: none;
    transition: border-color 0.2s;
    width: 100%;
  }
  .form-group input:focus,
  .form-group textarea:focus { border-color: rgba(168,127,212,0.5); }
  .form-group textarea { resize: none; height: 120px; }
  .form-submit {
    font-family: var(--font-body);
    font-size: 14px;
    padding: 14px;
    background: linear-gradient(135deg, #7c3aed, #5b21b6);
    color: #fff;
    border: none;
    border-radius: 99px;
    cursor: pointer;
    box-shadow: 0 0 24px rgba(124,58,237,0.35);
    transition: all 0.25s;
    margin-top: 6px;
  }
  .form-submit:hover { transform: translateY(-2px); box-shadow: 0 0 36px rgba(124,58,237,0.55); }

  /* ── FOOTER ── */
  footer {
    background: var(--bg);
    border-top: 1px solid var(--border);
    padding: 28px 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .footer-name {
    font-family: var(--font-display);
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.06em;
    color: var(--text);
  }
  .footer-copy { font-size: 12px; color: var(--muted); }
  .footer-socials { display: flex; gap: 14px; }
  .social-link {
    width: 34px; height: 34px;
    border: 1px solid var(--border);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    color: var(--muted);
    text-decoration: none;
    font-size: 15px;
    transition: all 0.2s;
  }
  .social-link:hover { border-color: var(--accent2); color: var(--accent2); background: rgba(168,127,212,0.08); }

  /* ── ANIMATIONS ── */
  .fade-in {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease, transform 0.7s ease;
  }
  .fade-in.visible { opacity: 1; transform: translateY(0); }

  @media (max-width: 768px) {
    nav { padding: 16px 20px; }
    .nav-links { display: none; }
    section, .hero { padding: 72px 20px; }
    .skills-strip { padding: 16px 20px; }
    .about-grid, .contact-grid { grid-template-columns: 1fr; gap: 40px; }
    .portfolio-grid, .services-grid { grid-template-columns: 1fr; }
    footer { padding: 20px; flex-direction: column; gap: 12px; text-align: center; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo"><img src="storage/syntech-logo.png" alt="Profile Photo" class="Logo"> SYNTECH</div>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a href="storage/cv.pdf" class="nav-cta" download="Ma-Aliza-Lomugdang-CV.pdf">Download CV</a>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="orb-container">
    <div class="hero-orb"></div>
    <img src="storage/myprofile.png" alt="Profile Photo" class="profile-img">
  </div>
  <!-- <div class="hero-orb"> 
  </div>
  <img src="storage/profile.png" alt="Profile Photo">  -->
  <div class="hero-content">
    <div class="hero-badge"><div class="badge-dot"></div> Available for projects</div>
    <div class="hero-greeting">Hello! I'm Aliza 👋</div>
    <h1 class="hero-name">Full-stack<br>Web Developer</h1>
    <p class="hero-title">Building responsive websites & dynamic web apps</p>
    <p class="hero-desc">Self-taught developer from Antique, Philippines. I craft clean, functional digital experiences — from pixel-perfect front-ends to robust back-end systems.</p>
    <div class="hero-btns">
      <button class="btn-primary" onclick="document.getElementById('portfolio').scrollIntoView({behavior:'smooth'})">View My Work</button>
      <button class="btn-ghost" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Let's Talk →</button>
    </div>
  </div>
</section>

<!-- SKILLS STRIP -->
<div class="skills-strip">
  <span class="skills-strip-label">Tech Stack</span>
  <span class="skill-tag">HTML</span>
  <span class="skill-tag">CSS</span>
  <span class="skill-tag">JavaScript</span>
  <span class="skill-tag">PHP</span>
  <span class="skill-tag">Bootstrap</span>
  <span class="skill-tag">MySQL</span>
  <span class="skill-tag">WordPress</span>
</div>

<!-- ABOUT -->
<section class="about" id="about">
  <div class="section-eyebrow">About me</div>
  <h2 class="section-title">Developer. Builder.<br>Problem solver.</h2>
  <div class="about-grid">
    <div>
      <div class="about-text">
        <p>I started my software journey by <strong>self-studying</strong> web technologies — exploring both front-end and back-end development out of pure curiosity. What started as tinkering turned into a full career path.</p>
        <p>Today, I build <strong>responsive websites and dynamic web applications</strong> that solve real problems for real clients. I'm always learning, always improving, and always looking for the next challenge.</p>
        <p>Based in <strong>Antique, Philippines</strong> — working with clients locally and globally.</p>
      </div>
      <div class="services-grid" style="margin-top:32px;">
        <div class="service-card">
          <div class="service-icon">🌐</div>
          <h3>Website Development</h3>
          <p>Fast, responsive sites built to perform.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">⚙️</div>
          <h3>Web Applications</h3>
          <p>Dynamic apps with PHP & MySQL backends.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">🚀</div>
          <h3>Website Hosting</h3>
          <p>Launch and maintain your site live.</p>
        </div>
      </div>
    </div>
    <div class="about-stats">
      <div class="stat-item">
        <div class="stat-num">10+</div>
        <div class="stat-info">
          <div class="stat-name">Completed Projects</div>
          <div class="stat-desc">Websites and web apps delivered</div>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-num">90%</div>
        <div class="stat-info">
          <div class="stat-name">Client Satisfaction</div>
          <div class="stat-desc">Based on client feedback</div>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-num">5+</div>
        <div class="stat-info">
          <div class="stat-name">Years of Experience</div>
          <div class="stat-desc">In web development</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section class="portfolio" id="portfolio">
  <div class="section-eyebrow">My Work</div>
  <h2 class="section-title">Selected Projects</h2>
  <div class="portfolio-grid">
    <div class="portfolio-card fade-in">
      <div class="portfolio-thumb portfolio-thumb-1">
        <span class="thumb-label">Add your screenshot</span>
      </div>
      <div class="portfolio-body">
        <div class="portfolio-tags">
          <span class="ptag">PHP</span>
          <span class="ptag">MySQL</span>
          <span class="ptag">Bootstrap</span>
        </div>
        <h3>Project Name Here</h3>
        <p>Short description of what this project does and the problem it solves.</p>
        <a href="#" class="portfolio-link">View Project →</a>
      </div>
    </div>
    <div class="portfolio-card fade-in" style="transition-delay:0.1s">
      <div class="portfolio-thumb portfolio-thumb-2">
        <span class="thumb-label">Add your screenshot</span>
      </div>
      <div class="portfolio-body">
        <div class="portfolio-tags">
          <span class="ptag">WordPress</span>
          <span class="ptag">CSS</span>
        </div>
        <h3>Project Name Here</h3>
        <p>Short description of what this project does and the problem it solves.</p>
        <a href="#" class="portfolio-link">View Project →</a>
      </div>
    </div>
    <div class="portfolio-card fade-in" style="transition-delay:0.2s">
      <div class="portfolio-thumb portfolio-thumb-3">
        <span class="thumb-label">Add your screenshot</span>
      </div>
      <div class="portfolio-body">
        <div class="portfolio-tags">
          <span class="ptag">JavaScript</span>
          <span class="ptag">PHP</span>
        </div>
        <h3>Project Name Here</h3>
        <p>Short description of what this project does and the problem it solves.</p>
        <a href="#" class="portfolio-link">View Project →</a>
      </div>
    </div>
  </div>
  <div class="portfolio-grid">
    <div class="portfolio-card fade-in">
      <div class="portfolio-thumb portfolio-thumb-1">
        <span class="thumb-label">Add your screenshot</span>
      </div>
      <div class="portfolio-body">
        <div class="portfolio-tags">
          <span class="ptag">PHP</span>
          <span class="ptag">MySQL</span>
          <span class="ptag">Bootstrap</span>
        </div>
        <h3>Project Name Here</h3>
        <p>Short description of what this project does and the problem it solves.</p>
        <a href="#" class="portfolio-link">View Project →</a>
      </div>
    </div>
    <div class="portfolio-card fade-in" style="transition-delay:0.1s">
      <div class="portfolio-thumb portfolio-thumb-2">
        <span class="thumb-label">Add your screenshot</span>
      </div>
      <div class="portfolio-body">
        <div class="portfolio-tags">
          <span class="ptag">WordPress</span>
          <span class="ptag">CSS</span>
        </div>
        <h3>Project Name Here</h3>
        <p>Short description of what this project does and the problem it solves.</p>
        <a href="#" class="portfolio-link">View Project →</a>
      </div>
    </div>
    <div class="portfolio-card fade-in" style="transition-delay:0.2s">
      <div class="portfolio-thumb portfolio-thumb-3">
        <span class="thumb-label">Add your screenshot</span>
      </div>
      <div class="portfolio-body">
        <div class="portfolio-tags">
          <span class="ptag">JavaScript</span>
          <span class="ptag">PHP</span>
        </div>
        <h3>Project Name Here</h3>
        <p>Short description of what this project does and the problem it solves.</p>
        <a href="#" class="portfolio-link">View Project →</a>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="section-eyebrow">Get in touch</div>
  <h2 class="section-title">Have a project?<br>Let's talk!</h2>
  <div class="contact-grid">
    <div>
      <p style="color:var(--muted);line-height:1.8;">Whether you need a full website built from scratch, an existing one improved, or just want to explore what's possible — I'd love to hear from you.</p>
      <div class="contact-info-items">
        <div class="contact-row">
          <div class="contact-icon">✉</div>
          <a href="mailto:mariaalizalomugdang@gmail.com">mariaalizalomugdang@gmail.com</a>
        </div>
        <div class="contact-row">
          <div class="contact-icon">📞</div>
          <span>09365866398</span>
        </div>
        <div class="contact-row">
          <div class="contact-icon">📍</div>
          <span>Antique, Philippines</span>
        </div>
      </div>
    </div>
    <form class="contact-form" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Your full name" required />
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="emailaddress" placeholder="your@email.com" required />
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" placeholder="Tell me about your project..." required></textarea>
      </div>
      <button type="submit" name="sent" class="form-submit">Send Message</button>
    </form>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-name">MA. ALIZA S. LOMUGDANG</div>
  <div class="footer-socials">
    <a href="https://github.com/SynTech-Aliza" class="social-link" title="GitHub">gh</a>
    <a href="https://www.linkedin.com/in/ma-aliza-lomugdang-957988245/" class="social-link" title="LinkedIn">in</a>
  </div>
  <div class="footer-copy">Design & Developed by Syntech © 2026</div>
</footer>

<script>
  // Intersection observer for fade-in
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.1 });
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

  // Form submit
  function handleSubmit(e) {
    e.preventDefault();
    const btn = e.target.querySelector('.form-submit');
    btn.textContent = '✓ Message Sent!';
    btn.style.background = 'linear-gradient(135deg, #1a7a4a, #0f5a35)';
    btn.style.boxShadow = '0 0 24px rgba(30,200,100,0.35)';
    setTimeout(() => {
      btn.textContent = 'Send Message ✦';
      btn.style.background = '';
      btn.style.boxShadow = '';
      e.target.reset();
    }, 3000);
  }
</script>
</body>
</html>
