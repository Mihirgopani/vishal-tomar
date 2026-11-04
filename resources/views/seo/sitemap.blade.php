{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('services') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @foreach($workingAreas as $area)
    <url>
        <loc>{{ route('services.detail', $area['slug']) }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    <url>
        <loc>{{ route('gallery') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('reviews') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ route('insights') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach($insights as $insight)
    <url>
        <loc>{{ route('insights.detail', $insight['slug']) }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('disclaimer') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ route('privacy.policy') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.5</priority>
    </url>
</urlset>

