<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller
{
    /**
     * Home page
     */
    public function home()
    {
        $chambers = config('chambers');
        $workingAreas = $chambers['working_areas'];
        $reviews = $chambers['reviews'];
        $galleryHighlights = array_slice($chambers['gallery'], 0, 6);
        $sectors = $chambers['sectors'];
        $insights = $chambers['insights'];

        return view('pages.home', compact('chambers', 'workingAreas', 'reviews', 'galleryHighlights', 'sectors', 'insights'));
    }

    /**
     * About Advocate Vishalkumar R Tomar & The Chamber of V R Tomar
     */
    public function about()
    {
        $chambers = config('chambers');
        return view('pages.about', compact('chambers'));
    }

    /**
     * Practice Areas / Working Areas directory
     */
    public function services()
    {
        $chambers = config('chambers');
        $workingAreas = $chambers['working_areas'];
        return view('pages.services.index', compact('chambers', 'workingAreas'));
    }

    /**
     * Service / Practice Area detail
     */
    public function serviceDetail($slug)
    {
        $chambers = config('chambers');
        $workingAreas = $chambers['working_areas'];

        $service = collect($workingAreas)->firstWhere('slug', $slug);

        if (!$service) {
            abort(404, 'Practice area not found');
        }

        // Related services (excluding current)
        $relatedServices = collect($workingAreas)->where('slug', '!=', $slug)->take(3);

        return view('pages.services.show', compact('chambers', 'service', 'relatedServices', 'workingAreas'));
    }

    /**
     * Gallery & Dignitary Engagements page
     */
    public function gallery()
    {
        $chambers = config('chambers');
        $gallery = $chambers['gallery'];
        return view('pages.gallery', compact('chambers', 'gallery'));
    }

    /**
     * Google Reviews & Testimonials page
     */
    public function reviews()
    {
        $chambers = config('chambers');
        $reviews = $chambers['reviews'];
        $summary = $chambers['reviews_summary'];
        return view('pages.reviews', compact('chambers', 'reviews', 'summary'));
    }

    /**
     * Working Sectors directory
     */
    public function sectors()
    {
        $chambers = config('chambers');
        $sectors = $chambers['sectors'];
        return view('pages.sectors.index', compact('chambers', 'sectors'));
    }

    /**
     * Sector detail
     */
    public function sectorDetail($slug)
    {
        $chambers = config('chambers');
        $sectors = $chambers['sectors'];

        $sector = collect($sectors)->firstWhere('slug', $slug);

        if (!$sector) {
            abort(404, 'Sector not found');
        }

        $relatedSectors = collect($sectors)->where('slug', '!=', $slug)->take(3);

        return view('pages.sectors.show', compact('chambers', 'sector', 'relatedSectors', 'sectors'));
    }

    /**
     * Legal Insights directory
     */
    public function insights()
    {
        $chambers = config('chambers');
        $insights = $chambers['insights'];
        return view('pages.insights.index', compact('chambers', 'insights'));
    }

    /**
     * Insight detail
     */
    public function insightDetail($slug)
    {
        $chambers = config('chambers');
        $insights = $chambers['insights'];

        $insight = collect($insights)->firstWhere('slug', $slug);

        if (!$insight) {
            abort(404, 'Insight article not found');
        }

        $relatedInsights = collect($insights)->where('slug', '!=', $slug)->take(2);

        return view('pages.insights.show', compact('chambers', 'insight', 'relatedInsights'));
    }

    /**
     * Bar Council of India Regulatory Disclaimer
     */
    public function disclaimer()
    {
        $chambers = config('chambers');
        return view('pages.disclaimer', compact('chambers'));
    }

    /**
     * Privacy Policy
     */
    public function privacyPolicy()
    {
        $chambers = config('chambers');
        return view('pages.privacy-policy', compact('chambers'));
    }

    /**
     * SEO XML Sitemap
     */
    public function sitemap()
    {
        $chambers = config('chambers');
        $workingAreas = $chambers['working_areas'];
        $sectors = $chambers['sectors'];
        $insights = $chambers['insights'];

        return response()->view('seo.sitemap', compact('workingAreas', 'sectors', 'insights'))
            ->header('Content-Type', 'text/xml');
    }

    /**
     * SEO Robots.txt
     */
    public function robots()
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n";
        $content .= "Disallow: /admin/\n";
        $content .= "Sitemap: " . url('/sitemap.xml') . "\n";

        return response($content, 200)
            ->header('Content-Type', 'text/plain');
    }
}
