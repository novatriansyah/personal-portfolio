<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://preline.co/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Perfect for showcasing professional background in a CV/Resume format, highlighting skills, experiences, and achievements.">

    <meta name="twitter:site" content="@preline">
    <meta name="twitter:creator" content="@preline">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Personal Tailwind CSS Template | Preline UI, crafted with Tailwind CSS">
    <meta name="twitter:description"
        content="Perfect for showcasing professional background in a CV/Resume format, highlighting skills, experiences, and achievements.">
    <meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

    <meta property="og:url" content="https://preline.co/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Preline">
    <meta property="og:title" content="Personal Tailwind CSS Template | Preline UI, crafted with Tailwind CSS">
    <meta property="og:description"
        content="Perfect for showcasing professional background in a CV/Resume format, highlighting skills, experiences, and achievements.">
    <meta property="og:image" content="https://preline.co/assets/img/og-image.png">

    <!-- Title -->
    <title>Nova Triansyah Azis</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Theme Check and Update -->
    <script>
    const html = document.querySelector('html');
    const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') ===
        'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
    const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' &&
        window.matchMedia('(prefers-color-scheme: dark)').matches);

    if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
    else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
    else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
    else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    </script>

    <!-- CSS Preline -->
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
</head>

<body class="dark:bg-neutral-900">
    <!-- ========== HEADER ========== -->
    <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
        <nav
            class="mt-4 relative max-w-2xl w-full bg-white border border-gray-200 rounded-[2rem] mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto dark:bg-neutral-900 dark:border-neutral-700">
            <div class="px-4 md:px-0 flex justify-between items-center">
                <!-- Logo -->
                <div>
                    <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                        href="../../templates/personal/index.html" aria-label="Preline">
                        <svg xmlns="http://www.w3.org/2000/svg" height="32" width="116" viewBox="0 0 116 32"
                            fill="none">
                            <text x="0" y="24" font-family="Arial, sans-serif" font-size="24" font-weight="normal"
                                fill="currentColor">Nova</text>
                        </svg>


                    </a>
                </div>
                <!-- End Logo -->

                <div class="md:hidden">
                    <!-- Toggle Button -->
                    <button type="button"
                        class="hs-collapse-toggle flex justify-center items-center size-6 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        id="hs-navbar-header-floating-collapse" aria-expanded="false"
                        aria-controls="hs-navbar-header-floating" aria-label="Toggle navigation"
                        data-hs-collapse="#hs-navbar-header-floating">
                        <svg class="hs-collapse-open:hidden shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                    <!-- End Toggle Button -->
                </div>
            </div>

            <div id="hs-navbar-header-floating"
                class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:block"
                aria-labelledby="hs-navbar-header-floating-collapse">
                <div
                    class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-gray-800 font-medium text-gray-800 focus:outline-none dark:border-neutral-200 dark:text-neutral-200"
                        href="#" aria-current="page">Home</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200"
                        href="#projects">Projects</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200"
                        href="#work">Work</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200"
                        href="#skills">Skills</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <div class="w-full max-w-2xl mx-auto pt-10 md:pt-16 px-4 sm:px-6 lg:px-8">
            <!-- Profile -->
            <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                    <img class="shrink-0 size-16 rounded-full"
                        src="https://media.licdn.com/dms/image/v2/D5603AQFZkfh9XITJNg/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1718479854765?e=1733961600&v=beta&t=sYUTJlGZ8xy6ie5U8I8KYBHUV0hHlzZzkNjNcb2s8qw"
                        alt="Avatar">
                </div>

                <div class="grow">
                    <h1 class="text-lg font-medium text-gray-800 dark:text-neutral-200">
                        Nova Triansyah Azis
                    </h1>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        Full Stack Developer
                    </p>
                </div>
            </div>
            <!-- End Profile -->

            <!-- About -->
            <div class="mt-8">
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    I am a Full Stack Developer with over 5 years of experience in web and application development.
                    Proficient in multiple programming languages and frameworks, with a strong
                    background in database management and problem-solving. Proven ability to work
                    collaboratively in a team environment and communicate effectively with management
                    and end-users.
                </p>

                <p class="mt-3 text-sm text-gray-600 dark:text-neutral-400">
                    Currently, I work for PT. NSSOL SYSTEMS INDONESIA, where I design and develop full-stack web
                    applications, handling both frontend and backend tasks. I collaborate with teams to ensure seamless
                    integration, maintain databases, and provide end-user support while adhering to best practices.
                </p>

                <ul class="mt-5 flex flex-col gap-y-3">
                    <li class="flex items-center gap-x-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="16" rx="2" ry="2" />
                            <path d="M22 6l-10 7L2 6" />
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://mail.google.com/mail/?view=cm&fs=1&to=novaajis20@gmail.com">
                            novaajis20@gmail.com
                        </a>
                    </li>

                    <li class="flex items-center gap-x-2.5">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.8535 7.96868C28.4227 5.51725 26.482 3.57645 24.0308 2.14584C21.5792 0.715158 18.9028 0 15.9997 0C13.097 0 10.4197 0.715377 7.96868 2.14584C5.51725 3.57638 3.57659 5.51725 2.14584 7.96868C0.715304 10.42 0 13.0969 0 15.9993C0 19.4857 1.01717 22.6208 3.05203 25.4053C5.08667 28.1901 7.71511 30.117 10.9372 31.1863C11.3122 31.2559 11.5899 31.207 11.7704 31.0407C11.951 30.8742 12.0412 30.6656 12.0412 30.4159C12.0412 30.3743 12.0376 29.9994 12.0307 29.291C12.0235 28.5825 12.0201 27.9645 12.0201 27.4372L11.541 27.5201C11.2354 27.576 10.85 27.5997 10.3847 27.593C9.91962 27.5865 9.43679 27.5378 8.93689 27.4472C8.43677 27.3573 7.9716 27.149 7.54101 26.8226C7.11065 26.4962 6.80513 26.069 6.62454 25.5416L6.41621 25.0622C6.27735 24.743 6.05874 24.3885 5.76009 23.9999C5.46143 23.6109 5.15941 23.3472 4.8539 23.2083L4.70803 23.1039C4.61084 23.0345 4.52065 22.9508 4.43725 22.8537C4.35392 22.7566 4.29153 22.6594 4.24987 22.562C4.20813 22.4646 4.24272 22.3847 4.35399 22.322C4.46527 22.2594 4.66637 22.2289 4.95817 22.2289L5.37467 22.2912C5.65246 22.3469 5.99606 22.5132 6.40592 22.7911C6.81557 23.0688 7.15231 23.4298 7.41624 23.8741C7.73584 24.4437 8.12089 24.8777 8.57249 25.1763C9.02372 25.475 9.47868 25.6241 9.93691 25.6241C10.3952 25.6241 10.7909 25.5893 11.1244 25.5202C11.4575 25.4508 11.77 25.3463 12.0618 25.2076C12.1868 24.2766 12.5271 23.5615 13.0825 23.0616C12.2909 22.9784 11.5793 22.8531 10.9472 22.6865C10.3154 22.5197 9.66255 22.249 8.98906 21.8737C8.3152 21.4988 7.7562 21.0334 7.31189 20.4781C6.86752 19.9225 6.50283 19.1931 6.21832 18.2906C5.93368 17.3877 5.79132 16.3461 5.79132 15.1656C5.79132 13.4848 6.34003 12.0545 7.43725 10.8739C6.92327 9.61024 6.97179 8.19364 7.58297 6.62424C7.98575 6.4991 8.58307 6.59301 9.37462 6.90539C10.1663 7.21791 10.746 7.48563 11.1142 7.7076C11.4824 7.92949 11.7774 8.11753 11.9996 8.27004C13.2915 7.90906 14.6247 7.72854 15.9996 7.72854C17.3745 7.72854 18.7079 7.90906 19.9999 8.27004L20.7915 7.77028C21.3329 7.43681 21.9722 7.13123 22.7078 6.85344C23.4439 6.57579 24.0068 6.49932 24.3959 6.62446C25.0206 8.19393 25.0763 9.61046 24.5622 10.8741C25.6593 12.0547 26.2082 13.4854 26.2082 15.1659C26.2082 16.3463 26.0654 17.3912 25.7812 18.301C25.4966 19.211 25.1288 19.9396 24.6775 20.4885C24.2258 21.0373 23.6632 21.4991 22.9897 21.8739C22.3161 22.2489 21.663 22.5196 21.0312 22.6864C20.3992 22.8533 19.6875 22.9786 18.896 23.0619C19.6179 23.6867 19.979 24.6729 19.979 26.02V30.4154C19.979 30.665 20.0658 30.8735 20.2396 31.0401C20.4132 31.2064 20.6873 31.2554 21.0624 31.1857C24.2849 30.1165 26.9133 28.1895 28.9479 25.4047C30.9822 22.6202 31.9998 19.4851 31.9998 15.9987C31.999 13.0967 31.2834 10.42 29.8535 7.96868Z"
                                fill="#2F3136"></path>
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://github.com/novatriansyah">
                            novatriansyah
                        </a>
                    </li>

                    <li class="flex items-center gap-x-2.5">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.3275 2.55992C24.0475 2.55743 23.7975 2.73493 23.71 3.00242L20.5275 12.7999H11.4725L8.29 3.00242C8.205 2.74493 7.9675 2.56743 7.695 2.55992C7.4225 2.55493 7.1775 2.71992 7.08 2.97493L3.245 13.2099C3.2425 13.2099 3.2425 13.2124 3.24 13.2149L1.32 18.3349C1.22 18.6049 1.31 18.9074 1.545 19.0774L15.62 29.3124L15.6225 29.3174C15.625 29.3174 15.625 29.3174 15.625 29.3199C15.6325 29.3249 15.6425 29.3299 15.65 29.3349C15.66 29.3399 15.6675 29.3474 15.6775 29.3524C15.68 29.3524 15.68 29.3549 15.6825 29.3549C15.6825 29.3549 15.685 29.3574 15.6875 29.3574C15.69 29.3599 15.6925 29.3624 15.6975 29.3624C15.7 29.3649 15.705 29.3674 15.7075 29.3699C15.72 29.3749 15.735 29.3824 15.75 29.3874C15.75 29.3874 15.75 29.3874 15.75 29.3899C15.765 29.3949 15.78 29.3999 15.7925 29.4049C15.795 29.4049 15.795 29.4049 15.7975 29.4074C15.8075 29.4099 15.8175 29.4124 15.83 29.4174C15.835 29.4174 15.84 29.4199 15.8475 29.4199C15.8475 29.4224 15.8475 29.4224 15.8475 29.4199C15.86 29.4249 15.8725 29.4274 15.885 29.4299C15.9025 29.4324 15.9175 29.4349 15.935 29.4374C15.96 29.4374 15.9875 29.4399 16.0125 29.4399C16.0375 29.4374 16.06 29.4374 16.0825 29.4324C16.0925 29.4324 16.1 29.4324 16.11 29.4299C16.11 29.4299 16.1125 29.4299 16.115 29.4299C16.12 29.4274 16.1225 29.4274 16.1275 29.4274C16.13 29.4274 16.1325 29.4249 16.1375 29.4249C16.1425 29.4224 16.15 29.4224 16.155 29.4199C16.165 29.4174 16.1725 29.4149 16.18 29.4124C16.185 29.4124 16.1875 29.4124 16.19 29.4099C16.1925 29.4099 16.195 29.4099 16.1975 29.4099C16.2075 29.4049 16.22 29.3999 16.23 29.3974C16.2425 29.3924 16.2525 29.3874 16.2625 29.3824C16.265 29.3824 16.265 29.3824 16.2675 29.3799C16.27 29.3799 16.2725 29.3799 16.275 29.3774C16.28 29.3749 16.285 29.3724 16.29 29.3699C16.305 29.3624 16.3175 29.3549 16.33 29.3474C16.335 29.3449 16.3375 29.3424 16.34 29.3399C16.3425 29.3399 16.345 29.3374 16.3475 29.3374C16.3575 29.3299 16.3675 29.3249 16.3775 29.3174L16.3825 29.3099L30.4575 19.0774C30.69 18.9074 30.78 18.6049 30.68 18.3349L28.765 13.2324C28.7625 13.2274 28.76 13.2199 28.76 13.2149L24.92 2.97493C24.825 2.72743 24.5925 2.56242 24.3275 2.55992ZM7.6375 5.13742L10.1275 12.7999H4.765L7.6375 5.13742ZM24.3625 5.13742L27.2375 12.7999H21.8725L24.3625 5.13742ZM5.1625 14.0799H10.5425L14.29 25.6099L5.1625 14.0799ZM11.89 14.0799H20.11L16 26.7299L11.89 14.0799ZM21.4575 14.0799H26.8375L17.71 25.6099L21.4575 14.0799ZM4.04 14.7249L12.6 25.5374L2.69 18.3299L4.04 14.7249ZM27.96 14.7249L29.31 18.3299L19.4 25.5374L27.96 14.7249Z"
                                fill="#2F3136"></path>
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://gitlab.com/novatriansyah">
                            novatriansyah
                        </a>
                    </li>

                    <li class="flex items-center gap-x-2.5">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM11.3506 24.1875H7.45386V12.4641H11.3506V24.1875ZM9.40234 10.8633H9.37695C8.06934 10.8633 7.22363 9.96313 7.22363 8.83813C7.22363 7.68774 8.09521 6.8125 9.42822 6.8125C10.7612 6.8125 11.5815 7.68774 11.6069 8.83813C11.6069 9.96313 10.7612 10.8633 9.40234 10.8633ZM25.4014 24.1875H21.5051V17.9158C21.5051 16.3396 20.9409 15.2646 19.531 15.2646C18.4546 15.2646 17.8135 15.9897 17.5317 16.6897C17.4287 16.9402 17.4036 17.2903 17.4036 17.6406V24.1875H13.5071C13.5071 24.1875 13.5581 13.564 13.5071 12.4641H17.4036V14.124C17.9214 13.3252 18.8479 12.189 20.9153 12.189C23.479 12.189 25.4014 13.8645 25.4014 17.4653V24.1875Z"
                                fill="#2F3136"></path>
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://www.linkedin.com/in/nova-azis-823185178/">
                            Nova Triansyah Azis
                        </a>
                    </li>

                    <li class="flex items-center gap-x-2.5">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M26.6119 5.34412C23.8053 2.53418 20.0726 0.986023 16.0961 0.984375C7.90216 0.984375 1.23346 7.65289 1.23016 15.8491C1.22907 18.4691 1.91351 21.0267 3.21448 23.2811L1.10547 30.9844L8.98615 28.9171C11.1576 30.1016 13.6022 30.7258 16.0901 30.7266H16.0963C24.2894 30.7266 30.9588 24.0575 30.9619 15.861C30.9636 11.8887 29.4187 8.15387 26.6119 5.34412ZM16.0961 28.216H16.091C13.874 28.2151 11.6996 27.6193 9.80225 26.4937L9.35126 26.2258L4.67475 27.4526L5.92298 22.8931L5.62909 22.4257C4.39221 20.4584 3.73908 18.1846 3.74018 15.85C3.74274 9.03754 9.28571 3.49512 16.1011 3.49512C19.4014 3.49622 22.5037 4.78308 24.8365 7.11859C27.1693 9.4541 28.4532 12.5585 28.4521 15.86C28.4492 22.673 22.9066 28.216 16.0961 28.216ZM22.8736 18.962C22.5023 18.776 20.676 17.8777 20.3354 17.7535C19.9952 17.6296 19.7473 17.5679 19.4999 17.9396C19.2521 18.3113 18.5404 19.1481 18.3236 19.3958C18.1068 19.6437 17.8904 19.6749 17.5189 19.4888C17.1473 19.303 15.9506 18.9106 14.5317 17.6451C13.4276 16.6602 12.6821 15.4438 12.4653 15.0721C12.2489 14.7001 12.4635 14.5184 12.6283 14.3141C13.0304 13.8148 13.4331 13.2913 13.5568 13.0435C13.6808 12.7956 13.6187 12.5786 13.5257 12.3928C13.4331 12.2069 12.6902 10.3786 12.3807 9.63464C12.079 8.91064 11.773 9.00842 11.5449 8.99707C11.3284 8.98627 11.0807 8.98407 10.833 8.98407C10.5854 8.98407 10.1829 9.0769 9.84235 9.44897C9.50196 9.82086 8.54249 10.7194 8.54249 12.5477C8.54249 14.376 9.87348 16.1422 10.0591 16.3901C10.2448 16.6381 12.6785 20.3899 16.4045 21.9987C17.2907 22.3817 17.9825 22.61 18.5221 22.7812C19.412 23.064 20.2215 23.024 20.8616 22.9285C21.5754 22.8217 23.0591 22.0298 23.3689 21.1622C23.6784 20.2945 23.6784 19.5509 23.5853 19.3958C23.4927 19.2409 23.2449 19.1481 22.8736 18.962Z"
                                fill="#2F3136"></path>
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://api.whatsapp.com/send/?phone=6287721312985&text&type=phone_number&app_absent=0">
                            +62 877-2131-2985
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End About -->

            <!-- Projects -->
            <div id="projects" class="mt-10 sm:mt-14">
                <h2 class="mb-5 font-medium text-gray-800 dark:text-neutral-200">
                    Projects
                </h2>

                <!-- Image Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                    <!-- Project Section 1 with Modal Trigger -->
                    <div class="hs-tooltip [--trigger:hover] sm:[--placement:right] inline-block relative">
                        <!-- Project Image -->
                        <a class="hs-tooltip-toggle block relative overflow-hidden rounded-lg cursor-pointer"
                            data-hs-overlay="#project-modal1">
                            <img class="w-full size-36 object-cover bg-gray-100 rounded-lg dark:bg-neutral-800"
                                src="https://upload.wikimedia.org/wikipedia/commons/3/30/Logo_of_the_Ministry_of_Energy_and_Mineral_Resources_of_the_Republic_of_Indonesia.svg"
                                alt="Project">
                        </a>

                        <!-- Popover Content -->
                        <div
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-10 max-w-xs w-full bg-white border border-gray-100 text-start rounded-xl shadow-md dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                <h4 class="font-semibold text-gray-800 dark:text-white">
                                    Perizinan ESDM
                                </h4>
                                <!-- List of Details -->
                                <ul class="py-3 px-4 space-y-1">
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                            PT. Mitreka Solusi Indonesia
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                <path d="M12 18h.01"></path>
                                            </svg>
                                            Completed
                                        </div>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                            <!-- End Header -->

                            <!-- List of Details -->
                            <ul class="py-3 px-4 space-y-1">

                            </ul>
                            <!-- End List -->
                        </div>
                    </div>

                    <!-- Modal Structure Project 1 -->
                    <div id="project-modal1"
                        class="hs-overlay hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50">
                        <div
                            class="hs-overlay-open:animate-slideDown hs-overlay-close:animate-slideUp transition-transform duration-300 ease-out relative w-full max-w-2xl mx-auto mt-20">
                            <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-md p-6">
                                <!-- Modal Header -->
                                <div
                                    class="flex justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-3">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                        Detailed Project Name
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                        data-hs-overlay="#project-modal1">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body with Image and Description -->
                                <div class="mt-4 space-y-4">
                                    <img class="w-full rounded-lg"
                                        src="https://upload.wikimedia.org/wikipedia/commons/3/30/Logo_of_the_Ministry_of_Energy_and_Mineral_Resources_of_the_Republic_of_Indonesia.svg"
                                        alt="Detailed Project Image">
                                    <p class="text-gray-800 dark:text-neutral-300">
                                        A comprehensive application designed to facilitate business entities in applying
                                        for
                                        business licenses within the energy and mineral resources sector.
                                    </p>
                                    <p class="text-gray-800 dark:text-neutral-300">
                                    <p class="text-sm text-gray-600 dark:text-neutral-300">TECH STACK:</p>
                                    <ul class="text-sm text-gray-600">
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Codeigniter
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            HTML
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            CSS
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Bootstrap
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            PHP
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Javascript
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Jquery
                                        </li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="mt-6 flex justify-end">
                                    <button type="button"
                                        class="py-2 px-4 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                        data-hs-overlay="#project-modal1">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Section 2 with Modal Trigger -->
                    <div class="hs-tooltip [--trigger:hover] sm:[--placement:right] inline-block relative">
                        <!-- Project Image -->
                        <a class="hs-tooltip-toggle block relative overflow-hidden rounded-lg cursor-pointer"
                            data-hs-overlay="#project-modal2">
                            <img class="w-full size-36 object-cover bg-gray-100 rounded-lg dark:bg-neutral-800"
                                src="https://mitrekasolusi.co.id/upload/product/img-ori/1595904202.jpg" alt="Project">
                        </a>

                        <!-- Popover Content -->
                        <div
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-10 max-w-xs w-full bg-white border border-gray-100 text-start rounded-xl shadow-md dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                <h4 class="font-semibold text-gray-800 dark:text-white">
                                    Form Generator
                                </h4>
                                <!-- List of Details -->
                                <ul class="py-3 px-4 space-y-1">
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                            PT. Mitreka Solusi Indonesia
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                <path d="M12 18h.01"></path>
                                            </svg>
                                            Completed
                                        </div>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                            <!-- End Header -->

                            <!-- List of Details -->
                            <ul class="py-3 px-4 space-y-1">

                            </ul>
                            <!-- End List -->
                        </div>
                    </div>

                    <!-- Modal Structure Project 2 -->
                    <div id="project-modal2"
                        class="hs-overlay hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50">
                        <div
                            class="hs-overlay-open:animate-slideDown hs-overlay-close:animate-slideUp transition-transform duration-300 ease-out relative w-full max-w-2xl mx-auto mt-20">
                            <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-md p-6">
                                <!-- Modal Header -->
                                <div
                                    class="flex justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-3">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                        Detailed Project Name
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                        data-hs-overlay="#project-modal2">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body with Image and Description -->
                                <div class="mt-4 space-y-4">
                                    <img class="w-full rounded-lg"
                                        src="https://mitrekasolusi.co.id/upload/product/img-ori/1595904202.jpg"
                                        alt="Detailed Project Image">
                                    <p class="text-gray-800 dark:text-neutral-300">
                                        An application that enables the electronic creation of letter scripts based on
                                        specified form inputs, streamlining document generation processes.
                                    </p>
                                    <p class="text-gray-800 dark:text-neutral-300">
                                    <p class="text-sm text-gray-600 dark:text-neutral-300">TECH STACK:</p>
                                    <ul class="text-sm text-gray-600">
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Java
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            HTML
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            CSS
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Bootstrap
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Javascript
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Jquery
                                        </li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="mt-6 flex justify-end">
                                    <button type="button"
                                        class="py-2 px-4 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                        data-hs-overlay="#project-modal2">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Section 3 with Modal Trigger -->
                    <div class="hs-tooltip [--trigger:hover] sm:[--placement:right] inline-block relative">
                        <!-- Project Image -->
                        <a class="hs-tooltip-toggle block relative overflow-hidden rounded-lg cursor-pointer"
                            data-hs-overlay="#project-modal3">
                            <img class="w-full size-36 object-cover bg-gray-100 rounded-lg dark:bg-neutral-800"
                                src="https://upload.wikimedia.org/wikipedia/commons/3/30/Logo_of_the_Ministry_of_Energy_and_Mineral_Resources_of_the_Republic_of_Indonesia.svg"
                                alt="Project">
                        </a>

                        <!-- Popover Content -->
                        <div
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-10 max-w-xs w-full bg-white border border-gray-100 text-start rounded-xl shadow-md dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                <h4 class="font-semibold text-gray-800 dark:text-white">
                                    Beneficial Ownership ESDM
                                </h4>
                                <!-- List of Details -->
                                <ul class="py-3 px-4 space-y-1">
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                            PT. Mitreka Solusi Indonesia
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                <path d="M12 18h.01"></path>
                                            </svg>
                                            Completed
                                        </div>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                            <!-- End Header -->

                            <!-- List of Details -->
                            <ul class="py-3 px-4 space-y-1">

                            </ul>
                            <!-- End List -->
                        </div>
                    </div>

                    <!-- Modal Structure Project 3 -->
                    <div id="project-modal3"
                        class="hs-overlay hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50">
                        <div
                            class="hs-overlay-open:animate-slideDown hs-overlay-close:animate-slideUp transition-transform duration-300 ease-out relative w-full max-w-2xl mx-auto mt-20">
                            <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-md p-6">
                                <!-- Modal Header -->
                                <div
                                    class="flex justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-3">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                        Detailed Project Name
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                        data-hs-overlay="#project-modal3">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body with Image and Description -->
                                <div class="mt-4 space-y-4">
                                    <img class="w-full rounded-lg"
                                        src="https://upload.wikimedia.org/wikipedia/commons/3/30/Logo_of_the_Ministry_of_Energy_and_Mineral_Resources_of_the_Republic_of_Indonesia.svg"
                                        alt="Detailed Project Image">
                                    <p class="text-gray-800 dark:text-neutral-300">
                                        An application developed to identify and display the beneficial owners of
                                        companies, providing transparency in ownership structures.
                                    </p>
                                    <p class="text-gray-800 dark:text-neutral-300">
                                    <p class="text-sm text-gray-600 dark:text-neutral-300">TECH STACK:</p>
                                    <ul class="text-sm text-gray-600">
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Laravel
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            HTML
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            CSS
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Bootstrap
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            PHP
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Javascript
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Jquery
                                        </li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="mt-6 flex justify-end">
                                    <button type="button"
                                        class="py-2 px-4 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                        data-hs-overlay="#project-modal3">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Section 4 with Modal Trigger -->
                    <div class="hs-tooltip [--trigger:hover] sm:[--placement:right] inline-block relative">
                        <!-- Project Image -->
                        <a class="hs-tooltip-toggle block relative overflow-hidden rounded-lg cursor-pointer"
                            data-hs-overlay="#project-modal4">
                            <img class="w-full size-36 object-cover bg-gray-100 rounded-lg dark:bg-neutral-800"
                                src="https://upload.wikimedia.org/wikipedia/commons/1/15/Logo_Kementerian_Perhubungan_Indonesia_%28Kemenhub%29.png"
                                alt="Project">
                        </a>

                        <!-- Popover Content -->
                        <div
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-10 max-w-xs w-full bg-white border border-gray-100 text-start rounded-xl shadow-md dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                <h4 class="font-semibold text-gray-800 dark:text-white">
                                    Sistem Informasi Persetujuan Penggunaan Kapal Asing
                                </h4>
                                <!-- List of Details -->
                                <ul class="py-3 px-4 space-y-1">
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                            PT. Mitreka Solusi Indonesia
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                <path d="M12 18h.01"></path>
                                            </svg>
                                            Completed
                                        </div>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                            <!-- End Header -->

                            <!-- List of Details -->
                            <ul class="py-3 px-4 space-y-1">

                            </ul>
                            <!-- End List -->
                        </div>
                    </div>

                    <!-- Modal Structure Project 4 -->
                    <div id="project-modal4"
                        class="hs-overlay hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50">
                        <div
                            class="hs-overlay-open:animate-slideDown hs-overlay-close:animate-slideUp transition-transform duration-300 ease-out relative w-full max-w-2xl mx-auto mt-20">
                            <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-md p-6">
                                <!-- Modal Header -->
                                <div
                                    class="flex justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-3">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                        Detailed Project Name
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                        data-hs-overlay="#project-modal4">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body with Image and Description -->
                                <div class="mt-4 space-y-4">
                                    <img class="w-full rounded-lg"
                                        src="https://upload.wikimedia.org/wikipedia/commons/1/15/Logo_Kementerian_Perhubungan_Indonesia_%28Kemenhub%29.png"
                                        alt="Detailed Project Image">
                                    <p class="text-gray-800 dark:text-neutral-300">
                                        An application that streamlines the process for business entities to apply for
                                        the use
                                        of foreign vessels, ensuring regulatory compliance and efficiency.
                                    </p>
                                    <p class="text-gray-800 dark:text-neutral-300">
                                    <p class="text-sm text-gray-600 dark:text-neutral-300">TECH STACK:</p>
                                    <ul class="text-sm text-gray-600">
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Codeigniter
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            HTML
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            CSS
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Bootstrap
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            PHP
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Javascript
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Jquery
                                        </li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="mt-6 flex justify-end">
                                    <button type="button"
                                        class="py-2 px-4 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                        data-hs-overlay="#project-modal4">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Section 5 with Modal Trigger -->
                    <div class="hs-tooltip [--trigger:hover] sm:[--placement:right] inline-block relative">
                        <!-- Project Image -->
                        <a class="hs-tooltip-toggle block relative overflow-hidden rounded-lg cursor-pointer"
                            data-hs-overlay="#project-modal5">
                            <img class="w-full size-36 object-cover bg-gray-100 rounded-lg dark:bg-neutral-800"
                                src="https://media.licdn.com/dms/image/v2/C560BAQFkX8lwpRr_RQ/company-logo_200_200/company-logo_200_200/0/1668746131901?e=2147483647&v=beta&t=A3w7YTdMF3Xr5ld1pdU3Z4qk7joyM4mwkrhGjfMa8qw"
                                alt="Project">
                        </a>

                        <!-- Popover Content -->
                        <div
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-10 max-w-xs w-full bg-white border border-gray-100 text-start rounded-xl shadow-md dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                <h4 class="font-semibold text-gray-800 dark:text-white">
                                    PASI (ERP System)
                                </h4>
                                <!-- List of Details -->
                                <ul class="py-3 px-4 space-y-1">
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                            PT. NSSOL SYSTEMS INDONESIA
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                <path d="M12 18h.01"></path>
                                            </svg>
                                            Completed
                                        </div>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                            <!-- End Header -->

                            <!-- List of Details -->
                            <ul class="py-3 px-4 space-y-1">

                            </ul>
                            <!-- End List -->
                        </div>
                    </div>

                    <!-- Modal Structure Project 5 -->
                    <div id="project-modal5"
                        class="hs-overlay hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50">
                        <div
                            class="hs-overlay-open:animate-slideDown hs-overlay-close:animate-slideUp transition-transform duration-300 ease-out relative w-full max-w-2xl mx-auto mt-20">
                            <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-md p-6">
                                <!-- Modal Header -->
                                <div
                                    class="flex justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-3">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                        Detailed Project Name
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                        data-hs-overlay="#project-modal5">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body with Image and Description -->
                                <div class="mt-4 space-y-4">
                                    <img class="w-full rounded-lg"
                                        src="https://media.licdn.com/dms/image/v2/C560BAQFkX8lwpRr_RQ/company-logo_200_200/company-logo_200_200/0/1668746131901?e=2147483647&v=beta&t=A3w7YTdMF3Xr5ld1pdU3Z4qk7joyM4mwkrhGjfMa8qw"
                                        alt="Detailed Project Image">
                                    <p class="text-gray-800 dark:text-neutral-300">
                                        An Enterprise Resource Planning (ERP) system aimed at improving budget control
                                        processes, enhancing the efficiency of purchase operations, and strengthening
                                        internal control within the organization.
                                    </p>
                                    <p class="text-gray-800 dark:text-neutral-300">
                                    <p class="text-sm text-gray-600 dark:text-neutral-300">TECH STACK:</p>
                                    <ul class="text-sm text-gray-600">
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Java
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            JSP
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            CSS
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Bootstrap
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            PHP
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Javascript
                                        </li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="mt-6 flex justify-end">
                                    <button type="button"
                                        class="py-2 px-4 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                        data-hs-overlay="#project-modal5">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Section 6 with Modal Trigger -->
                    <div class="hs-tooltip [--trigger:hover] sm:[--placement:right] inline-block relative">
                        <!-- Project Image -->
                        <a class="hs-tooltip-toggle block relative overflow-hidden rounded-lg cursor-pointer"
                            data-hs-overlay="#project-modal6">
                            <img class="w-full size-36 object-cover bg-gray-100 rounded-lg dark:bg-neutral-800"
                                src="https://i0.wp.com/lokercilegon.com/wp-content/uploads/2024/08/PT-Krakatau-Nippon-Steel-Synergy-PT-KNSS.png?resize=780%2C470&ssl=1"
                                alt="Project">
                        </a>

                        <!-- Popover Content -->
                        <div
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-10 max-w-xs w-full bg-white border border-gray-100 text-start rounded-xl shadow-md dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                <h4 class="font-semibold text-gray-800 dark:text-white">
                                    Production Control System (PCS)
                                </h4>
                                <!-- List of Details -->
                                <ul class="py-3 px-4 space-y-1">
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                                <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                                <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                                <path d="M10 6h4"></path>
                                                <path d="M10 10h4"></path>
                                                <path d="M10 14h4"></path>
                                                <path d="M10 18h4"></path>
                                            </svg>
                                            PT. NSSOL SYSTEMS INDONESIA
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="inline-flex items-center gap-x-3 text-sm text-gray-800 dark:text-neutral-200">
                                            <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-400"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                <path d="M12 18h.01"></path>
                                            </svg>
                                            Completed
                                        </div>
                                    </li>
                                </ul>
                                <!-- End List -->
                            </div>
                            <!-- End Header -->

                            <!-- List of Details -->
                            <ul class="py-3 px-4 space-y-1">

                            </ul>
                            <!-- End List -->
                        </div>
                    </div>

                    <!-- Modal Structure Project 6 -->
                    <div id="project-modal6"
                        class="hs-overlay hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50">
                        <div
                            class="hs-overlay-open:animate-slideDown hs-overlay-close:animate-slideUp transition-transform duration-300 ease-out relative w-full max-w-2xl mx-auto mt-20">
                            <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-md p-6">
                                <!-- Modal Header -->
                                <div
                                    class="flex justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-3">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                        Detailed Project Name
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                        data-hs-overlay="#project-modal5">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body with Image and Description -->
                                <div class="mt-4 space-y-4">
                                    <img class="w-full rounded-lg"
                                        src="https://i0.wp.com/lokercilegon.com/wp-content/uploads/2024/08/PT-Krakatau-Nippon-Steel-Synergy-PT-KNSS.png?resize=780%2C470&ssl=1              "
                                        alt="Detailed Project Image">
                                    <p class="text-gray-800 dark:text-neutral-300">
                                        A comprehensive system for recording and managing pipe production processes
                                        from raw materials to finished goods. The system facilitates price input for
                                        various
                                        products, including HOT-DIP GALVANIZED STEEL (GI), Hot-Dip Galvannealed Steel
                                        Coils (GA), and COLD ROLLED STEEL, enhancing production efficiency and control
                                    </p>
                                    <p class="text-gray-800 dark:text-neutral-300">
                                    <p class="text-sm text-gray-600 dark:text-neutral-300">TECH STACK:</p>
                                    <ul class="text-sm text-gray-600">
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Java
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            JSP
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            CSS
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Bootstrap
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            PHP
                                        </li>
                                        <li
                                            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            Javascript
                                        </li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="mt-6 flex justify-end">
                                    <button type="button"
                                        class="py-2 px-4 bg-gray-200 hover:bg-gray-300 rounded-lg text-gray-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                        data-hs-overlay="#project-modal6">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Image Grid -->
            </div>
            <!-- End Projects -->

            <!-- Skills -->
            <div id="skills" class="my-10 sm:my-14">
                <h2 class="mb-5 font-medium text-gray-800 dark:text-neutral-200">
                    Skills
                </h2>

                <!-- List -->
                <div class="space-y-3">
                    <dl class="flex flex-col sm:flex-row gap-1">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Design Tools:</span>
                        </dt>
                        <dd>
                            <ul>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z" />
                                        <path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z" />
                                        <path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z" />
                                        <path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z" />
                                        <path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z" />
                                    </svg>
                                    Figma
                                </li>
                            </ul>
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-1">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Development:</span>
                        </dt>
                        <dd>
                            <ul>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.41014 21.6082L1.5 0H22.5L20.5899 21.5965L11.9826 24"
                                            fill="currentColor" />
                                        <path d="M12.5 22V2H20.5L18.9734 20.083" fill="currentColor" />
                                        <path
                                            d="M5.5 4H12.5V6.64672H8.55789L8.81579 9.35756H12.5V11.9984H6.2614M6.38421 13.3276H9.18421L9.3807 15.4438L12.5 16.2367V19L6.77719 17.4843"
                                            fill="white" fill-opacity="0.8" />
                                        <path
                                            d="M18.5 4H12.5V6.64877H18.2786M18.0624 9.36173H12.5V12.0105H15.4525L15.1731 15.4527L12.5 16.2462V19L17.4033 17.4948"
                                            fill="white" />
                                    </svg>
                                    HTML
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.3448 21.6009L1.41895 0H22.5809L20.653 21.5975L11.987 24L3.3448 21.6009Z"
                                            fill="currentColor" />
                                        <path d="M19.0026 20.2227L20.6501 1.7666H12V22.1641L19.0026 20.2227Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.83407 9.77721L6.0715 12.4264H12V9.77721H5.83407ZM5.59778 7.06432H12V4.41504H5.35693L5.59778 7.06432ZM12 16.6576L11.9884 16.6607L9.03789 15.864L8.84931 13.7511H6.18981L6.56101 17.9108L11.9878 19.4174L12 19.414V16.6576Z"
                                            fill="white" fill-opacity="0.8" />
                                        <path
                                            d="M11.9907 9.77721V12.4264H15.253L14.9455 15.8623L11.9907 16.6598V19.4161L17.4218 17.9108L17.4617 17.4632L18.0842 10.4886L18.1489 9.77721L18.6271 4.41504H11.9907V7.06432H15.7238L15.4827 9.77721H11.9907Z"
                                            fill="white" />
                                    </svg>
                                    CSS
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 5C8.8 5 6.8 6.6 6 9.8C7.2 8.2 8.6 7.6 10.2 8C11.1129 8.228 11.7653 8.89067 12.4876 9.62356C13.664 10.8178 15.0258 12.2 18 12.2C21.2 12.2 23.2 10.6 24 7.4C22.8 9 21.4 9.6 19.8 9.2C18.8871 8.972 18.2347 8.30933 17.5124 7.57644C16.336 6.38222 14.9742 5 12 5ZM6 12.2C2.8 12.2 0.8 13.8 0 17C1.2 15.4 2.6 14.8 4.2 15.2C5.11289 15.4284 5.76533 16.0907 6.48756 16.8236C7.664 18.0178 9.02578 19.4 12 19.4C15.2 19.4 17.2 17.8 18 14.6C16.8 16.2 15.4 16.8 13.8 16.4C12.8871 16.172 12.2347 15.5093 11.5124 14.7764C10.336 13.5822 8.97422 12.2 6 12.2Z"
                                            fill="currentColor" />
                                    </svg>
                                    Tailwind CSS
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="160" height="143" viewBox="0 0 15 15"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.10395 3.39722L6.57057 8.33045L3.92564 9.2121L2.59746 3.89939L4.10395 3.39722Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M9.27727 11.5078L7.98064 8.91452L11.1378 7.86212L12.3027 9.69254L9.27727 11.5078Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M12.1839 6.45935L11.5623 6.66653L11.0444 5.85257L11.6207 5.70848L12.1839 6.45935Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 2.5C0 1.11929 1.11929 0 2.5 0H12.5C13.8807 0 15 1.11929 15 2.5V12.5C15 13.8807 13.8807 15 12.5 15H2.5C1.11929 15 0 13.8807 0 12.5V2.5ZM4.80445 2.56215C4.69317 2.33959 4.43518 2.23272 4.19912 2.31141L1.84198 3.09712C1.59412 3.17974 1.45165 3.43927 1.51502 3.69273L3.08645 9.97845C3.12023 10.1136 3.20883 10.2285 3.33091 10.2955C3.453 10.3625 3.59751 10.3756 3.72963 10.3315L7.02232 9.23396L8.62431 12.4379C8.68659 12.5625 8.79801 12.6554 8.93173 12.6944C9.06544 12.7333 9.20934 12.7147 9.32877 12.6431L13.2573 10.2859C13.373 10.2165 13.4557 10.1033 13.4867 9.97206C13.5177 9.84078 13.4943 9.70254 13.4219 9.58874L12.1157 7.53616L13.1582 7.18866C13.3107 7.13784 13.4294 7.01682 13.4773 6.86341C13.5253 6.71 13.4965 6.5429 13.4001 6.41432L12.2215 4.84289C12.1008 4.68196 11.8954 4.60903 11.7003 4.65782L10.1288 5.05068C9.9729 5.08966 9.84522 5.20122 9.78567 5.3505C9.72613 5.49979 9.74197 5.6686 9.82826 5.80419L10.5845 6.99249L7.52888 8.01101L4.80445 2.56215Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    Laravel
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg fill="none" class="shrink-0 size-4 me-1" width="160" height="143" viewBox="0 0 32 32" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.313 14.789h-2.809c0 2.422-0.011 4.829-0.011 7.254 0.033 0.329 0.051 0.712 0.051 1.099 0 0.81-0.081 1.601-0.236 2.365l0.013-0.076c-0.412 0.861-1.475 0.751-1.957 0.6-0.451-0.242-0.808-0.609-1.031-1.055l-0.006-0.014c-0.044-0.094-0.097-0.174-0.16-0.246l0.001 0.001-2.281 1.406c0.367 0.79 0.934 1.434 1.637 1.885l0.018 0.011c0.763 0.427 1.675 0.678 2.645 0.678 0.484 0 0.954-0.063 1.401-0.18l-0.038 0.009c0.988-0.248 1.793-0.89 2.254-1.744l0.009-0.019c0.359-0.914 0.566-1.973 0.566-3.080 0-0.388-0.026-0.77-0.075-1.145l0.005 0.044c0.015-2.567 0-5.135 0-7.722zM28.539 23.843c-0.219-1.368-1.11-2.518-3.753-3.59-0.92-0.431-1.942-0.731-2.246-1.425-0.063-0.158-0.099-0.341-0.099-0.532 0-0.124 0.015-0.244 0.044-0.359l-0.002 0.010c0.208-0.55 0.731-0.935 1.343-0.935 0.199 0 0.388 0.040 0.559 0.113l-0.009-0.004c0.552 0.19 0.988 0.594 1.215 1.112l0.005 0.013c1.292-0.845 1.292-0.845 2.193-1.406-0.216-0.369-0.459-0.689-0.734-0.977l0.002 0.002c-0.767-0.814-1.852-1.32-3.056-1.32-0.171 0-0.34 0.010-0.505 0.030l0.020-0.002-0.881 0.111c-0.856 0.194-1.587 0.639-2.133 1.252l-0.003 0.004c-0.535 0.665-0.859 1.519-0.859 2.449 0 1.279 0.613 2.415 1.56 3.131l0.010 0.007c1.706 1.275 4.2 1.555 4.519 2.755 0.3 1.462-1.087 1.931-2.457 1.762-0.957-0.218-1.741-0.83-2.184-1.652l-0.009-0.017-2.287 1.313c0.269 0.536 0.607 0.994 1.011 1.385l0.001 0.001c2.174 2.194 7.61 2.082 8.586-1.255 0.113-0.364 0.178-0.782 0.178-1.215 0-0.3-0.031-0.593-0.091-0.875l0.005 0.028zM1.004 1.004h29.991v29.991h-29.991z" fill="currentColor">
                                            </path>
                                    </svg>
                                    Javascript
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="160" height="143" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.585 11.692h4.328s2.432.039 2.432-2.35V5.391S16.714 3 11.936 3C7.362 3 7.647 4.983 7.647 4.983l.006 2.055h4.363v.617H5.92s-2.927-.332-2.927 4.282 2.555 4.45 2.555 4.45h1.524v-2.141s-.083-2.554 2.513-2.554zm-.056-5.74a.784.784 0 1 1 0-1.57.784.784 0 1 1 0 1.57z"
                                            fill="currentColor">
                                        </path>
                                        <path
                                            d="M18.452 7.532h-1.524v2.141s.083 2.554-2.513 2.554h-4.328s-2.432-.04-2.432 2.35v3.951s-.369 2.391 4.409 2.391c4.573 0 4.288-1.983 4.288-1.983l-.006-2.054h-4.363v-.617h6.097s2.927.332 2.927-4.282-2.555-4.451-2.555-4.451zm-3.981 10.436a.784.784 0 1 1 0 1.57.784.784 0 1 1 0-1.57z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Python
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="160" height="143" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="nonzero" clip-rule="nonzero"
                                            d="M4.12903 5.54839C2.70378 5.54839 1.54839 6.70378 1.54839 8.12903C1.54839 9.55428 2.70378 10.7097 4.12903 10.7097C5.28455 10.7097 6.26269 9.95022 6.59153 8.90323H4.64516C4.21759 8.90323 3.87097 8.55661 3.87097 8.12903C3.87097 7.70146 4.21759 7.35484 4.64516 7.35484H7.8144C8.17678 5.44449 9.85518 4 11.871 4C14.1514 4 16 5.84863 16 8.12903C16 10.4094 14.1514 12.2581 11.871 12.2581C10.0971 12.2581 8.58443 11.1394 8 9.56909C7.41558 11.1394 5.90294 12.2581 4.12903 12.2581C1.84863 12.2581 0 10.4094 0 8.12903C0 5.84863 1.84863 4 4.12903 4C4.94646 4 5.71059 4.23833 6.35292 4.64957C6.71302 4.88011 6.81804 5.35892 6.5875 5.71902C6.35695 6.07912 5.87814 6.18414 5.51805 5.9536C5.11749 5.69715 4.64182 5.54839 4.12903 5.54839ZM11.871 5.54839C10.4457 5.54839 9.29032 6.70378 9.29032 8.12903C9.29032 9.55428 10.4457 10.7097 11.871 10.7097C13.2962 10.7097 14.4516 9.55428 14.4516 8.12903C14.4516 6.70378 13.2962 5.54839 11.871 5.54839Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    Golang
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143" fill="#000000"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path display="inline"
                                            d="M365.281,386.936l108.635,96.416l-213.754-16.794c41.878-25.3,76.426-55.513,102.294-79.567 c0.426,0.083,0.879,0.129,1.332,0.129C364.283,387.119,364.782,387.06,365.281,386.936z M485.518,444.55l20.008-262.045 c-9.898,25.284-25.557,54.73-45.857,86.172L485.518,444.55z M372.547,380.983l108.384,96.196l-28.936-196.865 C428.142,315.82,399.5,352.122,372.547,380.983z M245.951,474.776c-23.345,12.934-47.373,23.235-71.707,30.757l249.786-16.798 l-177.998-13.982L245.951,474.776z M37.347,348.551l65.429,152.89l53.851-178.4L37.347,348.551z M172.514,313.988l182.182,58.517 l-46.488-184.204L172.514,313.988z M318.403,170.006l169.829-11.368L355.451,50.19L318.403,170.006z M415.002,2.919L303.56,2.415 l49.543,34.69L415.002,2.919z M4.785,283.758L1.118,392.411l26.729-48.75L4.785,283.758z M65.668,327.408 c21.184,1.351,42.583-3.343,64.17-12.792c14.541-6.891,29.626-15.612,44.767-25.863c21.715-15.342,43.6-34.532,65.645-56.38 c79.292-78.583,111.895-166.467,77.246-201.459c-8.268-8.344-20.104-12.609-35.188-12.675 c-45.66-0.197-113.905,34.175-172.069,91.842c-55.586,55.098-91.631,120.496-91.824,166.618 c-0.068,16.399,4.469,29.319,13.483,38.407C39.915,323.205,51.306,326.487,65.668,327.408z M231.103,472.18 c2.486-1.286,4.963-2.586,7.408-3.909l-73.322-141.472l-55.183,182.786c0.462-0.06,4.189-0.508,4.189-0.508 c4.816-0.613,9.573-1.318,14.271-2.115c30.318-5.169,60.315-14.633,89.154-28.139C222.184,476.689,226.671,474.47,231.103,472.18z M380.843,355.491l1.739-1.996c1.214-1.424,2.437-2.875,3.654-4.331c0,0,3.768-4.486,5.232-6.268 c2.464-2.98,4.913-6.021,7.371-9.079c2.258-2.82,4.51-5.649,6.758-8.529c2.358-3.021,4.716-6.048,7.056-9.134 c5.297-6.973,10.653-14.284,16.377-22.36c6.057-8.544,11.908-17.142,17.416-25.584l-9.931-6.073 c-26.371-16.125-79.37-48.606-114.203-70.003l45.074,178.595C371.585,366.118,376.018,361.104,380.843,355.491z M508.235,67.95 l-140.23-19.689l133.688,109.327c4.697-15.496,7.756-30.524,9.088-44.699c0.192-1.987,0.315-3.985,0.435-5.998 c0.114-1.852,0.179-3.711,0.229-5.574C511.766,89.244,510.685,78.029,508.235,67.95z M454.325,259.742 c0.344-0.453,0.729-0.962,1.149-1.573c2.669-3.779,6.465-9.962,10.686-17.409c11.748-20.717,26.239-50.254,32.282-71.993 L324.03,180.403c36.379,22.356,89.521,54.924,115.942,71.084l14.087,8.598C454.143,259.98,454.229,259.865,454.325,259.742z M245.264,466.128l0.545-0.307c38.046-21.084,72.05-47.021,110.142-84.087l-185.419-59.807L245.264,466.128z M0.5,411.942 c0.819,24.146,5.943,44.081,15.241,59.391l8.658-103.113L0.5,411.942z M34.284,361.407l-9.99,119 c14.234,18.62,33.252,26.935,61.528,26.935c2.848,0,5.806-0.078,8.978-0.233l-4.995-12.412 C78.996,467.845,48.152,391.248,34.284,361.407z M506.144,60.604c-2.056-6.289-4.68-12.096-7.811-17.306 c-12.632-21.015-34.452-34.461-64.871-39.976l-67.961,37.531L506.144,60.604z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Ruby
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path display="inline"
                                            d="M193.918,208.369c-4.729-10.456-6.849-22.652-3.236-33.731c3.612-11.327,11.703-20.413,19.794-28.878 c22.525-22.531,50.285-39.085,72.316-61.986c12.197-12.573,22.278-27.634,25.762-44.937c2.864-12.695,1.496-25.764-1.117-38.337 c11.7,13.319,15.559,32.363,12.197,49.541c-3.608,19.292-14.316,36.344-26.886,51.031c-10.081,11.827-21.659,22.282-33.731,31.993 c-14.065,11.327-27.88,23.524-36.716,39.457c-7.472,12.943-9.215,28.876-4.11,42.942c8.341,24.146,27.756,42.071,38.338,64.848 c-11.703-10.332-23.152-21.036-33.86-32.361C211.471,236.001,200.889,223.307,193.918,208.369z M257.398,189.448 c-2.115,19.792,8.213,38.462,20.539,53.151c5.972,6.596,11.076,14.687,11.323,23.899c0.251,12.318-6.716,23.774-15.684,31.861 c2.119-0.246,3.612-2.115,5.355-3.11c13.443-8.589,26.385-19.418,32.982-34.227c4.357-10.083,3.362-22.034-2.362-31.371 c-6.724-10.953-15.559-20.662-20.786-32.61c-2.867-6.721-3.862-14.562-1.496-21.657c3.114-9.583,9.834-17.426,16.93-24.272 c19.54-18.544,43.189-31.743,65.844-46.179c-28.629,8.214-56.883,19.542-81.03,37.343 C273.702,153.727,259.515,169.658,257.398,189.448z M393.447,283.052c13.568,0.748,26.882,10.704,29.374,24.397 c2.366,11.825-3.358,23.524-10.705,32.485c-12.075,14.438-28.382,24.771-44.807,33.609c-1.622,0.991-2.99,2.237-4.235,3.608 c21.659-5.478,43.314-13.689,60.867-27.756c9.705-8.091,18.294-18.799,20.163-31.619c1.743-11.076-2.86-22.528-11.077-29.871 c-9.96-9.09-24.021-12.448-37.218-10.704c-7.593,0.995-15.931,2.613-21.158,8.961C380.877,284.921,386.971,282.429,393.447,283.052 z M123.22,318.647c16.303,4.357,33.108,5.603,49.787,6.724c14.936,0.995,29.875,1.246,44.937,1.12 c38.833-0.619,77.916-3.236,116.003-11.699c3.608-0.87,7.593-1.493,10.833-3.733c6.347-4.11,13.313-7.347,20.162-10.583 c-30.995,4.979-62.113,9.215-93.478,11.205c-31.74,1.991-63.731,3.236-95.593,1.121c-9.086-0.87-18.423-1.371-26.886-4.858 c-1.994-0.87-4.733-2.609-3.738-5.227c1.869-3.361,5.603-4.977,8.839-6.72c13.694-6.473,28.629-10.081,43.193-14.313 c-25.021-0.376-49.916,5.971-72.814,15.806c-5.105,2.491-10.83,4.481-14.936,8.714c-1.622,1.739-1.622,4.732,0.247,6.222 C113.511,315.787,118.487,317.28,123.22,318.647z M324.864,352.88c-21.784,3.859-43.694,7.472-65.726,8.589 c-24.147,1.618-48.294,0.247-72.191-2.241c-4.604-0.623-9.211-1.368-13.317-3.483c-2.116-1.246-4.231-3.236-4.106-5.854 c0.247-4.106,3.73-6.967,6.222-9.956c-7.715,2.739-15.434,5.599-21.906,10.708c-2.742,2.116-5.478,5.474-4.733,9.208 c1.125,4.356,5.356,6.97,9.09,8.96c9.208,4.733,19.54,6.846,29.625,8.714c25.511,4.11,51.527,4.235,77.167,2.488 c27.141-2.115,54.148-6.594,80.411-14.313C337.932,362.342,330.836,358.479,324.864,352.88z M188.068,395.951 c-6.97,1.99-14.066,4.357-19.79,8.957c-2.868,2.241-5.105,6.104-3.734,9.713c1.743,4.604,6.1,7.347,10.203,9.705 c10.708,5.854,22.78,8.589,34.604,10.708c26.765,4.229,54.27,3.608,80.908-1.12c15.806-2.989,31.615-7.221,46.301-13.815 c-9.584-3.984-18.917-8.467-27.878-13.693c-15.559,2.738-31.246,5.603-47.178,6.598c-21.032,1.618-42.319-0.125-63.355-2.738 c-4.98-1.121-11.202-1.618-14.563-5.976C181.847,400.677,185.828,398.063,188.068,395.951z M358.345,475.982 c17.424-3.604,34.977-7.719,50.908-15.806c4.976-2.867,11.076-5.979,12.698-11.95c0.87-5.725-5.105-8.714-9.337-11.08 c2.613,2.993,4.356,7.347,1.74,10.83c-4.357,5.853-11.821,8.091-18.42,10.332c-20.66,5.85-42.072,8.216-63.355,10.582 c-56.385,5.102-113.146,6.348-169.528,1.618c-18.92-1.994-38.217-4.109-56.264-10.829c-2.86-1.246-7.217-2.492-7.217-6.352 c1.117-3.354,4.357-5.227,7.217-6.845c12.945-6.595,27.384-10.207,41.822-11.077c-4.228-2.491-9.208-2.738-14.062-2.613 c-12.076,0.373-23.9,3.483-35.349,7.347c-9.834,3.604-19.916,7.59-27.76,14.811c-3.111,2.735-5.971,7.962-2.739,11.699 c4.98,5.353,12.699,6.72,19.54,8.338c38.338,6.599,77.171,10.328,116.011,11.699C255.781,488.184,307.684,485.942,358.345,475.982z M409.378,482.706c-23.402,7.468-47.672,11.574-71.822,14.936c-41.696,5.227-83.769,6.845-125.716,5.603 c-25.515-0.995-51.03-2.738-76.176-6.974c5.85,3.984,13.071,5.227,19.794,7.096c28.257,5.976,57.255,7.096,86.01,7.966 c42.19,0.748,84.387-0.87,125.962-7.468c19.669-3.48,39.459-7.715,57.13-16.927c9.215-4.854,18.552-12.326,20.163-23.152 C435.391,473.741,421.951,478.349,409.378,482.706z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Java
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path display="inline"
                                            d="M401.054,224c3.714,4.115,4.595,11.181,2.653,21.19c-2.029,10.425-5.935,17.862-11.723,22.32 c-5.793,4.458-14.602,6.687-26.432,6.687h-17.849l10.957-56.37h20.103C389.913,217.827,397.34,219.886,401.054,224z M149.754,217.827h-20.103l-10.958,56.37h17.848c11.827,0,20.639-2.229,26.432-6.687c5.789-4.458,9.694-11.896,11.723-22.32 c1.942-10.01,1.06-17.075-2.653-21.19C168.33,219.886,160.903,217.827,149.754,217.827z M511.5,256 c0,74.229-114.393,134.403-255.5,134.403S0.5,330.229,0.5,256c0-74.228,114.393-134.403,255.5-134.403S511.5,181.772,511.5,256z M198.542,265.286c3.04-5.448,5.203-11.461,6.483-18.037c3.102-15.967,0.761-28.403-7.024-37.313 c-7.781-8.91-20.165-13.363-37.136-13.363h-56.423L78.265,331.261h29.342l6.958-35.805h25.134c11.087,0,20.21-1.164,27.372-3.497 c7.161-2.329,13.669-6.233,19.528-11.719C191.514,275.72,195.493,270.738,198.542,265.286z M301.814,295.456l12.181-62.682 c2.479-12.747,0.619-21.971-5.572-27.664c-6.196-5.688-17.449-8.537-33.768-8.537h-25.933l6.961-35.81h-29.11l-26.182,134.692 h29.11l14.996-77.165h23.267c7.448,0,12.317,1.232,14.604,3.698c2.287,2.467,2.773,7.091,1.455,13.869l-11.581,59.598H301.814z M427.011,209.937c-7.78-8.91-20.164-13.363-37.135-13.363h-56.424l-26.178,134.688h29.343l6.957-35.805h25.135 c11.086,0,20.21-1.164,27.371-3.497c7.161-2.329,13.669-6.233,19.528-11.719c4.92-4.521,8.896-9.502,11.943-14.954 c3.044-5.448,5.202-11.461,6.483-18.037C437.137,231.282,434.796,218.846,427.011,209.937z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    PHP
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 360 360">
                                        <path
                                            d="M344.377,125.605h-48.754V77.834L212.601,0H15.623v360h280v-51.668h48.754V125.605z M314.377,278.332h-210 V155.605h210V278.332z"
                                            fill="currentColor">
                                        </path>
                                        <path
                                            d="M149.671,235.093c-2.516,0-4.968-0.306-7.36-0.92c-2.392-0.613-4.57-1.364-6.532-2.254 c-1.963-0.888-3.665-1.778-5.106-2.668c-1.442-0.888-2.438-1.61-2.99-2.162l-5.612,10.948c3.802,2.7,8.096,4.784,12.88,6.256 c4.784,1.472,9.628,2.208,14.536,2.208c3.189,0,6.24-0.354,9.154-1.058c2.912-0.705,5.488-1.824,7.728-3.358 c2.238-1.532,4.017-3.542,5.336-6.026c1.318-2.484,1.978-5.474,1.978-8.97c0-3.004-0.492-5.535-1.472-7.59 c-0.982-2.054-2.378-3.818-4.186-5.29c-1.81-1.472-4.018-2.698-6.624-3.68c-2.607-0.98-5.506-1.9-8.694-2.76 c-2.454-0.612-4.616-1.196-6.486-1.748c-1.872-0.552-3.419-1.164-4.646-1.84c-1.228-0.674-2.162-1.456-2.806-2.346 c-0.644-0.888-0.966-2.008-0.966-3.358c0-2.33,0.858-4.14,2.576-5.428c1.716-1.288,4.324-1.932,7.82-1.932 c1.962,0,3.895,0.246,5.796,0.736c1.9,0.492,3.664,1.09,5.29,1.794c1.625,0.706,3.004,1.426,4.14,2.162 c1.134,0.736,1.916,1.32,2.346,1.748l5.612-10.304c-2.884-1.962-6.256-3.664-10.12-5.106c-3.864-1.44-8.096-2.162-12.696-2.162 c-3.312,0-6.41,0.445-9.292,1.334c-2.884,0.89-5.414,2.193-7.59,3.91c-2.178,1.718-3.88,3.864-5.106,6.44 c-1.228,2.576-1.84,5.52-1.84,8.832c0,2.516,0.382,4.678,1.15,6.486c0.767,1.81,1.917,3.404,3.45,4.784 c1.532,1.38,3.45,2.576,5.75,3.588c2.3,1.012,5.014,1.948,8.142,2.806c2.576,0.736,4.906,1.412,6.992,2.024 c2.084,0.614,3.864,1.288,5.336,2.024c1.472,0.736,2.606,1.595,3.404,2.576c0.796,0.982,1.196,2.178,1.196,3.588 C160.158,232.855,156.663,235.093,149.671,235.093z"
                                            fill="currentColor">
                                        </path>
                                        <path
                                            d="M188.079,235.92c2.79,3.068,6.133,5.552,10.028,7.452c3.894,1.902,8.233,2.852,13.018,2.852 c3.128,0,6.072-0.414,8.832-1.242c2.76-0.828,5.336-1.978,7.729-3.45l3.771,4.232h11.96l-8.924-10.028 c2.698-3.004,4.799-6.44,6.302-10.304c1.502-3.864,2.254-7.912,2.254-12.144c0-4.108-0.768-8.156-2.3-12.144 c-1.533-3.986-3.68-7.544-6.439-10.672c-2.761-3.128-6.088-5.658-9.982-7.59c-3.896-1.932-8.204-2.898-12.926-2.898 c-4.601,0-8.864,0.905-12.788,2.714c-3.926,1.81-7.314,4.248-10.166,7.314c-2.853,3.067-5.092,6.594-6.716,10.58 c-1.626,3.987-2.438,8.158-2.438,12.512c0,4.172,0.767,8.25,2.3,12.236C183.126,229.328,185.287,232.855,188.079,235.92z M193.415,205.146c0.828-2.606,2.038-4.952,3.634-7.038c1.595-2.085,3.588-3.756,5.98-5.014c2.392-1.256,5.12-1.886,8.188-1.886 c2.944,0,5.597,0.614,7.958,1.84c2.36,1.228,4.354,2.852,5.98,4.876c1.624,2.024,2.882,4.355,3.771,6.992 c0.889,2.638,1.334,5.368,1.334,8.188c0,2.392-0.337,4.754-1.012,7.084c-0.676,2.332-1.626,4.478-2.852,6.44l-4.508-5.06h-11.961 l9.937,11.224c-1.228,0.676-2.562,1.212-4.002,1.61c-1.442,0.399-2.99,0.598-4.646,0.598c-3.006,0-5.689-0.612-8.05-1.84 c-2.361-1.226-4.355-2.852-5.98-4.876c-1.626-2.024-2.868-4.354-3.727-6.992c-0.859-2.636-1.288-5.366-1.288-8.188 C192.173,210.406,192.587,207.754,193.415,205.146z"
                                            fill="currentColor">
                                        </path>
                                        <polygon
                                            points="298.708,234.633 265.405,234.633 265.405,180.445 252.708,180.445 252.708,245.765 298.708,245.765 "
                                            fill="currentColor">
                                        </polygon>
                                    </svg>
                                    SQL
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 0H4C1.793.006.006 1.793 0 4v16c0 2.2 1.8 4 4 4h16c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4zm-2.187 16.855c-.2.482-.517.907-.923 1.234-.42.34-.952.62-1.607.82-.654.203-1.432.305-2.333.305H6.518v-14h6.802c1.258 0 2.266.283 3.02.86.76.58 1.138 1.444 1.138 2.61 0 .705-.172 1.31-.518 1.81-.344.497-.84.886-1.48 1.156v.046c.854.18 1.515.585 1.95 1.215s.658 1.426.658 2.387c0 .538-.104 1.05-.3 1.528l.025.027zm-2.776-3.45c-.41-.375-.986-.558-1.73-.558H8.985v4.368h4.334c.74 0 1.32-.192 1.73-.58.41-.385.62-.934.62-1.64-.007-.69-.21-1.224-.62-1.59h-.017zm-.6-2.823c.396-.336.59-.817.59-1.444 0-.704-.175-1.204-.53-1.49-.352-.285-.86-.433-1.528-.433h-4v3.863h4c.583 0 1.08-.17 1.464-.496z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Bootstrap
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path display="inline"
                                            d="M321.38,0.5h-83.553v127.405c-12.483-3.253-22.786-4.338-36.354-4.338 c-87.349,0-143.781,55.34-143.781,140.52c0,88.441,53.176,134.556,155.181,134.556c34.165,0,65.639-3.254,108.508-11.392V0.5z M237.827,329.203c-11.938,1.623-19.533,2.162-28.755,2.162c-42.865,0-66.197-24.409-66.197-68.904 c0-45.573,24.413-71.616,66.743-71.616c10.303,0,18.437,1.084,28.209,4.338V329.203z M454.309,0.949v85.726h-83.557V0.949H454.309z M370.752,129.532h83.557v193.699c0,66.735-4.889,98.743-19.537,126.417c-13.56,26.59-31.466,43.403-68.365,61.852l-77.589-36.896 c36.889-17.359,54.81-32.542,66.197-55.883c11.934-23.874,15.737-51.544,15.737-124.252V129.532z"
                                            fill="currentColor">
                                        </path>
                                    </svg> Django
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143" viewBox="0 0 32 32"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.026 15.139c-0.082-0.006-0.177-0.010-0.273-0.010-0.484 0-0.947 0.090-1.373 0.254l0.026-0.009c-0.125 0.050-0.325 0.050-0.342 0.209 0.069 0.066 0.079 0.175 0.137 0.267 0.117 0.198 0.261 0.366 0.429 0.506l0.003 0.003c0.175 0.137 0.35 0.27 0.534 0.387 0.325 0.2 0.694 0.319 1.012 0.52 0.181 0.117 0.366 0.266 0.55 0.391 0.091 0.062 0.15 0.175 0.267 0.215v-0.025c-0.057-0.075-0.075-0.184-0.131-0.267-0.084-0.084-0.167-0.159-0.25-0.241-0.248-0.325-0.535-0.603-0.857-0.835l-0.012-0.008c-0.267-0.182-0.852-0.437-0.962-0.744l-0.016-0.018c0.218-0.031 0.412-0.077 0.599-0.139l-0.024 0.007c0.284-0.075 0.544-0.059 0.837-0.132 0.132-0.034 0.266-0.075 0.4-0.117v-0.075c-0.15-0.15-0.262-0.354-0.417-0.494-0.409-0.36-0.86-0.698-1.335-1.002l-0.045-0.027c-0.262-0.167-0.595-0.275-0.871-0.417-0.1-0.050-0.267-0.075-0.325-0.159-0.13-0.185-0.245-0.397-0.336-0.621l-0.008-0.022q-0.368-0.714-0.684-1.453c-0.144-0.383-0.287-0.697-0.448-1.001l0.023 0.047c-0.786-1.319-1.881-2.379-3.188-3.102l-0.043-0.022c-0.309-0.153-0.668-0.272-1.045-0.339l-0.025-0.004c-0.209-0.010-0.417-0.025-0.625-0.034-0.146-0.094-0.272-0.19-0.39-0.296l0.003 0.003c-0.475-0.3-1.704-0.95-2.054-0.090-0.225 0.542 0.334 1.077 0.527 1.352 0.154 0.183 0.294 0.388 0.415 0.605l0.010 0.020c0.059 0.145 0.075 0.294 0.134 0.445 0.145 0.452 0.292 0.823 0.459 1.182l-0.026-0.062c0.099 0.199 0.202 0.368 0.317 0.528l-0.008-0.012c0.067 0.091 0.182 0.134 0.209 0.284-0.086 0.181-0.153 0.391-0.19 0.61l-0.002 0.014c-0.108 0.332-0.171 0.715-0.171 1.112 0 0.621 0.153 1.206 0.423 1.72l-0.010-0.020c0.134 0.207 0.452 0.667 0.878 0.491 0.375-0.15 0.292-0.625 0.4-1.043 0.025-0.1 0.009-0.166 0.060-0.234v0.019c0.117 0.235 0.235 0.459 0.342 0.694 0.302 0.435 0.661 0.805 1.071 1.11l0.013 0.009c0.2 0.15 0.359 0.41 0.609 0.502v-0.025h-0.019c-0.057-0.062-0.12-0.117-0.189-0.164l-0.004-0.002c-0.155-0.152-0.299-0.316-0.429-0.489l-0.008-0.011c-0.326-0.44-0.636-0.938-0.905-1.461l-0.029-0.061c-0.137-0.262-0.252-0.545-0.362-0.804-0.050-0.1-0.050-0.25-0.134-0.3-0.148 0.166-0.281 0.351-0.392 0.55l-0.008 0.016c-0.128 0.373-0.212 0.804-0.234 1.251l-0 0.011c-0.034 0.009-0.017 0-0.034 0.018-0.267-0.065-0.359-0.342-0.459-0.575-0.136-0.366-0.215-0.79-0.215-1.231 0-0.356 0.051-0.7 0.147-1.025l-0.006 0.026c0.059-0.175 0.309-0.727 0.209-0.895-0.052-0.159-0.217-0.25-0.309-0.379-0.109-0.154-0.209-0.329-0.292-0.514l-0.008-0.020c-0.2-0.467-0.3-0.985-0.517-1.452-0.131-0.244-0.269-0.454-0.424-0.65l0.007 0.009c-0.165-0.191-0.317-0.404-0.449-0.63l-0.011-0.020c-0.041-0.091-0.1-0.242-0.034-0.342 0.012-0.058 0.058-0.103 0.117-0.112l0.001-0c0.11-0.090 0.419 0.027 0.527 0.077 0.317 0.12 0.59 0.261 0.843 0.427l-0.016-0.010c0.117 0.082 0.244 0.241 0.394 0.282h0.175c0.267 0.059 0.569 0.018 0.819 0.091 0.459 0.155 0.856 0.349 1.223 0.587l-0.021-0.013c1.104 0.713 1.988 1.677 2.586 2.816l0.020 0.041c0.1 0.192 0.144 0.369 0.235 0.569 0.175 0.412 0.391 0.829 0.569 1.227 0.169 0.428 0.369 0.798 0.607 1.139l-0.012-0.018c0.125 0.175 0.627 0.266 0.852 0.357 0.237 0.083 0.427 0.162 0.611 0.251l-0.037-0.016c0.287 0.175 0.567 0.375 0.837 0.567 0.137 0.095 0.554 0.304 0.579 0.472zM18.302 22.452c0 0.015 0.001 0.032 0.001 0.049 0 0.558-0.249 1.057-0.643 1.393l-0.003 0.002c-0.432 0.352-0.989 0.566-1.596 0.566-0.047 0-0.094-0.001-0.14-0.004l0.006 0c-0.739-0.010-1.419-0.25-1.976-0.651l0.010 0.007 0.296-0.595c0.429 0.24 0.939 0.389 1.481 0.41l0.006 0c0.027 0.002 0.058 0.003 0.090 0.003 0.332 0 0.641-0.104 0.894-0.281l-0.005 0.003c0.229-0.174 0.375-0.446 0.375-0.752 0-0.006-0-0.011-0-0.017v0.001c0-0.412-0.287-0.762-0.81-1.056-0.485-0.266-1.453-0.821-1.453-0.821-0.478-0.296-0.791-0.817-0.791-1.411 0-0.021 0-0.042 0.001-0.063l-0 0.003c-0.001-0.019-0.001-0.041-0.001-0.063 0-0.515 0.227-0.977 0.586-1.291l0.002-0.002c0.382-0.324 0.881-0.521 1.426-0.521 0.035 0 0.069 0.001 0.103 0.002l-0.005-0c0.009-0 0.020-0 0.031-0 0.639 0 1.234 0.191 1.73 0.52l-0.012-0.007-0.266 0.595c-0.391-0.176-0.847-0.282-1.327-0.287l-0.002-0c-0.024-0.002-0.051-0.003-0.079-0.003-0.28 0-0.538 0.098-0.74 0.262l0.002-0.002c-0.189 0.157-0.309 0.392-0.31 0.655v0c0 0.41 0.292 0.762 0.832 1.062 0.491 0.269 1.483 0.837 1.483 0.837 0.488 0.287 0.811 0.809 0.811 1.407 0 0.018-0 0.037-0.001 0.055l0-0.003zM20.374 22.983c-0.273-0.545-0.432-1.187-0.432-1.866 0-0.107 0.004-0.213 0.012-0.317l-0.001 0.014q0-2.611 1.587-2.612c0.026-0.002 0.057-0.003 0.089-0.003 0.475 0 0.892 0.248 1.129 0.622l0.003 0.005c0.271 0.542 0.43 1.182 0.43 1.858 0 0.104-0.004 0.207-0.011 0.309l0.001-0.014q0 2.632-1.587 2.634c-0.027 0.002-0.058 0.003-0.089 0.003-0.475 0-0.893-0.248-1.13-0.622l-0.003-0.005zM24.488 24.535l-1.27-0.625c0.116-0.097 0.22-0.199 0.316-0.309l0.003-0.003c0.513-0.692 0.821-1.563 0.821-2.505 0-0.109-0.004-0.217-0.012-0.324l0.001 0.014q0-3.43-2.693-3.432c-0.040-0.002-0.087-0.003-0.134-0.003-0.767 0-1.456 0.337-1.925 0.872l-0.002 0.003c-0.511 0.692-0.818 1.562-0.818 2.504 0 0.106 0.004 0.211 0.012 0.315l-0.001-0.014c-0.009 0.101-0.014 0.219-0.014 0.338 0 0.874 0.274 1.684 0.74 2.349l-0.009-0.013c0.449 0.478 1.086 0.776 1.791 0.776 0.066 0 0.131-0.003 0.195-0.008l-0.009 0.001c0.009 0 0.021 0 0.032 0 0.311 0 0.612-0.045 0.897-0.128l-0.022 0.006 1.656 0.965 0.45-0.777zM28.636 24.366h-3.287v-6.91h1.106v6.061h2.181zM13.235 19.268c-0.287 2.084-0.944 3.965-1.905 5.65l0.040-0.077c-0.385 0.741-1.113 1.257-1.968 1.34l-0.010 0.001c-0.259-0.014-0.5-0.076-0.719-0.177l0.012 0.005v-0.617c0.137 0.021 0.295 0.033 0.456 0.033 0.009 0 0.018-0 0.028-0h-0.001c0.016 0.001 0.034 0.001 0.052 0.001 0.289 0 0.554-0.105 0.758-0.28l-0.002 0.001c0.22-0.181 0.361-0.451 0.369-0.755l0-0.001c-0.053-0.438-0.154-0.837-0.299-1.214l0.012 0.034-1.267-3.944h1.137l0.909 2.949c0.162 0.416 0.256 0.898 0.256 1.401 0 0.001 0 0.002 0 0.002v-0c0.482-1.262 0.848-2.734 1.034-4.261l0.009-0.092zM8.215 24.366h-1.158q-0.049-2.761-0.337-5.511h-0.010l-1.762 5.511h-0.881l-1.75-5.511h-0.012q-0.205 2.751-0.244 5.511h-1.056q0.103-3.685 0.512-6.911h1.437l1.668 5.079h0.010l1.683-5.079h1.368q0.454 3.777 0.535 6.911zM21.505 7.879c-0.002 0-0.005-0-0.008-0-0.119 0-0.234 0.015-0.344 0.043l0.010-0.002v0.016h0.017c0.086 0.128 0.174 0.239 0.269 0.343l-0.002-0.002c0.067 0.134 0.125 0.267 0.192 0.4l0.017-0.019c0.109-0.086 0.178-0.218 0.178-0.366 0-0.018-0.001-0.035-0.003-0.053l0 0.002c-0.050-0.059-0.057-0.117-0.1-0.175-0.050-0.084-0.157-0.125-0.225-0.191z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    MySQL
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="164" height="143" viewBox="0 0 32 32"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.839 0c-1.245 0.011-2.479 0.188-3.677 0.536l-0.083 0.027c-0.751-0.131-1.516-0.203-2.276-0.219-1.573-0.027-2.923 0.353-4.011 0.989-1.073-0.369-3.297-1.016-5.641-0.885-1.629 0.088-3.411 0.583-4.735 1.979-1.312 1.391-2.009 3.547-1.864 6.485 0.041 0.807 0.271 2.124 0.656 3.837 0.38 1.709 0.917 3.709 1.589 5.537 0.672 1.823 1.405 3.463 2.552 4.577 0.572 0.557 1.364 1.032 2.296 0.991 0.652-0.027 1.24-0.313 1.751-0.735 0.249 0.328 0.516 0.468 0.755 0.599 0.308 0.167 0.599 0.281 0.907 0.355 0.552 0.14 1.495 0.323 2.599 0.135 0.375-0.063 0.771-0.187 1.167-0.359 0.016 0.437 0.032 0.869 0.047 1.307 0.057 1.38 0.095 2.656 0.505 3.776 0.068 0.183 0.251 1.12 0.969 1.953 0.724 0.833 2.129 1.349 3.739 1.005 1.131-0.24 2.573-0.677 3.532-2.041 0.948-1.344 1.375-3.276 1.459-6.412 0.020-0.172 0.047-0.312 0.072-0.448l0.224 0.021h0.027c1.208 0.052 2.521-0.12 3.62-0.631 0.968-0.448 1.703-0.901 2.239-1.708 0.131-0.199 0.281-0.443 0.319-0.86 0.041-0.411-0.199-1.063-0.595-1.364-0.791-0.604-1.291-0.375-1.828-0.26-0.525 0.115-1.063 0.176-1.599 0.192 1.541-2.593 2.645-5.353 3.276-7.792 0.375-1.443 0.584-2.771 0.599-3.932 0.021-1.161-0.077-2.187-0.771-3.077-2.177-2.776-5.235-3.548-7.599-3.573-0.073 0-0.145 0-0.219 0zM22.776 0.855c2.235-0.021 5.093 0.604 7.145 3.228 0.464 0.589 0.6 1.448 0.584 2.511s-0.213 2.328-0.573 3.719c-0.692 2.699-2.011 5.833-3.859 8.652 0.063 0.047 0.135 0.088 0.208 0.115 0.385 0.161 1.265 0.296 3.025-0.063 0.443-0.095 0.767-0.156 1.105 0.099 0.167 0.14 0.255 0.349 0.244 0.568-0.020 0.161-0.077 0.317-0.177 0.448-0.339 0.509-1.009 0.995-1.869 1.396-0.76 0.353-1.855 0.536-2.817 0.547-0.489 0.005-0.937-0.032-1.319-0.152l-0.020-0.004c-0.147 1.411-0.484 4.203-0.704 5.473-0.176 1.025-0.484 1.844-1.072 2.453-0.589 0.615-1.417 0.979-2.537 1.219-1.385 0.297-2.391-0.021-3.041-0.568s-0.948-1.276-1.125-1.719c-0.124-0.307-0.187-0.703-0.249-1.235-0.063-0.531-0.104-1.177-0.136-1.911-0.041-1.12-0.057-2.24-0.041-3.365-0.577 0.532-1.296 0.88-2.068 1.016-0.921 0.156-1.739 0-2.228-0.12-0.24-0.063-0.475-0.151-0.693-0.271-0.229-0.12-0.443-0.255-0.588-0.527-0.084-0.156-0.109-0.337-0.073-0.509 0.041-0.177 0.145-0.328 0.287-0.443 0.265-0.215 0.615-0.333 1.14-0.443 0.959-0.199 1.297-0.333 1.5-0.496 0.172-0.135 0.371-0.416 0.713-0.828 0-0.015 0-0.036-0.005-0.052-0.619-0.020-1.224-0.181-1.771-0.479-0.197 0.208-1.224 1.292-2.468 2.792-0.521 0.624-1.099 0.984-1.713 1.011-0.609 0.025-1.163-0.281-1.631-0.735-0.937-0.912-1.688-2.48-2.339-4.251s-1.177-3.744-1.557-5.421c-0.375-1.683-0.599-3.037-0.631-3.688-0.14-2.776 0.511-4.645 1.625-5.828s2.641-1.625 4.131-1.713c2.672-0.151 5.213 0.781 5.724 0.979 0.989-0.672 2.265-1.088 3.859-1.063 0.756 0.011 1.505 0.109 2.24 0.292l0.027-0.016c0.323-0.109 0.651-0.208 0.984-0.28 0.907-0.215 1.833-0.324 2.76-0.339zM22.979 1.745h-0.197c-0.76 0.009-1.527 0.099-2.271 0.26 1.661 0.735 2.916 1.864 3.801 3 0.615 0.781 1.12 1.64 1.505 2.557 0.152 0.355 0.251 0.651 0.303 0.88 0.031 0.115 0.047 0.213 0.057 0.312 0 0.052 0.005 0.105-0.021 0.193 0 0.005-0.005 0.016-0.005 0.021 0.043 1.167-0.249 1.957-0.287 3.072-0.025 0.808 0.183 1.756 0.235 2.792 0.047 0.973-0.072 2.041-0.703 3.093 0.052 0.063 0.099 0.125 0.151 0.193 1.672-2.636 2.88-5.547 3.521-8.032 0.344-1.339 0.525-2.552 0.541-3.509 0.016-0.959-0.161-1.657-0.391-1.948-1.792-2.287-4.213-2.871-6.24-2.885zM16.588 2.088c-1.572 0.005-2.703 0.48-3.561 1.193-0.887 0.74-1.48 1.745-1.865 2.781-0.464 1.224-0.625 2.411-0.688 3.219l0.021-0.011c0.475-0.265 1.099-0.536 1.771-0.687 0.667-0.157 1.391-0.204 2.041 0.052 0.657 0.249 1.193 0.848 1.391 1.749 0.939 4.344-0.291 5.959-0.744 7.177-0.172 0.443-0.323 0.891-0.443 1.349 0.057-0.011 0.115-0.027 0.172-0.032 0.323-0.025 0.572 0.079 0.719 0.141 0.459 0.192 0.771 0.588 0.943 1.041 0.041 0.12 0.072 0.244 0.093 0.38 0.016 0.052 0.027 0.109 0.027 0.167-0.052 1.661-0.048 3.323 0.015 4.984 0.032 0.719 0.079 1.349 0.136 1.849 0.057 0.495 0.135 0.875 0.188 1.005 0.171 0.427 0.421 0.984 0.875 1.364 0.448 0.381 1.093 0.631 2.276 0.381 1.025-0.224 1.656-0.527 2.077-0.964 0.423-0.443 0.672-1.052 0.833-1.984 0.245-1.401 0.729-5.464 0.787-6.224-0.025-0.579 0.057-1.021 0.245-1.36 0.187-0.344 0.479-0.557 0.735-0.672 0.124-0.057 0.244-0.093 0.343-0.125-0.104-0.145-0.213-0.291-0.323-0.432-0.364-0.443-0.667-0.937-0.891-1.463-0.104-0.22-0.219-0.439-0.344-0.647-0.176-0.317-0.4-0.719-0.635-1.172-0.469-0.896-0.979-1.989-1.245-3.052-0.265-1.063-0.301-2.161 0.376-2.932 0.599-0.688 1.656-0.973 3.233-0.812-0.047-0.141-0.072-0.261-0.151-0.443-0.359-0.844-0.828-1.636-1.391-2.355-1.339-1.713-3.511-3.412-6.859-3.469zM7.735 2.156c-0.167 0-0.339 0.005-0.505 0.016-1.349 0.079-2.62 0.468-3.532 1.432-0.911 0.969-1.509 2.547-1.38 5.167 0.027 0.5 0.24 1.885 0.609 3.536 0.371 1.652 0.896 3.595 1.527 5.313 0.629 1.713 1.391 3.208 2.12 3.916 0.364 0.349 0.681 0.495 0.968 0.485 0.287-0.016 0.636-0.183 1.063-0.693 0.776-0.937 1.579-1.844 2.412-2.729-1.199-1.047-1.787-2.629-1.552-4.203 0.135-0.984 0.156-1.907 0.135-2.636-0.015-0.708-0.063-1.176-0.063-1.473 0-0.011 0-0.016 0-0.027v-0.005l-0.005-0.009c0-1.537 0.272-3.057 0.792-4.5 0.375-0.996 0.928-2 1.76-2.819-0.817-0.271-2.271-0.676-3.843-0.755-0.167-0.011-0.339-0.016-0.505-0.016zM24.265 9.197c-0.905 0.016-1.411 0.251-1.681 0.552-0.376 0.433-0.412 1.193-0.177 2.131 0.233 0.937 0.719 1.984 1.172 2.855 0.224 0.437 0.443 0.828 0.619 1.145 0.183 0.323 0.313 0.547 0.391 0.745 0.073 0.177 0.157 0.333 0.24 0.479 0.349-0.74 0.412-1.464 0.375-2.224-0.047-0.937-0.265-1.896-0.229-2.864 0.037-1.136 0.261-1.876 0.277-2.751-0.324-0.041-0.657-0.068-0.985-0.068zM13.287 9.355c-0.276 0-0.552 0.036-0.823 0.099-0.537 0.131-1.052 0.328-1.537 0.599-0.161 0.088-0.317 0.188-0.463 0.303l-0.032 0.025c0.011 0.199 0.047 0.667 0.063 1.365 0.016 0.76 0 1.728-0.145 2.776-0.323 2.281 1.333 4.167 3.276 4.172 0.115-0.469 0.301-0.944 0.489-1.443 0.541-1.459 1.604-2.521 0.708-6.677-0.145-0.677-0.437-0.953-0.839-1.109-0.224-0.079-0.457-0.115-0.697-0.109zM23.844 9.625h0.068c0.083 0.005 0.167 0.011 0.239 0.031 0.068 0.016 0.131 0.037 0.183 0.073 0.052 0.031 0.088 0.083 0.099 0.145v0.011c0 0.063-0.016 0.125-0.047 0.183-0.041 0.072-0.088 0.14-0.145 0.197-0.136 0.151-0.319 0.251-0.516 0.281-0.193 0.027-0.385-0.025-0.547-0.135-0.063-0.048-0.125-0.1-0.172-0.157-0.047-0.047-0.073-0.109-0.084-0.172-0.004-0.061 0.011-0.124 0.052-0.171 0.048-0.048 0.1-0.089 0.157-0.12 0.129-0.073 0.301-0.125 0.5-0.152 0.072-0.009 0.145-0.015 0.213-0.020zM13.416 9.849c0.068 0 0.147 0.005 0.22 0.015 0.208 0.032 0.385 0.084 0.525 0.167 0.068 0.032 0.131 0.084 0.177 0.141 0.052 0.063 0.077 0.14 0.073 0.224-0.016 0.077-0.048 0.151-0.1 0.208-0.057 0.068-0.119 0.125-0.192 0.172-0.172 0.125-0.385 0.177-0.599 0.151-0.215-0.036-0.412-0.14-0.557-0.301-0.063-0.068-0.115-0.141-0.157-0.219-0.047-0.073-0.067-0.156-0.057-0.24 0.021-0.14 0.141-0.219 0.256-0.26 0.131-0.043 0.271-0.057 0.411-0.052zM25.495 19.64h-0.005c-0.192 0.073-0.353 0.1-0.489 0.163-0.14 0.052-0.251 0.156-0.317 0.285-0.089 0.152-0.156 0.423-0.136 0.885 0.057 0.043 0.125 0.073 0.199 0.095 0.224 0.068 0.609 0.115 1.036 0.109 0.849-0.011 1.896-0.208 2.453-0.469 0.453-0.208 0.88-0.489 1.255-0.817-1.859 0.38-2.905 0.281-3.552 0.016-0.156-0.068-0.307-0.157-0.443-0.267zM14.787 19.765h-0.027c-0.072 0.005-0.172 0.032-0.375 0.251-0.464 0.52-0.625 0.848-1.005 1.151-0.385 0.307-0.88 0.469-1.875 0.672-0.312 0.063-0.495 0.135-0.615 0.192 0.036 0.032 0.036 0.043 0.093 0.068 0.147 0.084 0.333 0.152 0.485 0.193 0.427 0.104 1.124 0.229 1.859 0.104 0.729-0.125 1.489-0.475 2.141-1.385 0.115-0.156 0.124-0.391 0.031-0.641-0.093-0.244-0.297-0.463-0.437-0.52-0.089-0.043-0.183-0.068-0.276-0.084z"
                                            fill="currentColor">
                                        </path>
                                    </svg> PostgreSQL
                                </li>
                            </ul>
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-1">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Collaboration:</span>
                        </dt>
                        <dd>
                            <ul>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="32" height="32" viewBox="0 0 32 32"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.7438 0.940745C6.84695 1.30308 2.6841 1.63631 2.48837 1.67533C1.9396 1.77319 1.44038 2.14544 1.20563 2.63537L1 3.06646L1.01982 13.3407L1.04893 23.615L1.36234 24.2517C1.53886 24.6042 2.73365 26.2499 4.0362 27.9439C6.61221 31.2836 6.79802 31.47 7.77726 31.5679C8.06156 31.597 10.1966 31.4991 12.5081 31.3622C14.8295 31.2154 18.5508 30.99 20.7842 30.863C30.3233 30.2839 29.8334 30.3328 30.3815 29.8627C31.0672 29.2947 31.0183 30.2251 31.0474 17.7377C31.0672 7.15003 31.0573 6.45509 30.9006 6.13177C30.7148 5.76943 30.3815 5.51487 26.0329 2.45885C23.1243 0.421704 22.9186 0.313932 21.6155 0.294111C21.0772 0.274911 16.6307 0.568497 11.7438 0.940745ZM22.752 2.28232C23.1633 2.46814 26.1704 4.56412 26.6108 4.9661C26.7284 5.08378 26.7675 5.18164 26.7086 5.24048C26.5717 5.35817 7.96245 6.465 7.42421 6.38634C7.17956 6.34732 6.81722 6.20052 6.61159 6.06302C5.75932 5.48514 3.64413 3.75149 3.64413 3.62452C3.64413 3.29129 3.57538 3.29129 11.8714 2.69421C13.4582 2.58644 16.0633 2.39071 17.6502 2.26312C21.0871 1.98874 22.1159 1.99865 22.752 2.28232ZM28.6677 7.63996C28.8046 7.77685 28.9223 8.04132 28.9613 8.29589C28.9904 8.53125 29.0102 12.9189 28.9904 18.0313C28.9613 26.8067 28.9514 27.3555 28.7848 27.61C28.6869 27.7667 28.4912 27.9333 28.3438 27.9823C27.9331 28.1489 8.43318 29.2557 8.03183 29.138C7.84601 29.0891 7.59083 28.9324 7.45394 28.7955L7.21858 28.541L7.18947 19.0799C7.16965 12.4395 7.18947 9.5012 7.26813 9.23672C7.32697 9.041 7.47376 8.80564 7.60136 8.72759C7.77788 8.60991 8.93364 8.51205 12.9101 8.2773C15.7016 8.1206 20.0206 7.85613 22.4987 7.70933C28.3933 7.34638 28.3741 7.34638 28.6677 7.63996Z"
                                            class="fill-black dark:fill-neutral-200" fill="currentColor"></path>
                                        <path
                                            d="M23.4277 10.8818C22.3698 10.9506 21.4296 11.0484 21.3218 11.1073C20.9985 11.2739 20.8028 11.5483 20.7638 11.8617C20.7347 12.185 20.8325 12.224 21.8898 12.3516L22.35 12.4104V16.5925C22.35 19.0799 22.311 20.7256 22.2621 20.6767C22.2131 20.6178 20.8226 18.5027 19.167 15.9756C17.512 13.4392 16.1407 11.3525 16.1209 11.3333C16.1011 11.3135 15.024 11.3724 13.7313 11.4609C12.1445 11.5687 11.273 11.6666 11.0965 11.7644C10.8122 11.9112 10.4988 12.4303 10.4988 12.7734C10.4988 12.979 10.871 13.0868 11.6545 13.0868H12.0658V25.1139L11.4 25.3196C10.8809 25.4763 10.7044 25.5741 10.6165 25.7698C10.4598 26.1031 10.4697 26.4066 10.6264 26.4066C10.6852 26.4066 11.792 26.3378 13.0649 26.2598C15.582 26.113 15.8657 26.0442 16.1302 25.5252C16.2088 25.3685 16.277 25.2019 16.277 25.1529C16.277 25.1139 15.9345 24.9962 15.5226 24.8984C15.1014 24.8005 14.6802 24.7027 14.5923 24.6828C14.4257 24.6339 14.4157 24.3304 14.4157 20.1186V15.6033L17.3931 20.2753C20.5173 25.1721 20.9093 25.7308 21.3893 25.9755C21.987 26.2889 23.5051 26.0733 24.2688 25.5741L24.5042 25.4273L24.524 18.7479L24.5531 12.0586L25.0722 11.9608C25.6891 11.8431 25.9734 11.5594 25.9734 11.0695C25.9734 10.7561 25.9536 10.7362 25.66 10.7462C25.4847 10.7542 24.4757 10.813 23.4277 10.8818Z"
                                            class="fill-black dark:fill-neutral-200" fill="currentColor"></path>
                                    </svg>
                                    Notion
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                        <rect width="24" height="24" fill="none"></rect>
                                        <circle cx="15" cy="8" r="2"></circle>
                                        <path d="M13,18h2.53A1.47,1.47,0,0,0,17,16.53V11H13Z"></path>
                                        <circle cx="20" cy="9" r="2"></circle>
                                        <path d="M18,17h2a2,2,0,0,0,2-2V12H18Z"></path>
                                        <path
                                            d="M2,4.8V19.21L14,21V3.08Zm8.58,3.26V9.59l-.23,0-2.08.14v7.54l-.28,0-1.29-.17-.22,0V9.88L4.4,10l-.26,0V8.44l.22,0,5.9-.61.28,0Z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Teams
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 32 32"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.523 8.662c0 3.603-2.921 6.523-6.523 6.523s-6.523-2.921-6.523-6.523c0-3.603 2.921-6.523 6.523-6.523v0c0 0 0 0 0 0 3.603 0 6.523 2.92 6.523 6.523 0 0 0 0 0 0v0zM7.527 16.816c-3.603 0-6.523 2.921-6.523 6.523s2.921 6.523 6.523 6.523c3.603 0 6.523-2.921 6.523-6.523v0c-0.001-3.602-2.921-6.522-6.523-6.523h-0zM24.473 16.816c-3.603 0-6.523 2.921-6.523 6.523s2.921 6.523 6.523 6.523c3.603 0 6.523-2.921 6.523-6.523v0c0-0 0-0 0-0 0-3.603-2.92-6.523-6.523-6.523-0 0-0 0-0 0v0z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Asana
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 17 17"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                        <path
                                            d="M16.5 15.833c0 0.365-0.302 0.667-0.667 0.667h-14.666c-0.364 0-0.667-0.302-0.667-0.667v-14.666c0-0.365 0.302-0.667 0.667-0.667h14.667c0.364 0 0.667 0.302 0.667 0.667v14.666zM7.833 2.5c0-0.188-0.146-0.333-0.333-0.333h-5c-0.188 0-0.333 0.146-0.333 0.333v10.667c0 0.187 0.146 0.333 0.333 0.333h5c0.188 0 0.333-0.146 0.333-0.333v-10.667zM14.833 2.5c0-0.188-0.146-0.333-0.333-0.333h-5c-0.188 0-0.333 0.146-0.333 0.333v6.667c0 0.187 0.145 0.333 0.333 0.333h5c0.188 0 0.333-0.146 0.333-0.333v-6.667z"
                                            fill="currentColor"></path>
                                    </svg>
                                    Trello
                                </li>
                            </ul>
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-1">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Version Control:</span>
                        </dt>
                        <dd>
                            <ul>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                        <rect width="24" height="24" fill="none"></rect>
                                        <path
                                            d="M12,2A10,10,0,0,0,8.84,21.5c.5.08.66-.23.66-.5V19.31C6.73,19.91,6.14,18,6.14,18A2.69,2.69,0,0,0,5,16.5c-.91-.62.07-.6.07-.6a2.1,2.1,0,0,1,1.53,1,2.15,2.15,0,0,0,2.91.83,2.16,2.16,0,0,1,.63-1.34C8,16.17,5.62,15.31,5.62,11.5a3.87,3.87,0,0,1,1-2.71,3.58,3.58,0,0,1,.1-2.64s.84-.27,2.75,1a9.63,9.63,0,0,1,5,0c1.91-1.29,2.75-1,2.75-1a3.58,3.58,0,0,1,.1,2.64,3.87,3.87,0,0,1,1,2.71c0,3.82-2.34,4.66-4.57,4.91a2.39,2.39,0,0,1,.69,1.85V21c0,.27.16.59.67.5A10,10,0,0,0,12,2Z"
                                            fill="currentColor">
                                        </path>
                                    </svg>
                                    Github
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    <svg class="shrink-0 size-4 me-1" width="24" height="24" viewBox="0 0 48 48"
                                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <defs>
                                                <style>
                                                .cls-1 {
                                                    fill: currentColor;
                                                    stroke: #000000;
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                }
                                                </style>
                                            </defs>
                                            <path id="path50" class="cls-1" d="M24,42h0l7.18-22.1H16.82L24,42Z"></path>
                                            <path id="path66" class="cls-1"
                                                d="M6.76,19.86h0L4.57,26.57a1.5,1.5,0,0,0,.54,1.67L24,42,6.76,19.86Z">
                                            </path>
                                            <path id="path74" class="cls-1"
                                                d="M6.76,19.86H16.82L12.49,6.55a.74.74,0,0,0-1.41,0L6.76,19.86Z"></path>
                                            <path id="path82" class="cls-1"
                                                d="M41.25,19.86h0l2.18,6.71a1.5,1.5,0,0,1-.54,1.67L24,42l17.25-22.1Z">
                                            </path>
                                            <path id="path86" class="cls-1"
                                                d="M41.25,19.86H31.18L35.51,6.55a.74.74,0,0,1,1.41,0l4.33,13.31Z">
                                            </path>
                                            <polygon class="cls-1" points="24 41.96 31.18 19.86 41.25 19.86 24 41.96">
                                            </polygon>
                                            <polygon class="cls-1" points="24 41.96 6.76 19.86 16.82 19.86 24 41.96">
                                            </polygon>
                                        </g>
                                    </svg>
                                    Gitlab
                                </li>
                            </ul>
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-1">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Design Expertise:</span>
                        </dt>
                        <dd>
                            <ul>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    Database Design
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    Custom System
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    Responsive Design
                                </li>
                            </ul>
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-1">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Soft Skills:</span>
                        </dt>
                        <dd>
                            <ul>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    Strong communication
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    Problem-solving
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    Attention to detail
                                </li>
                                <li
                                    class="me-1 after:content-[','] inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                    Time management
                                </li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <!-- End List -->
            </div>
            <!-- End Skills -->

            <!-- Work Experience -->
            <div id="work" class="mt-10 sm:mt-14">
                <h2 class="mb-5 font-medium text-gray-800 dark:text-neutral-200">
                    Work experience
                </h2>

                <!-- Timeline -->
                <div>
                    <!-- Item -->
                    <div class="group relative flex gap-x-5">
                        <!-- Icon -->
                        <div
                            class="relative group-last:after:hidden after:absolute after:top-8 after:bottom-2 after:start-3 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                            <div class="relative z-10 size-6 flex justify-center items-center">

                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="grow pb-8 group-last:pb-0">
                            <h3 class="mb-1 text-xs text-gray-600 dark:text-neutral-400">
                                2022 - Present
                            </h3>

                            <p class="font-semibold text-sm text-gray-800 dark:text-neutral-200">
                                Application Developer at PT. NSSOL SYSTEMS INDONESIA
                            </p>

                            <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                This company truly stands out for its commitment to rewarding employees. With a culture
                                that thrives among 50+ team members, it exemplifies an exceptional workplace. I can
                                confidently say it's a fantastic place to grow and succeed.
                            </p>

                            <ul class="list-disc ms-6 mt-3 space-y-1.5">
                                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                    My Responsibilities:
                                </p>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Develop applications tailored for manufacturing company needs
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Participate in daily stand-up meetings to discuss ongoing tasks and project
                                    progress
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Attend weekly project meetings to review milestones, timelines, and deliverables.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Collaborate closely with the General Manager to align on software development
                                    processes and project requirements.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Coordinate with other developers and designers to ensure seamless integration and
                                    functionality of applications.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Maintain and enhance development workflows to ensure efficient and effective
                                    coding practices.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Provide end-user support for application-related issues and queries.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Perform regular maintenance, including troubleshooting, debugging, and fixing
                                    any software issues that arise.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Develop comprehensive project plans, outlining steps, timelines, and resources
                                    needed.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Ensure that all development projects adhere to the company’s quality standards
                                    and specifications
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Document software specifications, processes, and updates accurately.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Implement feedback from stakeholders to continuously improve applications
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Stay updated with the latest industry trends and technologies to bring innovative
                                    solutions to the projects.
                                </li>
                            </ul>

                            <div class="mt-3">
                                <!-- Card -->
                                <a class="block border border-gray-200 rounded-lg hover:shadow-sm focus:outline-none dark:border-neutral-700"
                                    href="https://global.nssol.nipponsteel.com/id/">
                                    <div class="relative flex items-center overflow-hidden">
                                        <img class="w-32 sm:w-48 h-auto absolute object-cover rounded-s-lg"
                                            src="https://global.nssol.nipponsteel.com/id/assets/img/nssol-indonesia-logo.png"
                                            alt="Blog Image">

                                        <div class="grow p-4 ms-32 sm:ms-48">
                                            <div class="min-h-24 flex flex-col justify-center">
                                                <h3 class="font-semibold text-sm text-gray-800 dark:text-neutral-300">
                                                    PT. NSSOL SYSTEMS INDONESIA
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                                                    NSSOL Systems Indonesia offers advanced IT solutions, including ERP
                                                    integration, AI, and cloud services to enhance business operations
                                                    and drive digital transformation. </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->
                            </div>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="group relative flex gap-x-5">
                        <!-- Icon -->
                        <div
                            class="relative group-last:after:hidden after:absolute after:top-8 after:bottom-2 after:start-3 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                            <div class="relative z-10 size-6 flex justify-center items-center">

                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="grow pb-8 group-last:pb-0">
                            <h3 class="mb-1 text-xs text-gray-600 dark:text-neutral-400">
                                2019 - 2022
                            </h3>

                            <p class="font-semibold text-sm text-gray-800 dark:text-neutral-200">
                                Junior Web Developer at PT. Mitreka Solusi Indonesia
                            </p>

                            <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                Working at PT. Mitreka Solusi Indonesia has been one of the most enriching experiences
                                of my life. The opportunities for learning are vast, and the management genuinely
                                respects your time and individuality.
                            </p>
                            <ul class="list-disc ms-6 mt-3 space-y-1.5">
                                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                    My Responsibilities:
                                </p>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Collaborated with developers and designers to create websites and applications
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Regularly reported progress and issues to management
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Worked on a flexible schedule to meet project deadlines.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Provided application development support to end-users.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Maintained efficient development processes and workflows.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Developed project timelines in collaboration with the VP of Technology and the
                                    development team.
                                </li>
                                <li class="ps-1 text-sm text-gray-600 dark:text-neutral-400">
                                    Performed maintenance, repairs, and bug fixes during the software lifecycle.
                                </li>
                            </ul>
                            <div class="mt-3">
                                <!-- Card -->
                                <a class="block border border-gray-200 rounded-lg hover:shadow-sm focus:outline-none dark:border-neutral-700"
                                    href="https://mitrekasolusi.co.id">
                                    <div class="relative flex items-center overflow-hidden">
                                        <img class="w-32 sm:w-48 h-auto absolute object-cover rounded-s-lg"
                                            src="https://mitrekasolusi.co.id/resources/frontend1/images/logo-mitreka.png"
                                            alt="Blog Image">

                                        <div class="grow p-4 ms-32 sm:ms-48">
                                            <div class="min-h-24 flex flex-col justify-center">
                                                <h3 class="font-semibold text-sm text-gray-800 dark:text-neutral-300">
                                                    PT. Mitreka Solusi Indonesia
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                                                    Streamline your operations with Mitreka Solusi Indonesia’s custom
                                                    software and IT services, designed to boost efficiency, ensure
                                                    system reliability, and foster business growth through tailored
                                                    solutions. </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->
                            </div>
                        </div>
                        <!-- End Right Content -->
                    </div>
                    <!-- End Item -->
                </div>
                <!-- End Timeline -->
            </div>
            <!-- End Work Experience -->

            <!-- Education -->
            <div class="mt-10 sm:mt-14">
                <h2 class="mb-3 font-medium text-gray-800 dark:text-neutral-200">
                    Education
                </h2>

                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="p-4 border border-gray-200 rounded-lg dark:border-neutral-700">
                        <svg class="shrink-0 size-30 mb-3" xmlns="http://www.w3.org/2000/svg" width="265" height="115"
                            viewBox="0 0 800 250">
                            <path
                                d="M0 0 C1.01513672 -0.020625 2.03027344 -0.04125 3.07617188 -0.0625 C4.53700195 -0.07023437 4.53700195 -0.07023437 6.02734375 -0.078125 C6.9205835 -0.0874707 7.81382324 -0.09681641 8.73413086 -0.10644531 C11.59754658 0.3319092 12.29676429 0.99472218 14.0625 3.25 C14.42326355 5.31913757 14.42326355 5.31913757 14.40307617 7.72143555 C14.40284958 8.62214279 14.40262299 9.52285004 14.40238953 10.45085144 C14.38690567 11.41968765 14.37142181 12.38852386 14.35546875 13.38671875 C14.35122391 14.38129593 14.34697906 15.37587311 14.34260559 16.40058899 C14.32580153 19.57983375 14.28814576 22.75844656 14.25 25.9375 C14.23495541 28.09178773 14.22126662 30.24608538 14.20898438 32.40039062 C14.17589244 37.68380967 14.12567592 42.96685969 14.0625 48.25 C14.67738281 48.21519531 15.29226562 48.18039063 15.92578125 48.14453125 C16.73402344 48.11746094 17.54226562 48.09039062 18.375 48.0625 C19.57576172 48.01029297 19.57576172 48.01029297 20.80078125 47.95703125 C23.0625 48.25 23.0625 48.25 24.80078125 49.546875 C26.85900585 52.3251596 26.94346814 54.8575919 27.0625 58.25 C26.07421875 60.44384766 26.07421875 60.44384766 24.0625 62.25 C21.24221653 62.63086076 18.81738241 62.76403318 16 62.7109375 C15.21230225 62.71002106 14.42460449 62.70910461 13.61303711 62.7081604 C11.94866912 62.70212202 10.28431213 62.68636868 8.62011719 62.66162109 C6.07185853 62.625134 3.52505498 62.62060157 0.9765625 62.62109375 C-0.64063757 62.61126159 -2.25782779 62.59960415 -3.875 62.5859375 C-4.63756104 62.58371185 -5.40012207 62.58148621 -6.18579102 62.57919312 C-9.95863484 62.51146965 -11.72261292 62.39325805 -14.9375 60.25 C-15.2675 60.58 -15.5975 60.91 -15.9375 61.25 C-18.19153819 61.34439837 -20.4485792 61.36742229 -22.70458984 61.36352539 C-23.41192764 61.36367142 -24.11926544 61.36381744 -24.84803772 61.3639679 C-27.19820164 61.36326843 -29.54828733 61.35547247 -31.8984375 61.34765625 C-33.52649899 61.34579161 -35.15456104 61.34436792 -36.78262329 61.34336853 C-41.07887305 61.3395422 -45.37508924 61.32971398 -49.67132568 61.31866455 C-54.03869169 61.30847104 -58.40606304 61.30387052 -62.7734375 61.29882812 C-70.45300542 61.28924028 -78.13255065 61.27472465 -85.81210327 61.25672913 C-89.74044491 61.24827122 -93.66575925 61.27093133 -97.59375 61.3203125 C-99.87499673 61.33894579 -102.15624694 61.3571578 -104.4375 61.375 C-106.16806641 61.40013672 -106.16806641 61.40013672 -107.93359375 61.42578125 C-109.03832031 61.43222656 -110.14304688 61.43867187 -111.28125 61.4453125 C-112.29380859 61.45578613 -113.30636719 61.46625977 -114.34960938 61.47705078 C-116.9375 61.25 -116.9375 61.25 -119.9375 59.25 C-120.9275 59.91 -121.9175 60.57 -122.9375 61.25 C-125.72485352 61.50878906 -125.72485352 61.50878906 -129.06640625 61.515625 C-130.86561523 61.51949219 -130.86561523 61.51949219 -132.70117188 61.5234375 C-133.95478516 61.51570313 -135.20839844 61.50796875 -136.5 61.5 C-137.75748047 61.50773437 -139.01496094 61.51546875 -140.31054688 61.5234375 C-141.50873047 61.52085938 -142.70691406 61.51828125 -143.94140625 61.515625 C-145.04299072 61.51336914 -146.1445752 61.51111328 -147.27954102 61.50878906 C-149.9375 61.25 -149.9375 61.25 -151.9375 59.25 C-152.19628906 57.12695312 -152.19628906 57.12695312 -152.203125 54.53125 C-152.20570313 53.59925781 -152.20828125 52.66726562 -152.2109375 51.70703125 C-152.20320313 50.73121094 -152.19546875 49.75539062 -152.1875 48.75 C-152.19523437 47.77417969 -152.20296875 46.79835937 -152.2109375 45.79296875 C-152.20835937 44.86097656 -152.20578125 43.92898437 -152.203125 42.96875 C-152.20086914 42.11216797 -152.19861328 41.25558594 -152.19628906 40.37304688 C-151.9375 38.25 -151.9375 38.25 -149.9375 36.25 C-147.70509338 35.98930359 -147.70509338 35.98930359 -144.89282227 35.9753418 C-143.31592369 35.96104378 -143.31592369 35.96104378 -141.70716858 35.94645691 C-140.56759201 35.94736832 -139.42801544 35.94827972 -138.25390625 35.94921875 C-137.08746078 35.94493362 -135.92101532 35.9406485 -134.71922302 35.93623352 C-132.24861298 35.93048198 -129.77798599 35.92999598 -127.30737305 35.93432617 C-123.51907558 35.9374841 -119.73156008 35.91404314 -115.94335938 35.88867188 C-113.54687599 35.88639885 -111.15039049 35.8856954 -108.75390625 35.88671875 C-107.61635391 35.877509 -106.47880157 35.86829926 -105.30677795 35.85881042 C-103.72515114 35.86815361 -103.72515114 35.86815361 -102.11157227 35.87768555 C-101.1827272 35.87705612 -100.25388214 35.8764267 -99.29689026 35.8757782 C-96.47487466 36.32337679 -95.62562567 36.98272251 -93.9375 39.25 C-93.6075 40.24 -93.2775 41.23 -92.9375 42.25 C-92.50896729 41.27353516 -92.08043457 40.29707031 -91.63891602 39.29101562 C-90.11424195 37.02921004 -89.34336837 36.34800742 -86.65963745 35.69995117 C-83.66290747 35.5204414 -80.7162837 35.5240677 -77.71484375 35.59375 C-76.61781631 35.59749634 -75.52078888 35.60124268 -74.39051819 35.60510254 C-72.0729658 35.61854067 -69.75545868 35.64636486 -67.43823242 35.6875 C-63.88482673 35.74982764 -60.33319505 35.76944221 -56.77929688 35.78125 C-54.52862413 35.7995899 -52.27796948 35.82034142 -50.02734375 35.84375 C-48.42885841 35.85649963 -48.42885841 35.85649963 -46.79808044 35.86950684 C-45.81018021 35.88872192 -44.82227997 35.90793701 -43.80444336 35.92773438 C-42.5001664 35.94821838 -42.5001664 35.94821838 -41.16954041 35.96911621 C-38.9375 36.25 -38.9375 36.25 -35.9375 38.25 C-34.9475 37.59 -33.9575 36.93 -32.9375 36.25 C-30.04274702 36.05491258 -27.26673189 35.97120267 -24.375 36 C-23.59447266 35.99226563 -22.81394531 35.98453125 -22.00976562 35.9765625 C-16.19085498 35.99664502 -16.19085498 35.99664502 -13.9375 38.25 C-13.5234375 40.8515625 -13.5234375 40.8515625 -13.3125 43.875 C-13.20035156 45.37933594 -13.20035156 45.37933594 -13.0859375 46.9140625 C-13.03695312 47.68492188 -12.98796875 48.45578125 -12.9375 49.25 C-12.6075 48.92 -12.2775 48.59 -11.9375 48.25 C-8.6375 48.25 -5.3375 48.25 -1.9375 48.25 C-1.9375 37.03 -1.9375 25.81 -1.9375 14.25 C-4.9075 14.25 -7.8775 14.25 -10.9375 14.25 C-11.9275 13.26 -11.9275 13.26 -12.9375 12.25 C-12.95208252 12.80461914 -12.96666504 13.35923828 -12.98168945 13.93066406 C-13.05636897 16.45446242 -13.15296025 18.97696654 -13.25 21.5 C-13.28383789 22.80904297 -13.28383789 22.80904297 -13.31835938 24.14453125 C-13.46612259 27.66398233 -13.65172854 30.56310934 -15.01171875 33.83203125 C-17.96406367 36.00586737 -20.92162999 35.79130188 -24.4375 35.6875 C-25.11425781 35.69458984 -25.79101562 35.70167969 -26.48828125 35.70898438 C-29.524626 35.67005688 -31.46485266 35.61667681 -33.90625 33.72265625 C-34.2465625 33.23667969 -34.586875 32.75070313 -34.9375 32.25 C-35.31132812 32.73750732 -35.68515625 33.22501465 -36.0703125 33.72729492 C-38.6804838 35.85590873 -40.47398099 35.6227193 -43.8125 35.61328125 C-44.96234375 35.61263672 -46.1121875 35.61199219 -47.296875 35.61132812 C-48.49828125 35.59521484 -49.6996875 35.57910156 -50.9375 35.5625 C-52.13890625 35.56572266 -53.3403125 35.56894531 -54.578125 35.57226562 C-63.53696075 35.51702617 -63.53696075 35.51702617 -66.9375 33.25 C-67.4840625 33.57484375 -68.030625 33.8996875 -68.59375 34.234375 C-71.37024209 35.43752157 -73.42024382 35.51657833 -76.4375 35.5 C-77.3759375 35.50515625 -78.314375 35.5103125 -79.28125 35.515625 C-81.97797676 35.24595232 -83.62699293 34.6232259 -85.9375 33.25 C-86.9275 33.91 -87.9175 34.57 -88.9375 35.25 C-91.78491211 35.50878906 -91.78491211 35.50878906 -95.21484375 35.515625 C-97.06819336 35.51949219 -97.06819336 35.51949219 -98.95898438 35.5234375 C-100.25126953 35.51570313 -101.54355469 35.50796875 -102.875 35.5 C-104.16341797 35.50773437 -105.45183594 35.51546875 -106.77929688 35.5234375 C-108.01615234 35.52085938 -109.25300781 35.51828125 -110.52734375 35.515625 C-111.66034912 35.51336914 -112.79335449 35.51111328 -113.96069336 35.50878906 C-116.83998268 35.25847768 -118.50186663 34.74759292 -120.9375 33.25 C-121.5975 33.91 -122.2575 34.57 -122.9375 35.25 C-128.19958651 35.80979644 -128.19958651 35.80979644 -130.75 33.875 C-133.72686161 29.8013999 -133.1213945 25.74963808 -133.125 20.875 C-133.13724609 20.01132812 -133.14949219 19.14765625 -133.16210938 18.2578125 C-133.16404297 17.4225 -133.16597656 16.5871875 -133.16796875 15.7265625 C-133.17207764 14.96424316 -133.17618652 14.20192383 -133.18041992 13.41650391 C-132.90337619 10.94566359 -132.24836798 9.35418949 -130.9375 7.25 C-127.91312661 5.7378133 -125.27508466 6.07736631 -121.9375 6.25 C-119.5 7.25 -119.5 7.25 -117.9375 8.25 C-117.2775 7.59 -116.6175 6.93 -115.9375 6.25 C-113.27954102 5.99121094 -113.27954102 5.99121094 -109.94140625 5.984375 C-108.14413086 5.98050781 -108.14413086 5.98050781 -106.31054688 5.9765625 C-105.05306641 5.98429687 -103.79558594 5.99203125 -102.5 6 C-100.61958008 5.98839844 -100.61958008 5.98839844 -98.70117188 5.9765625 C-97.50169922 5.97914062 -96.30222656 5.98171875 -95.06640625 5.984375 C-93.96369385 5.98663086 -92.86098145 5.98888672 -91.72485352 5.99121094 C-88.9375 6.25 -88.9375 6.25 -85.9375 8.25 C-85.38964844 7.92644531 -84.84179688 7.60289063 -84.27734375 7.26953125 C-80.03029182 5.41897941 -75.48190273 5.78614824 -70.9375 6.25 C-67.75 7.75 -67.75 7.75 -65.9375 9.25 C-65.9375 8.59 -65.9375 7.93 -65.9375 7.25 C-62.85392369 5.70821184 -59.60940912 6.10796768 -56.2265625 6.1171875 C-55.46201752 6.11623077 -54.69747253 6.11527405 -53.90975952 6.11428833 C-52.2907503 6.1136073 -50.67173836 6.11545622 -49.05273438 6.11962891 C-46.57936422 6.12496363 -44.10617688 6.11968893 -41.6328125 6.11328125 C-40.05989543 6.11394233 -38.48697848 6.11522412 -36.9140625 6.1171875 C-36.17539948 6.11516327 -35.43673645 6.11313904 -34.6756897 6.11105347 C-31.25909353 6.12657241 -28.22905811 6.34669698 -24.9375 7.25 C-24.6075 6.92 -24.2775 6.59 -23.9375 6.25 C-20.4375 6.125 -20.4375 6.125 -16.9375 6.25 C-16.6075 6.58 -16.2775 6.91 -15.9375 7.25 C-15.48375 6.280625 -15.03 5.31125 -14.5625 4.3125 C-11.46906413 -1.51743684 -5.9616001 0.03016622 0 0 Z "
                                fill="#E0DFDF" transform="translate(211.9375,30.75)" />
                            <path
                                d="M0 0 C0.845625 0.00644531 1.69125 0.01289062 2.5625 0.01953125 C5 0.1875 5 0.1875 7.1875 0.76171875 C9.08525527 1.41150049 9.08525527 1.41150049 11 0.1875 C12.45678649 0.11719177 13.91668083 0.10319789 15.375 0.125 C16.14585938 0.13402344 16.91671875 0.14304688 17.7109375 0.15234375 C18.84402344 0.16974609 18.84402344 0.16974609 20 0.1875 C22.75334126 0.1875 25.5047575 0.1766662 28.2578125 0.15234375 C29.88020749 0.14308048 31.50260336 0.1339706 33.125 0.125 C34.36056641 0.11243164 34.36056641 0.11243164 35.62109375 0.09960938 C41.77386871 0.07443435 41.77386871 0.07443435 44 1.1875 C44 1.8475 44 2.5075 44 3.1875 C44.515625 2.6925 45.03125 2.1975 45.5625 1.6875 C48.91034349 -0.37271138 51.14014247 -0.30375459 55 0.1875 C57 1.8125 57 1.8125 58 4.1875 C57.77962372 7.86043796 57.63033454 9.55716546 55 12.1875 C55.27765373 14.87148605 56.09192476 16.32185157 57.625 18.5625 C59.38281653 21.91833155 59.03564251 23.6025836 58 27.1875 C56 29.1875 56 29.1875 52.625 29.5 C48.9140389 29.18008956 47.62756052 28.7099581 45 26.1875 C44.64873047 26.67573242 44.29746094 27.16396484 43.93554688 27.66699219 C41.03865051 29.94270744 38.67194888 29.54254501 35.03125 29.515625 C34.35453247 29.51375183 33.67781494 29.51187866 32.98059082 29.50994873 C31.55162622 29.50323437 30.1226798 29.48933187 28.69384766 29.46875 C26.50796396 29.43761344 24.3228022 29.42777934 22.13671875 29.421875 C11.49232363 29.35160788 11.49232363 29.35160788 8 28.1875 C7.34 28.5175 6.68 28.8475 6 29.1875 C1.07359656 29.60001687 -3.47717008 29.8401414 -8.0625 27.875 C-11.11567768 25.21578073 -11.96306562 23.63167185 -12.30078125 19.5703125 C-12.31537117 18.15111128 -12.31889307 16.73176181 -12.3125 15.3125 C-12.32861328 14.60480469 -12.34472656 13.89710937 -12.36132812 13.16796875 C-12.365526 8.65944868 -11.87579041 5.7059614 -9 2.1875 C-6.02248187 0.1218468 -3.57404157 -0.05993058 0 0 Z "
                                fill="#E2DEDC" transform="translate(18,36.8125)" />
                            <path
                                d="M0 0 C5.94 0 11.88 0 18 0 C18 15.84 18 31.68 18 48 C21.96 48 25.92 48 30 48 C30.495 50.475 30.495 50.475 31 53 C29.12096752 54.87903248 25.9119394 54.13053475 23.41015625 54.1328125 C22.7504332 54.13376923 22.09071014 54.13472595 21.41099548 54.13571167 C20.01300969 54.13639336 18.61502076 54.13453986 17.21704102 54.13037109 C15.07496018 54.12503106 12.93308983 54.13031199 10.79101562 54.13671875 C9.43489537 54.1360578 8.07877524 54.13477629 6.72265625 54.1328125 C5.48265869 54.13168457 4.24266113 54.13055664 2.96508789 54.12939453 C0 54 0 54 -2 53 C-1.67 51.35 -1.34 49.7 -1 48 C-0.30132812 48.01160156 0.39734375 48.02320313 1.1171875 48.03515625 C2.02726563 48.04417969 2.93734375 48.05320313 3.875 48.0625 C5.23238281 48.07990234 5.23238281 48.07990234 6.6171875 48.09765625 C9.0168585 48.16249257 9.0168585 48.16249257 11 47 C11.02464775 41.46411467 11.04283496 35.928261 11.05493164 30.39233398 C11.05997244 28.5075627 11.06680498 26.62279535 11.07543945 24.73803711 C11.08751617 22.03498364 11.09323068 19.33198169 11.09765625 16.62890625 C11.10281754 15.78099014 11.10797882 14.93307404 11.11329651 14.0594635 C11.11349195 12.03928932 11.06206211 10.01922066 11 8 C9.33657163 6.33657163 7.2174291 6.63951903 4.9375 6.4375 C4.01839844 6.35371094 3.09929687 6.26992188 2.15234375 6.18359375 C1.08693359 6.09271484 1.08693359 6.09271484 0 6 C-0.38218767 4.34385343 -0.71395102 2.67542976 -1 1 C-0.67 0.67 -0.34 0.34 0 0 Z "
                                fill="#787878" transform="translate(203,35)" />
                            <path
                                d="M0 0 C1.2065625 0.0309375 1.2065625 0.0309375 2.4375 0.0625 C2.94309908 1.49804025 3.4417749 2.9360202 3.9375 4.375 C4.2159375 5.17550781 4.494375 5.97601563 4.78125 6.80078125 C5.4375 9.0625 5.4375 9.0625 5.4375 12.0625 C6.0975 12.0625 6.7575 12.0625 7.4375 12.0625 C7.57027344 11.28003906 7.70304687 10.49757813 7.83984375 9.69140625 C8.01644531 8.67949219 8.19304688 7.66757812 8.375 6.625 C8.54902344 5.61566406 8.72304688 4.60632812 8.90234375 3.56640625 C9.4375 1.0625 9.4375 1.0625 10.4375 0.0625 C12.9375 -0.0625 12.9375 -0.0625 15.4375 0.0625 C16.4375 1.0625 16.4375 1.0625 16.55102539 2.92016602 C16.54578857 3.71092529 16.54055176 4.50168457 16.53515625 5.31640625 C16.53193359 6.17041016 16.52871094 7.02441406 16.52539062 7.90429688 C16.51701172 8.80212891 16.50863281 9.69996094 16.5 10.625 C16.49548828 11.52669922 16.49097656 12.42839844 16.48632812 13.35742188 C16.47450225 15.59251314 16.4580222 17.82747437 16.4375 20.0625 C15.1175 20.0625 13.7975 20.0625 12.4375 20.0625 C12.1075 17.0925 11.7775 14.1225 11.4375 11.0625 C10.4475 14.0325 9.4575 17.0025 8.4375 20.0625 C7.1175 20.0625 5.7975 20.0625 4.4375 20.0625 C3.4475 16.7625 2.4575 13.4625 1.4375 10.0625 C1.1075 13.3625 0.7775 16.6625 0.4375 20.0625 C-0.8825 20.0625 -2.2025 20.0625 -3.5625 20.0625 C-3.59138514 16.91668577 -3.60925923 13.77090531 -3.625 10.625 C-3.63337891 9.72716797 -3.64175781 8.82933594 -3.65039062 7.90429688 C-3.65361328 7.05029297 -3.65683594 6.19628906 -3.66015625 5.31640625 C-3.66801147 4.13026733 -3.66801147 4.13026733 -3.67602539 2.92016602 C-3.49546255 -0.03446337 -2.96954506 0.07242793 0 0 Z "
                                fill="#E2603A" transform="translate(33.5625,40.9375)" />
                            <path
                                d="M0 0 C1.05832031 -0.02578125 2.11664063 -0.0515625 3.20703125 -0.078125 C6.48137524 0.28235324 7.79749318 1.05096225 10.1875 3.25 C9.875 6.625 9.875 6.625 9.1875 10.25 C8.1975 10.91 7.2075 11.57 6.1875 12.25 C6.8475 12.9925 7.5075 13.735 8.1875 14.5 C10.1875 17.25 10.1875 17.25 10.1875 21.25 C8.4375 21.125 8.4375 21.125 6.1875 20.25 C5.2284375 18.7959375 5.2284375 18.7959375 4.25 17.3125 C2.0463525 14.04041735 0.90171665 13.28172685 -2.8125 12.25 C-2.8125 15.22 -2.8125 18.19 -2.8125 21.25 C-4.1325 20.92 -5.4525 20.59 -6.8125 20.25 C-6.84138514 17.10418577 -6.85925923 13.95840531 -6.875 10.8125 C-6.88337891 9.91466797 -6.89175781 9.01683594 -6.90039062 8.09179688 C-6.90361328 7.23779297 -6.90683594 6.38378906 -6.91015625 5.50390625 C-6.91801147 4.31776733 -6.91801147 4.31776733 -6.92602539 3.10766602 C-6.6766968 -0.97220768 -3.37575984 0.04898321 0 0 Z "
                                fill="#E2613B" transform="translate(174.8125,40.75)" />
                            <path
                                d="M0 0 C0.99 0 1.98 0 3 0 C5.04296875 2.625 5.04296875 2.625 7.1875 6 C7.55552734 6.57234375 7.92355469 7.1446875 8.30273438 7.734375 C9.21125071 9.15024462 10.10686477 10.57437797 11 12 C11.33 8.37 11.66 4.74 12 1 C13.32 1 14.64 1 16 1 C16 7.27 16 13.54 16 20 C14.68 20.33 13.36 20.66 12 21 C9.36 17.04 6.72 13.08 4 9 C3.67 12.63 3.34 16.26 3 20 C1.68 20 0.36 20 -1 20 C-1.02888514 16.85418577 -1.04675923 13.70840531 -1.0625 10.5625 C-1.07087891 9.66466797 -1.07925781 8.76683594 -1.08789062 7.84179688 C-1.09111328 6.98779297 -1.09433594 6.13378906 -1.09765625 5.25390625 C-1.10551147 4.06776733 -1.10551147 4.06776733 -1.11352539 2.85766602 C-1 1 -1 1 0 0 Z "
                                fill="#E2643F" transform="translate(85,41)" />
                            <path
                                d="M0 0 C2.9375 1.25 2.9375 1.25 5 3 C5 4.32 5 5.64 5 7 C4.01 7 3.02 7 2 7 C1.34 6.01 0.68 5.02 0 4 C-3 3.58333333 -3 3.58333333 -6 4 C-8.18939909 5.78107249 -8.18939909 5.78107249 -8.265625 8.09375 C-8.26046875 8.8878125 -8.2553125 9.681875 -8.25 10.5 C-8.25515625 11.2940625 -8.2603125 12.088125 -8.265625 12.90625 C-8.18939909 15.21892751 -8.18939909 15.21892751 -6 17 C-2.41656024 17.16677282 -2.41656024 17.16677282 1 17 C1.33 15.68 1.66 14.36 2 13 C0.35 13 -1.3 13 -3 13 C-3 12.01 -3 11.02 -3 10 C3.15234375 9.90234375 3.15234375 9.90234375 5 10 C6 11 6 11 6.0625 14.5625 C6.041875 15.696875 6.02125 16.83125 6 18 C1.47405537 20.64933344 -1.75303174 21.66779596 -7 21 C-9.75329021 19.20437595 -11.52627461 17.94745078 -13 15 C-13.56096526 10.98803329 -14.10678522 6.79062037 -11.90625 3.23046875 C-8.1722292 -0.21555576 -4.87722924 -0.70941516 0 0 Z "
                                fill="#E2613B" transform="translate(138,41)" />
                            <path
                                d="M0 0 C3.4375 1.125 3.4375 1.125 5.375 3.3125 C6.62833603 6.6301542 7.02306445 8.61161332 6.4375 12.125 C4.12197809 15.16825737 2.62814408 16.834599 -1.125 17.75 C-3.5625 17.125 -3.5625 17.125 -5.875 15.0625 C-7.99443033 11.37312128 -8.16217873 9.32275114 -7.5625 5.125 C-5.4445027 1.05844519 -4.64621979 0.16302526 0 0 Z "
                                fill="#7F7F7F" transform="translate(84.5625,70.875)" />
                            <path
                                d="M0 0 C0.99 0.33 1.98 0.66 3 1 C3.33 3.31 3.66 5.62 4 8 C4.54269531 7.4225 5.08539063 6.845 5.64453125 6.25 C6.35996094 5.5075 7.07539062 4.765 7.8125 4 C8.52019531 3.2575 9.22789063 2.515 9.95703125 1.75 C12 0 12 0 15 0 C14.42647107 3.87132028 12.51295648 6.08172796 10 9 C10.433125 9.53109375 10.86625 10.0621875 11.3125 10.609375 C11.869375 11.31578125 12.42625 12.0221875 13 12.75 C13.556875 13.44609375 14.11375 14.1421875 14.6875 14.859375 C16 17 16 17 16 21 C13.29561004 20.63594751 12.25593617 20.31857318 10.515625 18.15234375 C10.09796875 17.42144531 9.6803125 16.69054687 9.25 15.9375 C8.82203125 15.20402344 8.3940625 14.47054687 7.953125 13.71484375 C7.63859375 13.14894531 7.3240625 12.58304688 7 12 C3.13892543 14.57404971 3.05680308 16.61020259 2 21 C1.01 20.67 0.02 20.34 -1 20 C-1.02888514 16.85418577 -1.04675923 13.70840531 -1.0625 10.5625 C-1.07087891 9.66466797 -1.07925781 8.76683594 -1.08789062 7.84179688 C-1.09111328 6.98779297 -1.09433594 6.13378906 -1.09765625 5.25390625 C-1.10551147 4.06776733 -1.10551147 4.06776733 -1.11352539 2.85766602 C-1 1 -1 1 0 0 Z "
                                fill="#E26039" transform="translate(56,41)" />
                            <path
                                d="M0 0 C1.93166016 0.01740234 1.93166016 0.01740234 3.90234375 0.03515625 C5.19269531 0.04417969 6.48304688 0.05320313 7.8125 0.0625 C8.81152344 0.07410156 9.81054688 0.08570313 10.83984375 0.09765625 C10.83984375 1.08765625 10.83984375 2.07765625 10.83984375 3.09765625 C7.20984375 3.09765625 3.57984375 3.09765625 -0.16015625 3.09765625 C-0.16015625 5.07765625 -0.16015625 7.05765625 -0.16015625 9.09765625 C3.13984375 9.09765625 6.43984375 9.09765625 9.83984375 9.09765625 C9.83984375 10.08765625 9.83984375 11.07765625 9.83984375 12.09765625 C6.53984375 12.09765625 3.23984375 12.09765625 -0.16015625 12.09765625 C-0.16015625 14.07765625 -0.16015625 16.05765625 -0.16015625 18.09765625 C3.46984375 18.09765625 7.09984375 18.09765625 10.83984375 18.09765625 C10.83984375 19.08765625 10.83984375 20.07765625 10.83984375 21.09765625 C8.52740583 21.12451037 6.21488105 21.14398466 3.90234375 21.16015625 C2.61457031 21.17175781 1.32679688 21.18335937 0 21.1953125 C-3.16015625 21.09765625 -3.16015625 21.09765625 -4.16015625 20.09765625 C-4.25875756 18.6941689 -4.29094562 17.28585148 -4.29296875 15.87890625 C-4.29425781 15.02941406 -4.29554688 14.17992187 -4.296875 13.3046875 C-4.29300781 12.41136719 -4.28914062 11.51804687 -4.28515625 10.59765625 C-4.28902344 9.70433594 -4.29289063 8.81101562 -4.296875 7.890625 C-4.29558594 7.04113281 -4.29429687 6.19164062 -4.29296875 5.31640625 C-4.29184082 4.53201172 -4.29071289 3.74761719 -4.28955078 2.93945312 C-4.06249261 -0.29248428 -3.30730948 0.10220363 0 0 Z "
                                fill="#E25B32" transform="translate(153.16015625,40.90234375)" />
                            <path
                                d="M0 0 C1.93166016 0.01740234 1.93166016 0.01740234 3.90234375 0.03515625 C5.19269531 0.04417969 6.48304687 0.05320313 7.8125 0.0625 C8.81152344 0.07410156 9.81054688 0.08570313 10.83984375 0.09765625 C10.83984375 1.08765625 10.83984375 2.07765625 10.83984375 3.09765625 C7.20984375 3.09765625 3.57984375 3.09765625 -0.16015625 3.09765625 C-0.16015625 5.07765625 -0.16015625 7.05765625 -0.16015625 9.09765625 C3.13984375 9.09765625 6.43984375 9.09765625 9.83984375 9.09765625 C9.83984375 10.08765625 9.83984375 11.07765625 9.83984375 12.09765625 C6.53984375 12.09765625 3.23984375 12.09765625 -0.16015625 12.09765625 C-0.16015625 14.07765625 -0.16015625 16.05765625 -0.16015625 18.09765625 C3.46984375 18.09765625 7.09984375 18.09765625 10.83984375 18.09765625 C10.83984375 19.08765625 10.83984375 20.07765625 10.83984375 21.09765625 C8.52740583 21.12451037 6.21488105 21.14398466 3.90234375 21.16015625 C2.61457031 21.17175781 1.32679687 21.18335937 0 21.1953125 C-3.16015625 21.09765625 -3.16015625 21.09765625 -4.16015625 20.09765625 C-4.25875756 18.6941689 -4.29094562 17.28585148 -4.29296875 15.87890625 C-4.29425781 15.02941406 -4.29554687 14.17992187 -4.296875 13.3046875 C-4.29300781 12.41136719 -4.28914063 11.51804687 -4.28515625 10.59765625 C-4.28902344 9.70433594 -4.29289062 8.81101562 -4.296875 7.890625 C-4.29558594 7.04113281 -4.29429688 6.19164062 -4.29296875 5.31640625 C-4.29184082 4.53201172 -4.29071289 3.74761719 -4.28955078 2.93945312 C-4.06249261 -0.29248428 -3.30730948 0.10220363 0 0 Z "
                                fill="#E25B32" transform="translate(110.16015625,40.90234375)" />
                            <path
                                d="M0 0 C0.66 0.33 1.32 0.66 2 1 C2 2.65 2 4.3 2 6 C-1.875 4.125 -1.875 4.125 -3 3 C-4.66617115 2.95936168 -6.33388095 2.957279 -8 3 C-8.33 3.99 -8.66 4.98 -9 6 C-7.82630859 6.30744141 -7.82630859 6.30744141 -6.62890625 6.62109375 C-5.11103516 7.02521484 -5.11103516 7.02521484 -3.5625 7.4375 C-2.04849609 7.83775391 -2.04849609 7.83775391 -0.50390625 8.24609375 C2 9 2 9 3 10 C3.375 13.375 3.375 13.375 3 17 C0.74545254 19.25454746 -0.81008357 19.96758982 -4.0078125 20.0546875 C-7.04893092 19.7965852 -9.46449149 19.3681621 -12 17.625 C-13 16 -13 16 -13 13 C-11.68 13 -10.36 13 -9 13 C-8.01 14.485 -8.01 14.485 -7 16 C-4.41619823 16.25030977 -4.41619823 16.25030977 -2 16 C-2 14.68 -2 13.36 -2 12 C-2.63808594 11.79503906 -3.27617187 11.59007812 -3.93359375 11.37890625 C-4.75988281 11.10949219 -5.58617187 10.84007812 -6.4375 10.5625 C-7.26121094 10.29566406 -8.08492187 10.02882813 -8.93359375 9.75390625 C-11 9 -11 9 -12 8 C-12.375 5.125 -12.375 5.125 -12 2 C-8.12027618 -1.64458904 -4.97340072 -1.12605299 0 0 Z "
                                fill="#E2613A" transform="translate(23,42)" />
                            <path
                                d="M0 0 C2.64 0 5.28 0 8 0 C10 2 10 2 10.0625 5.3125 C10.041875 6.529375 10.02125 7.74625 10 9 C10.226875 9.9075 10.45375 10.815 10.6875 11.75 C11 14 11 14 10.0625 15.8125 C8 17 8 17 0 17 C0 11.39 0 5.78 0 0 Z "
                                fill="#7D7D7D" transform="translate(125,71)" />
                            <path
                                d="M0 0 C1.65 0 3.3 0 5 0 C6.32 5.61 7.64 11.22 9 17 C7.68 16.67 6.36 16.34 5 16 C5 14.68 5 13.36 5 12 C3.35 12 1.7 12 0 12 C-0.33 13.65 -0.66 15.3 -1 17 C-1.99 17 -2.98 17 -4 17 C-2.91103333 11.24237834 -1.70663707 5.60752181 0 0 Z "
                                fill="#898989" transform="translate(167,71)" />
                            <path
                                d="M0 0 C1.65 0 3.3 0 5 0 C6.32 5.61 7.64 11.22 9 17 C7.68 16.67 6.36 16.34 5 16 C5 14.68 5 13.36 5 12 C3.35 12 1.7 12 0 12 C-0.33 13.65 -0.66 15.3 -1 17 C-1.99 17 -2.98 17 -4 17 C-2.91103333 11.24237834 -1.70663707 5.60752181 0 0 Z "
                                fill="#898989" transform="translate(109,71)" />
                            <path
                                d="M0 0 C0.99 0 1.98 0 3 0 C3.33 1.98 3.66 3.96 4 6 C4.598125 5.01 5.19625 4.02 5.8125 3 C6.534375 2.01 7.25625 1.02 8 0 C8.99 0 9.98 0 11 0 C10.690625 0.7425 10.38125 1.485 10.0625 2.25 C8.16082035 6.62711362 8.16082035 6.62711362 8.77734375 11.140625 C9.16019531 11.83671875 9.54304687 12.5328125 9.9375 13.25 C10.31777344 13.95640625 10.69804687 14.6628125 11.08984375 15.390625 C11.39019531 15.92171875 11.69054687 16.4528125 12 17 C10.68 17 9.36 17 8 17 C7.01 15.02 6.02 13.04 5 11 C4.67 11 4.34 11 4 11 C3.67 12.98 3.34 14.96 3 17 C2.01 17 1.02 17 0 17 C0 11.39 0 5.78 0 0 Z "
                                fill="#7B7B7B" transform="translate(150,71)" />
                            <path
                                d="M0 0 C0.99 0 1.98 0 3 0 C3.33 1.98 3.66 3.96 4 6 C4.598125 5.01 5.19625 4.02 5.8125 3 C6.534375 2.01 7.25625 1.02 8 0 C8.99 0 9.98 0 11 0 C10.690625 0.7425 10.38125 1.485 10.0625 2.25 C8.16082035 6.62711362 8.16082035 6.62711362 8.77734375 11.140625 C9.16019531 11.83671875 9.54304688 12.5328125 9.9375 13.25 C10.31777344 13.95640625 10.69804688 14.6628125 11.08984375 15.390625 C11.39019531 15.92171875 11.69054687 16.4528125 12 17 C10.68 17 9.36 17 8 17 C7.01 15.02 6.02 13.04 5 11 C4.67 11 4.34 11 4 11 C3.67 12.98 3.34 14.96 3 17 C2.01 17 1.02 17 0 17 C0 11.39 0 5.78 0 0 Z "
                                fill="#7B7B7B" transform="translate(64,71)" />
                            <path
                                d="M0 0 C2.97 0 5.94 0 9 0 C9 0.99 9 1.98 9 3 C7.02 3 5.04 3 3 3 C3 4.32 3 5.64 3 7 C4.98 7 6.96 7 9 7 C9 7.99 9 8.98 9 10 C7.02 10 5.04 10 3 10 C3 11.32 3 12.64 3 14 C4.98 14 6.96 14 9 14 C9 14.99 9 15.98 9 17 C6.03 17 3.06 17 0 17 C0 11.39 0 5.78 0 0 Z "
                                fill="#808080" transform="translate(139,71)" />
                            <path
                                d="M0 0 C1.98 0.495 1.98 0.495 4 1 C4 7.27 4 13.54 4 20 C2.68 20.33 1.36 20.66 0 21 C-1.55606751 19.44393249 -1.12970769 17.94042629 -1.1328125 15.78125 C-1.13410156 14.93175781 -1.13539063 14.08226562 -1.13671875 13.20703125 C-1.13285156 12.31371094 -1.12898437 11.42039062 -1.125 10.5 C-1.12886719 9.60667969 -1.13273438 8.71335937 -1.13671875 7.79296875 C-1.13542969 6.94347656 -1.13414062 6.09398437 -1.1328125 5.21875 C-1.13168457 4.43435547 -1.13055664 3.64996094 -1.12939453 2.84179688 C-1 1 -1 1 0 0 Z "
                                fill="#E27556" transform="translate(190,41)" />
                            <path
                                d="M0 0 C0.94875 0.04125 1.8975 0.0825 2.875 0.125 C3.205 1.115 3.535 2.105 3.875 3.125 C1.895 3.125 -0.085 3.125 -2.125 3.125 C-0.79167905 7.12496286 1.3707827 7.96282337 4.875 10.125 C4.5625 12.5 4.5625 12.5 3.875 15.125 C0.4397952 17.41513653 -1.110331 17.30342973 -5.125 17.125 C-5.125 16.135 -5.125 15.145 -5.125 14.125 C-3.145 13.795 -1.165 13.465 0.875 13.125 C0.875 12.465 0.875 11.805 0.875 11.125 C-0.115 10.526875 -1.105 9.92875 -2.125 9.3125 C-5.125 7.125 -5.125 7.125 -5.625 4.5 C-4.82958817 0.7217938 -3.82262774 0.15290511 0 0 Z "
                                fill="#7D7D7D" transform="translate(183.125,70.875)" />
                            <path
                                d="M0 0 C4.55555556 0.55555556 4.55555556 0.55555556 6 2 C6.1875 5.4375 6.1875 5.4375 6 9 C5.34 9.66 4.68 10.32 4 11 C-0.55555556 10.44444444 -0.55555556 10.44444444 -2 9 C-2.1875 5.5625 -2.1875 5.5625 -2 2 C-1.34 1.34 -0.68 0.68 0 0 Z "
                                fill="#D9D9D9" transform="translate(82,74)" />
                            <path
                                d="M0 0 C3.63 0 7.26 0 11 0 C11 0.99 11 1.98 11 3 C9.68 3 8.36 3 7 3 C7 7.62 7 12.24 7 17 C6.01 17 5.02 17 4 17 C4 12.38 4 7.76 4 3 C2.68 3 1.36 3 0 3 C0 2.01 0 1.02 0 0 Z "
                                fill="#7B7B7B" transform="translate(93,71)" />
                            <path
                                d="M0 0 C2.64 0 5.28 0 8 0 C8.38218767 1.65614657 8.71395102 3.32457024 9 5 C8 6 8 6 6.15234375 6.09765625 C4.1015625 6.06510417 2.05078125 6.03255208 0 6 C0 4.02 0 2.04 0 0 Z "
                                fill="#E2D7D5" transform="translate(172,44)" />
                            <path
                                d="M0 0 C0.99 0 1.98 0 3 0 C3 5.61 3 11.22 3 17 C2.01 17 1.02 17 0 17 C0 11.39 0 5.78 0 0 Z "
                                fill="#787878" transform="translate(191,71)" />
                            <path
                                d="M0 0 C1.32 0.33 2.64 0.66 4 1 C4 2.32 4 3.64 4 5 C2.68 5.33 1.36 5.66 0 6 C0 4.02 0 2.04 0 0 Z "
                                fill="#D3D3D3" transform="translate(128,80)" />
                            <path
                                d="M0 0 C1.98 0 3.96 0 6 0 C6.33 0.99 6.66 1.98 7 3 C4.66666667 3 2.33333333 3 0 3 C-0.99 3.495 -0.99 3.495 -2 4 C-1.34 2.68 -0.68 1.36 0 0 Z "
                                fill="#878787" transform="translate(180,71)" />
                            <path
                                d="M0 0 C1.32 0.33 2.64 0.66 4 1 C3.67 2.32 3.34 3.64 3 5 C2.01 5 1.02 5 0 5 C0 3.35 0 1.7 0 0 Z "
                                fill="#D8D8D8" transform="translate(128,73)" />
                        </svg>
                        <h3 class="mb-1 text-xs text-gray-600 dark:text-neutral-400">
                            2016 - 2019
                        </h3>

                        <p class="font-semibold text-sm text-gray-800 dark:text-neutral-200">
                            Software Engineering
                        </p>

                        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                            SMK NEGERI 1 KOTA BEKASI
                        </p>
                    </div>
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Education -->

        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="w-full max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-6 border-t border-gray-200 dark:border-neutral-700">
            <div class="flex flex-wrap justify-between items-center gap-2">
                <div>
                    <p class="text-xs text-gray-600 dark:text-neutral-400">
                        Made with ❤️ by Nova Triansyah Azis
                    </p>
                </div>
                <!-- End Col -->

                <!-- List -->
                <ul class="flex flex-wrap items-center">
                    <li
                        class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400 dark:text-neutral-500 dark:before:bg-neutral-600">
                        <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://github.com/novatriansyah">
                            Github
                        </a>
                    </li>
                    <li
                        class="inline-block relative pe-4 text-xs last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-1.5 before:-translate-y-1/2 before:size-[3px] before:rounded-full before:bg-gray-400 dark:text-neutral-500 dark:before:bg-neutral-600">
                        <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://gitlab.com/novatriansyah">
                            Gitlab
                        </a>
                    </li>
                    <li class="inline-block pe-4 text-xs">
                        <a class="text-xs text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="https://www.linkedin.com/in/nova-azis-823185178/">
                            LinkedIn
                        </a>
                    </li>
                    <li class="inline-block">
                        <!-- Dark Mode -->
                        <button type="button"
                            class="hs-dark-mode hs-dark-mode-active:hidden relative flex justify-center items-center size-7 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            data-hs-theme-click-value="dark">
                            <span class="sr-only">Dark</span>
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                            </svg>
                        </button>
                        <button type="button"
                            class="hs-dark-mode hs-dark-mode-active:flex hidden relative flex justify-center items-center size-7 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            data-hs-theme-click-value="light">
                            <span class="sr-only">Light</span>
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M12 2v2"></path>
                                <path d="M12 20v2"></path>
                                <path d="m4.93 4.93 1.41 1.41"></path>
                                <path d="m17.66 17.66 1.41 1.41"></path>
                                <path d="M2 12h2"></path>
                                <path d="M20 12h2"></path>
                                <path d="m6.34 17.66-1.41 1.41"></path>
                                <path d="m19.07 4.93-1.41 1.41"></path>
                            </svg>
                        </button>
                        <!-- End Dark Mode -->
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- JS Implementing Plugins -->

    <!-- JS PLUGINS -->
    <!-- Required plugins -->
    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
</body>

</html>