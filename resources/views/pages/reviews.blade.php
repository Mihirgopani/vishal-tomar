@extends('layouts.app')

@section('title', 'Google Client Reviews (★ 5.0 Rating) — The Chamber of V R Tomar')
@section('meta_description', 'Read verified 5.0-star Google reviews and client testimonials for Advocate Vishalkumar R
    Tomar and his legal team in Ahmedabad, Gujarat.')

@section('content')

    <!-- FIXED CINEMATIC PAGE HERO -->
    <section class="page-hero-cinematic page-hero-reviews">
        <div class="hero-overlay-top"></div>
        <div class="hero-overlay-left"></div>
        <div class="hero-overlay-bottom"></div>

        <div class="container hero-content-relative">
            <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">HOME</a>
                <span class="sep">/</span>
                <span class="curr">CLIENT REVIEWS</span>
            </nav>

            <div class="hero-kicker-cinematic">
                <span class="kicker-line"></span>
                <span>VERIFIED GOOGLE CLIENT TESTIMONIALS</span>
            </div>

            <h1 class="page-cinematic-title">
                UNWAVERING TRUST. <br>
                <span class="headline-gold">PROVEN ADVOCACY.</span>
            </h1>

            <p class="page-cinematic-desc">
                Authentic reviews and reflections from corporate clients, families, and individuals whose liberties, rights,
                and commercial interests were championed by Advocate Vishalkumar R Tomar.
            </p>

            <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
                <span class="badge-dot"></span>
                <span>★ 5.0 RATING · 40+ VERIFIED GOOGLE BUSINESS REVIEWS</span>
            </div>
        </div>
    </section>

    <!-- REVIEWS CONTAINER -->
    <section class="section bg-ivory">
        <div class="container">

            <!-- Summary Google Card -->
            <div class="reviews-summary-card">
                <div class="reviews-score-block">
                    <div class="reviews-score-num">5.0</div>
                    <div>
                        <div class="reviews-stars-wrap">
                            @for ($i = 0; $i < 5; $i++)
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            @endfor
                        </div>
                        <div style="font-size: 1.25rem; font-weight: 700; color: #fff;">
                            THE CHAMBER OF V R TOMAR
                        </div>
                        <div style="font-size: 0.88rem; color: var(--color-gold-champagne); margin-top: 0.2rem;">
                            Second Floor, 4D Square Mall, 13, Visat-Gandhinagar Highway, Motera, Ahmedabad, Gujarat 380005
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
                    <a href="{{ config('chambers.social.google_reviews') }}" target="_blank" rel="noopener"
                        class="btn btn-gold" style="white-space: nowrap;">
                        Open Google Reviews Profile ↗
                    </a>
                </div>
            </div>

            <!-- All Reviews Grid -->
            <div class="grid-3" style="gap: 2rem;">
                @foreach ($reviews as $rev)
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
                                    <path fill="#4285F4"
                                        d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z" />
                                    <path fill="#34A853"
                                        d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z" />
                                    <path fill="#FBBC05"
                                        d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z" />
                                    <path fill="#EA4335"
                                        d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z" />
                                </svg>
                            </div>
                        </div>

                        <div class="review-card-stars">
                            @for ($i = 0; $i < $rev['rating']; $i++)
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            @endfor
                        </div>

                        <div class="review-highlight-callout">
                            "{{ $rev['highlight'] }}"
                        </div>

                        <div class="review-card-text">
                            {{ $rev['text'] }}
                        </div>

                        <div class="review-card-footer">
                            <span>Posted {{ $rev['time'] }}</span>
                            <span style="color: #4B1929; font-weight: 600;">Verified Case Counsel</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Regulatory Notice -->
            <div
                style="margin-top: 4rem; padding: 1.5rem 2rem; background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); font-size: 0.85rem; color: var(--color-text-secondary); line-height: 1.6;">
                <strong
                    style="color: var(--color-burgundy-deep); display: block; margin-bottom: 0.35rem; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem;">
                    Regulatory Compliance Notice Regarding Testimonials
                </strong>
                The client reviews published above are genuine, publicly accessible feedback provided independently by
                clients on Google Maps / Google Business Profile. In compliance with Bar Council of India guidelines, these
                are exhibited solely to illustrate authentic client experiences and should not be construed as a guarantee
                of results in any legal matter. Every legal dispute depends upon its individual facts, applicable law, and
                judicial discretion.
            </div>

        </div>
    </section>

    <!-- CTA STRIP -->
    <section class="cta-banner">
        <div class="container cta-grid">
            <div>
                <div class="eyebrow" style="color: var(--color-gold-antique);">Matter Consultation</div>
                <h2 class="cta-title">Require Trusted Legal Guidance?</h2>
                <p class="cta-desc">
                    Experience the same dedicated, clear, and reassuring counsel that has earned the complete trust of over
                    40 clients across Gujarat.
                </p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-gold" style="width: 100%; max-width: 280px;">Request
                    Consultation</a>
            </div>
        </div>
    </section>

@endsection
