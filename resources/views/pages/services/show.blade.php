@extends('layouts.app')

@section('title', $service['title'] . ' — Advocate Vishalkumar R Tomar | High Court of Gujarat')
@section('meta_description', $service['summary'] . ' Chambers of Vishalkumar R Tomar, Motera, Ahmedabad.')

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
                <a href="{{ route('services') }}">WORKING AREAS</a>
                <span class="sep">/</span>
                <span class="curr">{{ strtoupper($service['title']) }}</span>
            </nav>

            <div class="hero-kicker-cinematic">
                <span class="kicker-line"></span>
                <span>{{ $service['badge'] }}</span>
            </div>

            <h1 class="page-cinematic-title">
                {{ strtoupper($service['title']) }} <br>
                <span class="headline-gold">STRATEGIC ADVOCACY.</span>
            </h1>

            <p class="page-cinematic-desc">
                {{ $service['summary'] }}
            </p>

            <div class="hero-cta-group" style="opacity: 1; transform: none; margin-bottom: 2rem;">
                <a href="{{ route('contact') }}?practice={{ $service['slug'] }}" class="btn-gold-solid">
                    <span>SCHEDULE CONSULTATION</span>
                    <svg viewBox="0 0 16 16" fill="currentColor" class="cta-arrow-icon">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 01.5-.5h11.793l-3.147-3.146a.5.5 0 01.708-.708l4 4a.5.5 0 010 .708l-4 4a.5.5 0 01-.708-.708L13.293 8.5H1.5A.5.5 0 011 8z" />
                    </svg>
                </a>
                <a href="{{ route('services') }}" class="btn-gold-ghost">ALL 8 PRACTICE AREAS</a>
            </div>
        </div>
    </section>

    <!-- SERVICE DETAILS SECTION -->
    <section class="section bg-ivory">
        <div class="container layout-with-sidebar">

            <!-- Main Content Column -->
            <article class="article-content">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div class="card-practice-icon" style="margin-bottom: 0;">
                        <img src="{{ asset($service['icon']) }}" alt="{{ $service['title'] }} Icon" width="48"
                            height="48">
                    </div>
                    <div>
                        <div
                            style="font-size: 0.72rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em; text-transform: uppercase;">
                            SPECIALIZED CHAMBER PRACTICE
                        </div>
                        <h2 style="font-size: 2.2rem; color: var(--color-burgundy-deep); margin-bottom: 0;">
                            {{ $service['title'] }}
                        </h2>
                    </div>
                </div>

                <p class="lead"
                    style="font-size: 1.15rem; color: var(--color-text-charcoal); line-height: 1.7; margin-bottom: 2rem;">
                    {{ $service['description'] }}
                </p>

                <!-- Focus Areas Box -->
                <div
                    style="background: #FFFFFF; border: 1px solid #E9DFD5; border-top: 3px solid var(--color-gold-antique); padding: 2rem; margin-bottom: 2.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                    <h3
                        style="font-family: var(--font-serif); font-size: 1.35rem; color: var(--color-burgundy-deep); margin-bottom: 1.25rem;">
                        Key Facets &amp; Procedural Scope
                    </h3>
                    <ul style="padding-left: 1.2rem; line-height: 1.8; color: var(--color-text-secondary); margin: 0;">
                        @foreach ($service['focus_points'] as $point)
                            <li style="margin-bottom: 0.5rem;"><strong
                                    style="color: var(--color-text-charcoal);">{{ $point }}</strong></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Applicable Statutes -->
                <div style="margin-bottom: 2.5rem;">
                    <h3
                        style="font-family: var(--font-serif); font-size: 1.35rem; color: var(--color-burgundy-deep); margin-bottom: 1rem;">
                        Statutory &amp; Legislative Frameworks
                    </h3>
                    <p style="font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1rem;">
                        Our counsel and pleadings in this domain regularly invoke and litigate under the following key
                        enactments:
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.6rem;">
                        @foreach ($service['statutes'] as $statute)
                            <span
                                style="background: #FFFFFF; border: 1px solid #D8C08A; padding: 0.4rem 0.9rem; font-size: 0.8rem; color: var(--color-burgundy-deep); font-weight: 600; border-radius: var(--radius-xs);">
                                § {{ $statute }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Advocacy Approach Callout -->
                <div class="bio-quote-callout" style="margin-bottom: 2.5rem;">
                    "Effective advocacy in {{ strtolower($service['title']) }} requires both forensic mastery of the
                    evidentiary paper trail and an instinctive ability to articulate core legal propositions under bench
                    pressure."
                    <div
                        style="font-size: 0.78rem; font-style: normal; margin-top: 0.5rem; color: var(--color-gold-antique); font-weight: 700;">
                        — Advocate Vishalkumar R Tomar · High Court of Gujarat
                    </div>
                </div>

                <!-- Client Reassurance Note -->
                <div
                    style="background: #FAF7F4; border-left: 3px solid var(--color-burgundy-royal); padding: 1.5rem 1.75rem;">
                    <h4 style="font-size: 1.05rem; color: var(--color-burgundy-deep); margin-bottom: 0.5rem;">
                        Mentorship &amp; Transparent Guidance
                    </h4>
                    <p style="font-size: 0.9rem; color: var(--color-text-secondary); line-height: 1.6; margin: 0;">
                        We explain complex statutory procedures in accessible language, outline immediate precautions, and
                        keep clients fully informed through every step. Every consultation is conducted with strict
                        confidentiality.
                    </p>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="sidebar">
                <!-- Quick Consultation Box -->
                <div class="sidebar-widget"
                    style="background: var(--color-burgundy-deep); color: #FFFFFF; border-color: var(--color-gold-antique);">
                    <div
                        style="font-size: 0.68rem; color: var(--color-gold-antique); letter-spacing: 0.2em; text-transform: uppercase; font-weight: 700; margin-bottom: 0.5rem;">
                        DIRECT ADVOCATE ACCESS
                    </div>
                    <h3 style="font-family: var(--font-serif); font-size: 1.35rem; color: #FFFFFF; margin-bottom: 0.75rem;">
                        Schedule Matter Review
                    </h3>
                    <p
                        style="font-size: 0.88rem; color: var(--color-text-light-muted); line-height: 1.5; margin-bottom: 1.5rem;">
                        Request a preliminary case intake with Advocate Vishalkumar R Tomar regarding
                        {{ $service['title'] }}.
                    </p>
                    <a href="{{ route('contact') }}?practice={{ $service['slug'] }}" class="btn btn-gold"
                        style="width: 100%; text-align: center;">
                        Enquire Now
                    </a>
                </div>

                <!-- Working Areas Directory Nav -->
                <div class="sidebar-widget">
                    <h4 class="sidebar-title">All 8 Working Areas</h4>
                    <ul class="sidebar-links-list">
                        @foreach ($workingAreas as $item)
                            <li>
                                <a href="{{ route('services.detail', $item['slug']) }}"
                                    class="{{ $item['slug'] === $service['slug'] ? 'active' : '' }}"
                                    style="{{ $item['slug'] === $service['slug'] ? 'color: var(--color-burgundy-royal); font-weight: 700;' : '' }}">
                                    {{ $item['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Chambers Location Widget -->
                <div class="sidebar-widget">
                    <h4 class="sidebar-title">Chambers Headquarters</h4>
                    <p
                        style="font-size: 0.85rem; color: var(--color-text-secondary); line-height: 1.5; margin-bottom: 1rem;">
                        <strong>THE CHAMBER OF V R TOMAR</strong><br>
                        SECOND FLOOR, 4D SQUARE MALL, 13,<br>
                        VISAT-GANDHINAGAR HIGHWAY, Motera,<br>
                        Ahmedabad, Gujarat 380005, India
                    </p>
                    <div style="font-size: 0.85rem; color: var(--color-burgundy-deep); font-weight: 600;">
                        Email: <a href="mailto:{{ config('chambers.email') }}">{{ config('chambers.email') }}</a><br>
                        Direct: <a
                            href="tel:{{ config('chambers.phone_tel', '+919898877690') }}">{{ config('chambers.phone_display', '98988 77690') }}</a>
                    </div>
                </div>
            </aside>

        </div>
    </section>

@endsection
