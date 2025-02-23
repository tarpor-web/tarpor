@extends('layouts.app')

@section('title', 'TARPOR | Online Shopping in BD')
@section('meta_title', 'TARPOR | Best Online Shop in Bangladesh')
@section('description', 'Shop online at TARPOR for the best deals...')

@section('structured-data')
    <!-- Structured Data for Search Box -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://tarpor.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://tarpor.com/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <!-- Homepage specific structured data -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "TARPOR",
            "url": "https://tarpor.com",
            "priceRange": "৳৳",
            "logo": "{{ asset('/logos/logo.svg') }}",
            "openingHours": "Sa-Th 09:00-23:00"
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Uttara",
                "addressLocality": "Dhaka",
                "addressRegion": "Dhaka",
                "addressCountry": "Bangladesh",
                "postalCode": "1230"
            },
            "telephone": "+8801551805527",
            "priceRange": "$"
        }
    </script>
@endsection

@section('content')
    @include('sections.sliders')
    @include('sections.features')
    @include('sections.categories')
    @include('sections.products')
    @include('sections.brands')
    @include('sections.home-seo')
@endsection

@section('footer-scripts')
    <script>
        // Home page specific scripts
    </script>
@endsection
