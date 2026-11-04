@extends('layouts.app')

@section('title', 'Chambers & Engagements Gallery — The Chamber of V R Tomar')
@section('meta_description', 'Visual archive of Advocate Vishalkumar R Tomar: legal summits, dignitary interactions, public appearances, client consultations, and chambers life in Ahmedabad.')

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-gallery">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <span class="curr">GALLERY</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>VISUAL ARCHIVE &amp; DIGNITARY ENGAGEMENTS</span>
      </div>

      <h1 class="page-cinematic-title">
        CHAMBERS &amp; PUBLIC PRESENCE. <br>
        <span class="headline-gold">EVENTS &amp; ENGAGEMENTS.</span>
      </h1>

      <p class="page-cinematic-desc">
        A photographic record of legal conferences, keynote discourses, dignitary meetings, high-profile advisories, and the dedicated team at The Chamber of V R Tomar.
      </p>

      <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
        <span class="badge-dot"></span>
        <span>LEGAL CONCLAVES · DIGNITARY ADVISORY · COURT ADVOCACY</span>
      </div>
    </div>
  </section>

  <!-- GALLERY MAIN SECTION -->
  <section class="section bg-ivory">
    <div class="container">
      
      <!-- Filter Navigation Bar -->
      <div class="gallery-filter-nav" id="galleryFilterNav">
        <button class="gallery-filter-btn active" data-filter="all">All Engagements</button>
        <button class="gallery-filter-btn" data-filter="chambers">Chambers &amp; Counsel</button>
        <button class="gallery-filter-btn" data-filter="engagements">Client Advisories</button>
        <button class="gallery-filter-btn" data-filter="celebrities">Public Figures &amp; Celebrities</button>
        <button class="gallery-filter-btn" data-filter="events">Conclaves &amp; Summits</button>
      </div>

      <!-- Gallery Grid -->
      <div class="gallery-masonry-grid" id="galleryGrid">
        @foreach($gallery as $idx => $item)
        <article class="gallery-card" data-category="{{ $item['category'] }}" data-src="{{ asset($item['src']) }}" data-title="{{ $item['title'] }}" data-subtitle="{{ $item['subtitle'] }}" data-tag="{{ $item['category_label'] }}">
          <div class="gallery-card-thumb-wrap {{ str_contains($item['src'], 'other-') || str_contains($item['src'], 'about') ? 'portrait-aspect' : '' }}">
            <img src="{{ asset($item['src']) }}" alt="{{ $item['alt'] }}" class="gallery-card-img" loading="lazy">
            <div class="gallery-card-overlay">
              <div style="color: #fff;">
                <span style="font-size: 0.65rem; color: var(--color-gold-antique); font-weight: 700; letter-spacing: 0.15em; text-transform: uppercase; display: block; margin-bottom: 0.2rem;">
                  {{ $item['category_label'] }}
                </span>
                <strong style="font-family: var(--font-serif); font-size: 1.1rem; display: block;">{{ $item['title'] }}</strong>
              </div>
              <div class="gallery-overlay-icon" title="View Full Resolution">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="gallery-card-caption">
            <span class="gallery-tag-pill">{{ $item['category_label'] }}</span>
            <h3 class="gallery-card-title">{{ $item['title'] }}</h3>
            <p class="gallery-card-subtitle">{{ $item['subtitle'] }}</p>
          </div>
        </article>
        @endforeach
      </div>

      <!-- Regulatory Notice -->
      <div style="margin-top: 4rem; padding: 1.5rem 2rem; background: #FAF7F4; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); font-size: 0.85rem; color: var(--color-text-secondary); line-height: 1.6;">
        <strong style="color: var(--color-burgundy-deep); display: block; margin-bottom: 0.35rem; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem;">
          Professional Presentation &amp; Dignity Notice
        </strong>
        Photographic materials published herein depict official participation in public summits, felicitation ceremonies, legal seminars, and civic engagements. In accordance with Bar Council of India standards, images are shared strictly for archival and informational purposes without any solicitous or promotional intent.
      </div>

    </div>
  </section>

  <!-- LIGHTBOX MODAL -->
  <div class="gallery-lightbox-modal" id="galleryLightbox">
    <div class="lightbox-content-box">
      <button class="lightbox-close-btn" id="lightboxCloseBtn" aria-label="Close Lightbox">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M18 6L6 18M6 6l12 12"/>
        </svg>
      </button>

      <div class="lightbox-img-wrap">
        <img src="" alt="" id="lightboxImg">
      </div>

      <div class="lightbox-details">
        <span class="gallery-tag-pill" id="lightboxTag">Category</span>
        <h3 style="font-family: var(--font-serif); font-size: 1.4rem; color: var(--color-burgundy-deep); margin-bottom: 0.25rem;" id="lightboxTitle">
          Title
        </h3>
        <p style="font-size: 0.9rem; color: var(--color-text-secondary); margin: 0;" id="lightboxSubtitle">
          Subtitle
        </p>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
  // Gallery Filtering Logic
  const filterBtns = document.querySelectorAll('.gallery-filter-btn');
  const cards = document.querySelectorAll('.gallery-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      cards.forEach(card => {
        if (filter === 'all' || card.getAttribute('data-category') === filter) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Lightbox Modal Logic
  const lightbox = document.getElementById('galleryLightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxTitle = document.getElementById('lightboxTitle');
  const lightboxSubtitle = document.getElementById('lightboxSubtitle');
  const lightboxTag = document.getElementById('lightboxTag');
  const closeBtn = document.getElementById('lightboxCloseBtn');

  cards.forEach(card => {
    card.addEventListener('click', () => {
      const src = card.getAttribute('data-src');
      const title = card.getAttribute('data-title');
      const subtitle = card.getAttribute('data-subtitle');
      const tag = card.getAttribute('data-tag');

      lightboxImg.src = src;
      lightboxImg.alt = title;
      lightboxTitle.textContent = title;
      lightboxSubtitle.textContent = subtitle;
      lightboxTag.textContent = tag;

      lightbox.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeLightbox() {
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', closeLightbox);
  }

  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      closeLightbox();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightbox.classList.contains('active')) {
      closeLightbox();
    }
  });
});
</script>
@endpush
