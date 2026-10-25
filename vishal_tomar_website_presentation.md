# Vishalkumar R Tomar — ADVOCATE, GUJARAT HIGH COURT
## Premium Digital Identity & Multi-Page Prototype Presentation

---

### Executive Creative Direction

Designed specifically for **Advocate Vishalkumar R Tomar** (Gujarat High Court, Ahmedabad), this digital identity translates the ambition, intellectual sharpness, and strategic command of a next-generation counsel (approx. 30–35 years of age) into a luxury legal editorial experience.

Rather than adhering to clichéd, mass-produced legal themes or dark, monotonous interfaces, the identity introduces:
- **Architectural Editorial Layouts:** High-contrast serif headlines paired with refined geometric sans-serif supporting text.
- **Ivory-Led Contrast:** Generous warm ivory (`#F7F2ED`) and crisp white reading surfaces accented with rich royal burgundy (`#702D43`), deep wine (`#4B1929`), and subtle antique gold (`#C5A15B`) hairlines.
- **Restrained Geometric Monogram:** A bespoke **VT** emblem drawing inspiration from judicial symmetry and architectural precision.
- **Bar Council of India (BCI) Compliance:** An automated regulatory disclaimer modal, persistent advisory notices, and strictly non-solicitational language.

---

### Brand Color & Design Token Architecture

| Color Name | Hex Code | Strategic Usage |
| :--- | :--- | :--- |
| **Royal Burgundy** | `#702D43` | Primary brand moments, primary CTAs, active underlines |
| **Deep Wine** | `#4B1929` | Immersive dark headers, page hero banners, master footer |
| **Dark Burgundy** | `#5A1F32` | Card borders, secondary surfaces, monogram base |
| **Muted Burgundy** | `#8C465B` | Eyebrow badges, architectural accents |
| **Antique Gold** | `#C5A15B` | Hairlines, numerals, monogram gold elements, premium buttons |
| **Champagne Gold** | `#D8C08A` | Subtitle highlights, quote attributions, focus rings |
| **Warm Ivory** | `#F7F2ED` | Primary editorial reading canvas, subtle section backgrounds |
| **Pure White** | `#FFFFFF` | Elevated cards, content containers, focus surfaces |
| **Charcoal** | `#302A2C` | High-legibility body typography |
| **Secondary Grey**| `#686168` | Supporting commentary and procedural descriptions |

---

### Page Inventory & Prototype Structure

The website prototype is built using **static, dependency-free HTML5, CSS3, and Vanilla JavaScript**, running out of the box locally in any web browser:

```
vishal-tomar/
├── index.html                   # 01. Homepage with Hero, Profile, Practice Grid & BCI Modal
├── about.html                   # 02. About Advocate Vishalkumar R Tomar, Admissions & Chambers Ethos
├── practice-areas.html          # 03. Practice Areas Directory with Category Filtering
├── practice-area-detail.html    # 04. Deep Dive: Constitutional & Writ Litigation (Art. 226/227)
├── sectors.html                 # 05. Working Sectors Overview across Gujarat Industry
├── sector-detail.html           # 06. Sector Deep Dive: Infrastructure, Energy & EPC Concessions
├── insights.html                # 07. Legal Insights Index with Real-Time Search & Filters
├── article-detail.html          # 08. In-Depth Scholarly Article with Sticky Table of Contents
├── contact.html                 # 09. Chambers Intake Form & Ahmedabad Legal District Vector Map
├── disclaimer.html              # 10. Comprehensive Bar Council of India Regulatory Page
├── privacy-policy.html          # 11. Confidentiality Framework & DPDP Act Compliance
├── 404.html                     # 12. Bespoke Typographic Error Page
└── assets/
    ├── css/
    │   ├── styles.css           # Design Tokens, Components, Typography, Color Palettes
    │   └── responsive.css       # Fluid Responsive Breakpoints & Mobile Drawer Styles
    ├── js/
    │   └── main.js              # BCI Modal, Sticky Nav, Accordions, Live Search & Form Validation
    ├── images/
    │   ├── logo-monogram.svg    # Official VT Geometric Architectural Monogram
    │   ├── portrait-placeholder.svg # Executive Silhouette Card (Awaiting Client Photography)
    │   ├── high-court-facade.jpg    # Judicial Architectural Photography
    │   ├── chambers-library.jpg     # Law Chambers Interior & Jurisprudence Library
    │   ├── legal-brief-study.jpg    # Editorial Still Life of Legal Brief & Parchment
    │   └── ahmedabad-legal-map.svg  # Vector Map of High Court, NCLT & Chambers
    └── icons/                   # 12 Bespoke Hairline SVG Legal & Sector Icons
```

---

### Key Interactive Features

1. **Bar Council of India Regulatory Modal (`index.html`)**
   - Automatically appears on first visit with custom blur backdrop.
   - Presents four key legal acknowledgements: *No Attorney-Client Privilege*, *Informational Non-Solicitation*, *Confidentiality Notice*, and *Ahmedabad Jurisdiction*.
   - Stores user confirmation in `localStorage` to avoid repetitive popups, with manual re-trigger links in the header and footer.

2. **Real-Time Insights Search & Category Filter (`insights.html`)**
   - Instant search input matching title, excerpt, and statutory tags with zero latency.
   - Dynamic empty state when no matching results are found.

3. **Practice Areas Interactive Filtering (`practice-areas.html`)**
   - Filter between Constitutional, Commercial, Insolvency (IBC), Arbitration, and Real Estate matters with smooth card animations.

4. **Matter Intake & Consultation Validation (`contact.html`)**
   - Full client validation checking name, email format, phone, practice dropdown, and mandatory confidentiality consent checkbox.
   - Generates a bespoke confirmation modal with a unique tracking code (`#VT-XXXXXX`) and professional reminder regarding attorney-client retainer guidelines.

5. **Smooth FAQ Accordions (`practice-area-detail.html`)**
   - Expandable procedural FAQs with animated antique gold cross/minus indicators.

---

### Professional Accuracy & Client Placeholders

In accordance with strict professional ethics:
- **No Fabricated Facts:** No artificial enrollment numbers, fabricated landmark judgment outcomes, or unverified client names are included.
- **Client Sign-Off Placeholders:** Clearly marked editable placeholders are provided for:
  - Bar Council of Gujarat enrollment number (`about.html`);
  - Formal academic degrees (LL.B., B.A. LL.B., LL.M.);
  - Chambers physical address in the High Court / S.G. Highway enclave (`contact.html`);
  - Verified executive portrait photography (`portrait-placeholder.svg`).
