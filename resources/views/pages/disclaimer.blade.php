@extends('layouts.app')

@section('title', 'Regulatory Disclaimer — The Chamber of V R Tomar | Bar Council of India')
@section('meta_description', 'Mandatory regulatory disclosures under the Advocates Act, 1961, and Bar Council of India rules governing legal communications.')

@section('content')

  <!-- FIXED CINEMATIC PAGE HERO -->
  <section class="page-hero-cinematic page-hero-practice">
    <div class="hero-overlay-top"></div>
    <div class="hero-overlay-left"></div>
    <div class="hero-overlay-bottom"></div>

    <div class="container hero-content-relative" style="max-width: 960px;">
      <nav class="breadcrumbs-cinematic" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">HOME</a>
        <span class="sep">/</span>
        <span class="curr">REGULATORY DISCLAIMER</span>
      </nav>

      <div class="hero-kicker-cinematic">
        <span class="kicker-line"></span>
        <span>BAR COUNCIL OF INDIA REGULATORY MANDATE</span>
      </div>

      <h1 class="page-cinematic-title">
        LEGAL DISCLAIMER &amp; <br>
        <span class="headline-gold">REGULATORY COMPLIANCE.</span>
      </h1>

      <p class="page-cinematic-desc">
        Mandatory professional disclosures pursuant to the rules framed under the Advocates Act, 1961, governing digital presence, professional conduct, and legal ethics in India.
      </p>

      <div class="hero-tag-badge" style="opacity: 1; transform: none; margin-top: 1.5rem;">
        <span class="badge-dot"></span>
        <span>BAR COUNCIL OF INDIA · RULE 36 · PART VI CHAPTER II COMPLIANCE</span>
      </div>
    </div>
  </section>

  <!-- DISCLAIMER CONTENT ARTICLE -->
  <section class="section" style="background-color: var(--color-bg-ivory); padding: 5rem 0 6rem;">
    <div class="container" style="max-width: 960px;">

      <!-- Executive Statutory Declaration Card -->
      <div style="background: linear-gradient(135deg, #2D0F1A 0%, #1A0810 100%); border: 1px solid var(--color-gold-antique); border-radius: 4px; padding: 2.75rem 2.5rem; margin-bottom: 3.5rem; box-shadow: 0 20px 50px rgba(45, 15, 26, 0.25); position: relative; overflow: hidden;">
        <div style="position: absolute; top: -20px; right: -20px; width: 140px; height: 140px; background: radial-gradient(circle, rgba(197, 161, 91, 0.15) 0%, transparent 70%); pointer-events: none;"></div>
        
        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
          <div style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--color-gold-antique); display: flex; align-items: center; justify-content: center; color: var(--color-gold-antique); background: rgba(197, 161, 91, 0.1);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M12 3v18M3 7h18M6 7l-3 6h6l-3-6zM18 7l-3 6h6l-3-6z"/>
            </svg>
          </div>
          <div>
            <div style="font-size: 0.65rem; color: var(--color-gold-antique); letter-spacing: 0.22em; text-transform: uppercase; font-weight: 700;">STATUTORY DECLARATION</div>
            <div style="font-family: var(--font-serif); font-size: 1.25rem; color: #FFFFFF; letter-spacing: 0.05em;">THE CHAMBER OF V R TOMAR</div>
          </div>
        </div>

        <p style="font-size: 1.05rem; line-height: 1.8; color: #E9DFD5; margin-bottom: 1.5rem; font-family: var(--font-serif); font-style: italic;">
          "The rules of the Bar Council of India prohibit advocates from soliciting work or advertising through any medium. This platform is curated solely for general informational purposes and does not seek to solicit clients, advertise legal services, or invite retainers."
        </p>

        <div style="border-top: 1px solid rgba(197, 161, 91, 0.3); padding-top: 1.25rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; font-size: 0.8rem; color: #D8C08A;">
          <span>Advocate Vishalkumar R Tomar · High Court of Gujarat</span>
          <span style="letter-spacing: 0.15em; text-transform: uppercase;">Ahmedabad Chambers</span>
        </div>
      </div>

      <!-- Structured Regulatory Clauses -->
      <div style="display: flex; flex-direction: column; gap: 2rem;">

        <!-- Clause 01 -->
        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">01 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Informational Nature &amp; User-Requested Access</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            The visitor explicitly acknowledges that their access to this website is completely voluntary and upon their own initiative. Any information retrieved, read, or downloaded from this site does not constitute solicitation, advertisement, personal communication, inducement, or legal invitation by Advocate Vishalkumar R Tomar or his team.
          </p>
        </article>

        <!-- Clause 02 -->
        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">02 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Absence of Attorney-Client Privilege</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            Browsing this platform, reviewing commentary, or transmitting preliminary details through intake forms does not create an advocate-client relationship. An attorney-client relationship is formally established only upon explicit execution of a written Vakalatnama / legal retainer and completion of formal conflict clearance.
          </p>
        </article>

        <!-- Clause 03 -->
        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">03 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">No Substitute for Formal Legal Counsel</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            The articles, case digests, and statutory explanations provided across this website are for academic and jurisprudential awareness only. Law is dynamic and heavily contingent upon specific fact-patterns, limitation deadlines, and judicial interpretations. Users should never act or refrain from acting based solely upon material published on this platform without seeking independent, personalized legal counsel.
          </p>
        </article>

        <!-- Clause 04 -->
        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">04 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Confidentiality of Unsolicited Information</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            While The Chamber of V R Tomar treats all communications with rigorous professional integrity, unsolicited communications submitted prior to conflict verification may not be protected by statutory attorney-client privilege. Confidential case documents should be shared only following direct coordination with our registry.
          </p>
        </article>

        <!-- Clause 05 -->
        <article style="background: #FFFFFF; border: 1px solid #E9DFD5; border-left: 3px solid var(--color-gold-antique); padding: 2.25rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);">
          <div style="display: flex; align-items: baseline; gap: 0.75rem; margin-bottom: 0.75rem;">
            <span style="font-size: 0.75rem; font-weight: 700; color: var(--color-gold-antique); letter-spacing: 0.15em;">05 /</span>
            <h2 style="font-size: 1.35rem; color: var(--color-burgundy-deep); margin: 0; font-family: var(--font-serif);">Jurisdiction &amp; Governing Law</h2>
          </div>
          <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-secondary); margin: 0;">
            Any dispute arising out of or related to the usage of this platform shall be governed by the laws of India and subject to the exclusive jurisdiction of the competent courts in Ahmedabad, Gujarat, India.
          </p>
        </article>

      </div>

      <!-- Action Confirmation Box -->
      <div style="margin-top: 3.5rem; text-align: center; padding: 2.5rem; background: #FFFFFF; border: 1px solid #E9DFD5;">
        <h3 style="font-family: var(--font-serif); font-size: 1.4rem; color: var(--color-burgundy-deep); margin-bottom: 0.75rem;">
          Confirmation &amp; Proceed
        </h3>
        <p style="font-size: 0.9rem; color: var(--color-text-secondary); max-width: 600px; margin: 0 auto 1.75rem;">
          By navigating further into this website, you confirm having read and understood the Bar Council of India regulatory stipulations stated above.
        </p>
        <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
          <a href="{{ route('home') }}" class="btn btn-gold">I Agree &amp; Continue to Chambers</a>
          <a href="https://www.barcouncilofindia.org/" target="_blank" rel="noopener" class="btn btn-outline-dark">Exit to Bar Council Portal</a>
        </div>
      </div>

    </div>
  </section>

@endsection

