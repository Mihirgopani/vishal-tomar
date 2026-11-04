@extends('layouts.app')

@section('title', 'Privacy Policy & Data Ethics — The Chamber of V R Tomar')
@section('meta_description', 'Information on data privacy, DPDP Act 2023 compliance, and confidentiality standards maintained at The Chamber of V R Tomar, Ahmedabad.')

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-about">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative" style="max-width: 960px;">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <span class="curr">PRIVACY POLICY</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>CONFIDENTIALITY &amp; DATA ETHICS</span>
      </div>

      <h1 class="page-cinematic-title">
        PRIVACY POLICY &amp; <br>
        <span class="headline-gold">DATA HANDLING.</span>
      </h1>

      <p class="page-cinematic-desc">
        How personal information, case inquiries, and digital interactions are protected in accordance with professional legal conduct and the Digital Personal Data Protection Act, 2023.
      </p>

      <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
        <span class="badge-dot"></span>
        <span>STATUTORY ADVOCATE-CLIENT PRIVILEGE · DPDP ACT, 2023 COMPLIANCE</span>
      </div>
    </div>
  </section>

  <!-- PRIVACY CONTENT -->
  <section class="section" style="background-color: var(--color-bg-ivory); padding: 5rem 0 6rem;">
    <div class="container" style="max-width: 960px;">

      <!-- Executive Commitment Lead Box -->
      <div style="background: linear-gradient(135deg, #2D0F1A 0%, #1A0810 100%); border: 1px solid var(--color-gold-antique); border-radius: 4px; padding: 2.75rem 2.5rem; margin-bottom: 3.5rem; box-shadow: 0 20px 50px rgba(45, 15, 26, 0.25); position: relative; overflow: hidden;">
        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
          <div style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--color-gold-antique); display: flex; align-items: center; justify-content: center; color: var(--color-gold-antique); background: rgba(197, 161, 91, 0.1);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <div>
            <div style="font-size: 0.65rem; color: var(--color-gold-antique); letter-spacing: 0.22em; text-transform: uppercase; font-weight: 700;">CHAMBERS DATA PROTECTION COMMITMENT</div>
            <div style="font-family: var(--font-serif); font-size: 1.25rem; color: #FFFFFF; letter-spacing: 0.05em;">THE CHAMBER OF V R TOMAR</div>
          </div>
        </div>

        <p style="font-size: 1.05rem; line-height: 1.8; color: #E9DFD5; margin-bottom: 1rem; font-family: var(--font-serif); font-style: italic;">
          "At The Chamber of V R Tomar, discretion is not merely a statutory obligation under Section 126 of the Indian Evidence Act; it is the cornerstone of our professional practice."
        </p>

        <div style="border-top: 1px solid rgba(197, 161, 91, 0.3); padding-top: 1.25rem; font-size: 0.8rem; color: #D8C08A;">
          Chambers of Advocate Vishalkumar R Tomar · Motera, Ahmedabad, Gujarat
        </div>
      </div>

      <!-- Privacy Clauses -->
      <div style="display: flex; flex-direction: column; gap: 2rem;">

        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem;">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">01 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Information Collection &amp; Consultation Intake</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            When you submit a consultation request through this platform, we collect only necessary coordination data: your name/entity, email address, phone number, relevant practice area, and brief matter summary. This information is utilized exclusively by our registry to evaluate conflict clearance and facilitate consultation scheduling.
          </p>
        </article>

        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem;">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">02 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Non-Disclosure &amp; Third-Party Protection</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            We do not sell, rent, commercialize, or disclose client or inquirer details to any third-party advertisers or marketing organizations. Data is accessed solely by Advocate Vishalkumar R Tomar and authorized chambers staff under strict confidentiality covenants.
          </p>
        </article>

        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem;">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">03 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Digital Security &amp; Transmission Integrity</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            Our website implements transport layer security (SSL/HTTPS), input sanitization, CSRF tokens, and anti-spam protection to prevent interception and automated bot abuse. However, for sensitive evidentiary files, clients are advised to utilize encrypted chambers communication channels provided upon formal retainer.
          </p>
        </article>

        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem;">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">04 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Compliance with DPDP Act, 2023</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            Users retain the right to request deletion, correction, or review of personal contact records held in our intake database by transmitting a written request to <a href="mailto:info@thechamberofvrtomar.com" style="color: var(--color-burgundy-royal); font-weight: 600;">info@thechamberofvrtomar.com</a>.
          </p>
        </article>

      </div>

    </div>
  </section>

@endsection

