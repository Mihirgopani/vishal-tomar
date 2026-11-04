@extends('layouts.app')

@section('title', 'Working Industry Sectors — The Chamber of V R Tomar | Gujarat')
@section('meta_description', 'Sector focus across Gujarat: Infrastructure & EPC, Industrial & Chemical Manufacturing, Banking & NBFCs, and Technology & Startups.')

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-sectors">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <span class="curr">SECTORS</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>COMMERCIAL &amp; REGULATORY CONTEXT</span>
      </div>

      <h1 class="page-cinematic-title">
        COMMERCIAL SECTORS. <br>
        <span class="headline-gold">INDUSTRY PERSPECTIVE.</span>
      </h1>

      <p class="page-cinematic-desc">
        Aligning statutory advocacy with commercial realities across Gujarat’s manufacturing, infrastructure, and technology ecosystems.
      </p>

      <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
        <span class="badge-dot"></span>
        <span>WESTERN INDIA INDUSTRIAL HUBS · DISPUTE ADVOCACY</span>
      </div>
    </div>
  </section>

  <!-- SECTORS DIRECTORY -->
  <section class="section bg-ivory">
    <div class="container">
      <div class="section-header">
        <div class="eyebrow">Industry Engagement</div>
        <h2>Key Working Sectors</h2>
        <p class="section-desc">
          Strategic legal representation informed by deep operational familiarity with regulatory frameworks in Western India.
        </p>
      </div>

      <div class="grid-2" style="gap: 2rem;">
        @foreach($sectors as $sec)
        <article class="card-practice" style="padding: 2.5rem; background: #fff; border: 1px solid #E9DFD5;">
          <div class="card-practice-icon">
            <img src="{{ asset($sec['icon']) }}" alt="{{ $sec['title'] }}" width="48" height="48">
          </div>
          <h3 class="card-practice-title" style="font-size: 1.4rem;">
            <a href="{{ route('sectors.detail', $sec['slug']) }}" style="color: inherit; text-decoration: none;">
              {{ $sec['title'] }}
            </a>
          </h3>
          <p class="card-practice-desc" style="font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
            {{ $sec['summary'] }}
          </p>
          <a href="{{ route('sectors.detail', $sec['slug']) }}" class="editorial-link">
            Examine Sector Framework →
          </a>
        </article>
        @endforeach
      </div>
    </div>
  </section>

@endsection
