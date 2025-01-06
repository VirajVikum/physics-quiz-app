<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Test your knowledge with our engaging physics quiz. Explore questions from mechanics, electricity, thermodynamics, and more!">
    <meta name="keywords"
        content="physics quiz, phypat physics quiz, pypat, physics, physics questions, science quiz, mechanics quiz, thermodynamics, electricity quiz, test your knowledge, physics test, phypat, phypat.com">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Physics Quiz - Test Your Knowledge of Physics Concepts">
    <meta property="og:description"
        content="Test your knowledge with our engaging physics quiz. Explore questions from mechanics, electricity, thermodynamics, and more!">
    <meta property="og:image" content="{{ asset('images/quiz-thumbnail.jpg') }}">
    <meta property="og:url" content="https://phypat.com">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Physics Quiz - Test Your Knowledge of Physics Concepts">
    <meta name="twitter:description"
        content="Test your knowledge with our engaging physics quiz. Explore questions from mechanics, electricity, thermodynamics, and more!">
    <meta name="twitter:image" content="{{ asset('images/quiz-thumbnail.jpg') }}">
    <meta name="twitter:url" content="https://phypat.com">

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Quiz",
          "name": "Physics Quiz",
          "description": "Test your knowledge of physics concepts with a variety of questions on mechanics, electricity, thermodynamics, and more!",
          "url": "https://phypat.com",
          "image": "https://phypat.com/images/quiz-thumbnail.jpg",
          "mainEntityOfPage": "https://phypat.com/quiz",
          "publisher": {
            "@type": "Organization",
            "name": "Your Website Name",
            "logo": "https://phypat.com/images/logo.png"
          }
        }
        </script>


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="phypat">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#4CAF50">
    <meta name="apple-mobile-web-app-title" content="Physics Quiz">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">




    <title>Physics Quiz - Test Your Knowledge | Phypat</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @livewireStyles

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased ">
    <div class="min-h-screen bg-gray-100 " style="background-color: #070F2B;">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-lightBlue   shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}

                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>

            {{ $slot }}
            @livewireScripts
        </main>
    </div>
    @livewire('wire-elements-modal')
</body>

</html>
