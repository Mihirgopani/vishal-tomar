@extends('layouts.app')

@section('title', $sector['title'] . ' — Sector Advisory | The Chamber of V R Tomar')
@section('meta_description', $sector['summary'])

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-detail">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <a href="{{ route('sectors') }}">SECTORS</a>
        <span class="sep">/</span>
        <span class="curr">{{ strtoupper($sector['title']) }}</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>COMMERCIAL &amp; REGULATORY CONTEXT</span>
      </div>

      <h1 class="page-cinematic-title">
        {{ strtoupper($sector['title']) }} <br>
        <span class="headline-gold">LEGAL ADVOCACY.</span>
      </h1>

      <p class="page-cinematic-desc">
        {{ $sector['summary'] }}
      </p>

      <div class="hero-cta-group" style="opacity: 1; transform: none; margin-bottom: 2rem;">
        <a href="{{ route('contact') }}" class="btn-gold-solid">
          <span>CONSULT ON SECTOR DISPUTE</span>
          <svg viewBox="0 0 16 16" fill="currentColor" class="cta-arrow-icon">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 01.5-.5h11.793l-3.147-3.146a.5.5 0 01.708-.708l4 4a.5.5 0 010 .708l-4 4a.5.5 0 01-.708-.708L13.293 8.5H1.5A.5.5 0 011 8z"/>
          </svg>
        </a>
        <a href="{{ route('sectors') }}" class="btn-gold-ghost">ALL WORKING SECTORS</a>
      </div>
    </div>
  </section>

  <!-- CONTENT LAYOUT -->
  <section class="section bg-ivory">
    <div class="container layout-with-sidebar">
      <article class="article-content">
        <div class="card-practice-icon" style="margin-bottom: 1.5rem;">
          <img src="{{ asset($sector['icon']) }}" alt="{{ $sector['title'] }}" width="48" height="48">
        </div>
        <h2 style="font-size: 2.2rem; color: var(--color-burgundy-deep); margin-bottom: 1.25rem;">
          {{ $sector['title'] }} Legal Landscape
        </h2>
        <p class="lead" style="line-height: 1.7; margin-bottom: 2rem;">
          {{ $sector['summary'] }}
        </p>

        <p>
          Gujarat continues to lead India in manufacturing, infrastructure expansion, and corporate entrepreneurship. However, fast-paced capital investments often intersect with municipal regulatory challenges, public procurement scrutiny, tender cancellations, and contractual defaults.
        </p>

        <p>
          At The Chamber of V R Tomar, Advocate Vishalkumar R Tomar provides tailored litigation strategies designed to protect ongoing operations, secure urgent interim stays, and defend against disproportionate regulatory penalties.
        </p>

        <div class="bio-quote-callout" style="margin: 2.5rem 0;">
          "In industrial and infrastructure disputes, a single ex-parte stay order or bank guarantee injunction can determine the survival of multi-crore ventures."
        </div>

        <div style="margin-top: 2rem;">
          <a href="{{ route('contact') }}" class="btn btn-gold">Schedule Sector Consultation</a>
        </div>
      </article>

      <aside class="sidebar">
        <div class="sidebar-widget">
          <h4 class="sidebar-title">All Working Sectors</h4>
          <ul class="sidebar-links-list">
            @foreach($sectors as $item)
            <li>
              <a href="{{ route('sectors.detail', $item['slug']) }}" class="{{ $item['slug'] === $sector['slug'] ? 'active' : '' }}" style="{{ $item['slug'] === $sector['slug'] ? 'color: var(--color-burgundy-royal); font-weight: 700;' : '' }}">
                {{ $item['title'] }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="sidebar-widget">
          <h4 class="sidebar-title">Related Working Areas</h4>
          <ul class="sidebar-links-list">
            @foreach(config('chambers.working_areas') as $area)
            <li>
              <a href="{{ route('services.detail', $area['slug']) }}">{{ $area['title'] }}</a>
            </li>
            @endforeach
          </ul>
        </div>
      </aside>
    </div>
  </section>

@endsection
