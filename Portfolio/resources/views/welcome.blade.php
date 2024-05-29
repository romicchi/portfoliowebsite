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
        <div id="leftContent" class="w-full md:w-3/4 sm:p-16 md:p-10 p-6 md:sticky md:top-0 flex flex-col justify-start lg:pl-16 mt-16">
            <span class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4">
                <a href="#about" class="text-white no-underline">Justine Paul Cirera</a>
            </span>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-50 mb-4">Junior Web Developer</p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-400 mb-4">I'm a front-end developer from Tacloban City, Leyte. I specialize in building accessible user interfaces and web applications. </p>
            <ul class="space-y-2">
                <li><a href="#about" class="text-sm sm:text-base md:text-lg lg:text-md text-gray-50">ABOUT</a></li>
                <li><a href="#projects" class="text-sm sm:text-base md:text-lg lg:text-md text-gray-50">PROJECTS</a></li>
                <li><a href="#skills" class="text-sm sm:text-base md:text-lg lg:text-md text-gray-50">SKILLS</a></li>
            </ul>
        </div>
        <div id="rightContent" class="w-full md:w-3/4 p-4 md:overflow-auto md:h-screen">
            <section id="about" class="pt-12 pr-12">
                <h2 class="text-xl font-bold mb-2 text-white">About</h2>
                <p class="text-lg mb-4 text-gray-400">I am a detail-oriented junior web developer with a passion for creating visually appealing and user-friendly websites. With a solid foundation in HTML, CSS, and JavaScript, I thrive on transforming creative ideas into functional digital experiences. My dedication to continuous learning and staying updated with the latest industry trends ensures that I bring the best practices to every project I undertake.
                    <br> <br> During my recent internship at HMP CO., I had the opportunity to work on a variety of web development projects, where I designed and developed responsive websites for diverse clients. Collaborating closely with project managers and lead developers, I focused on implementing seamless visual elements and optimizing site performance. This hands-on experience honed my ability to balance technical proficiency with aesthetic sensibility, delivering websites that are not only visually engaging but also high-performing.
                    <br> <br> In addition to my internship experience, I have worked on notable projects such as the website for Berliner Brotfabrik Konditorei & Cafe and the Generative Nexus of Educational Resource Assistant for LNU. These projects allowed me to delve into both frontend and backend development, enhancing my skills in creating comprehensive, user-centric web solutions. I am eager to continue my journey in web development, contributing to innovative projects and growing as a professional in this dynamic field.</p>
            </section>
            <section id="projects" class="overflow-hidden mt-16">
                <h2 class="text-xl font-bold mb-2 text-white">Experience</h2>
                <div>
                    <ol class="group/list">
                        <li class="mb-12">
                            <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                </div>
                                <header class="z-10 mb-2 mt-1 text-sm font-semibold uppercase tracking-wide text-gray-400 sm:col-span-2" aria-label="2024 to Present">2024 — Present</header>
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
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">JavaScript</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">TypeScript</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">React</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">Storybook</div>
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

                        <li class="mb-12">
                            <div class="group relative grid pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                <div class="absolute -inset-x-4 -inset-y-4 z-0 hidden rounded-md transition motion-reduce:transition-none lg:-inset-x-6 lg:block lg:group-hover:bg-slate-800/50 lg:group-hover:shadow-[inset_0_1px_0_0_rgba(148,163,184,0.1)] lg:group-hover:drop-shadow-lg">
                                </div>
                                <header class="z-10 mb-2 mt-1 text-sm font-semibold uppercase tracking-wide text-gray-400 sm:col-span-2" aria-label="2024 to Present">2020 — 2024</header>
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
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">JavaScript</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">TypeScript</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">React</div>
                                        </li>
                                        <li class="mr-1.5 mt-2">
                                            <div class="flex items-center rounded-full bg-teal-400/10 px-3 py-1 text-xs font-medium leading-5 text-white">Storybook</div>
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
            <section id="resume" class="mb-16">
                <a href="{{ asset('resume.pdf') }}" class="text-lg text-white">View Full Résumé
                    <i class="fas fa-arrow-down"></i>
                </a>
            </section>
            <section id="skills">
                <h2 class="text-xl font-bold mb-2 text-white">Projects</h2>

                <div class="flex items-start">
                    <img alt="Course marketing card" 
                        class="rounded border-2 border-gray-200 transition group-hover:border-gray-300 mr-4" 
                        src="/images/projects/course-card.png"/>
                    <div>
                        <h3 class="text-base font-medium text-gray-200 group-hover:text-teal-300">
                            <a href="https://www.newline.co/courses/build-a-spotify-connected-app" 
                            target="_blank" 
                            rel="noreferrer noopener">
                                BerlinerBrotfabrik - Website
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-400">
                            "Berliner Brotfabrik" the first German Bakery and Pastry in Tasikmalaya. Website  that composes of their Contact information, About, and  Menu with backend support.
                        </p>
                    </div>
                </div>

                <!-- Add another project here -->
                <div class="flex items-start mt-16 mb-16">
                <img alt="Course marketing card" 
                        class="rounded border-2 border-gray-200 transition group-hover:border-gray-300 mr-4" 
                        src="/images/projects/course-card.png"/>
                    <div>
                        <h3 class="text-base font-medium text-gray-200 group-hover:text-teal-300">
                            <a href="https://www.newline.co/courses/build-a-spotify-connected-app" 
                            target="_blank" 
                            rel="noreferrer noopener">
                                GeNER: Generative Nexus of Educational Resource Assistant for LNU - Website
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-400">
                            GENER: Generative Nexus of Educational Resources Assistant for LNU, a novel system designed to provide students with a comprehensive repository of open educational resources. Modeled after multiple learning object repositories.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </body>
    <script>
        document.addEventListener('mousemove', function(e) {
            document.body.style.setProperty('--x', e.clientX + 'px');
            document.body.style.setProperty('--y', e.clientY + 'px');
        });

        document.getElementById('leftContent').addEventListener('wheel', function(e) {
            document.getElementById('rightContent').scrollTop += e.deltaY * 3; // Increase the scroll speed by a factor of 3
            e.preventDefault();
        });
    </script>
</html>

