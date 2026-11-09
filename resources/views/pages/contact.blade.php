@extends('layouts.app')

@section('title', 'Contact Chambers & Appointments — The Chamber of V R Tomar | Ahmedabad')
@section('meta_description',
    'Schedule a consultation with Advocate Vishalkumar R Tomar at 4D Square Mall, Motera,
    Ahmedabad. Email: info@thechamberofvrtomar.com. Phone: +91 98988 77690.')

@section('content')

    <!-- FIXED CINEMATIC PAGE HERO -->
    <section class="page-hero-cinematic page-hero-contact">
        <div class="hero-overlay-top"></div>
        <div class="hero-overlay-left"></div>
        <div class="hero-overlay-bottom"></div>

        <div class="container hero-content-relative">
            <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">HOME</a>
                <span class="sep">/</span>
                <span class="curr">CONTACT CHAMBERS</span>
            </nav>

            <div class="hero-kicker-cinematic">
                <span class="kicker-line"></span>
                <span>CHAMBERS COORDINATION &amp; CONSULTATION</span>
            </div>

            <h1 class="page-cinematic-title">
                DIRECT ADVOCACY. <br>
                <span class="headline-gold">DISCREET CONSULTATION.</span>
            </h1>

            <p class="page-cinematic-desc">
                Connect with the Chambers of Advocate Vishalkumar R Tomar to coordinate High Court filings, bail hearings,
                commercial arbitral retainers, or emergency stay mentions in Ahmedabad.
            </p>

            <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
                <span class="badge-dot"></span>
                <span>THE CHAMBER OF V R TOMAR · 4D SQUARE MALL, MOTERA, AHMEDABAD</span>
            </div>
        </div>
    </section>

    <!-- CONTACT GRID & FORM SECTION -->
    <section class="section bg-ivory">
        <div class="container contact-grid">

            <!-- Left: Chambers Details & Location -->
            <div>
                <div class="eyebrow">Chambers Headquarters</div>
                <h2>Coordination &amp; Consultation Protocol</h2>
                <p class="lead" style="margin-bottom: 2rem;">
                    Consultations are conducted at our Ahmedabad chambers by prior appointment, ensuring uninterrupted
                    attention to complex case briefs.
                </p>

                <div class="contact-info-box">
                    <!-- Office Address -->
                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <div class="info-title">Chambers Address</div>
                            <div class="info-text">
                                <strong>THE CHAMBER OF V R TOMAR</strong><br>
                                17, SECOND FLOOR, 4D SQUARE MALL, VISAT - GANDHINAGAR HIGHWAY, MOTERA, AHMEDABAD, GUJARAT
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div>
                            <div class="info-title">Formal Enquiries</div>
                            <div class="info-text">
                                Primary: <a href="mailto:info@thechamberofvrtomar.com"
                                    style="color: var(--color-burgundy-royal); font-weight: 700;">info@thechamberofvrtomar.com</a><br>
                                Registry: <span style="color: var(--color-text-secondary);">Direct Intake to Advocate's
                                    Desk</span>
                            </div>
                        </div>
                    </div>

                    <!-- Phone / Direct Line -->
                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path
                                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="info-title">Chambers Direct Lines</div>
                            <div class="info-text">
                                Advocate Desk: <a href="tel:{{ config('chambers.phone_tel', '+919898877690') }}"
                                    style="color: var(--color-burgundy-deep); font-weight: 700;">+91
                                    {{ config('chambers.phone_display', '98988 77690') }}</a><br>
                                Direct Line: <a href="tel:{{ config('chambers.phone_tel', '+919898877690') }}"
                                    style="color: var(--color-text-secondary); text-decoration: none;">{{ config('chambers.phone_display', '98988 77690') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Court & Chambers Hours -->
                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <div class="info-title">Court &amp; Chambers Hours</div>
                            <div class="info-text">
                                High Court Hours: 10:30 AM – 04:30 PM (Mon–Fri)<br>
                                Chambers Conferences: 05:30 PM – 08:30 PM<br>
                                Saturdays: By Prior Appointment Only
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Badges -->
                <div style="margin-top: 2rem; display: flex; align-items: center; gap: 1rem; flex-wrap: wrap;">
                    <a href="https://www.instagram.com/adv_vrtomar/" target="_blank" rel="noopener"
                        class="btn btn-outline-dark" style="font-size: 0.8rem; padding: 0.6rem 1.2rem;">
                        Follow Instagram @adv_vrtomar ↗
                    </a>
                    <a href="https://share.google/es88m4d7AuWNRN1Ag" target="_blank" rel="noopener"
                        class="btn btn-outline-dark" style="font-size: 0.8rem; padding: 0.6rem 1.2rem;">
                        Google Reviews Profile ★ 5.0 ↗
                    </a>
                </div>
            </div>

            <!-- Right: Interactive Consultation Form UI -->
            <div class="contact-card" id="intakeForm">
                <div class="eyebrow">Matter Intake</div>
                <h3 style="font-size: 1.8rem; margin-bottom: 0.75rem; color: var(--color-burgundy-deep);">Request
                    Consultation</h3>
                <p style="font-size: 0.92rem; color: var(--color-text-secondary); margin-bottom: 1.75rem;">
                    Submissions are directly dispatched to <strong
                        style="color: var(--color-burgundy-royal);">info@thechamberofvrtomar.com</strong> and archived
                    securely.
                </p>

                <!-- Flash Success Notification -->
                @if (session('success'))
                    <div class="alert-box alert-success">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <div>
                            <strong>Consultation Request Recorded Successfully!</strong><br>
                            Reference: <span
                                style="font-family: monospace; font-weight: 700; color: #4B1929;">#{{ session('reference_id') }}</span><br>
                            Thank you, {{ session('client_name') }}. An intake record has been transmitted to <span
                                style="text-decoration: underline;">info@thechamberofvrtomar.com</span>. Our registry will
                            connect with you promptly.
                        </div>
                    </div>
                @endif

                <!-- Error Notification -->
                @if ($errors->any())
                    <div class="alert-box alert-error">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                        <div>
                            <strong>Please correct the following:</strong>
                            <ul style="margin: 0.35rem 0 0 1rem; padding: 0;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" id="consultationForm">
                    @csrf

                    <!-- SPAM DEFENSE HONEYPOT FIELDS (invisible to humans, bots will fill) -->
                    <div class="hp-field" aria-hidden="true">
                        <label for="chambers_security_key">Leave this field blank</label>
                        <input type="text" id="chambers_security_key" name="chambers_security_key" value=""
                            tabindex="-1" autocomplete="off">
                        <label for="website_hp">Firm Website</label>
                        <input type="text" id="website_hp" name="website_hp" value="" tabindex="-1"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="clientName">Full Name / Corporate Entity *</label>
                        <input type="text" id="clientName" name="name" class="form-control"
                            value="{{ old('name') }}" placeholder="e.g. Navin Patel / Alpha Logistics Pvt Ltd" required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label" for="clientEmail">Email Address *</label>
                            <input type="email" id="clientEmail" name="email" class="form-control"
                                value="{{ old('email') }}" placeholder="client@domain.com" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="clientPhone">Contact Phone *</label>
                            <input type="tel" id="clientPhone" name="phone" class="form-control"
                                value="{{ old('phone') }}" placeholder="+91 98XXX XXXXX" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="practiceAreaSelect">Primary Working Area *</label>
                        <select id="practiceAreaSelect" name="practice_area" class="form-control" required>
                            <option value="" disabled
                                {{ old('practice_area', request('practice')) ? '' : 'selected' }}>Select Primary
                                Specialization</option>
                            @foreach (config('chambers.working_areas') as $area)
                                <option value="{{ $area['title'] }}"
                                    {{ old('practice_area') == $area['title'] || request('practice') == $area['slug'] ? 'selected' : '' }}>
                                    {{ $area['title'] }} ({{ $area['badge'] }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="courtForum">Court / Tribunal Forum (Optional)</label>
                        <input type="text" id="courtForum" name="court_forum" class="form-control"
                            value="{{ old('court_forum') }}"
                            placeholder="e.g. High Court of Gujarat / Sessions Court Ahmedabad / NCLT / Arbitral Tribunal">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="matterSummary">Brief Description of Dispute / Query *</label>
                        <textarea id="matterSummary" name="message" class="form-control" rows="4"
                            placeholder="Please outline the key facts, procedural status (e.g. pre-litigation, FIR registered, bail sought, tender rejected, arbitration clause invoked), and any upcoming limitation deadlines..."
                            required>{{ old('message') }}</textarea>
                    </div>

                    <div class="form-group" style="margin-top: 1.5rem;">
                        <label
                            style="display: flex; align-items: flex-start; gap: 0.65rem; font-size: 0.8rem; color: var(--color-text-secondary); cursor: pointer; line-height: 1.45;">
                            <input type="checkbox" name="consent" value="1"
                                {{ old('consent', 1) ? 'checked' : '' }} required style="margin-top: 0.2rem;">
                            <span>I acknowledge that transmitting this information does not create an advocate-client
                                relationship and that information is submitted voluntarily under Bar Council of India
                                guidelines.</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-gold" id="submitConsultationBtn"
                        style="width: 100%; margin-top: 1.25rem;">
                        SUBMIT CONSULTATION TO CHAMBERS
                    </button>
                </form>
            </div>

        </div>
    </section>

@endsection
