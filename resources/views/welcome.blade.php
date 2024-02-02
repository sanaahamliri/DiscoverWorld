<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        /* .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        } */

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            /* background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E") */
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('images/logoTravel.png')}}" class=" h-8" alt="Logo" />
                <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Discover World</span> -->
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">

                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log in</a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
                        @endif
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <h1 class="text-center"><b>Traversing Continents, Creating Memories</b></h1>


    <section>
        <div id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-66 overflow-hidden rounded-lg md:h-96 mt-10">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/img1.jpg')}}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{asset('images/img2.jpg')}}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/img3.jpg')}}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/img4.jpg')}}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/img5.jpg')}}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 dark:bg-gray-800/30 group-hover:bg-gray-200 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 dark:bg-gray-800/30 group-hover:bg-gray-200 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </section>

    <section class="bg-white py-20">
        <a href="/recit">
            <button type="button" class="inline-flex items-center px-4 py-2 ml-28 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path xmlns="http://www.w3.org/2000/svg" d="M7 12L12 12M12 12L17 12M12 12V7M12 12L12 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Add Adventure
            </button>
        </a>
        <select class="inline-flex items-center px-4 py-2 ml-40 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            <option selected>Filter according to your next adventure</option>
            @foreach($destinations as $destination)
            <option value="{{ $destination->id }}">{{ $destination->DestinationName }}</option>
            @endforeach
        </select>


        <b id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 ml-36 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
            </svg>
            Filter Adventure by date
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" class="ml-10" fill="currentColor">
                <path fill="none" stroke="#000000" stroke-width="2" d="M2,8 L8,2 L14,8 M11,21 L22,21 M11,17 L19,17 M11,13 L16,13 M8,2 L8,22" />
            </svg>
            <svg xmlns=" width=" 30px" height="30px" viewBox="0 0 24 24">
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="currentColor">
                <path fill="none" stroke="#000000" stroke-width="2" d="M2,8 L8,2 L14,8 M11,21 L22,21 M11,17 L19,17 M11,13 L16,13 M8,2 L8,22" transform="matrix(1 0 0 -1 0 24)" />
            </svg>
        </b>

        <a href="/statistique">
            <button type="button" class="inline-flex items-center mt-10 px-4 py-2 ml-28 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 1024 1024" class="icon mr-3" version="1.1">
                    <path d="M342 167.6c2.2-1.1 4.4-2.2 6.6-3.2-2.2 1-4.4 2.1-6.6 3.2zM351.1 163.2c1.8-0.8 3.7-1.7 5.5-2.5-1.8 0.8-3.6 1.7-5.5 2.5zM255.1 797.4c-0.6-0.6-1.2-1.1-1.8-1.7 0.6 0.6 1.2 1.1 1.8 1.7zM362.5 158.2c-0.9 0.4-1.7 0.8-2.6 1.1 45.1-19.5 94.6-30.5 146.7-31.2-49.9 0.6-98.4 10.7-144.1 30.1zM234.1 777l-0.5-0.5 0.5 0.5zM247.5 790.4l-0.5-0.5 0.5 0.5zM265.4 217.6c1.9-1.6 3.8-3.1 5.7-4.7-1.9 1.6-3.8 3.2-5.7 4.7zM507.1 128h4.9-4.9zM271.5 212.6c21.4-17.2 44.6-32.1 69.3-44.4-24.6 12.2-47.8 27.1-69.3 44.4zM512 896h-4.9 4.9zM356.6 863.3c-1.8-0.8-3.7-1.6-5.5-2.5 1.9 0.8 3.7 1.7 5.5 2.5zM259.3 222.8c1.2-1.1 2.4-2.1 3.7-3.2-1.2 1.1-2.4 2.2-3.7 3.2zM362.5 865.8c45.7 19.3 94.1 29.4 144.1 30.1-52.1-0.7-101.6-11.8-146.7-31.2 0.9 0.4 1.8 0.8 2.6 1.1zM516.9 896H512h4.9zM661.5 865.8c0.9-0.4 1.7-0.8 2.6-1.1-45.1 19.5-94.6 30.5-146.7 31.2 49.9-0.6 98.4-10.7 144.1-30.1zM271.1 811.1c-1.9-1.5-3.8-3.1-5.7-4.7 1.9 1.5 3.8 3.1 5.7 4.7zM348.6 859.6c-2.2-1-4.4-2.1-6.6-3.2 2.2 1.1 4.4 2.2 6.6 3.2zM512 128h4.9-4.9zM340.9 855.9c-24.8-12.3-48-27.3-69.3-44.4 21.4 17.2 44.6 32.1 69.3 44.4zM263 804.3c-1.2-1-2.5-2.1-3.7-3.2 1.3 1.1 2.5 2.2 3.7 3.2zM158.2 362.5c-19.3 45.7-29.4 94.1-30.1 144.1 0.7-52.1 11.8-101.6 31.2-146.7-0.4 0.9-0.8 1.8-1.1 2.6zM160.7 356.7c0.8-1.8 1.7-3.7 2.5-5.5-0.8 1.8-1.7 3.6-2.5 5.5zM168.1 340.9c12.3-24.8 27.3-48 44.4-69.3-17.2 21.4-32.1 44.6-44.4 69.3zM164.4 348.6c1-2.2 2.1-4.4 3.2-6.6-1.1 2.2-2.2 4.4-3.2 6.6zM212.6 752.5c-17.2-21.4-32.1-44.6-44.4-69.3 12.2 24.6 27.1 47.8 44.4 69.3zM158.2 661.5c0.4 0.9 0.8 1.7 1.1 2.6-19.5-45.1-30.5-94.6-31.2-146.7 0.6 49.9 10.7 98.4 30.1 144.1zM167.6 682c-1.1-2.2-2.2-4.4-3.2-6.6 1 2.2 2.1 4.4 3.2 6.6zM128 516.9V512v4.9zM128 512v-4.9 4.9zM219.7 263c1-1.2 2.1-2.5 3.2-3.7-1.1 1.3-2.2 2.5-3.2 3.7zM247 234.1l0.5-0.5-0.5 0.5zM233.6 247.5l0.5-0.5-0.5 0.5zM226.6 255.1c0.6-0.6 1.1-1.2 1.7-1.8-0.6 0.6-1.1 1.2-1.7 1.8zM228.3 770.8c-0.6-0.6-1.1-1.2-1.7-1.8 0.6 0.5 1.1 1.1 1.7 1.8zM217.6 758.6c-1.6-1.9-3.1-3.8-4.7-5.7 1.6 1.9 3.2 3.8 4.7 5.7zM212.9 271.1c1.5-1.9 3.1-3.8 4.7-5.7-1.5 1.9-3.1 3.8-4.7 5.7zM253.2 228.3c0.6-0.6 1.2-1.1 1.8-1.7-0.5 0.6-1.1 1.1-1.8 1.7zM222.8 764.7c-1.1-1.2-2.1-2.4-3.2-3.7 1.1 1.2 2.2 2.4 3.2 3.7zM855.9 683.1c-12.3 24.8-27.3 48-44.4 69.3 17.2-21.4 32.1-44.6 44.4-69.3zM863.3 667.4c-0.8 1.8-1.6 3.7-2.5 5.5 0.8-1.9 1.7-3.7 2.5-5.5zM770.8 795.7c-0.6 0.6-1.2 1.1-1.8 1.7 0.5-0.6 1.1-1.1 1.8-1.7zM790.4 776.5l-0.5 0.5 0.5-0.5zM777 789.9l-0.5 0.5 0.5-0.5zM764.7 801.2c-1.2 1.1-2.4 2.1-3.7 3.2 1.2-1.1 2.4-2.2 3.7-3.2zM896 506.7c-0.2-12.4-0.9-24.8-2.3-37 1.3 12.2 2.1 24.5 2.3 37zM859.6 675.4c-1 2.2-2.1 4.4-3.2 6.6 1.1-2.2 2.2-4.4 3.2-6.6zM554.4 130.3c-12.3-1.3-24.6-2.1-37.1-2.3 12.5 0.2 24.9 1 37.1 2.3zM163.2 672.9c-0.8-1.8-1.7-3.7-2.5-5.5 0.8 1.8 1.7 3.6 2.5 5.5zM811.1 752.9c-1.5 1.9-3.1 3.8-4.7 5.7 1.5-1.9 3.1-3.8 4.7-5.7zM797.4 768.9c-0.6 0.6-1.1 1.2-1.7 1.8 0.6-0.6 1.1-1.2 1.7-1.8zM758.6 806.4c-1.9 1.6-3.8 3.1-5.7 4.7 1.9-1.6 3.8-3.2 5.7-4.7zM804.3 761c-1 1.2-2.1 2.5-3.2 3.7 1.1-1.3 2.2-2.5 3.2-3.7zM896 507.1v0zM682 856.4c-2.2 1.1-4.4 2.2-6.6 3.2 2.2-1 4.4-2.1 6.6-3.2zM896 512v0zM672.9 860.8c-1.8 0.8-3.7 1.7-5.5 2.5 1.8-0.8 3.6-1.7 5.5-2.5zM752.5 811.4c-21.4 17.2-44.6 32.1-69.3 44.4 24.6-12.2 47.8-27.1 69.3-44.4zM865.8 661.5c19.3-45.7 29.4-94.1 30.1-144.1-0.7 52.1-11.8 101.6-31.2 146.7 0.4-0.9 0.8-1.8 1.1-2.6z" fill="#3D5AFE" />
                    <path d="M702.6 490.9c0.8 6.9 1.2 14 1.2 21.1 0 105.9-85.9 191.8-191.8 191.8S320.2 617.9 320.2 512 406.1 320.2 512 320.2c7.2 0 14.2 0.4 21.2 1.2l21.2-191.1c-12.2-1.3-24.6-2.1-37.1-2.3H506.7c-52.1 0.7-101.6 11.8-146.7 31.2l-3.3 1.5c-1.8 0.8-3.7 1.6-5.5 2.5-0.8 0.4-1.7 0.8-2.5 1.2-2.2 1-4.4 2.1-6.6 3.2-0.4 0.2-0.7 0.4-1.1 0.5-24.8 12.3-48 27.3-69.3 44.4-0.1 0.1-0.3 0.2-0.4 0.3-1.9 1.5-3.8 3.1-5.7 4.7-0.8 0.7-1.6 1.3-2.4 2-1.2 1-2.5 2.1-3.7 3.2-1.4 1.2-2.8 2.5-4.3 3.8-0.6 0.6-1.2 1.1-1.8 1.7-1.9 1.8-3.8 3.5-5.7 5.3l-0.5 0.5c-2.2 2.1-4.4 4.2-6.5 6.4s-4.3 4.3-6.4 6.5l-0.5 0.5c-1.8 1.9-3.6 3.8-5.3 5.7-0.6 0.6-1.1 1.2-1.7 1.8-1.3 1.4-2.5 2.8-3.8 4.3-1.1 1.2-2.1 2.4-3.2 3.7-0.7 0.8-1.4 1.6-2 2.4-1.6 1.9-3.1 3.8-4.7 5.7-0.1 0.1-0.2 0.3-0.4 0.4-17.2 21.4-32.1 44.6-44.4 69.3-0.2 0.4-0.4 0.7-0.5 1.1-1.1 2.2-2.2 4.4-3.2 6.6-0.4 0.8-0.8 1.7-1.2 2.5-0.8 1.8-1.7 3.7-2.5 5.5l-1.5 3.3c-19.5 45.1-30.5 94.6-31.2 146.7V517c0.7 52.1 11.8 101.6 31.2 146.7l1.5 3.3c0.8 1.8 1.6 3.7 2.5 5.5 0.4 0.8 0.8 1.7 1.2 2.5 1 2.2 2.1 4.4 3.2 6.6 0.2 0.4 0.4 0.7 0.5 1.1 12.3 24.7 27.3 48 44.4 69.3 0.1 0.1 0.2 0.3 0.4 0.4 1.5 1.9 3.1 3.8 4.7 5.7 0.7 0.8 1.3 1.6 2 2.4 1 1.2 2.1 2.5 3.2 3.7 1.2 1.4 2.5 2.8 3.8 4.3 0.6 0.6 1.1 1.2 1.7 1.8 1.8 1.9 3.5 3.8 5.3 5.7l0.5 0.5c2.1 2.2 4.2 4.4 6.4 6.5s4.3 4.3 6.5 6.4l0.5 0.5c1.9 1.8 3.8 3.6 5.7 5.3 0.6 0.6 1.2 1.1 1.8 1.7 1.4 1.3 2.8 2.5 4.3 3.8 1.2 1.1 2.4 2.1 3.7 3.2 0.8 0.7 1.6 1.4 2.4 2 1.9 1.6 3.8 3.1 5.7 4.7 0.1 0.1 0.3 0.2 0.4 0.3 21.4 17.2 44.6 32.1 69.3 44.4 0.4 0.2 0.7 0.4 1.1 0.5 2.2 1.1 4.4 2.2 6.6 3.2 0.8 0.4 1.7 0.8 2.5 1.2 1.8 0.8 3.7 1.7 5.5 2.5l3.3 1.5c45.1 19.5 94.6 30.5 146.7 31.2H517.3c52.1-0.7 101.6-11.8 146.7-31.2l3.3-1.5c1.8-0.8 3.7-1.6 5.5-2.5 0.8-0.4 1.7-0.8 2.5-1.2 2.2-1 4.4-2.1 6.6-3.2 0.4-0.2 0.7-0.4 1.1-0.5 24.8-12.3 48-27.3 69.3-44.4 0.1-0.1 0.3-0.2 0.4-0.3 1.9-1.5 3.8-3.1 5.7-4.7 0.8-0.7 1.6-1.3 2.4-2 1.2-1 2.5-2.1 3.7-3.2 1.4-1.2 2.8-2.5 4.3-3.8 0.6-0.6 1.2-1.1 1.8-1.7 1.9-1.8 3.8-3.5 5.7-5.3l0.5-0.5c2.2-2.1 4.4-4.2 6.5-6.4s4.3-4.3 6.4-6.5l0.5-0.5c1.8-1.9 3.6-3.8 5.3-5.7 0.6-0.6 1.1-1.2 1.7-1.8 1.3-1.4 2.5-2.8 3.8-4.3 1.1-1.2 2.1-2.4 3.2-3.7 0.7-0.8 1.4-1.6 2-2.4 1.6-1.9 3.1-3.8 4.7-5.7 0.1-0.1 0.2-0.3 0.3-0.4 17.2-21.4 32.1-44.6 44.4-69.3 0.2-0.4 0.4-0.7 0.5-1.1 1.1-2.2 2.2-4.4 3.2-6.6 0.4-0.8 0.8-1.7 1.2-2.5 0.8-1.8 1.7-3.7 2.5-5.5l1.5-3.3C884 618.6 895 569.1 895.7 517v-0.4-4.9-4.9-0.4c-0.2-12.5-0.9-24.8-2.3-37l-190.8 21.5z" fill="#3D5AFE" />
                    <path d="M893.7 469.7c1.3 12.2 2.1 24.6 2.3 37V517.3c-0.7 50-10.8 98.4-30.1 144.1-0.4 0.9-0.8 1.7-1.1 2.6l-1.5 3.3c-0.8 1.8-1.7 3.7-2.5 5.5-0.4 0.8-0.8 1.7-1.2 2.5-1 2.2-2.1 4.4-3.2 6.6-0.2 0.4-0.4 0.7-0.5 1.1-12.3 24.7-27.2 47.9-44.4 69.3-0.1 0.1-0.2 0.3-0.3 0.4-1.5 1.9-3.1 3.8-4.7 5.7-0.7 0.8-1.3 1.6-2 2.4-1 1.2-2.1 2.5-3.2 3.7-1.2 1.4-2.5 2.8-3.8 4.3-0.6 0.6-1.1 1.2-1.7 1.8-1.8 1.9-3.5 3.8-5.3 5.7l-0.5 0.5c-4.2 4.4-8.5 8.7-12.9 12.9l-0.5 0.5c-1.9 1.8-3.8 3.6-5.7 5.3-0.6 0.6-1.2 1.1-1.8 1.7-1.4 1.3-2.8 2.5-4.3 3.8-1.2 1.1-2.4 2.1-3.7 3.2-0.8 0.7-1.6 1.4-2.4 2-1.9 1.6-3.8 3.1-5.7 4.7-0.1 0.1-0.3 0.2-0.4 0.3-21.5 17.3-44.7 32.2-69.3 44.4-0.4 0.2-0.7 0.4-1.1 0.5-2.2 1.1-4.4 2.2-6.6 3.2-0.8 0.4-1.7 0.8-2.5 1.2-1.8 0.8-3.7 1.7-5.5 2.5l-3.3 1.5c-0.9 0.4-1.7 0.8-2.6 1.1-45.7 19.3-94.1 29.4-144.1 30.1H507c-50-0.7-98.4-10.8-144.1-30.1-0.9-0.4-1.7-0.8-2.6-1.1L357 863c-1.8-0.8-3.7-1.7-5.5-2.5-0.8-0.4-1.7-0.8-2.5-1.2-2.2-1-4.4-2.1-6.6-3.2-0.4-0.2-0.7-0.4-1.1-0.5-24.7-12.3-47.9-27.2-69.3-44.4-0.1-0.1-0.3-0.2-0.4-0.3-1.9-1.5-3.8-3.1-5.7-4.7-0.8-0.7-1.6-1.3-2.4-2-1.2-1-2.5-2.1-3.7-3.2-1.4-1.2-2.8-2.5-4.3-3.8-0.6-0.6-1.2-1.1-1.8-1.7-1.9-1.8-3.8-3.5-5.7-5.3l-0.5-0.5c-4.4-4.2-8.7-8.5-12.9-12.9l-0.5-0.5c-1.8-1.9-3.6-3.8-5.3-5.7-0.6-0.6-1.1-1.2-1.7-1.8-1.3-1.4-2.5-2.8-3.8-4.3-1.1-1.2-2.1-2.4-3.2-3.7-0.7-0.8-1.4-1.6-2-2.4-1.6-1.9-3.1-3.8-4.7-5.7-0.1-0.1-0.2-0.3-0.4-0.4-17.3-21.5-32.2-44.6-44.4-69.3-0.2-0.4-0.4-0.7-0.5-1.1-1.1-2.2-2.2-4.4-3.2-6.6-0.4-0.8-0.8-1.7-1.2-2.5-0.8-1.8-1.7-3.7-2.5-5.5l-1.5-3.3c-0.4-0.9-0.8-1.7-1.1-2.6-19.3-45.7-29.4-94.1-30.1-144.1v-0.4-4.9-4.9-0.4c0.7-50 10.8-98.4 30.1-144.1 0.4-0.9 0.8-1.7 1.1-2.6l1.5-3.3c0.8-1.8 1.7-3.7 2.5-5.5 0.4-0.8 0.8-1.7 1.2-2.5 1-2.2 2.1-4.4 3.2-6.6 0.2-0.4 0.4-0.7 0.5-1.1 12.3-24.7 27.2-47.9 44.4-69.3 0.1-0.1 0.2-0.3 0.4-0.4 1.5-1.9 3.1-3.8 4.7-5.7 0.7-0.8 1.3-1.6 2-2.4 1-1.2 2.1-2.5 3.2-3.7 1.2-1.4 2.5-2.8 3.8-4.3 0.6-0.6 1.1-1.2 1.7-1.8 1.8-1.9 3.5-3.8 5.3-5.7l0.5-0.5c4.2-4.4 8.5-8.7 12.9-12.9l0.5-0.5c1.9-1.8 3.8-3.6 5.7-5.3 0.6-0.6 1.2-1.1 1.8-1.7 1.4-1.3 2.8-2.5 4.3-3.8 1.2-1.1 2.4-2.1 3.7-3.2 0.8-0.7 1.6-1.4 2.4-2 1.9-1.6 3.8-3.1 5.7-4.7 0.1-0.1 0.3-0.2 0.4-0.3 21.5-17.3 44.7-32.2 69.3-44.4 0.4-0.2 0.7-0.4 1.1-0.5 2.2-1.1 4.4-2.2 6.6-3.2 0.8-0.4 1.7-0.8 2.5-1.2 1.8-0.8 3.7-1.7 5.5-2.5l3.3-1.5c0.9-0.4 1.7-0.8 2.6-1.1C408.6 139.1 457 129 507 128.3H517.6c12.5 0.2 24.8 0.9 37.1 2.3l7.1-63.6c-16.6-2.1-33.1-3-49.8-3C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448c0-16.7-0.9-33.2-2.7-49.4l-63.6 7.1z" fill="#8C9EFF" />
                    <path d="M164.4 675.4c-0.4-0.8-0.8-1.7-1.2-2.5 0.4 0.8 0.8 1.6 1.2 2.5zM856.4 682c-0.2 0.4-0.4 0.7-0.5 1.1 0.1-0.3 0.3-0.7 0.5-1.1zM226.6 768.9c-1.3-1.4-2.5-2.8-3.8-4.3 1.3 1.5 2.5 2.9 3.8 4.3zM896 506.7v0zM896 516.9v0zM212.9 752.9c-0.1-0.1-0.2-0.3-0.4-0.4 0.2 0.1 0.3 0.3 0.4 0.4zM168.1 683.1c-0.2-0.4-0.4-0.7-0.5-1.1 0.2 0.4 0.4 0.8 0.5 1.1zM864.7 664l-1.5 3.3c0.6-1.1 1-2.2 1.5-3.3zM860.8 672.9c-0.4 0.8-0.8 1.7-1.2 2.5 0.4-0.9 0.8-1.7 1.2-2.5zM219.7 761c-0.7-0.8-1.4-1.6-2-2.4 0.6 0.8 1.3 1.6 2 2.4zM342 856.4c-0.4-0.2-0.7-0.4-1.1-0.5 0.3 0.1 0.7 0.3 1.1 0.5zM667.4 863.3l-3.3 1.5c1-0.6 2.1-1 3.3-1.5zM683.1 855.9c-0.4 0.2-0.7 0.4-1.1 0.5 0.4-0.2 0.8-0.4 1.1-0.5zM351.1 860.8c-0.8-0.4-1.7-0.8-2.5-1.2 0.9 0.4 1.7 0.8 2.5 1.2zM811.4 752.5c-0.1 0.1-0.2 0.3-0.3 0.4 0.1-0.1 0.2-0.3 0.3-0.4zM271.5 811.4c-0.1-0.1-0.3-0.2-0.4-0.3 0.1 0.1 0.3 0.2 0.4 0.3zM752.9 811.1c-0.1 0.1-0.3 0.2-0.4 0.3 0.1-0.1 0.3-0.2 0.4-0.3zM675.4 859.6c-0.8 0.4-1.7 0.8-2.5 1.2 0.8-0.4 1.6-0.8 2.5-1.2zM360 864.7l-3.3-1.5c1.1 0.6 2.2 1 3.3 1.5zM517.3 896h-0.4 0.4zM507.1 896h-0.4 0.4zM265.4 806.4c-0.8-0.7-1.6-1.3-2.4-2 0.8 0.6 1.6 1.3 2.4 2zM801.2 764.7c-1.2 1.4-2.5 2.8-3.8 4.3 1.3-1.5 2.5-2.9 3.8-4.3zM761 804.3c-0.8 0.7-1.6 1.4-2.4 2 0.8-0.6 1.6-1.3 2.4-2zM233.6 776.5c-1.8-1.9-3.6-3.8-5.3-5.7 1.7 1.9 3.5 3.8 5.3 5.7zM806.4 758.6c-0.7 0.8-1.3 1.6-2 2.4 0.6-0.8 1.3-1.6 2-2.4zM795.7 770.8c-1.8 1.9-3.5 3.8-5.3 5.7 1.8-1.9 3.6-3.8 5.3-5.7zM259.3 801.2c-1.4-1.2-2.8-2.5-4.3-3.8 1.5 1.3 2.9 2.5 4.3 3.8zM253.2 795.7c-1.9-1.8-3.8-3.5-5.7-5.3 1.9 1.8 3.8 3.6 5.7 5.3zM768.9 797.4c-1.4 1.3-2.8 2.5-4.3 3.8 1.5-1.3 2.9-2.5 4.3-3.8zM776.5 790.4c-1.9 1.8-3.8 3.6-5.7 5.3 1.9-1.7 3.8-3.5 5.7-5.3zM255.1 226.6c1.4-1.3 2.8-2.5 4.3-3.8-1.5 1.3-2.9 2.5-4.3 3.8zM263 219.7c0.8-0.7 1.6-1.4 2.4-2-0.8 0.6-1.6 1.3-2.4 2zM356.6 160.7l3.3-1.5c-1 0.6-2.1 1-3.3 1.5zM340.9 168.1c0.4-0.2 0.7-0.4 1.1-0.5-0.4 0.2-0.8 0.4-1.1 0.5zM271.1 212.9c0.1-0.1 0.3-0.2 0.4-0.3-0.1 0.1-0.3 0.2-0.4 0.3zM506.7 128h0.4-0.4zM348.6 164.4c0.8-0.4 1.7-0.8 2.5-1.2-0.8 0.4-1.6 0.8-2.5 1.2zM516.9 128h0.4-0.4zM247 234.1c-4.4 4.2-8.7 8.5-12.9 12.9 2.1-2.2 4.2-4.4 6.4-6.5s4.3-4.3 6.5-6.4zM160.7 667.4l-1.5-3.3c0.6 1 1 2.1 1.5 3.3zM777 789.9c4.4-4.2 8.7-8.5 12.9-12.9-2.1 2.2-4.2 4.4-6.4 6.5s-4.3 4.3-6.5 6.4zM234.1 777c4.2 4.4 8.5 8.7 12.9 12.9-2.2-2.1-4.4-4.2-6.5-6.4s-4.3-4.3-6.4-6.5zM159.3 360l1.5-3.3c-0.6 1.1-1 2.2-1.5 3.3zM167.6 342c0.2-0.4 0.4-0.7 0.5-1.1-0.1 0.3-0.3 0.7-0.5 1.1zM163.2 351.1c0.4-0.8 0.8-1.7 1.2-2.5-0.4 0.9-0.8 1.7-1.2 2.5zM247.5 233.6c1.9-1.8 3.8-3.6 5.7-5.3-1.9 1.7-3.8 3.5-5.7 5.3zM128 507.1v-0.4 0.4zM128 517.3v-0.4 0.4zM222.8 259.3c1.2-1.4 2.5-2.8 3.8-4.3-1.3 1.5-2.5 2.9-3.8 4.3zM212.6 271.5c0.1-0.1 0.2-0.3 0.4-0.4-0.2 0.1-0.3 0.3-0.4 0.4zM217.6 265.4c0.7-0.8 1.3-1.6 2-2.4-0.6 0.8-1.3 1.6-2 2.4zM228.3 253.2c1.8-1.9 3.5-3.8 5.3-5.7-1.8 1.9-3.6 3.8-5.3 5.7z" fill="#3D5AFE" />
                    <path d="M860.8 351.1c0.8 1.8 1.7 3.7 2.5 5.5-0.8-1.8-1.7-3.6-2.5-5.5zM811.4 271.5c17.2 21.4 32.1 44.6 44.5 69.3-12.3-24.6-27.2-47.8-44.5-69.3zM856.4 342c1.1 2.2 2.2 4.4 3.2 6.6-1-2.2-2.1-4.4-3.2-6.6zM864.7 360c9.4 21.9 16.9 44.8 22.2 68.5-5-22.5-12-44.5-21.1-65.9-0.3-0.9-0.7-1.8-1.1-2.6zM664 159.3c-0.9-0.4-1.7-0.8-2.6-1.1-21.5-9.1-43.6-16.1-66.2-21.1 23.9 5.2 46.9 12.7 68.8 22.2zM789.9 247l0.5 0.5-0.5-0.5zM776.5 233.6l0.5 0.5-0.5-0.5zM795.7 253.2c0.6 0.6 1.1 1.2 1.7 1.8-0.6-0.5-1.1-1.1-1.7-1.8zM683.1 168.1c24.8 12.3 48 27.3 69.3 44.4-21.4-17.2-44.6-32.1-69.3-44.4zM761 219.7c1.2 1 2.5 2.1 3.7 3.2-1.3-1.1-2.5-2.2-3.7-3.2zM752.9 212.9c1.9 1.5 3.8 3.1 5.7 4.7-1.9-1.5-3.8-3.1-5.7-4.7zM768.9 226.6c0.6 0.6 1.2 1.1 1.8 1.7-0.6-0.6-1.2-1.1-1.8-1.7zM801.2 259.3c1.1 1.2 2.1 2.4 3.2 3.7-1.1-1.2-2.2-2.4-3.2-3.7zM667.4 160.7c1.8 0.8 3.7 1.6 5.5 2.5-1.9-0.8-3.7-1.7-5.5-2.5zM806.4 265.4c1.6 1.9 3.1 3.8 4.7 5.7-1.6-1.9-3.2-3.8-4.7-5.7zM675.4 164.4c2.2 1 4.4 2.1 6.6 3.2-2.2-1.1-4.4-2.2-6.6-3.2z" fill="#FFEA00" />
                    <path d="M863.3 356.7c-0.8-1.8-1.7-3.7-2.5-5.5-0.4-0.8-0.8-1.7-1.2-2.5-1-2.2-2.1-4.4-3.2-6.6-0.2-0.4-0.4-0.7-0.5-1.1-12.3-24.8-27.3-48-44.5-69.3-0.1-0.1-0.2-0.3-0.3-0.4-1.5-1.9-3.1-3.8-4.7-5.7-0.7-0.8-1.3-1.6-2-2.4-1-1.2-2.1-2.5-3.2-3.7-1.2-1.4-2.5-2.8-3.8-4.3-0.6-0.6-1.1-1.2-1.7-1.8-1.8-1.9-3.5-3.8-5.3-5.7l-0.5-0.5c-2.1-2.2-4.2-4.4-6.4-6.5s-4.3-4.3-6.5-6.4l-0.5-0.5c-1.9-1.8-3.8-3.6-5.7-5.3-0.6-0.6-1.2-1.1-1.8-1.7-1.4-1.3-2.8-2.5-4.3-3.8-1.2-1.1-2.4-2.1-3.7-3.2-0.8-0.7-1.6-1.4-2.4-2-1.9-1.6-3.8-3.1-5.7-4.7-0.1-0.1-0.3-0.2-0.4-0.3-21.4-17.2-44.6-32.1-69.3-44.4-0.4-0.2-0.7-0.4-1.1-0.5-2.2-1.1-4.4-2.2-6.6-3.2-0.8-0.4-1.7-0.8-2.5-1.2-1.8-0.8-3.7-1.7-5.5-2.5l-3.3-1.5c-21.9-9.5-44.9-17-68.8-22.2L553.7 325c72.5 16 129.6 73.1 145.6 145.5L887 428.7c-5.3-23.7-12.7-46.6-22.2-68.5-0.6-1.3-1-2.4-1.5-3.5z" fill="#FFEA00" />
                    <path d="M664 159.3l3.3 1.5c1.8 0.8 3.7 1.7 5.5 2.5 0.8 0.4 1.7 0.8 2.5 1.2 2.2 1 4.4 2.1 6.6 3.2 0.4 0.2 0.7 0.4 1.1 0.5 24.7 12.3 47.9 27.2 69.3 44.4 0.1 0.1 0.3 0.2 0.4 0.3 1.9 1.5 3.8 3.1 5.7 4.7 0.8 0.7 1.6 1.3 2.4 2 1.2 1 2.5 2.1 3.7 3.2 1.4 1.2 2.8 2.5 4.3 3.8 0.6 0.6 1.2 1.1 1.8 1.7 1.9 1.8 3.8 3.5 5.7 5.3l0.5 0.5c4.4 4.2 8.7 8.5 12.9 12.9l0.5 0.5c1.8 1.9 3.6 3.8 5.3 5.7 0.6 0.6 1.1 1.2 1.7 1.8 1.3 1.4 2.5 2.8 3.8 4.3 1.1 1.2 2.1 2.4 3.2 3.7 0.7 0.8 1.4 1.6 2 2.4 1.6 1.9 3.1 3.8 4.7 5.7 0.1 0.1 0.2 0.3 0.3 0.4 17.3 21.5 32.2 44.7 44.5 69.3 0.2 0.4 0.4 0.7 0.5 1.1 1.1 2.2 2.2 4.4 3.2 6.6 0.4 0.8 0.8 1.7 1.2 2.5 0.8 1.8 1.7 3.7 2.5 5.5l1.5 3.3c0.4 0.9 0.8 1.7 1.1 2.6 9.1 21.4 16.1 43.4 21.1 65.9l62.4-13.9C911.8 245.3 778.5 112 609.1 74.6L595.3 137c22.6 5 44.7 12 66.2 21.1 0.8 0.4 1.7 0.8 2.5 1.2z" fill="#FFFF8D" />
                    <path d="M664 159.3l3.3 1.5c-1.1-0.6-2.2-1-3.3-1.5zM758.6 217.6c0.8 0.7 1.6 1.3 2.4 2-0.8-0.6-1.6-1.3-2.4-2zM672.9 163.2c0.8 0.4 1.7 0.8 2.5 1.2-0.9-0.4-1.7-0.8-2.5-1.2zM811.1 271.1c0.1 0.1 0.2 0.3 0.3 0.4-0.1-0.1-0.2-0.3-0.3-0.4zM752.5 212.6c0.1 0.1 0.3 0.2 0.4 0.3-0.1-0.1-0.3-0.2-0.4-0.3zM682 167.6c0.4 0.2 0.7 0.4 1.1 0.5-0.3-0.1-0.7-0.3-1.1-0.5zM859.6 348.6c0.4 0.8 0.8 1.7 1.2 2.5-0.4-0.8-0.8-1.6-1.2-2.5zM804.3 263c0.7 0.8 1.4 1.6 2 2.4-0.6-0.8-1.3-1.6-2-2.4zM863.3 356.7l1.5 3.3c-0.6-1.1-1-2.2-1.5-3.3zM855.9 340.9c0.2 0.4 0.4 0.7 0.5 1.1-0.2-0.4-0.4-0.8-0.5-1.1zM790.4 247.5c1.8 1.9 3.6 3.8 5.3 5.7-1.7-1.9-3.5-3.8-5.3-5.7zM764.7 222.8c1.4 1.2 2.8 2.5 4.3 3.8-1.5-1.3-2.9-2.5-4.3-3.8zM789.9 247c-4.2-4.4-8.5-8.7-12.9-12.9 2.2 2.1 4.4 4.2 6.5 6.4s4.3 4.3 6.4 6.5zM770.8 228.3c1.9 1.8 3.8 3.5 5.7 5.3-1.9-1.8-3.8-3.6-5.7-5.3zM797.4 255.1c1.3 1.4 2.5 2.8 3.8 4.3-1.3-1.5-2.5-2.9-3.8-4.3z" fill="#FFEA00" />
                </svg>
                Show Statistics
            </button>
        </a>

        <div class="flex flex-col justify-center  items-center">
            <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl mt-5 lg:text-4xl dark:text-white">Lorem ipsum dolor sit amet.</h1>
            <p class="w-3/4 m-auto text-center mb-6 text-lg font-normal text-gray-500 lg:text-lg sm:px-16 xl:px-48">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem sint mollitia libero aperiam rem, repellat distinctio sed obcaecati quaerat et!</p>

        </div>

        @foreach($aventures as $aventure)
                            <p></p>
                           
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
            <img src="{{asset('images/logoTravel.png')}}" class="rounded-t-lg h-16"  alt="Logo" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $aventure->description }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $aventure->description }}</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach




        </div>
    </section>



</body>

</html>