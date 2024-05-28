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
        <link href="{{ asset('css/.css') }}" rel="stylesheet">
    </head>
    <body class="flex flex-col md:flex-row min-h-screen">
        <div class="w-full md:w-3/4 bg-gray-100 p-4 md:sticky md:top-0">
            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-4">Justine Paul Cirera</h1>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-4">Senior Frontend Engineer</p>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-4">I'm a software engineer based in Boston, MA. I specialize in building accessible user interfaces and web applications. 
                I'm passionate about creating software that is both beautiful and functional.</p>
            <ul class="space-y-2">
                <li><a href="#about" class="text-blue-500">About</a></li>
                <li><a href="#projects" class="text-blue-500">Projects</a></li>
                <li><a href="#skills" class="text-blue-500">Skills</a></li>
                <li><a href="#social" class="text-blue-500">Social Links</a></li>
            </ul>
        </div>
        <div class="w-full md:w-3/4 p-4 md:overflow-auto md:h-screen">
            <section id="about" class="pt-12 pr-12">
                <h2 class="text-xl font-bold mb-2">About</h2>
                <p class="text-lg mb-4">Back in 2012, I decided to try my hand at creating custom Tumblr themes and tumbled head first into the rabbit hole of coding and web development. 
                    Fast-forward to today, and I’ve had the privilege of building software for an advertising agency, a start-up, a huge corporation, and a digital product studio. 
                    <br> <br> My main focus these days is building accessible user interfaces for our customers at Klaviyo. 
                    I most enjoy building software in the sweet spot where design and engineering meet — things that look good but are also built well under the hood. 
                    In my free time, I've also released an online video course that covers everything you need to know to build a web app with the Spotify API. 
                    <br> <br> When I’m not at the computer, I’m usually rock climbing, reading, hanging out with my wife and two cats, or running around Hyrule searching for Korok seeds K o r o k s e e d s .</p>
            </section>
            <section id="projects">
                <h2 class="text-xl font-bold mb-2">Projects</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div class="card">
                        <h3 class="text-lg font-bold">Project 1</h3>
                        <p class="text-lg">Short description of the project.</p>
                    </div>
                    <!-- Repeat for each project -->
                </div>
            </section>
            <section id="skills">
                <h2 class="text-xl font-bold mb-2">Skills</h2>
                <ul class="list-disc ml-5">
                    <li class="text-lg">JavaScript</li>
                    <li class="text-lg">Python</li>
                    <li class="text-lg">C++</li>
                    <!-- Add more skills as needed -->
                </ul>
            </section>
            <section id="social">
                <h2 class="text-xl font-bold mb-2">Social Links</h2>
                <ul class="flex space-x-4">
                    <li><a href="https://github.com/yourusername" class="text-blue-500">GitHub</a></li>
                    <li><a href="https://linkedin.com/in/yourusername" class="text-blue-500">LinkedIn</a></li>
                    <li><a href="https://twitter.com/yourusername" class="text-blue-500">Twitter</a></li>
                    <!-- Add more social links as needed -->
                </ul>
            </section>
        </div>
    </body>
</html>