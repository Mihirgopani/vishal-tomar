@extends('layouts.app')

@section('title', 'About Advocate Vishalkumar R Tomar — The Chamber of V R Tomar | High Court of Gujarat')
@section('meta_description', 'Biography, core philosophy, courtroom admissions, and chambers ethos of Advocate Vishalkumar R Tomar, practicing before the High Court of Gujarat, Sessions Courts, and Commercial Tribunals in Ahmedabad.')

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-about">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <span class="curr">ABOUT ADVOCATE</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>ADVOCATE PROFILE &amp; CHAMBERS ETHOS</span>
      </div>

      <h1 class="page-cinematic-title">
        INTELLECTUAL RIGOR. <br>
        <span class="headline-gold">STRATEGIC PERSPECTIVE.</span>
      </h1>

      <p class="page-cinematic-desc">
        Representing a new generation of high-caliber legal advocacy at the High Court of Gujarat, combining deep statutory scholarship with decisive courtroom execution.
      </p>

      <div class="hero-cta-group" style="opacity: 1; transform: none; margin-bottom: 2rem;">
        <a href="{{ route('contact') }}" class="btn-gold-solid">
          <span>SCHEDULE CONSULTATION</span>
          <svg viewBox="0 0 16 16" fill="currentColor" class="cta-arrow-icon">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h11.793l-3.147-3.146a.5.5 0 01.708-.708l4 4a.5.5 0 010 .708l-4 4a.5.5 0 01-.708-.708L13.293 8.5H1.5A.5.5 0 011 8z"/>
          </svg>
        </a>
        <a href="{{ route('services') }}" class="btn-gold-ghost">OUR 8 WORKING AREAS</a>
      </div>

      <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 0;">
        <span class="badge-dot"></span>
        <span>THE CHAMBER OF V R TOMAR · MOTERA, AHMEDABAD</span>
      </div>
    </div>
  </section>

  <!-- BIOGRAPHY SPLIT SECTION -->
  <section class="section bg-white">
    <div class="container bio-split">
      <div>
        <div class="bio-portrait-box" style="margin-bottom: 1.5rem;">
          <img src="{{ asset('assets/images/home/about.jpeg') }}" 
               alt="Advocate Vishalkumar R Tomar" 
               style="width: 100%; border: 1px solid var(--color-gold-antique); box-shadow: 0 15px 35px rgba(75,25,41,0.12);">
        </div>

        <!-- 2 Secondary Photos of Vishal Tomar from same folder -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
          <div>
            <img src="{{ asset('assets/images/home/other-1.jpeg') }}" 
                 alt="Advocate Vishalkumar R Tomar in Robes" 
                 style="width: 100%; border: 1px solid #E9DFD5; box-shadow: 0 5px 15px rgba(0,0,0,0.06);">
            <div style="font-size: 0.72rem; color: var(--color-burgundy-deep); font-weight: 600; margin-top: 0.35rem; text-align: center;">Courtroom Robes</div>
          </div>
          <div>
            <img src="{{ asset('assets/images/home/other-2.jpeg') }}" 
                 alt="Advocate Vishalkumar R Tomar Chambers Conference" 
                 style="width: 100%; border: 1px solid #E9DFD5; box-shadow: 0 5px 15px rgba(0,0,0,0.06);">
            <div style="font-size: 0.72rem; color: var(--color-burgundy-deep); font-weight: 600; margin-top: 0.35rem; text-align: center;">Chambers Conference</div>
          </div>
        </div>
      </div>

      <div>
        <div class="eyebrow">The Advocate</div>
        <h2>Vishalkumar R Tomar</h2>
        <h3 style="font-family: var(--font-sans); font-size: 1rem; color: var(--color-gold-antique); font-weight: 700; text-transform: uppercase; letter-spacing: 0.16em; margin-bottom: 1.5rem;">
          Lead Counsel, The Chamber of V R Tomar · High Court of Gujarat
        </h3>
        
        <p class="lead">
          Advocate Vishalkumar R Tomar represents an emerging cohort of sharp, intellectually driven legal practitioners who bridge classical courtroom advocacy with modern strategic precision.
        </p>

        <p>
          Based in Ahmedabad, Gujarat, Advocate Tomar maintains primary practice before the High Court of Gujarat, the Sessions and Commercial Courts, and specialized judicial tribunals. His practice covers the full spectrum of serious criminal defense, white-collar financial crimes, cyber crime matters, civil property disputes, constitutional writ petitions, and alternate dispute resolution.
        </p>

        <p>
          Recognized by clients and peers for his analytical depth and composure under high-pressure trial conditions, Mr. Tomar approaches legal defense not as routine paperwork, but as an architectural challenge—dissecting voluminous charge-sheets, identifying statutory vulnerabilities in the prosecution or adversary's position, and framing unassailable legal arguments.
        </p>

        <div class="bio-quote-callout">
          "Speaking with him never felt like just consulting a lawyer, it genuinely felt like having a mentor guiding us through the entire situation. His approach made us feel comfortable and confident throughout the process."
          <div style="font-size: 0.8rem; font-style: normal; margin-top: 0.5rem; color: var(--color-gold-antique); font-weight: 600;">
            — Client Review by Karan Khanchandani (Google Verified)
          </div>
        </div>

        <p>
          Beyond technical courtroom performance, The Chamber of V R Tomar is distinguished by its client-centered approach and dependable legal team. Supported by seasoned coordinators such as Mr. Pankaj, the chambers ensures complete transparency, rapid filing tracking, and patient, accessible communication at every phase of litigation.
        </p>

        <div style="margin-top: 2rem;">
          <a href="{{ route('gallery') }}" class="btn btn-outline-dark">View Chambers &amp; Events Gallery →</a>
          <a href="{{ route('contact') }}" class="btn btn-gold" style="margin-left: 1rem;">Book Confidential Consultation</a>
        </div>
      </div>
    </div>
  </section>

  <!-- COURT ADMISSIONS & FORUM JURISDICTION -->
  <section class="section bg-ivory">
    <div class="container">
      <div class="section-header">
        <div class="eyebrow">Judicial Fora</div>
        <h2>Admissions &amp; Regular Appearances</h2>
        <p class="section-desc">
          Actively representing clients across constitutional, criminal, commercial, and appellate jurisdictions throughout Gujarat.
        </p>
      </div>

      <div class="grid-3">
        <div class="card-practice">
          <h3 class="card-practice-title">High Court of Gujarat</h3>
          <p class="card-practice-desc">
            Special Civil Applications (Writs under Art. 226 &amp; 227), Letters Patent Appeals (LPA), Criminal Appeals, Bail Applications, and 482 CrPC / BNSS Quashing Petitions.
          </p>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold-antique); font-weight: 700;">
            Primary Constitutional &amp; Appellate Forum
          </div>
        </div>

        <div class="card-practice">
          <h3 class="card-practice-title">Sessions &amp; Criminal Courts</h3>
          <p class="card-practice-desc">
            Anticipatory and regular bail hearings, trial defense in serious offences, cross-examinations, framing of charges, and economic offences defense across Ahmedabad and Gujarat districts.
          </p>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold-antique); font-weight: 700;">
            Original Criminal Jurisdiction
          </div>
        </div>

        <div class="card-practice">
          <h3 class="card-practice-title">Commercial Courts</h3>
          <p class="card-practice-desc">
            High-value commercial disputes governed by the Commercial Courts Act, summary suits, injunction applications, and contractual recovery litigations.
          </p>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold-antique); font-weight: 700;">
            Original Commercial Jurisdiction
          </div>
        </div>

        <div class="card-practice">
          <h3 class="card-practice-title">NCLT Ahmedabad Bench</h3>
          <p class="card-practice-desc">
            Corporate insolvency resolution processes (CIRP), liquidation proceedings, Section 7/9/10 petitions under IBC, and oppression/mismanagement claims under the Companies Act.
          </p>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold-antique); font-weight: 700;">
            Corporate &amp; Insolvency Tribunal
          </div>
        </div>

        <div class="card-practice">
          <h3 class="card-practice-title">Arbitral Tribunals</h3>
          <p class="card-practice-desc">
            Domestic and international commercial arbitrations, Section 9 interim relief applications, Section 11 appointments, and Section 34 arbitral award challenges.
          </p>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold-antique); font-weight: 700;">
            Alternative Dispute Resolution
          </div>
        </div>

        <div class="card-practice">
          <h3 class="card-practice-title">Specialized Tribunals</h3>
          <p class="card-practice-desc">
            Debt Recovery Tribunal (DRT/DRAT), Real Estate Regulatory Authority Appellate Tribunal (RERA), and Cyber Appellate authorities.
          </p>
          <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-gold-antique); font-weight: 700;">
            Regulatory &amp; Appellate Authorities
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CHAMBERS CORE VALUES -->
  <section class="section bg-wine text-light">
    <div class="container">
      <div class="section-header">
        <div class="eyebrow" style="color: var(--color-gold-antique);">Foundational Values</div>
        <h2 style="color: #fff;">The Pillars of The Chamber of V R Tomar</h2>
        <p class="section-desc" style="color: var(--color-text-light-muted);">
          Principles guiding our representation before judges, tribunals, and in client consultations.
        </p>
      </div>

      <div class="grid-4">
        <div class="card-practice card-practice-dark">
          <h3 class="card-practice-title" style="color: var(--color-gold-antique); font-size: 1.25rem;">01. Intellectual Rigor</h3>
          <p class="card-practice-desc">
            Every case is built on deep statutory research, recent Apex Court citations, and thorough evidentiary indexing.
          </p>
        </div>

        <div class="card-practice card-practice-dark">
          <h3 class="card-practice-title" style="color: var(--color-gold-antique); font-size: 1.25rem;">02. Composure Under Pressure</h3>
          <p class="card-practice-desc">
            Maintaining focus, clarity, and solution-driven calmness when judicial stakes and client stress are at their peak.
          </p>
        </div>

        <div class="card-practice card-practice-dark">
          <h3 class="card-practice-title" style="color: var(--color-gold-antique); font-size: 1.25rem;">03. Complete Transparency</h3>
          <p class="card-practice-desc">
            Demystifying legal processes, setting straightforward expectations, and keeping clients informed at every procedural milestone.
          </p>
        </div>

        <div class="card-practice card-practice-dark">
          <h3 class="card-practice-title" style="color: var(--color-gold-antique); font-size: 1.25rem;">04. Absolute Discretion</h3>
          <p class="card-practice-desc">
            Unconditional preservation of attorney-client privilege and confidentiality in sensitive personal and commercial matters.
          </p>
        </div>
      </div>
    </div>
  </section>

@endsection

