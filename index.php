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
<link rel="stylesheet" href="assets/style.css">
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
    <a href="storage/cv.pdf" class="nav-cta" download="Ma-Aliza-Lomugdang-CV.pdf">Download CV</a>
    <button class="nav-cta theme-toggle" id="themeToggle" type="button" aria-label="Switch to light mode" aria-pressed="false">
      <span class="theme-toggle-icon" aria-hidden="true">☀</span>
    </button>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="orb-container">
    <div class="hero-orb"></div>
    <img src="storage/myprofile.webp" alt="Profile Photo" class="profile-img">
  </div>
  <div class="hero-content">
    <div class="hero-badge"><div class="badge-dot"></div> Available for projects</div>
    <div class="hero-greeting">Hello! I'm Aliza!</div>
    <h1 class="hero-name">Full-stack Web &<br>Software Developer</h1>
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
  <div class="footer-socials">
    <a href="https://github.com/SynTech-Aliza" class="social-link" title="GitHub">gh</a>
    <a href="https://www.linkedin.com/in/ma-aliza-lomugdang-957988245/" class="social-link" title="LinkedIn">in</a>
  </div>
  <div class="footer-copy">Design & Developed by Syntech © 2026</div>
</footer>

<script src="assets/script.js"></script>
</body>
</html>
