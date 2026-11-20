<?php
require __DIR__ . "/app/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SynTech - MASL | Full-stack Web & Software Developer</title>
<meta name="description" content="Portfolio of Ma. Aliza Lomugdang, a full-stack web developer building responsive websites and web applications.">
<link rel="icon" type="image/png" sizes="512x512" href="storage/syntech-favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css?v=<?= filemtime(__DIR__ . '/assets/style.css') ?>">
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo"><img src="storage/syntech-logo.webp" alt="SynTech logo" class="Logo"> SYNTECH</div>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <div class="nav-actions">
    <div class="nav-socials" aria-label="Social media">
      <a href="https://github.com/SynTech-Aliza" class="nav-social-link" aria-label="GitHub" title="GitHub" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .9a11.1 11.1 0 0 0-3.51 21.63c.56.1.76-.24.76-.54v-2.1c-3.1.67-3.76-1.32-3.76-1.32-.5-1.28-1.23-1.62-1.23-1.62-1.01-.69.08-.68.08-.68 1.12.08 1.71 1.15 1.71 1.15 1 .1.76 2.19 3.14 1.56.1-.72.39-1.2.7-1.48-2.47-.28-5.06-1.24-5.06-5.51 0-1.22.44-2.22 1.15-3-.12-.28-.5-1.43.11-2.97 0 0 .94-.3 3.05 1.15a10.6 10.6 0 0 1 5.55 0c2.11-1.45 3.05-1.15 3.05-1.15.61 1.54.23 2.69.11 2.97.72.78 1.15 1.78 1.15 3 0 4.28-2.6 5.22-5.08 5.5.4.35.75 1.02.75 2.06v3.05c0 .3.2.65.77.54A11.1 11.1 0 0 0 12 .9Z"/></svg>
      </a>
      <a href="https://www.linkedin.com/in/ma-aliza-lomugdang-957988245/" class="nav-social-link" aria-label="LinkedIn" title="LinkedIn" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.45 2H3.55C2.69 2 2 2.68 2 3.52v16.96c0 .84.69 1.52 1.55 1.52h16.9c.86 0 1.55-.68 1.55-1.52V3.52c0-.84-.69-1.52-1.55-1.52ZM7.93 18.74H4.96V9.18h2.97v9.56ZM6.45 7.87a1.72 1.72 0 1 1 0-3.44 1.72 1.72 0 0 1 0 3.44Zm12.3 10.87h-2.96v-4.65c0-1.11-.02-2.53-1.54-2.53-1.55 0-1.79 1.2-1.79 2.45v4.73H9.5V9.18h2.84v1.31h.04c.4-.75 1.36-1.54 2.8-1.54 3 0 3.57 1.98 3.57 4.56v5.23Z"/></svg>
      </a>
      <a href="https://web.facebook.com/mariaaliza.lomugdang" class="nav-social-link" aria-label="Facebook" title="Facebook" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 21v-8.2h2.76l.41-3.2H13.5V7.56c0-.93.26-1.56 1.59-1.56h1.7V3.14c-.3-.04-1.32-.14-2.51-.14-2.49 0-4.2 1.52-4.2 4.31V9.6H7.25v3.2h2.83V21h3.42Z"/></svg>
      </a>
      <a href="https://www.instagram.com/_aliiiyza" class="nav-social-link" aria-label="Instagram" title="Instagram" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9a3.5 3.5 0 0 0 3.5-3.5v-9A3.5 3.5 0 0 0 16.5 4h-9ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm5.25-3.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5Z"/></svg>
      </a>
    </div>
    <button class="nav-cta theme-toggle" id="themeToggle" type="button" aria-label="Switch to light mode" aria-pressed="false">
      <span class="theme-toggle-icon" aria-hidden="true">☀</span>
    </button>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <img src="storage/whole-profile(1).png" alt="Aliza" class="hero-profile">
  <div class="hero-content">
    <p class="hero-role"><span>Full-stack <br/>Software Developer</span></p>
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
  <span class="skills-strip-label">Skills</span>
  <span class="skill-tag">HTML</span>
  <span class="skill-tag">CSS</span>
  <span class="skill-tag">JavaScript</span>
  <span class="skill-tag">C#</span>
  <span class="skill-tag">C++</span>
  <span class="skill-tag">Java</span>
  <span class="skill-tag">PHP</span>
  <span class="skill-tag">Python</span>
  <span class="skill-tag">MySQL</span>
  <span class="skill-tag">WordPress</span>
  <span class="skill-tag">Domain & DNS</span>
  <span class="skill-tag">Troubleshooting</span>
  <span class="skill-tag">Figma</span>
  <span class="skill-tag">Networking</span>
  <span class="skill-tag">Computer Repair</span>
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
        <div class="stat-num">20+</div>
        <div class="stat-info">
          <div class="stat-name">Completed Projects</div>
          <div class="stat-desc">Websites and web apps delivered</div>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-num">24/7</div>
        <div class="stat-info">
          <div class="stat-name">Client Support</div>
          <div class="stat-desc">Response/Communication</div>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-num">5+</div>
        <div class="stat-info">
          <div class="stat-name">Years of Experience</div>
          <div class="stat-desc">In software development</div>
        </div>
      </div>
    </div>
  </div>

  <div class="certifications">
    <div class="section-eyebrow">Professional certificates</div>
    <h3 class="certifications-title">Professional Certifications & Diplomas</h3>
    <div class="certifications-grid">
      <article class="certificate-card">
        <img src="storage/cisco.svg" alt="Cisco" class="certificate-logo">
        <div>
          <h4>HTML Essentials</h4>
          <p>Cisco <span>Issued Sep 2026</span></p>
        </div>
      </article>
      <article class="certificate-card">
        <img src="storage/cisco.svg" alt="Cisco" class="certificate-logo">
        <div>
          <h4>JavaScript Essentials 2</h4>
          <p>Cisco <span>Issued Sep 2026</span></p>
        </div>
      </article>
      <article class="certificate-card">
        <img src="storage/cisco.svg" alt="Cisco" class="certificate-logo">
        <div>
          <h4>JavaScript Essentials 1</h4>
          <p>Cisco <span>Issued Sep 2026</span></p>
        </div>
      </article>
      <article class="certificate-card">
        <img src="storage/cisco.svg" alt="Cisco" class="certificate-logo">
        <div>
          <h4>CSS Essentials</h4>
          <p>Cisco <span>Issued Sep 2026</span></p>
        </div>
      </article>
      <article class="certificate-card">
        <img src="storage/uipath.svg" alt="UiPath" class="certificate-logo">
        <div>
          <h4>Diploma of Completion: Level 1 - Foundation Training 2018.3</h4>
          <p>UiPath <span>Issued May 2019</span></p>
        </div>
      </article>
      <article class="certificate-card">
        <img src="storage/uipath.svg" alt="UiPath" class="certificate-logo">
        <div>
          <h4>Diploma of Completion: Level 2 - Orchestrator 2018.3 Training</h4>
          <p>UiPath <span>Issued May 2019</span></p>
        </div>
      </article>
      <article class="certificate-card">
        <img src="storage/alison.svg" alt="Alison" class="certificate-logo">
        <div>
          <h4>Diploma in HTML5, CSS3 and JavaScript</h4>
          <p>Alison <span>Issued Jul 2024</span></p>
        </div>
      </article>
      <article class="certificate-card">
        <img src="storage/alison.svg" alt="Alison" class="certificate-logo">
        <div>
          <h4>Diploma in HTML5 and CSS3 Fundamentals</h4>
          <p>Alison <span>Issued Jul 2024</span></p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section class="portfolio" id="portfolio">
  <div class="portfolio-header">
    <div>
      <div class="section-eyebrow">My Work</div>
      <h2 class="section-title">Featured Projects</h2>
    </div>
  </div>

  <div class="carousel-container" id="carouselContainer" role="region" aria-label="Featured projects carousel">
    <div class="carousel-track" id="carouselTrack">

      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-1"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Website</span><span class="ptag">WordPress</span></div>
          <h3>Northwestern Visayan College</h3>
          <p>An institutional website built on WordPress to present organizational information, updates, and online resources for visitors and stakeholders.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-2"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Website</span><span class="ptag">WordPress</span></div>
          <h3>Saint Gabriel College</h3>
          <p>A responsive WordPress website designed to showcase services, announcements, and essential organizational details.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-3"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Website</span><span class="ptag">WordPress</span></div>
          <h3>New Washington</h3>
          <p>A municipal information portal built with WordPress to provide public updates, local services, and community resources.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-1"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Website</span><span class="ptag">HTML</span><span class="ptag">CSS</span><span class="ptag">JavaScript</span></div>
          <h3>Trikee Solutions</h3>
          <p>A custom-coded company website built from scratch showcasing software development services, solutions, and client inquiries.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/rbc.webp" alt="RBC I.T Services Website"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Website</span><span class="ptag">WordPress</span></div>
          <h3>RBC I.T Services</h3>
          <p>A responsive WordPress site showcasing RBC’s IT services, featuring appointment booking and clear contact options for business clients.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/craftsbym's.webp" alt="Crafts by M's Website"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Website</span><span class="ptag">HTML</span><span class="ptag">CSS</span><span class="ptag">JavaScript</span></div>
          <h3>Crafts by M's</h3>
          <p>A custom-coded product showcase website highlighting handmade fuzzy wire floral arrangements, keychains, and event souvenirs with inquiry options.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-1"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span></div>
          <h3>Technical Support (TSTech)</h3>
          <p>A technical support and ticketing web application designed to log, track, and resolve client and system support requests.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-2"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span></div>
          <h3>Tricycle Franchising Management System (eTFMS)</h3>
          <p>A municipal licensing system that streamlines tricycle franchise applications, operator records, renewals, and compliance tracking.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-3"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span></div>
          <h3>Civil Registry Management Information System (eCRMIS)</h3>
          <p>A civil registry platform for digitizing, searching, managing, and generating official birth, marriage, and death certificates.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-1"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span></div>
          <h3>Library Management System</h3>
          <p>A library tool for cataloging books, tracking loans, and calculating overdue fees.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-2"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span></div>
          <h3>Student Information Management System</h3>
          <p>A student portal for managing enrollment, grades, and academic records.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/eflms.webp" alt="DENR Forestry Licensing Management System (eFLMS)"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span></div>
          <h3>DENR Forestry Licensing Management System (eFLMS)</h3>
          <p>A system that manages forestry permit applications, reviews, and license tracking.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/efpmis.webp" alt="Family Planning Management Information System (eFPMIS)"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span></div>
          <h3>Family Planning Management Information System (eFPMIS)</h3>
          <p>A healthcare system for tracking family planning consultations, methods, and medical supplies.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/erpmis.webp" alt="Resident and Profiling Management Information System (eRPMIS)"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span></div>
          <h3>Resident and Profiling Management Information System (eRPMIS)</h3>
          <p>A community portal for managing resident profiles, demographics, and certificate requests.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/erebooking.webp" alt="Room and Equipment Booking Management System (eREBooking)"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span></div>
          <h3>Room and Equipment Booking Management System (eREBooking)</h3>
          <p>A booking system for reserving rooms and equipment, with automated scheduling to prevent conflicts.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/erfms.webp" alt="Rose Furniture Management System (eRFMS)"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">Bootstrap</span></div>
          <h3>Rose Furniture Management System (eRFMS)</h3>
          <p>A furniture store system for managing product inventory, customer orders, and sales.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-2"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Web App</span><span class="ptag">PHP</span><span class="ptag">MySQL</span><span class="ptag">HTML</span><span class="ptag">CSS</span><span class="ptag">JavaScript</span></div>
          <h3>Student Faculty Evaluation System</h3>
          <p>A local evaluation system for anonymous student feedback, faculty insights, and administrative reporting.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/flamesmatchmaker.webp" alt="FLAMES Matchmaker"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Mobile App</span><span class="ptag">Flutter</span></div>
          <h3>FLAMES Matchmaker</h3>
          <p>A mobile app that gives the classic FLAMES game a modern look with quick, interactive name matching.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-1"><span class="thumb-label">Add your screenshot</span></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Mobile App</span><span class="ptag">Flutter</span></div>
          <h3>Bible Verse</h3>
          <p>A mobile devotional app that delivers daily scripture verses and inspirational readings in a clean interface.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/geoclock.webp" alt="GeoClock"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Mobile App</span><span class="ptag">Flutter</span><span class="ptag">PHP</span></div>
          <h3>GeoClock</h3>
          <p>A location-aware timekeeping mobile app that verifies GPS coordinates and logs clock-in and attendance records to a PHP backend.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb"><img src="storage/akeangoalert.webp" alt="Akean Go-Alert"></div>
        <div class="portfolio-body">
          <div class="portfolio-tags"><span class="ptag">Mobile App</span><span class="ptag">Flutter</span><span class="ptag">PHP</span></div>
          <h3>Akean Go-Alert</h3>
          <p>An emergency response mobile application that lets users trigger instant distress alerts and transmit live GPS location data to a PHP dispatch backend.</p>
        </div>
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
      <?php if ($contactStatus !== ''): ?>
        <p class="form-status is-<?= htmlspecialchars($contactStatusType, ENT_QUOTES, 'UTF-8') ?>" role="<?= $contactStatusType === 'success' ? 'status' : 'alert' ?>" aria-live="polite">
          <?= htmlspecialchars($contactStatus, ENT_QUOTES, 'UTF-8') ?>
        </p>
      <?php endif; ?>
    </form>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-name">MA. ALIZA S. LOMUGDANG</div>
  <div class="footer-copy">Design & Developed by Syntech © 2026</div>
</footer>

<script src="assets/script.js"></script>
</body>
</html>
