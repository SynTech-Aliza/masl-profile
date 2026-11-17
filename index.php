<?php
require __DIR__ . "/app/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SynTech - MASL | Web Developer</title>
<meta name="description" content="Portfolio of Ma. Aliza Lomugdang, a full-stack web developer building responsive websites and web applications.">
<link rel="icon" type="image/png" href="storage/syntech-logo.webp">
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
    top: 50%;
    right: 3%;
    width: min(42vw, 520px);
    aspect-ratio: 1;
    transform: translateY(-50%);
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
    width: 78%;
    height: 78%;
    object-fit: cover;
    border-radius: 50%;
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.55; }
    50% { transform: scale(1.06); opacity: 0.7; }
  }

  .hero-content { position: relative; z-index: 2; max-width: min(58%, 800px); }

  .hero-greeting {
    font-size: 20px;
    color: var(--muted);
    margin-bottom: 12px;
    letter-spacing: 0.02em;
  }
  .hero-name {
    font-family: var(--font-display);
    font-size: clamp(40px, 8vw, 60px);
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
  section { padding: clamp(56px, 8vw, 96px) clamp(20px, 5vw, 48px); }
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

  .portfolio-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
  }

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

  @media (max-width: 992px) {
    .orb-container { width: 38vw; right: 2%; }
    .hero-content { max-width: 55%; }
    .services-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .about-grid, .contact-grid { gap: 32px; }
  }

  @media (max-width: 768px) {
    nav { padding: 12px 20px; flex-wrap: wrap; }
    .nav-links {
      display: flex;
      order: 3;
      width: 100%;
      justify-content: center;
      gap: clamp(16px, 6vw, 32px);
      padding-top: 10px;
    }
    .nav-cta { padding: 7px 14px; }
    section { padding: 64px 20px; }
    .hero {
      min-height: auto;
      flex-direction: column;
      align-items: stretch;
      padding: 136px 20px 72px;
    }
    .orb-container {
      position: relative;
      top: auto;
      right: auto;
      transform: none;
      align-self: center;
      width: min(72vw, 320px);
      margin-bottom: 28px;
    }
    .hero-content { max-width: 100%; }
    .skills-strip { padding: 16px 20px; }
    .about-grid, .contact-grid { grid-template-columns: 1fr; gap: 40px; }
    .portfolio-grid, .services-grid { grid-template-columns: 1fr; }
    footer { padding: 20px; flex-direction: column; gap: 12px; text-align: center; }
  }

  .portfolio-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 32px;
  }

  .carousel-nav {
    display: flex;
    gap: 12px;
  }

  .carousel-container {
    overflow: hidden;
    width: 100%;
    position: relative;
    cursor: grab;
  }

  .carousel-container:active {
    cursor: grabbing;
  }

  .carousel-track {
    display: flex;
    gap: 20px;
    transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1);
    will-change: transform;
  }

  .carousel-track .portfolio-card {
    flex: 0 0 calc(33.333% - 14px);
    min-width: 280px;
  }

  @media (max-width: 992px) {
    .carousel-track .portfolio-card {
      flex: 0 0 calc(50% - 10px);
    }
  }

  @media (max-width: 600px) {
    .carousel-track .portfolio-card {
      flex: 0 0 100%;
      min-width: 0;
    }
    .portfolio-header {
      flex-direction: column;
      align-items: flex-start;
      gap: 16px;
    }
  }

  @media (max-width: 400px) {
    nav { padding-right: 16px; padding-left: 16px; }
    section { padding-right: 16px; padding-left: 16px; }
    .hero { padding: 132px 16px 56px; }
    .nav-links { gap: 14px; }
    .hero-name { font-size: clamp(36px, 11vw, 44px); }
    .hero-btns > * { flex: 1 1 auto; }
    .stat-item { padding: 16px; gap: 14px; }
    .stat-num { min-width: 56px; font-size: 28px; }
    .contact-row { align-items: flex-start; }
    .contact-row a { min-width: 0; overflow-wrap: anywhere; }
  }

  /* Developer portfolio visual system */
  :root {
    --bg: #07070f;
    --bg2: #0d0d1a;
    --bg3: #111125;
    --border: rgba(255, 255, 255, 0.07);
    --border-hover: rgba(255, 255, 255, 0.15);
    --text: #e8e8f0;
    --muted: #8888ad;
    --accent: #d4a853;
    --accent2: #a87fd4;
    --glow: rgba(140, 80, 220, 0.35);
    --glow2: rgba(212, 168, 83, 0.2);
  }

  body {
    background:
      radial-gradient(ellipse at 75% 12%, rgba(124, 58, 237, 0.14), transparent 34rem),
      var(--bg);
    color: var(--text);
  }

  nav {
    padding: 14px clamp(20px, 5vw, 72px);
    background: rgba(7, 7, 15, 0.88);
    border-bottom-color: var(--border);
  }

  .nav-logo {
    font-size: 15px;
    letter-spacing: 0.12em;
  }

  .nav-logo img {
    width: 34px;
    height: 34px;
    border-radius: 9px;
    object-fit: cover;
  }

  .nav-links { gap: clamp(18px, 3vw, 36px); }
  .nav-links a { color: #a5a5bf; }
  .nav-links a:hover { color: var(--accent); }

  .nav-cta {
    border-color: rgba(212, 168, 83, 0.4);
    border-radius: 8px;
    color: var(--accent);
    background: rgba(212, 168, 83, 0.06);
  }
  .nav-cta:hover { background: rgba(212, 168, 83, 0.14); }

  .hero {
    min-height: min(900px, 100vh);
    padding: 132px clamp(20px, 8vw, 120px) 96px;
    background-image:
      linear-gradient(rgba(168, 127, 212, 0.035) 1px, transparent 1px),
      linear-gradient(90deg, rgba(168, 127, 212, 0.035) 1px, transparent 1px);
    background-size: 48px 48px;
    background-position: center center;
  }

  .hero-content { max-width: min(58%, 700px); }

  .hero-greeting {
    color: var(--accent);
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }

  .hero-name {
    font-size: clamp(48px, 7vw, 82px);
    line-height: 1;
    letter-spacing: -0.055em;
    background: linear-gradient(120deg, #ffffff 20%, #c4a0f0 72%, #a078e0 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .hero-title {
    color: #d1c5df;
    font-family: var(--font-body);
    font-size: clamp(17px, 2vw, 21px);
    line-height: 1.5;
  }

  .hero-desc {
    color: var(--muted);
    max-width: 500px;
    font-size: 16px;
  }

  .hero-badge {
    border-color: rgba(168, 127, 212, 0.28);
    border-radius: 7px;
    background: rgba(168, 127, 212, 0.08);
    color: #d2b9ee;
  }

  .orb-container {
    right: clamp(28px, 8vw, 120px);
    width: min(38vw, 460px);
    filter: drop-shadow(0 28px 70px rgba(0, 0, 0, 0.45));
  }

  .hero-orb {
    background: radial-gradient(circle at 45% 45%, rgba(168, 127, 212, 0.42), rgba(76, 29, 149, 0.24) 48%, transparent 75%);
    filter: blur(40px);
  }

  .profile-img {
    width: 76%;
    height: auto;
    aspect-ratio: 1;
    object-fit: contain;
    object-position: center top;
    border: 1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 0 0 12px rgba(168, 127, 212, 0.035), 0 22px 65px rgba(0, 0, 0, 0.4);
  }

  .btn-primary, .form-submit {
    background: linear-gradient(135deg, #7c3aed, #5b21b6);
    color: #fff;
    border-radius: 8px;
    box-shadow: 0 8px 26px rgba(124, 58, 237, 0.24);
    font-weight: 600;
  }
  .btn-primary:hover, .form-submit:hover {
    background: linear-gradient(135deg, #8b4cf0, #6b2fc5);
    box-shadow: 0 12px 32px rgba(124, 58, 237, 0.34);
  }

  .btn-ghost {
    border-radius: 8px;
    border-color: var(--border-hover);
  }

  .skills-strip {
    justify-content: center;
    padding: 20px clamp(20px, 5vw, 72px);
    background: rgba(13, 13, 26, 0.84);
  }

  .skills-strip-label {
    color: var(--accent);
    font-weight: 600;
  }

  .skill-tag {
    padding: 6px 14px;
    border-radius: 7px;
    color: #b8b8ce;
    background: rgba(255, 255, 255, 0.025);
  }

  section { padding: clamp(72px, 9vw, 112px) clamp(20px, 8vw, 120px); }

  .section-eyebrow {
    color: var(--accent);
    font-weight: 600;
  }
  .section-eyebrow::after { background: var(--accent); }

  .section-title {
    font-size: clamp(32px, 4.5vw, 50px);
    letter-spacing: -0.04em;
  }

  .about, .contact {
    background: linear-gradient(180deg, rgba(13, 13, 26, 0.96), rgba(10, 10, 20, 0.96));
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
  }

  .about-grid, .contact-grid {
    max-width: 1200px;
    margin-right: auto;
    margin-left: auto;
  }

  .about-text { color: #a5a5bf; }
  .about-text strong { color: var(--text); }

  .stat-item, .service-card, .portfolio-card {
    background: linear-gradient(145deg, rgba(17, 17, 37, 0.96), rgba(13, 13, 26, 0.96));
    border-color: var(--border);
    border-radius: 12px;
  }

  .stat-item { padding: 22px 24px; }
  .stat-num { color: var(--accent); }
  .stat-info .stat-desc { color: var(--muted); }

  .service-card {
    padding: 24px;
    cursor: default;
  }
  .service-card:hover {
    border-color: rgba(168, 127, 212, 0.35);
    background: rgba(168, 127, 212, 0.06);
  }
  .service-icon { color: var(--accent); }
  .service-card h3 { color: var(--text); font-weight: 600; }
  .service-card p, .portfolio-body p { color: #a5a5bf; }

  .portfolio { background: transparent; }
  .portfolio-header { max-width: 1200px; margin-right: auto; margin-left: auto; }
  .carousel-container { max-width: 1200px; margin: 0 auto; }
  .carousel-track .portfolio-card {
    min-width: 0;
    flex-basis: calc((100% - 40px) / 3);
    overflow: hidden;
  }
  .portfolio-card:hover {
    border-color: rgba(212, 168, 83, 0.3);
    box-shadow: 0 22px 48px rgba(0, 0, 0, 0.28);
  }
  .portfolio-thumb { background-color: #111125; }
  .portfolio-thumb img { transition: transform 0.5s ease; }
  .portfolio-card:hover .portfolio-thumb img { transform: scale(1.035); }
  .portfolio-body { padding: 22px; }
  .portfolio-body h3 { color: var(--text); font-weight: 600; }
  .ptag { color: #b8b8ce; border-radius: 5px; }
  .portfolio-link { color: var(--accent2); }
  .portfolio-cta { border-color: rgba(212, 168, 83, 0.24); }
  .portfolio-cta strong { color: var(--accent); }

  .contact-info-items { gap: 18px; }
  .contact-icon {
    border-color: var(--border);
    border-radius: 10px;
    color: var(--accent);
  }
  .contact-row, .contact-row a { color: #a5a5bf; }
  .contact-row a:hover { color: var(--accent); }
  .form-group label { color: #b8b8ce; }
  .form-group input, .form-group textarea {
    background: rgba(7, 7, 15, 0.72);
    border-color: var(--border);
    border-radius: 8px;
  }
  .form-group input:focus, .form-group textarea:focus { border-color: rgba(168, 127, 212, 0.55); }

  .form-status {
    margin-top: 2px;
    padding: 12px 14px;
    border: 1px solid;
    border-radius: 8px;
    font-size: 13px;
    text-align: center;
  }
  .form-status.is-success {
    color: #d2b9ee;
    border-color: rgba(168, 127, 212, 0.35);
    background: rgba(168, 127, 212, 0.08);
  }
  .form-status.is-error {
    color: #f0b5b5;
    border-color: rgba(220, 100, 100, 0.35);
    background: rgba(220, 100, 100, 0.08);
  }

  footer {
    padding: 28px clamp(20px, 5vw, 72px);
    background: #07070f;
  }
  .social-link { border-radius: 9px; }
  .social-link:hover {
    border-color: var(--accent);
    color: var(--accent);
    background: rgba(168, 127, 212, 0.08);
  }

  .carousel-track {
    width: max-content;
    gap: 0;
    transition: none;
    transition: none;
  }
  .carousel-group {
    display: flex;
    flex: 0 0 auto;
    gap: 20px;
    padding-right: 20px;
  }
  .carousel-track .portfolio-card {
    flex: 0 0 clamp(260px, 31vw, 360px);
    min-width: 0;
  }
  .carousel-container {
    cursor: grab;
    touch-action: pan-y;
  }
  .carousel-container.is-dragging {
    cursor: grabbing;
    user-select: none;
  }
  .carousel-container.is-dragging img { pointer-events: none; }

  @media (max-width: 992px) {
    .carousel-track .portfolio-card { flex-basis: calc((100% - 20px) / 2); }
    .hero { padding-right: 7vw; padding-left: 7vw; }
  }

  @media (max-width: 768px) {
    nav { padding: 12px 20px; }
    .nav-links { padding-top: 8px; }
    .hero {
      padding: 132px 24px 72px;
      background-size: 36px 36px;
    }
    .hero-content { max-width: 100%; }
    .orb-container { width: min(70vw, 300px); right: auto; }
    .hero-name { font-size: clamp(44px, 11vw, 68px); }
    .skills-strip { justify-content: flex-start; }
    .carousel-track .portfolio-card { flex-basis: min(78vw, 340px); }
    .portfolio-header { margin-bottom: 24px; }
  }

  @media (max-width: 600px) {
    .carousel-track .portfolio-card { flex-basis: min(78vw, 340px); }
  }

  @media (max-width: 400px) {
    .hero { padding: 126px 18px 56px; }
    section { padding-right: 18px; padding-left: 18px; }
    .nav-logo { font-size: 13px; }
    .nav-cta { font-size: 12px; }
    .hero-btns > * { flex: 1 1 100%; }
  }

  @media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
      scroll-behavior: auto !important;
      animation-duration: 0.01ms !important;
      animation-iteration-count: 1 !important;
      transition-duration: 0.01ms !important;
    }
  }
</style>
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
  <a href="storage/cv.pdf" class="nav-cta" download="Ma-Aliza-Lomugdang-CV.pdf">Download CV</a>
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
  <span class="skill-tag">Flutter</span>
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
  <div class="portfolio-header">
    <div>
      <div class="section-eyebrow">My Work</div>
      <h2 class="section-title">Featured Projects</h2>
    </div>
  </div>

  <div class="carousel-container" id="carouselContainer" role="region" aria-label="Featured projects carousel">
    <div class="carousel-track" id="carouselTrack">

      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/flamesmatchmaker.webp" alt="FLAMES Matchmaker App">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">Dart</span>
            <span class="ptag">Swift</span>
            <span class="ptag">Kotlin</span>
            <span class="ptag">YAML</span>
            <span class="ptag">XML</span>
          </div>
          <h3>FLAMES Matchmaker</h3>
          <p>A Flutter app that gives the classic FLAMES game a modern look with quick, interactive name matching.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/rbc-website.webp" alt="RBC IT Services Website">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">Wordpress</span>
          </div>
          <h3>RBC I.T Services Website</h3>
          <p>A responsive WordPress site showcasing RBC’s IT services, with appointment booking and clear contact options for business clients.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/eflms.webp" alt="DENR Forestry Licensing Management System (eFLMS)">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">Bootstrap</span>
          </div>
          <h3>DENR Forestry Licensing Management System (eFLMS)</h3>
          <p>A PHP and MySQL system that manages forestry permit applications, reviews, and license tracking.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/efpmis.webp" alt="Family Planning Management Information System (eFPMIS)">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">Bootstrap</span>
          </div>
          <h3>Family Planning Management Information System (eFPMIS)</h3>
          <p>A healthcare system for tracking family planning consultations, methods, and medical supplies.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/erpmis.webp" alt="Resident and Profiling Management Information System (eRPMIS)">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">Bootstrap</span>
          </div>
          <h3>Resident and Profiling Management Information System (eRPMIS)</h3>
          <p>A community portal for managing resident profiles, demographics, and certificate requests.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/erfms.webp" alt="Rose Furniture Management System (eRFMS)">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">Bootstrap</span>
          </div>
          <h3>Rose Furniture Management System (eRFMS)</h3>
          <p>A furniture store system for managing product inventory, customer orders, and sales.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/erebooking.webp" alt="Room and Equipment Booking Management System (eREBooking)">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">Bootstrap</span>
          </div>
          <h3>Room and Equipment Booking Management System (eREBooking)</h3>
          <p>A booking system for reserving rooms and equipment, with scheduling to prevent conflicts.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb">
          <img src="storage/sfes.webp" alt="Student Faculty Evaluation System">
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">HTML</span>
            <span class="ptag">CSS</span>
            <span class="ptag">JavaScript</span>
          </div>
          <h3>Student Faculty Evaluation System</h3>
          <p>A local evaluation system for anonymous student feedback, faculty insights, and administrative reporting.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-3">
          <span class="thumb-label">Add your screenshot</span>
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">Bootstrap</span>
          </div>
          <h3>Library Management System</h3>
          <p>A library tool for cataloging books, tracking loans, and calculating overdue fees.</p>
        </div>
      </div>
      <div class="portfolio-card">
        <div class="portfolio-thumb portfolio-thumb-2">
          <span class="thumb-label">Add your screenshot</span>
        </div>
        <div class="portfolio-body">
          <div class="portfolio-tags">
            <span class="ptag">PHP</span>
            <span class="ptag">MySQL</span>
            <span class="ptag">Bootstrap</span>
          </div>
          <h3>Student Information Management System</h3>
          <p>A student portal for enrollment, grades, and academic records, powered by PHP and MySQL.</p>
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

<script>
  const track = document.getElementById('carouselTrack');
  const container = document.getElementById('carouselContainer');
  const originalCards = Array.from(track.children);
  const group = document.createElement('div');
  group.className = 'carousel-group';
  group.setAttribute('role', 'list');
  originalCards.forEach(card => {
    card.setAttribute('role', 'listitem');
    group.appendChild(card);
  });

  const cloneGroup = group.cloneNode(true);
  cloneGroup.setAttribute('aria-hidden', 'true');
  cloneGroup.removeAttribute('role');
  track.replaceChildren(group, cloneGroup);

  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const speed = 36;
  let groupWidth = 0;
  let offset = 0;
  let lastFrameTime = 0;
  let isHovered = false;
  let isFocused = false;
  let isDragging = false;
  let dragStartX = 0;
  let dragStartOffset = 0;

  function applyOffset() {
    track.style.transform = `translate3d(${-offset}px, 0, 0)`;
  }

  function measureGroup() {
    groupWidth = group.getBoundingClientRect().width;
    if (groupWidth > 0) {
      offset %= groupWidth;
      applyOffset();
    }
  }

  function animate(time) {
    if (lastFrameTime && !reducedMotion && !isHovered && !isFocused && !isDragging && groupWidth > 0) {
      const elapsed = Math.min(time - lastFrameTime, 50);
      offset = (offset + elapsed * speed / 1000) % groupWidth;
      applyOffset();
    }
    lastFrameTime = time;
    requestAnimationFrame(animate);
  }

  container.addEventListener('pointerenter', () => { isHovered = true; });
  container.addEventListener('pointerleave', () => { isHovered = false; });
  container.addEventListener('focusin', () => { isFocused = true; });
  container.addEventListener('focusout', event => {
    if (!container.contains(event.relatedTarget)) isFocused = false;
  });

  container.addEventListener('pointerdown', event => {
    if (event.button !== 0) return;
    isDragging = true;
    dragStartX = event.clientX;
    dragStartOffset = offset;
    container.classList.add('is-dragging');
    container.setPointerCapture(event.pointerId);
  });

  container.addEventListener('pointermove', event => {
    if (!isDragging || groupWidth === 0) return;
    offset = ((dragStartOffset - (event.clientX - dragStartX)) % groupWidth + groupWidth) % groupWidth;
    applyOffset();
  });

  function stopDragging(event) {
    if (!isDragging) return;
    isDragging = false;
    container.classList.remove('is-dragging');
    if (container.hasPointerCapture(event.pointerId)) {
      container.releasePointerCapture(event.pointerId);
    }
  }

  container.addEventListener('pointerup', stopDragging);
  container.addEventListener('pointercancel', stopDragging);
  window.addEventListener('resize', measureGroup);

  measureGroup();
  requestAnimationFrame(animate);
</script>

<script>
  // Intersection observer for fade-in
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.1 });
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

  const contactForm = document.querySelector('.contact-form');
  contactForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const submitButton = contactForm.querySelector('.form-submit');
    const originalButtonText = submitButton.textContent;
    const formData = new FormData(contactForm);
    formData.append('sent', '1');

    submitButton.disabled = true;
    submitButton.textContent = 'Sending...';
    submitButton.setAttribute('aria-busy', 'true');

    try {
      const response = await fetch(contactForm.action || window.location.href, {
        method: 'POST',
        body: formData
      });

      if (!response.ok) {
        throw new Error(`Contact form request failed with status ${response.status}.`);
      }

      const responseDocument = new DOMParser().parseFromString(await response.text(), 'text/html');
      const newStatus = responseDocument.querySelector('.form-status');

      if (!newStatus) {
        throw new Error('The contact form response did not include a status message.');
      }

      const currentStatus = contactForm.querySelector('.form-status');
      if (currentStatus) {
        currentStatus.replaceWith(newStatus);
      } else {
        submitButton.insertAdjacentElement('afterend', newStatus);
      }

      if (newStatus.classList.contains('is-success')) {
        contactForm.reset();
      }
    } catch (error) {
      console.error('Contact form submission failed:', error);
      let status = contactForm.querySelector('.form-status');
      if (!status) {
        status = document.createElement('p');
        submitButton.insertAdjacentElement('afterend', status);
      }
      status.className = 'form-status is-error';
      status.setAttribute('role', 'alert');
      status.setAttribute('aria-live', 'polite');
      status.textContent = 'Your message could not be sent. Please check your connection and try again.';
    } finally {
      submitButton.disabled = false;
      submitButton.textContent = originalButtonText;
      submitButton.removeAttribute('aria-busy');
    }
  });
</script>
</body>
</html>
