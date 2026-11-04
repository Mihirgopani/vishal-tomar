@extends('layouts.app')

@section('title', 'Working Areas & Legal Practice — The Chamber of V R Tomar | High Court of Gujarat')
@section('meta_description', 'Explore our 8 specialized legal working areas: Criminal Litigation, White Collar Crime, Cyber Crime, Civil Disputes, Constitutional Writs, ADR, Risk Management, and Due Compliance.')

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-services">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <span class="curr">WORKING AREAS</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>THE CHAMBER OF V R TOMAR · LEGAL SPECIALIZATIONS</span>
      </div>

      <h1 class="page-cinematic-title">
        FOCUSED EXPERTISE. <br>
        <span class="headline-gold">COMPREHENSIVE ADVOCACY.</span>
      </h1>

      <p class="page-cinematic-desc">
        Disciplined legal representation tailored to high-stakes litigation, regulatory challenges, criminal defense, and complex commercial dispute mechanisms before the High Court of Gujarat and specialized tribunals.
      </p>

      <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
        <span class="badge-dot"></span>
        <span>8 PRIMARY SPECIALIZATIONS · HIGH COURT OF GUJARAT &amp; TRIBUNALS</span>
      </div>
    </div>
  </section>

  <!-- 8 WORKING AREAS DETAILED DIRECTORY -->
  <section class="section bg-ivory">
    <div class="container">
      <div class="section-header">
        <div class="eyebrow">Practice Directory</div>
        <h2>Our Core Working Areas</h2>
        <p class="section-desc">
          Click on any practice area below to review statutory scope, procedural stages, focus points, and courtroom experience.
        </p>
      </div>

      <div class="grid-2" style="gap: 2.5rem;">
        @foreach($workingAreas as $area)
        <article class="card-practice" style="display: flex; flex-direction: column; height: 100%; padding: 2.5rem; background: #fff; border: 1px solid #E9DFD5;">
          <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 1rem; margin-bottom: 1.25rem;">
            <div class="card-practice-icon" style="margin-bottom: 0;">
              <img src="{{ asset($area['icon']) }}" alt="{{ $area['title'] }} Icon" width="46" height="46">
            </div>
            <span style="font-size: 0.68rem; font-weight: 700; color: var(--color-gold-antique); background: var(--color-burgundy-deep); padding: 0.35rem 0.85rem; border-radius: 999px; letter-spacing: 0.12em; text-transform: uppercase;">
              {{ $area['badge'] }}
            </span>
          </div>

          <h3 class="card-practice-title" style="font-size: 1.5rem; margin-bottom: 1rem;">
            <a href="{{ route('services.detail', $area['slug']) }}" style="color: inherit; text-decoration: none;">
              {{ $area['title'] }}
            </a>
          </h3>

          <p class="card-practice-desc" style="font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
            {{ $area['summary'] }}
          </p>

          <div style="background: #FAF7F4; border-left: 2px solid var(--color-gold-antique); padding: 1rem 1.25rem; margin-bottom: 1.5rem;">
            <div style="font-size: 0.72rem; font-weight: 700; color: var(--color-burgundy-deep); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.4rem;">
              Key Focus Highlights:
            </div>
            <ul style="margin: 0; padding-left: 1.2rem; font-size: 0.85rem; color: var(--color-text-secondary); line-height: 1.5;">
              @foreach(array_slice($area['focus_points'], 0, 3) as $point)
              <li>{{ $point }}</li>
              @endforeach
            </ul>
          </div>

          <div class="card-practice-footer" style="margin-top: auto; padding-top: 1rem; border-top: 1px solid #F7F2ED; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 0.75rem; color: #9C9499; text-transform: uppercase; letter-spacing: 0.1em;">Specialized Practice</span>
            <a href="{{ route('services.detail', $area['slug']) }}" class="editorial-link">
              Examine Practice Particulars →
            </a>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </section>

  <!-- CTA STRIP -->
  <section class="cta-banner">
    <div class="container cta-grid">
      <div>
        <div class="eyebrow" style="color: var(--color-gold-antique);">Matter Consultation</div>
        <h2 class="cta-title">Need Guidance on Your Legal Matter?</h2>
        <p class="cta-desc">
          Schedule an in-person or confidential virtual consultation with Advocate Vishalkumar R Tomar to evaluate your procedural position.
        </p>
      </div>
      <div class="cta-actions">
        <a href="{{ route('contact') }}" class="btn btn-gold" style="width: 100%; max-width: 280px;">Request Consultation</a>
      </div>
    </div>
  </section>

@endsection

