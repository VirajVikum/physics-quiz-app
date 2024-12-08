<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Physics Qapp</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900"style="background-color: #070F2B;">
    <div class=" sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-centerdark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
        style="background-color: #070F2B;">
        <div class="pb-4 relative z-10 h-10">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>

        <section id="section1">
        <div class="">
            <video autoplay muted loop id="bg-video" class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('images/course-video.mp4') }}" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gray-950 bg-opacity-80 flex justify-center items-center">
                <div class="text-center text-white">
                    <h6 class="text-lg uppercase">PHYsics PAnda Test</h6>
                    <div class="flex justify-center items-center"><x-application-logo class="block h-9 w-auto fill-current text-gray-800" /></div>
                    <h2 class="text-4xl font-semibold mt-4"><em>Phypat</em> Adventures</h2>
                    <div class="mt-8">
                        <a href="{{ route('login') }}" wire:navigate
                            class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700">Login for
                            play</a>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="flex justify-center pt-12">
            <h1 class="text-4xl text-bold text-red-500 font-serif">Physics Q & A</h1>           

        </div>

    </section>

         
    </div>

    <div class="max-w-8xl mx-auto sm:min-w-80 sm:p-2 md:p-2">
            

        <div class="max-w-8xl mx-auto p-4">
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 dark:bg-gray-900"> --}}

                <div class="pb-12">

                <div
                    class="scale-100 p-6 bg-transparent  dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div
                            class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-lightGray   dark:text-white">Let's Begin the journey
                        </h2>

                        <p class="font-mono mt-4 text-white  dark:text-gray-400 text-sm leading-loose">
                            "Let’s Begin the Journey! Unlock the world of Physics by exploring our diverse range of
                            quizzes, notes, and interactive challenges designed for all proficiency levels. Whether
                            you are just starting out or striving for expert knowledge, each step of the journey
                            brings you closer to mastering Physics principles. Earn badges, test your understanding,
                            and elevate your learning experience – all while enjoying a structured and professional
                            platform tailored to your educational goals."
                        </p>
                    </div>

                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg> --}}
                </div>

            </div>

            <section id="section2">
            <div class="pb-12">
                <div
                    class="scale-100 p-6 bg-transparent  dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        {{-- <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div> --}}

                        <h2 class="mt-4 text-xl font-semibold text-lightGray  dark:text-white">Mission</h2>

                        <p class="font-mono mt-4 text-white dark:text-gray-400 text-sm leading-loose">
                            The mission of the Physics question bank is to provide a comprehensive and adaptable
                            resource for both educators and students. It covers a wide range of Physics topics and
                            difficulty levels, supporting learning through diverse questions. This resource helps
                            educators assess students' understanding and create balanced assessments. The goal is to
                            foster a deeper comprehension of Physics principles such as mechanics, electromagnetism,
                            thermodynamics, and optics. It also prioritizes user-friendliness and accessibility,
                            with a commitment to continuous improvement, staying aligned with curriculum changes and
                            educational standards.
                        </p>
                    </div>

                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg> --}}
                </div>

            </div>
            </section>

            <div class="pb-12">

                <div
                    class="scale-100 p-6 bg-transparent  dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        {{-- <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div> --}}

                        <h2 class="mt-6 text-xl font-semibold text-lightGray  dark:text-white">Features</h2>

                        <p class="font-mono mt-4 text-white dark:text-gray-400 text-sm leading-loose">
                            This platform offers quizzes for various academic levels (high school, AP Physics,
                            college), categorized into four proficiency levels: Beginner, Intermediate,
                            Professional, and Expert. Users can earn badges based on their performance.
                            Additionally, the website provides Physics notes and a comprehensive question-and-answer
                            section, covering subtopics within Physics. The structure caters to diverse educational
                            needs, offering a professional, resourceful environment for learners at all stages.
                        </p>
                    </div>

                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg> --}}
                </div>

            </div>

            <section id="section3">
            <div class="pb-12">

                <div
                    class="scale-100 p-6 bg-transparent  dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div
                            class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-lightGray  dark:text-white">Contact Details</h2>

                        <p class="mt-4 text-white dark:text-gray-400 text-sm leading-relaxed">
                            Email: phypatcom@gmail.com
                        </p>
                    </div>
                </div>

            </div>
            </section>

            {{-- </div> --}}
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm sm:text-start">
                &nbsp;
            </div>


        </div>
    </div>

</body>

</html>
