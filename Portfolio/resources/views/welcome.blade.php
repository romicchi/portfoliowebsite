<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Triple J</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="flex flex-col md:flex-row min-h-screen bg-gray-900">
        <div class="w-full md:w-3/4 sm:p-16 md:p-10 p-6 md:sticky md:top-0 flex flex-col justify-start lg:pl-16 mt-16">
            <span class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4">
                <a href="#about" class="text-white no-underline">Justine Paul Cirera</a>
            </span>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-50 mb-4">Junior Frontend Developer</p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-400 mb-4">I'm a front-end developer from Tacloban City, Leyte. I specialize in building accessible user interfaces and web applications. </p>
            <ul class="space-y-2">
                <li><a href="#about" class="text-sm sm:text-base md:text-lg lg:text-md text-gray-50">ABOUT</a></li>
                <li><a href="#projects" class="text-sm sm:text-base md:text-lg lg:text-md text-gray-50">PROJECTS</a></li>
                <li><a href="#skills" class="text-sm sm:text-base md:text-lg lg:text-md text-gray-50">SKILLS</a></li>
            </ul>
        </div>
        <div class="w-full md:w-3/4 p-4 md:overflow-auto md:h-screen">
            <section id="about" class="pt-12 pr-12">
                <h2 class="text-xl font-bold mb-2 text-white">About</h2>
                <p class="text-lg mb-4 text-gray-400">Back in 2012, I decided to try my hand at creating custom Tumblr themes and tumbled head first into the rabbit hole of coding and web development. 
                    Fast-forward to today, and I’ve had the privilege of building software for an advertising agency, a start-up, a huge corporation, and a digital product studio. 
                    <br> <br> My main focus these days is building accessible user interfaces for our customers at Klaviyo. 
                    I most enjoy building software in the sweet spot where design and engineering meet — things that look good but are also built well under the hood. 
                    In my free time, I've also released an online video course that covers everything you need to know to build a web app with the Spotify API. 
                    <br> <br> When I’m not at the computer, I’m usually rock climbing, reading, hanging out with my wife and two cats, or running around Hyrule searching for Korok seeds K o r o k s e e d s .</p>
            </section>
            <section id="projects" class="overflow-hidden">
                <h2 class="text-xl font-bold mb-2 text-white">Experience</h2>
                <div>
                    <ol class="group/list">
                        <li class="mb-12">
                            <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                </div>
                                <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-gray-400 sm:col-span-2" aria-label="2024 to Present">2024 — Present</header>
                                <div class="z-10 sm:col-span-6">
                                    <h3 class="font-medium leading-snug text-slate-200">
                                        <div>
                                            <a class="inline-flex items-baseline font-medium leading-tight text-slate-200 hover:text-teal-300 focus-visible:text-teal-300 text-gray-50 group/link text-base" href="https://www.klaviyo.com" target="_blank" rel="noreferrer noopener" aria-label="Senior Frontend Engineer, Accessibility at Klaviyo (opens in a new tab)">
                                                <span class="absolute -inset-x-4 -inset-y-2.5 hidden rounded md:-inset-x-6 md:-inset-y-4 lg:block"></span>
                                                <span>Senior Frontend Engineer, Accessibility ·<!-- --> 
                                                    <span class="inline-block">Klaviyo</span>
                                                </span>
                                            </a>
                                        </div>
                                    </h3>
                                    <p class="mt-2 text-sm leading-normal text-gray-400">Build and maintain critical components used to construct Klaviyo’s frontend, across the whole product. Work closely with cross-functional teams, including developers, designers, and product managers, to implement and advocate for best practices in web accessibility.</p>
                                    <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white ">JavaScript</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white ">TypeScript</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white ">React</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white ">Storybook</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="mb-12">
                            <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg"></div>
                                <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase tracking-wide text-slate-500 sm:col-span-2" aria-label="2018 to 2024">
                            </div>
                        </li>
                    </ol>
                </div>
            </section>
            <!--below this is resume: "View Full Résumé" clicking the resume will download my resume-->
            <section id="resume">
                <h2 class="text-xl font-bold mb-2 text-white">Résumé</h2>
                <a href="{{ asset('resume.pdf') }}" class="text-lg text-white">View Full Résumé
                    <i class="fas fa-arrow-down"></i>
                </a>
            </section>
            <section id="skills">
                <h2 class="text-xl font-bold mb-2 text-white">Skills</h2>
                <ul class="list-disc ml-5">
                    <li class="text-lg">JavaScript</li>
                    <li class="text-lg">Python</li>
                    <li class="text-lg">C++</li>
                    <!-- Add more skills as needed -->
                </ul>
            </section>
        </div>
    </body>
    <script>
        document.addEventListener('mousemove', function(e) {
            document.body.style.setProperty('--x', e.clientX + 'px');
            document.body.style.setProperty('--y', e.clientY + 'px');
        });
    </script>
</html>

