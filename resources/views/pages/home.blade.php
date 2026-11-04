@extends('layouts.app')

@section('title', 'Advocate Vishalkumar R Tomar — The Chamber of V R Tomar | High Court of Gujarat')
@section('meta_description', 'The Chamber of V R Tomar, Advocate Vishalkumar R Tomar, High Court of Gujarat. Strategic counsel in Criminal Litigation, White Collar Crime, Cyber Crime, Civil Disputes, Constitutional Writs, and ADR in Ahmedabad.')

@section('content')

  <!-- 01. FULL-BLEED CINEMATIC HERO SLIDER -->
  <section class="hero-cinematic-slider" id="heroSlider" aria-label="Chambers Presentation">
    <!-- Dark Atmospheric Vignettes & Contrast Overlays -->
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <!-- Background Slides (3 High Court of Gujarat Scenes) -->
    <div class="hero-slides-wrapper">
      <div class="hero-slide active" data-index="0">
        <div class="hero-slide-bg" style="background-image: url('{{ asset('assets/images/hero-slider-gujarat-hc-1.webp') }}');"></div>
      </div>
      <div class="hero-slide" data-index="1">
        <div class="hero-slide-bg" style="background-image: url('{{ asset('assets/images/hero-slider-gujarat-hc-2.jpg') }}');"></div>
      </div>
      <div class="hero-slide" data-index="2">
        <div class="hero-slide-bg" style="background-image: url('{{ asset('assets/images/hero-slider-gujarat-hc-3.webp') }}');"></div>
      </div>
    </div>

    <!-- Hero Slide Content Overlay -->
    <div class="container hero-slider-content-container">
      <div class="hero-slide-content-deck">

        <!-- Slide Content 01 -->
        <article class="hero-content-slide active" data-slide-index="0">
          <div class="hero-eyebrow-wrapper">
            <span class="hero-eyebrow-text">ADVOCATE · HIGH COURT OF GUJARAT</span>
            <div class="hero-eyebrow-line"></div>
          </div>
          <h1 class="hero-headline">
            <span class="headline-primary">WHERE WE PERSEVERE<br>TO RAISE THE BAR OF</span>
            <span class="headline-gold">EXCELLENCE</span>
          </h1>
          <p class="hero-subtext">
            Strategic counsel, appellate rigor, and high-stakes advocacy before the High Court of Gujarat, Sessions Courts, and Specialized Commercial Tribunals. Delivering intellectual precision to complex legal disputes.
          </p>
          <div class="hero-cta-group">
            <a href="{{ route('contact') }}" class="btn-gold-solid">
              <span>SCHEDULE CONSULTATION</span>
              <svg viewBox="0 0 16 16" fill="currentColor" class="cta-arrow-icon">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h11.793l-3.147-3.146a.5.5 0 01.708-.708l4 4a.5.5 0 010 .708l-4 4a.5.5 0 01-.708-.708L13.293 8.5H1.5A.5.5 0 011 8z"/>
              </svg>
            </a>
            <a href="{{ route('services') }}" class="btn-gold-ghost">OUR WORKING AREAS</a>
          </div>
          <div class="hero-tag-badge">
            <span class="badge-dot"></span>
            <span>THE CHAMBER OF V R TOMAR · MOTERA, AHMEDABAD</span>
          </div>
        </article>

        <!-- Slide Content 02 -->
        <article class="hero-content-slide" data-slide-index="1">
          <div class="hero-eyebrow-wrapper">
            <span class="hero-eyebrow-text">CRIMINAL &amp; WHITE-COLLAR DEFENSE</span>
            <div class="hero-eyebrow-line"></div>
          </div>
          <h2 class="hero-headline">
            <span class="headline-primary">CLARITY IN COMPLEXITY.<br>STRENGTH IN</span>
            <span class="headline-gold">REPRESENTATION</span>
          </h2>
          <p class="hero-subtext">
            Protecting liberty, defending against multi-agency financial allegations, and conducting rigorous trial and appellate cross-examinations before Sessions Courts and High Court of Gujarat.
          </p>
          <div class="hero-cta-group">
            <a href="{{ route('contact') }}" class="btn-gold-solid">
              <span>ENGAGE COUNSEL</span>
              <svg viewBox="0 0 16 16" fill="currentColor" class="cta-arrow-icon">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h11.793l-3.147-3.146a.5.5 0 01.708-.708l4 4a.5.5 0 010 .708l-4 4a.5.5 0 01-.708-.708L13.293 8.5H1.5A.5.5 0 011 8z"/>
              </svg>
            </a>
            <a href="{{ route('services.detail', 'criminal-litigation') }}" class="btn-gold-ghost">CRIMINAL LITIGATION</a>
          </div>
          <div class="hero-tag-badge">
            <span class="badge-dot"></span>
            <span>HIGH-STAKES TRIAL &amp; APPELLATE ADVOCACY</span>
          </div>
        </article>

        <!-- Slide Content 03 -->
        <article class="hero-content-slide" data-slide-index="2">
          <div class="hero-eyebrow-wrapper">
            <span class="hero-eyebrow-text">CONSTITUTIONAL WRITS &amp; COMMERCIAL ADR</span>
            <div class="hero-eyebrow-line"></div>
          </div>
          <h2 class="hero-headline">
            <span class="headline-primary">DEFENDING INTERESTS.<br>DELIVERING</span>
            <span class="headline-gold">PRECISION</span>
          </h2>
          <p class="hero-subtext">
            Invoking extraordinary writ jurisdiction under Articles 226/227 and leading complex commercial arbitration, tender disputes, and statutory due diligence across Western India.
          </p>
          <div class="hero-cta-group">
            <a href="{{ route('contact') }}" class="btn-gold-solid">
              <span>SCHEDULE CONSULTATION</span>
              <svg viewBox="0 0 16 16" fill="currentColor" class="cta-arrow-icon">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h11.793l-3.147-3.146a.5.5 0 01.708-.708l4 4a.5.5 0 010 .708l-4 4a.5.5 0 01-.708-.708L13.293 8.5H1.5A.5.5 0 011 8z"/>
              </svg>
            </a>
            <a href="{{ route('services.detail', 'constitutional-writ-litigation') }}" class="btn-gold-ghost">WRIT REMEDIES</a>
          </div>
          <div class="hero-tag-badge">
            <span class="badge-dot"></span>
            <span>HIGH COURT OF GUJARAT &amp; COMMERCIAL ARBITRATION</span>
          </div>
        </article>

      </div>
    </div>

    <!-- Slider Circular Arrows -->
    <button class="hero-nav-arrow hero-arrow-prev" id="heroPrevBtn" aria-label="Previous Slide">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M15 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <button class="hero-nav-arrow hero-arrow-next" id="heroNextBtn" aria-label="Next Slide">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M9 18l6-6-6-6" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>

    <!-- Slider Pagination Indicators (01, 02, 03) -->
    <div class="hero-slider-pagination" id="heroPagination" role="tablist" aria-label="Hero Slide Selection">
      <button class="slider-dot active" data-index="0" role="tab" aria-label="Slide 1">
        <span class="dot-num">01</span>
        <span class="dot-line"><span class="dot-progress"></span></span>
      </button>
      <button class="slider-dot" data-index="1" role="tab" aria-label="Slide 2">
        <span class="dot-num">02</span>
        <span class="dot-line"><span class="dot-progress"></span></span>
      </button>
      <button class="slider-dot" data-index="2" role="tab" aria-label="Slide 3">
        <span class="dot-num">03</span>
        <span class="dot-line"><span class="dot-progress"></span></span>
      </button>
    </div>

    <!-- Scroll Down Button -->
    <a href="#credentialsStrip" class="hero-scroll-indicator" aria-label="Scroll Down to Chambers Credentials">
      <div class="scroll-indicator-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="scroll-arrow-svg">
          <path d="M12 5v14M19 12l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <span class="scroll-indicator-text">EXPLORE CHAMBERS</span>
    </a>
  </section>

  <!-- 02. CHAMBERS CREDENTIAL STRIP -->
  <section class="metrics-strip" id="credentialsStrip">
    <div class="container metrics-grid">
      <div class="metric-item">
        <div class="metric-number">HC</div>
        <div class="metric-label">High Court of Gujarat Practice</div>
      </div>
      <div class="metric-item">
        <div class="metric-number">★ 5.0</div>
        <div class="metric-label">Google Rating (40+ Verified Reviews)</div>
      </div>
      <div class="metric-item">
        <div class="metric-number">8</div>
        <div class="metric-label">Core Working Specializations</div>
      </div>
      <div class="metric-item">
        <div class="metric-number">360°</div>
        <div class="metric-label">Trial, Appellate &amp; Risk Counsel</div>
      </div>
    </div>
  </section>

  <!-- 03. ADVOCATE INTRODUCTION & BIOGRAPHY (2ND ABOUT SECTION WITH assets/images/home/about.jpeg) -->
  <section class="section bg-white" id="advocateProfile">
    <div class="container bio-split">
      <div class="bio-portrait-box" style="position: relative;">
        <!-- USER REQUIREMENT: assets/images/home/about.jpeg for 2nd about section -->
        <img src="{{ asset('assets/images/home/about.jpeg') }}" 
             alt="Advocate Vishalkumar R Tomar — The Chamber of V R Tomar" 
             style="width: 100%; height: auto; display: block; border: 1px solid var(--color-gold-antique); box-shadow: 0 15px 40px rgba(75, 25, 41, 0.15);">
        <div style="position: absolute; bottom: 1.5rem; left: 1.5rem; background: rgba(75, 25, 41, 0.9); padding: 0.8rem 1.4rem; border: 1px solid var(--color-gold-antique); backdrop-filter: blur(8px);">
          <div style="font-size: 0.65rem; color: var(--color-gold-antique); letter-spacing: 0.2em; text-transform: uppercase; font-weight: 700;">LEAD COUNSEL</div>
          <div style="font-family: var(--font-serif); font-size: 1.15rem; color: #fff;">Vishalkumar R Tomar</div>
          <div style="font-size: 0.7rem; color: #D8C08A;">Advocate, High Court of Gujarat</div>
        </div>
      </div>

      <div>
        <div class="eyebrow">Professional Profile</div>
        <h2>Strategic Counsel Built on Rigorous Legal Intellect</h2>
        <h3 style="font-family: var(--font-sans); font-size: 1rem; color: var(--color-gold-antique); font-weight: 700; text-transform: uppercase; letter-spacing: 0.14em; margin-bottom: 1.25rem;">
          THE CHAMBER OF V R TOMAR · MOTERA, AHMEDABAD
        </h3>
        <p class="lead">
          Practicing before the High Court of Gujarat and specialized judicial tribunals, Advocate Vishalkumar R Tomar brings an assertive, intellectually demanding approach to litigation, criminal defense, and complex commercial controversy.
        </p>
        <div class="bio-quote-callout">
          "Speaking with him never felt like just consulting a lawyer, it genuinely felt like having a mentor guiding us through the entire situation. His approach made us feel comfortable and confident throughout the process."
          <div style="font-size: 0.78rem; font-style: normal; margin-top: 0.5rem; color: var(--color-gold-antique); font-weight: 600;">
            — Client Testimonial (Google Verified ★ 5.0)
          </div>
        </div>
        <p>
          Headquartered at 4D Square Mall on the Visat-Gandhinagar Highway in Motera, Ahmedabad, Advocate Vishalkumar R Tomar leads a dedicated, highly responsive team representing individuals, corporate entities, and entrepreneurs across criminal trials, white-collar defense, constitutional writs, and commercial arbitrations.
        </p>

        <div class="pillars-grid">
          <div class="pillar-item">
            <div class="pillar-title">Trial &amp; Appellate Tenacity</div>
            <div class="pillar-desc">Command of High Court procedural nuances, bail jurisprudence, and decisive cross-examination.</div>
          </div>
          <div class="pillar-item">
            <div class="pillar-title">Client-First Mentorship</div>
            <div class="pillar-desc">Explaining intricate legal nuances in clear, transparent language with structured precaution guidance.</div>
          </div>
          <div class="pillar-item">
            <div class="pillar-title">Dedicated Support Team</div>
            <div class="pillar-desc">Seamless registry coordination, meticulous documentation, and regular procedural case updates.</div>
          </div>
        </div>

        <div style="margin-top: 2.5rem; display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap;">
          <a href="{{ route('about') }}" class="editorial-link">Read Full Biography &amp; Ethos →</a>
          <a href="{{ route('gallery') }}" class="editorial-link gold">View Chambers &amp; Event Gallery →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 04. CORE WORKING AREAS (THE 8 EXACT SPECIALIZATIONS) -->
  <section class="section bg-ivory" id="workingAreasSection">
    <div class="container">
      <div class="section-header center">
        <div class="eyebrow center">Chambers Expertise</div>
        <h2>Our 8 Core Working Areas</h2>
        <p class="section-desc">
          High-caliber legal advocacy and strategic representation before the High Court of Gujarat, Sessions Courts, NCLT, and Arbitral Forums.
        </p>
      </div>

      <div class="grid-4" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
        @foreach($workingAreas as $area)
        <article class="card-practice" style="display: flex; flex-direction: column; height: 100%;">
          <div>
            <div class="card-practice-icon">
              <img src="{{ asset($area['icon']) }}" alt="{{ $area['title'] }} Icon" width="46" height="46">
            </div>
            <div style="font-size: 0.65rem; color: var(--color-gold-antique); font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 0.4rem;">
              {{ $area['badge'] }}
            </div>
            <h3 class="card-practice-title" style="font-size: 1.3rem;">
              <a href="{{ route('services.detail', $area['slug']) }}" style="color: inherit; text-decoration: none;">
                {{ $area['title'] }}
              </a>
            </h3>
            <p class="card-practice-desc">
              {{ $area['summary'] }}
            </p>
          </div>
          <div class="card-practice-footer" style="margin-top: auto; padding-top: 1.5rem;">
            <a href="{{ route('services.detail', $area['slug']) }}" class="editorial-link">Examine Practice →</a>
          </div>
        </article>
        @endforeach
      </div>

      <div style="text-align: center; margin-top: 3.5rem;">
        <a href="{{ route('services') }}" class="btn btn-outline-dark">View Comprehensive Working Areas Directory</a>
      </div>
    </div>
  </section>

  <!-- 05. AUTHENTIC GOOGLE REVIEWS SECTION (★ 5.0 RATING) -->
  <section class="section bg-white" id="googleReviews">
    <div class="container">
      <div class="reviews-summary-card">
        <div class="reviews-score-block">
          <div class="reviews-score-num">5.0</div>
          <div>
            <div class="reviews-stars-wrap">
              @for($i = 0; $i < 5; $i++)
              <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              @endfor
            </div>
            <div style="font-size: 1.15rem; font-weight: 700; color: #fff;">
              THE CHAMBER OF V R TOMAR
            </div>
            <div style="font-size: 0.85rem; color: var(--color-gold-champagne);">
              Over 40 Verified Google Client Reviews · 100% 5-Star Rating
            </div>
            <div class="review-tags-cloud">
              <span class="review-tag-pill">Advocate 15</span>
              <span class="review-tag-pill">Skillful Team 4</span>
              <span class="review-tag-pill">Clear Communication 3</span>
              <span class="review-tag-pill">Easy Guidance 2</span>
            </div>
          </div>
        </div>

        <div>
          <a href="{{ config('chambers.social.google_reviews') }}" target="_blank" rel="noopener" class="btn btn-gold" style="white-space: nowrap;">
            Verify on Google Profile ↗
          </a>
        </div>
      </div>

      <div class="section-header">
        <div class="eyebrow">Client Experiences</div>
        <h2>What Our Clients Say</h2>
        <p class="section-desc">
          Unfiltered testimonials from clients whose liberty, reputation, and commercial interests were defended by Advocate Vishalkumar R Tomar and his team.
        </p>
      </div>

      <div class="grid-3">
        @foreach(array_slice($reviews, 0, 3) as $rev)
        <div class="review-card-luxury">
          <div class="review-card-header">
            <div class="review-author-info">
              <div class="review-avatar">
                {{ substr($rev['author'], 0, 1) }}
              </div>
              <div>
                <div class="review-author-name">{{ $rev['author'] }}</div>
                <div class="review-author-badge">{{ $rev['badge'] }}</div>
              </div>
            </div>
            <div class="review-google-icon" title="Google Verified Review">
              <svg viewBox="0 0 24 24">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>

          <div class="review-card-stars">
            @for($i = 0; $i < $rev['rating']; $i++)
            <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            @endfor
          </div>

          <div class="review-highlight-callout">
            "{{ $rev['highlight'] }}"
          </div>

          <div class="review-card-text">
            {{ Str::limit($rev['text'], 220) }}
          </div>

          <div class="review-card-footer">
            <span>Posted {{ $rev['time'] }}</span>
            <span style="color: #4B1929; font-weight: 600;">Verified Case Representation</span>
          </div>
        </div>
        @endforeach
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="{{ route('reviews') }}" class="btn btn-outline-dark">Read All Google Reviews &amp; Case Testimonials (40+) →</a>
      </div>
    </div>
  </section>

  <!-- 06. CHAMBERS & CELEBRITIES GALLERY HIGHLIGHTS -->
  <section class="section bg-ivory" id="galleryPreview">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 3rem; flex-wrap: wrap; gap: 1.5rem;">
        <div>
          <div class="eyebrow">Chambers In Action</div>
          <h2>Engagements, Dignitaries &amp; Public Presence</h2>
          <p class="section-desc" style="margin-bottom: 0;">
            Glimpses from legal conclaves, high-profile advisory sessions, celebrity consultations, and chambers assemblies.
          </p>
        </div>
        <a href="{{ route('gallery') }}" class="btn btn-outline-dark">Explore Full Gallery (11 Photos) →</a>
      </div>

      <div class="gallery-masonry-grid">
        @foreach($galleryHighlights as $item)
        <div class="gallery-card" onclick="window.location.href='{{ route('gallery') }}'">
          <div class="gallery-card-thumb-wrap">
            <img src="{{ asset($item['src']) }}" alt="{{ $item['alt'] }}" class="gallery-card-img" loading="lazy">
            <div class="gallery-card-overlay">
              <div class="gallery-overlay-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="gallery-card-caption">
            <span class="gallery-tag-pill">{{ $item['category_label'] }}</span>
            <div class="gallery-card-title">{{ $item['title'] }}</div>
            <div class="gallery-card-subtitle">{{ $item['subtitle'] }}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- 07. STRATEGIC LITIGATION METHODOLOGY -->
  <section class="section bg-white" id="methodology">
    <div class="container">
      <div class="section-header">
        <div class="eyebrow">Strategic Process</div>
        <h2>The Anatomy of Counsel &amp; Representation</h2>
        <p class="section-desc">
          A methodical four-phase advocacy lifecycle engineered for intellectual clarity, procedural advantage, and trial preparedness.
        </p>
      </div>

      <div class="process-timeline">
        <div class="process-step">
          <div class="process-step-num">01</div>
          <h4 class="process-step-title">Forensic Case Appraisal</h4>
          <p class="process-step-desc">
            Comprehensive analysis of documentary evidence, statutory provisions, jurisdictional viability, and limitation thresholds before filing.
          </p>
        </div>

        <div class="process-step">
          <div class="process-step-num">02</div>
          <h4 class="process-step-title">Exhaustive Pleadings</h4>
          <p class="process-step-desc">
            Drafting high-precision petitions, affidavits, and grounds of challenge structured to withstand rigorous judicial scrutiny.
          </p>
        </div>

        <div class="process-step">
          <div class="process-step-num">03</div>
          <h4 class="process-step-title">Interim &amp; Protective Relief</h4>
          <p class="process-step-desc">
            Urgent mention before High Court Benches for ex-parte stays, bail orders, status quo directives, or protection against coercive actions.
          </p>
        </div>

        <div class="process-step">
          <div class="process-step-num">04</div>
          <h4 class="process-step-title">Merits &amp; Appellate Tenacity</h4>
          <p class="process-step-desc">
            Compelling oral arguments supported by indexed case digests, statutory precedents, and persuasive legal synthesis.
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- 09. FEATURED LEGAL INSIGHTS -->
  <section class="section bg-ivory" id="insights">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 3.5rem; flex-wrap: wrap; gap: 1.5rem;">
        <div>
          <div class="eyebrow">Legal Scholarship</div>
          <h2>Insights &amp; Jurisprudential Analysis</h2>
        </div>
        <a href="{{ route('insights') }}" class="btn btn-outline-dark">Browse All Commentary</a>
      </div>

      <div class="grid-3">
        @foreach($insights as $ins)
        <article class="card-article">
          <div class="card-article-thumb">
            <img src="{{ asset($ins['image']) }}" alt="{{ $ins['title'] }}">
          </div>
          <div class="card-article-body">
            <div class="card-article-meta">
              <span class="pill-tag">{{ $ins['category'] }}</span>
              <span>• {{ $ins['read_time'] }}</span>
            </div>
            <h3 class="card-article-title">
              <a href="{{ route('insights.detail', $ins['slug']) }}" style="color: inherit; text-decoration: none;">
                {{ $ins['title'] }}
              </a>
            </h3>
            <p class="card-article-excerpt">
              {{ $ins['summary'] }}
            </p>
            <div style="margin-top: auto;">
              <a href="{{ route('insights.detail', $ins['slug']) }}" class="editorial-link">Read Full Analysis →</a>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </section>

  <!-- 10. DIRECT CONSULTATION CALL TO ACTION -->
  <section class="cta-banner">
    <div class="container cta-grid">
      <div>
        <div class="eyebrow" style="color: var(--color-gold-antique);">Direct Chambers Consultation</div>
        <h2 class="cta-title">Facing High-Stakes Litigation or Regulatory Inquiry?</h2>
        <p class="cta-desc">
          To discuss matter eligibility, urgent bail hearings, High Court appeals, commercial dispute strategies, or emergency interim mentions, connect directly with the chambers of Advocate Vishalkumar R Tomar.
        </p>
      </div>
      <div class="cta-actions">
        <a href="{{ route('contact') }}" class="btn btn-gold" style="width: 100%; max-width: 280px;">Request Consultation</a>
        <span style="font-size: 0.76rem; color: var(--color-gold-champagne); letter-spacing: 0.08em; display: block; text-align: center;">
          Strict adherence to professional confidentiality &amp; ethics.
        </span>
      </div>
    </div>
  </section>

@endsection

