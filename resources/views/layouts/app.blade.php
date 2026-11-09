<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Advocate Vishalkumar R Tomar — The Chamber of V R Tomar | High Court of Gujarat')</title>
    <meta name="description" content="@yield('meta_description', 'The Chamber of V R Tomar, led by Advocate Vishalkumar R Tomar at High Court of Gujarat. Specialized legal counsel in Criminal Litigation, White Collar Crime, Cyber Crime, Civil Disputes, Constitutional Writs, and ADR.')">
    <meta name="keywords"
        content="Vishalkumar R Tomar, Advocate Vishal Tomar, Chamber of V R Tomar, High Court of Gujarat lawyer, Criminal lawyer Ahmedabad, White Collar Crime Gujarat, Cyber Crime advocate, Civil Litigation High Court of Gujarat, Motera lawyer, 4D Square Mall advocate">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Advocate Vishalkumar R Tomar — The Chamber of V R Tomar | High Court of Gujarat')">
    <meta property="og:description" content="@yield('meta_description', 'Appellate advocacy, criminal defense, white collar investigations, and constitutional writs before the High Court of Gujarat.')">
    <meta property="og:image" content="{{ asset('assets/images/home/about.jpeg') }}">
    <meta property="og:site_name" content="The Chamber of V R Tomar">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Advocate Vishalkumar R Tomar — The Chamber of V R Tomar')">
    <meta name="twitter:description" content="@yield('meta_description', 'Appellate advocacy, criminal defense, white collar investigations, and constitutional writs before the High Court of Gujarat.')">
    <meta name="twitter:image" content="{{ asset('assets/images/home/about.jpeg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/logo-monogram.svg') }}">

    <!-- Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('styles')

    <!-- Schema.org JSON-LD Structured Data for LegalService & Attorney -->
    <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "LegalService",
    "name": "The Chamber of V R Tomar",
    "legalName": "The Chamber of V R Tomar — Advocate Vishalkumar R Tomar",
    "image": "{{ asset('assets/images/home/about.jpeg') }}",
    "url": "{{ url('/') }}",
    "telephone": "{{ config('chambers.phone_tel', '+919898877690') }}",
    "email": "{{ config('chambers.email', 'info@thechamberofvrtomar.com') }}",
    "priceRange": "$$$",
    "address": {
      "@@type": "PostalAddress",
      "streetAddress": "17, SECOND FLOOR, 4D SQUARE MALL, VISAT - GANDHINAGAR HIGHWAY",
      "addressLocality": "Motera, Ahmedabad",
      "addressRegion": "Gujarat",
      "postalCode": "380005",
      "addressCountry": "IN"
    },
    "geo": {
      "@@type": "GeoCoordinates",
      "latitude": 23.0977,
      "longitude": 72.5996
    },
    "openingHoursSpecification": [
      {
        "@@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "10:00",
        "closes": "20:30"
      },
      {
        "@@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Saturday"],
        "opens": "11:00",
        "closes": "17:00"
      }
    ],
    "aggregateRating": {
      "@@type": "AggregateRating",
      "ratingValue": "5.0",
      "bestRating": "5",
      "worstRating": "1",
      "ratingCount": "40"
    },
    "founder": {
      "@@type": "Person",
      "name": "Vishalkumar R Tomar",
      "jobTitle": "Advocate, High Court of Gujarat",
      "worksFor": {
        "@@type": "LegalService",
        "name": "The Chamber of V R Tomar"
      }
    },
    "sameAs": [
      "https://www.instagram.com/adv_vrtomar/",
      "https://share.google/es88m4d7AuWNRN1Ag"
    ]
  }
  </script>
</head>

<body class="bg-ivory">

    <!-- SITE HEADER & NAVIGATION (LUXURY FLOATING MASTER HEADER) -->
    <header class="site-header hero-transparent-header" id="siteHeader">
        <!-- Top Information & Regulatory Compliance Bar -->
        <div class="top-disclaimer-bar">
            <div class="container top-bar-container">
                <div class="top-bar-left">
                    <span class="top-bar-item top-bar-address" title="Chambers Headquarters">
                        <svg class="top-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span class="top-address-full">17, SECOND FLOOR, 4D SQUARE MALL, VISAT - GANDHINAGAR HIGHWAY,
                            MOTERA, AHMEDABAD, GUJARAT</span>
                        <span class="top-address-short">4D Square Mall, Motera, Ahmedabad 380005</span>
                    </span>
                    <span class="top-bar-sep">·</span>
                    <a href="tel:{{ config('chambers.phone_tel', '+919898877690') }}" class="top-bar-item top-bar-phone"
                        title="Direct Chambers Phone">
                        <svg class="top-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                        </svg>
                        <span>{{ config('chambers.phone_display', '98988 77690') }}</span>
                    </a>
                    <span class="top-bar-sep">·</span>
                    <a href="mailto:{{ config('chambers.email', 'info@thechamberofvrtomar.com') }}"
                        class="top-bar-item top-bar-email" title="Direct Email">
                        <svg class="top-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <path d="M22 6l-10 7L2 6" />
                        </svg>
                        <span>{{ config('chambers.email', 'info@thechamberofvrtomar.com') }}</span>
                    </a>
                </div>
                <div class="top-bar-right">
                    <span class="top-bci-text">High Court of Gujarat Advocate</span>
                    <span class="top-bar-sep">|</span>
                    <a href="{{ route('disclaimer') }}" data-open-disclaimer class="top-bci-link">BCI Regulatory
                        Notice</a>
                </div>
            </div>
        </div>

        <div class="container header-inner">
            <a href="{{ route('home') }}" class="brand-link" aria-label="The Chamber of V R Tomar Homepage">
                <div class="brand-monogram-box">
                    <img src="{{ asset('assets/images/logo-monogram.svg') }}" alt="VT Monogram" width="44"
                        height="44">
                </div>
                <div class="brand-text">
                    <span class="brand-title">Vishalkumar R Tomar</span>
                    <span class="brand-subtitle">HIGH COURT OF GUJARAT</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="site-nav" aria-label="Main Navigation">
                <ul class="nav-list">
                    <li><a href="{{ route('home') }}"
                            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}"
                            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>

                    <!-- Services Dropdown (All 8 Practice Areas) -->
                    <li class="nav-item-has-dropdown">
                        <a href="{{ route('services') }}"
                            class="nav-link {{ request()->routeIs('services*') ? 'active' : '' }}">
                            Working Areas
                            <svg class="dropdown-arrow" viewBox="0 0 10 6" fill="currentColor">
                                <path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" fill="none"
                                    stroke-linecap="round" />
                            </svg>
                        </a>
                        <div class="nav-dropdown nav-dropdown-wide">
                            <div class="dropdown-grid">
                                @foreach (config('chambers.working_areas') as $area)
                                    <a href="{{ route('services.detail', $area['slug']) }}" class="dropdown-link">
                                        <strong>{{ $area['title'] }}</strong>
                                        <span>{{ Str::limit($area['summary'], 65) }}</span>
                                    </a>
                                @endforeach
                            </div>
                            <div class="dropdown-footer">
                                <a href="{{ route('services') }}" class="dropdown-view-all">Explore All 8 Working
                                    Areas Directory →</a>
                            </div>
                        </div>
                    </li>

                    <!-- Gallery Route -->
                    <li><a href="{{ route('gallery') }}"
                            class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>

                    <!-- Insights -->
                    <li><a href="{{ route('insights') }}"
                            class="nav-link {{ request()->routeIs('insights*') ? 'active' : '' }}">Insights</a></li>

                    <!-- Contact -->
                    <li><a href="{{ route('contact') }}"
                            class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>

                <a href="{{ route('contact') }}" class="btn-consultation-header"
                    id="headerConsultBtn">CONSULTATION</a>
            </nav>

            <!-- Mobile Hamburger -->
            <button class="mobile-nav-toggle" aria-label="Toggle Navigation Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- MOBILE NAVIGATION DRAWER -->
    <div class="mobile-drawer-overlay"></div>
    <aside class="mobile-drawer">
        <div>
            <div style="display: flex; align-items: center; gap: 0.8rem; margin-bottom: 2.2rem;">
                <img src="{{ asset('assets/images/logo-monogram.svg') }}" alt="VT" width="38"
                    height="38">
                <div>
                    <div
                        style="font-family: var(--font-serif); font-size: 1.25rem; color: #fff; text-transform: uppercase;">
                        Vishalkumar R Tomar</div>
                    <div
                        style="font-size: 0.58rem; color: var(--color-gold-antique); letter-spacing: 0.2em; text-transform: uppercase;">
                        THE CHAMBER OF V R TOMAR</div>
                </div>
            </div>

            <ul class="mobile-nav-list">
                <li><a href="{{ route('home') }}"
                        class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}"
                        class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Advocate</a>
                </li>
                <li><a href="{{ route('services') }}"
                        class="mobile-nav-link {{ request()->routeIs('services*') ? 'active' : '' }}">Working Areas (8
                        Specializations)</a></li>
                <li><a href="{{ route('gallery') }}"
                        class="mobile-nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Chambers &amp;
                        Event Gallery</a></li>
                <li><a href="{{ route('reviews') }}"
                        class="mobile-nav-link {{ request()->routeIs('reviews') ? 'active' : '' }}">Google Reviews (★
                        5.0 Rating)</a></li>
                <li><a href="{{ route('insights') }}"
                        class="mobile-nav-link {{ request()->routeIs('insights*') ? 'active' : '' }}">Legal
                        Insights</a></li>
                <li><a href="{{ route('contact') }}"
                        class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact &amp;
                        Appointments</a></li>
                <li><a href="{{ route('disclaimer') }}" class="mobile-nav-link"
                        style="font-size: 1.1rem; color: var(--color-gold-antique);">Regulatory Disclaimer</a></li>
            </ul>
        </div>

        <div class="mobile-drawer-footer">
            <a href="{{ route('contact') }}" class="btn btn-gold" style="width: 100%;">Schedule Consultation</a>
            <div
                style="font-size: 0.72rem; color: var(--color-text-light-muted); margin-top: 1.25rem; line-height: 1.6;">
                <strong style="color: #FFFFFF;">THE CHAMBER OF V R TOMAR</strong><br>
                17, SECOND FLOOR, 4D SQUARE MALL, VISAT - GANDHINAGAR HIGHWAY, MOTERA, AHMEDABAD, GUJARAT<br>
                <span style="display: inline-block; margin-top: 0.4rem;">
                    Direct: <a href="tel:{{ config('chambers.phone_tel', '+919898877690') }}"
                        style="color: var(--color-gold-antique); font-weight: 700; text-decoration: none;">{{ config('chambers.phone_display', '98988 77690') }}</a>
                </span><br>
                Email: {{ config('chambers.email', 'info@thechamberofvrtomar.com') }}
            </div>
        </div>
    </aside>

    <!-- MAIN APPLICATION CONTENT -->
    <main id="mainContent">
        @yield('content')
    </main>

    <!-- SITE FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: Brand & Philosophy -->
                <div>
                    <div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 1rem;">
                        <img src="{{ asset('assets/images/logo-monogram.svg') }}" alt="VT Monogram" width="40"
                            height="40">
                        <div>
                            <div
                                style="font-family: var(--font-serif); font-size: 1.35rem; color: #fff; font-weight: 700; text-transform: uppercase;">
                                THE CHAMBER OF V R TOMAR</div>
                            <div
                                style="font-size: 0.6rem; color: var(--color-gold-antique); letter-spacing: 0.22em; text-transform: uppercase;">
                                Advocate Vishalkumar R Tomar · High Court of Gujarat</div>
                        </div>
                    </div>
                    <p class="footer-brand-desc">
                        Strategic counsel, appellate rigor, and high-stakes courtroom representation before the High
                        Court of Gujarat, Sessions Courts, NCLT, and Arbitral Tribunals in Ahmedabad.
                    </p>

                    <div style="margin-top: 1.25rem; display: flex; align-items: center; gap: 1rem;">
                        <a href="https://www.instagram.com/adv_vrtomar/" target="_blank" rel="noopener"
                            class="btn-outline-gold"
                            style="font-size: 0.7rem; padding: 0.4rem 0.9rem; text-decoration: none;">
                            Instagram @adv_vrtomar
                        </a>
                        <a href="https://share.google/es88m4d7AuWNRN1Ag" target="_blank" rel="noopener"
                            class="btn-outline-gold"
                            style="font-size: 0.7rem; padding: 0.4rem 0.9rem; text-decoration: none; border-color: #F4B400; color: #F4B400;">
                            Google Reviews ★ 5.0 (40+)
                        </a>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h4 class="footer-col-title">Chambers Navigation</h4>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Advocate Vishalkumar R Tomar</a></li>
                        <li><a href="{{ route('services') }}">8 Practice Areas Directory</a></li>
                        <li><a href="{{ route('gallery') }}">Chambers &amp; Event Gallery</a></li>
                        <li><a href="{{ route('reviews') }}">Client Reviews (5.0 Rating)</a></li>
                        <li><a href="{{ route('insights') }}">Legal Insights &amp; Articles</a></li>
                        <li><a href="{{ route('contact') }}">Contact &amp; Appointments</a></li>
                    </ul>
                </div>

                <!-- Col 3: Key Practice Areas -->
                <div>
                    <h4 class="footer-col-title">Our Working Areas</h4>
                    <ul class="footer-links-list">
                        @foreach (config('chambers.working_areas') as $area)
                            <li><a href="{{ route('services.detail', $area['slug']) }}">{{ $area['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Col 4: Contact & Office -->
                <div>
                    <h4 class="footer-col-title">Chambers Headquarters</h4>
                    <p
                        style="font-size: 0.88rem; color: var(--color-text-light-muted); margin-bottom: 0.75rem; line-height: 1.6;">
                        <strong>THE CHAMBER OF V R TOMAR</strong><br>
                        17, SECOND FLOOR, 4D SQUARE MALL, VISAT - GANDHINAGAR HIGHWAY, MOTERA, AHMEDABAD, GUJARAT
                    </p>
                    <p style="font-size: 0.88rem; color: var(--color-gold-antique); margin-bottom: 0.5rem;">
                        Email: <a href="mailto:{{ config('chambers.email') }}"
                            style="color: inherit; text-decoration: underline;">{{ config('chambers.email') }}</a>
                    </p>
                    <p style="font-size: 0.88rem; color: var(--color-text-light-muted); margin-bottom: 0.5rem;">
                        Direct Chambers Line: <a href="tel:{{ config('chambers.phone_tel', '+919898877690') }}"
                            style="color: #FFFFFF; font-weight: 600;">{{ config('chambers.phone_display', '98988 77690') }}</a>
                    </p>
                </div>
            </div>

            <!-- Bar Council of India Mandatory Advisory Excerpt -->
            <div class="footer-bci-notice">
                <strong style="color: var(--color-gold-antique); display: block; margin-bottom: 0.35rem;">BAR COUNCIL
                    OF INDIA REGULATORY NOTICE</strong>
                As per the rules of the Bar Council of India, advocates are prohibited from soliciting work or
                advertising in any form. This website is solely intended for informational purposes and should not be
                construed as legal advice, solicitation, or an advertisement. By visiting this platform, the user
                acknowledges that the information provided is solely at their own voluntary request.
            </div>

            <!-- Sub-Footer -->
            <div class="footer-bottom">
                <div>
                    © {{ date('Y') }} The Chamber of V R Tomar · Advocate Vishalkumar R Tomar. All Rights Reserved.
                </div>
                <div class="footer-bottom-links">
                    <a href="{{ route('disclaimer') }}" data-open-disclaimer>Legal Disclaimer</a>
                    <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                    <a href="{{ route('contact') }}">Chambers Access</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCROLL TO TOP BUTTON -->
    <button class="scroll-top-btn" id="scrollTopBtn" aria-label="Scroll to top of page">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2">
            <path d="M18 15l-6-6-6 6" />
        </svg>
    </button>

    <!-- BAR COUNCIL OF INDIA DISCLAIMER POPUP MODAL -->
    <div class="bci-modal-overlay" id="bciDisclaimerModal" role="dialog" aria-modal="true"
        aria-labelledby="bciModalTitle">
        <div class="bci-modal-card">
            <div class="bci-modal-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8">
                    <path d="M12 3v18M3 7h18M6 7l-3 6h6l-3-6zM18 7l-3 6h6l-3-6z" />
                </svg>
            </div>
            <div class="bci-modal-subtitle">THE CHAMBER OF V R TOMAR · HIGH COURT OF GUJARAT</div>
            <h2 class="bci-modal-title" id="bciModalTitle">Legal Disclaimer &amp; Confirmation</h2>
            <p class="bci-modal-preamble">
                The Bar Council of India restricts solicitation of legal work and advertising by advocates. The contents
                of this website are published solely for general informational purposes and do not constitute legal
                advice or legal solicitation.
            </p>

            <div class="bci-modal-grid">
                <div class="bci-modal-point">
                    <div class="bci-point-title">No Attorney-Client Privilege</div>
                    <p class="bci-point-desc">Accessing or browsing this website does not establish an attorney-client
                        relationship between Advocate Vishalkumar R Tomar and the user.</p>
                </div>
                <div class="bci-modal-point">
                    <div class="bci-point-title">Informational Non-Solicitation</div>
                    <p class="bci-point-desc">This platform is maintained strictly to provide general information
                        regarding the advocate’s areas of practice upon user request.</p>
                </div>
                <div class="bci-modal-point">
                    <div class="bci-point-title">Confidentiality Notice</div>
                    <p class="bci-point-desc">Unsolicited information communicated prior to formal engagement and
                        conflict clearance may not be treated as privileged.</p>
                </div>
                <div class="bci-modal-point">
                    <div class="bci-point-title">Jurisdiction</div>
                    <p class="bci-point-desc">All matters arising out of the use of this website shall be subject to
                        the exclusive jurisdiction of the competent courts in Ahmedabad, Gujarat.</p>
                </div>
            </div>

            <div class="bci-modal-consent">
                By clicking <strong>"I Agree &amp; Proceed"</strong>, you acknowledge that you are visiting this
                platform voluntarily to seek informational insight regarding The Chamber of V R Tomar.
            </div>

            <div class="bci-modal-actions">
                <button class="btn btn-outline-light" id="bciExitBtn">Exit Site</button>
                <button class="btn btn-gold" id="bciAgreeBtn">I Agree &amp; Proceed</button>
            </div>

            <div class="bci-modal-location">
                Motera · Ahmedabad · Gujarat · India
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')

</body>

</html>
