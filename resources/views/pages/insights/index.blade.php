@extends('layouts.app')

@section('title', 'Legal Insights & Scholarship — The Chamber of V R Tomar | Gujarat High Court')
@section('meta_description', 'Jurisprudential analysis, High Court case digests, and strategic legal commentary by Advocate Vishalkumar R Tomar and his chambers.')

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-insights">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <span class="curr">INSIGHTS</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>LEGAL SCHOLARSHIP &amp; JURISPRUDENCE</span>
      </div>

      <h1 class="page-cinematic-title">
        STATUTORY RIGOR. <br>
        <span class="headline-gold">PRACTICAL INSIGHTS.</span>
      </h1>

      <p class="page-cinematic-desc">
        Rigorous legal commentary examining Gujarat High Court jurisprudence, Supreme Court constitutional precedents, and evolving procedural doctrines.
      </p>

      <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
        <span class="badge-dot"></span>
        <span>HIGH COURT PRECEDENTS · STATUTORY ANALYSIS · CASE DIGESTS</span>
      </div>
    </div>
  </section>

  <!-- INSIGHTS GRID -->
  <section class="section bg-ivory">
    <div class="container">
      <div class="section-header">
        <div class="eyebrow">Publications</div>
        <h2>Jurisprudential Articles</h2>
        <p class="section-desc">
          Commentary from the chambers of Advocate Vishalkumar R Tomar on high-stakes constitutional, commercial, and appellate questions.
        </p>
      </div>

      <div class="grid-3">
        @foreach($insights as $article)
        <article class="card-article">
          <div class="card-article-thumb">
            <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}">
          </div>
          <div class="card-article-body">
            <div class="card-article-meta">
              <span class="pill-tag">{{ $article['category'] }}</span>
              <span>• {{ $article['read_time'] }}</span>
            </div>
            <h3 class="card-article-title">
              <a href="{{ route('insights.detail', $article['slug']) }}" style="color: inherit; text-decoration: none;">
                {{ $article['title'] }}
              </a>
            </h3>
            <p class="card-article-excerpt">
              {{ $article['summary'] }}
            </p>
            <div style="margin-top: auto; padding-top: 1rem;">
              <a href="{{ route('insights.detail', $article['slug']) }}" class="editorial-link">
                Read Full Commentary →
              </a>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </section>

@endsection

