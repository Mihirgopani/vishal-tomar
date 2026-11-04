@extends('layouts.app')

@section('title', $insight['title'] . ' — The Chamber of V R Tomar')
@section('meta_description', $insight['summary'])

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
        <a href="{{ route('insights') }}">INSIGHTS</a>
        <span class="sep">/</span>
        <span class="curr">{{ strtoupper(Str::limit($insight['title'], 35)) }}</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>{{ $insight['category'] }} · {{ $insight['date'] }}</span>
      </div>

      <h1 class="page-cinematic-title" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem);">
        {{ $insight['title'] }}
      </h1>

      <p class="page-cinematic-desc">
        {{ $insight['summary'] }}
      </p>

      <div class="hero-cta-group" style="opacity: 1; transform: none; margin-bottom: 2rem;">
        <a href="{{ route('contact') }}" class="btn-gold-solid">
          <span>SCHEDULE CONSULTATION</span>
        </a>
        <a href="{{ route('insights') }}" class="btn-gold-ghost">ALL ARTICLES</a>
      </div>
    </div>
  </section>

  <!-- ARTICLE BODY -->
  <section class="section bg-ivory">
    <div class="container layout-with-sidebar">
      <article class="article-content">
        <div style="margin-bottom: 2rem;">
          <img src="{{ asset($insight['image']) }}" alt="{{ $insight['title'] }}" style="width: 100%; border: 1px solid #E9DFD5; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
        </div>

        <div style="font-size: 0.82rem; color: #9C9499; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 0.1em;">
          Authored by The Chamber of V R Tomar · Advocate Vishalkumar R Tomar · Published {{ $insight['date'] }}
        </div>

        <p class="lead" style="line-height: 1.8; margin-bottom: 1.75rem;">
          {{ $insight['summary'] }}
        </p>

        <h3 style="font-family: var(--font-serif); font-size: 1.5rem; color: var(--color-burgundy-deep); margin-bottom: 1rem;">
          Judicial Review Standards &amp; Evidentiary Thresholds
        </h3>

        <p style="line-height: 1.8; margin-bottom: 1.5rem;">
          In high-stakes writ litigations under Article 226 of the Constitution, constitutional courts scrutinize decision-making processes rather than second-guessing administrative decisions. Arbitrariness, Wednesbury unreasonableness, bias, and violation of statutory procedure form the primary pillars of successful challenges.
        </p>

        <div class="bio-quote-callout" style="margin: 2.5rem 0;">
          "The hallmark of constitutional advocacy is framing the grievance not as mere commercial disappointment, but as a manifest breach of rule of law and equality before state organs."
        </div>

        <p style="line-height: 1.8; margin-bottom: 2rem;">
          Advocate Vishalkumar R Tomar structures Special Civil Applications before the High Court of Gujarat with exhaustive cross-referencing to leading Supreme Court division bench judgments, ensuring the petition survives preliminary objections and secures protective ad-interim relief.
        </p>

        <div style="background: #FAF7F4; border: 1px solid #E9DFD5; padding: 1.75rem; border-left: 3px solid var(--color-gold-antique); margin-top: 3rem;">
          <h4 style="font-size: 1.1rem; color: var(--color-burgundy-deep); margin-bottom: 0.5rem;">
            Consult Chambers on Similar Precedents
          </h4>
          <p style="font-size: 0.9rem; color: var(--color-text-secondary); margin-bottom: 1rem;">
            Facing a government tender disqualification, administrative penalty, or contractual cancellation in Gujarat? Connect with our registry for immediate legal evaluation.
          </p>
          <a href="{{ route('contact') }}" class="btn btn-gold">Request Chambers Appointment</a>
        </div>
      </article>

      <aside class="sidebar">
        <div class="sidebar-widget">
          <h4 class="sidebar-title">Other Insights</h4>
          <ul class="sidebar-links-list">
            @foreach($relatedInsights as $rel)
            <li>
              <a href="{{ route('insights.detail', $rel['slug']) }}">{{ $rel['title'] }}</a>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="sidebar-widget">
          <h4 class="sidebar-title">Related Working Areas</h4>
          <ul class="sidebar-links-list">
            @foreach(array_slice(config('chambers.working_areas'), 0, 4) as $area)
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

