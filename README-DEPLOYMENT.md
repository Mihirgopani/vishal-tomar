# THE CHAMBER OF V R TOMAR — Production Deployment Guide
**Advocate Vishalkumar R Tomar | High Court of Gujarat**

This package is a production-ready Laravel application pre-configured for instant deployment on **Hostinger**, **cPanel**, **Cloudways**, or any standard **Linux / VPS / LAMP / LEMP** environment.

---

## 1. Quick Hostinger / cPanel Deployment (Plug-and-Play)

This zip package includes the complete `vendor/` autoloader, pre-migrated SQLite database, root `.htaccess`, and pre-generated application key. **No SSH or Composer commands are required.**

### Option A: Standard Shared Hosting (Document Root in `public_html/`)
1. **Upload & Extract:**
   - In Hostinger hPanel File Manager (or cPanel File Manager), upload the zip file directly into your domain's root folder (`public_html/`).
   - Extract the zip archive inside `public_html/`.
2. **Document Root Setup (Recommended):**
   - In Hostinger hPanel, go to **Websites** &rarr; **Manage** &rarr; **General** &rarr; **Directory**.
   - Change the web root from `public_html` to `public_html/public`.
   - *If your hosting does not allow changing the document root*, our included root `.htaccess` will automatically and transparently forward all web traffic into `/public` while keeping `.env` and system files strictly protected.
3. **Environment Configuration (`.env`):**
   - Ensure the `.env` file exists (a pre-configured `.env` is included in the package).
   - Set your live domain:
     ```ini
     APP_URL=https://thechamberofvrtomar.com
     APP_ENV=production
     APP_DEBUG=false
     ```
   - Enter your email password for SMTP:
     ```ini
     MAIL_MAILER=smtp
     MAIL_HOST=smtp.hostinger.com
     MAIL_PORT=465
     MAIL_USERNAME=info@thechamberofvrtomar.com
     MAIL_PASSWORD=your_actual_email_password
     MAIL_ENCRYPTION=ssl
     MAIL_FROM_ADDRESS="info@thechamberofvrtomar.com"
     MAIL_FROM_NAME="The Chamber of V R Tomar"
     ```
4. **Permissions:**
   - Ensure `storage/` and `bootstrap/cache/` directories are writable (permissions `775` or `755`).
   - Ensure `database/database.sqlite` and the `database/` folder are writable by the web server user.

---

## 2. VPS / Dedicated / Forge Deployment

If deploying via Git, Nginx, or SSH:
```bash
# Set folder permissions
chmod -R 775 storage bootstrap/cache database

# Run config and route caches for maximum performance
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Nginx Server Block Example:
```nginx
server {
    listen 443 ssl http2;
    server_name thechamberofvrtomar.com www.thechamberofvrtomar.com;
    root /var/www/thechamberofvrtomar/public;

    index index.php index.html;
    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

---

## 3. Key Chambers & Entity Details Built Into The Website
- **Firm Name:** The Chamber of V R Tomar
- **Lead Counsel:** Advocate Vishalkumar R Tomar
- **Jurisdiction:** High Court of Gujarat, City Civil & Sessions Courts, Special Fora
- **Chambers Address:** FIRST FLOOR, 4D SQUARE MALL, 13, VISAT-GANDHINAGAR HIGHWAY, Motera, Ahmedabad, Gujarat 380005
- **Official Phone:** 98988 77690 (`+919898877690`)
- **Official Inquiries:** info@thechamberofvrtomar.com
- **Instagram:** https://www.instagram.com/adv_vrtomar/
- **Google Profile:** https://share.google/es88m4d7AuWNRN1Ag

---

## 4. Built-In Features
- **All 8 Working Areas:** Criminal Litigation, White Collar Crime, Cyber Crime Matters, Civil Litigation, Constitutional & Writ Litigation, Alternate Dispute Resolution, Risk Management, Due - Compliance.
- **Cinematic Photography & Gallery:** Curated photo galleries featuring Advocate Vishal Tomar in robes, SIAC/events, and high court sessions.
- **Bar Council of India (BCI) Compliance Notice:** Fully compliant informational legal disclaimer popup & footer notice pursuant to Bar Council of India rules.
- **Anti-Spam Case Intake System:** Includes dual honeypot traps and submission rate timing protection.
- **Verified Client Testimonials:** Highlighting real client reviews (5.0 rating).
- **SEO Ready:** OpenGraph, Twitter cards, XML sitemap (`/sitemap.xml`), and schema.org legal service structured data.
