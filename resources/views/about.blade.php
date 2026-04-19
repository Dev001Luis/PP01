<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LUIS_STASI_PORFOLIO</title>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script>
        // Critical: Apply theme to root immediately to prevent white flash
        if (localStorage.getItem('theme') === 'light') {
            document.documentElement.classList.add('light-theme');
        }
    </script>
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />
</head>

<body class="">
    <div id="particles-js"></div>

    <div class="ui-overlay">
        <div class="hacker-frame max-w-4xl">
            <a href="/" class="menu-option text-sm nostyle">[ BACK_TO_ROOT ]</a>
            <div class="flex justify-between items-start mb-12">
                <div class="terminal-header">
                    <h1 class="text-xl ">FILE: </h1>
                    <h2>ABOUT_LUIS_STASI</h2>
                    <p class="text-xs uppercase opacity-50">Role: Full-Stack Developer (Junior)</p>
                </div>
                <div class="profile-container mr-4">
                    <div class="tactical-id">
                        <div class="id-frame"></div>

                        <img src="{{ asset('images/profile.jpg') }}" alt="LUIS_STASI">

                        <div class="id-glitch-overlay"></div>
                        <div class="id-corner top-left"></div>
                        <div class="id-corner bottom-right"></div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="border-l-2 border-[#FF5F45] pl-4">
                    <h2 class="text-[#FF5F45] mb-4 font-bold">// TECH_STACK</h2>
                    <ul class="space-y-2 opacity-80">
                        <li>> LARAVEL / PHP 8.3</li>
                        <li>> JQUERY</li>
                        <li>> TAILWIND_CSS</li>
                        <li>> SQLITE / MYSQL</li>
                        <li>> GIT / VERSIONING</li>
                    </ul>

                    <div class="github-stats-container opacity-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="165" viewBox="0 0 300 165"
                            fill="none" role="img">
                            <style>
                                .header {
                                    font: 600 14px 'JetBrains Mono', monospace;
                                    fill: var(--accent);
                                    animation: fadeInAnimation 0.8s ease-in-out forwards;
                                    text-transform: uppercase;
                                    letter-spacing: 2px;
                                }

                                .stat {
                                    font: 600 12px 'JetBrains Mono', monospace;
                                    fill: var(--text-primary);
                                }

                                .lang-name {
                                    font: 400 10px 'JetBrains Mono', monospace;
                                    fill: var(--text-primary);
                                }

                                .stagger {
                                    opacity: 0;
                                    animation: fadeInAnimation 0.3s ease-in-out forwards;
                                }

                                .lang-progress {
                                    animation: growWidthAnimation 0.6s ease-in-out forwards;
                                }

                                @keyframes growWidthAnimation {
                                    from {
                                        width: 0;
                                    }

                                    to {
                                        width: 100%;
                                    }
                                }

                                @keyframes fadeInAnimation {
                                    from {
                                        opacity: 0;
                                    }

                                    to {
                                        opacity: 1;
                                    }
                                }
                            </style>

                            <rect x="0.5" y="0.5" rx="0" height="164" width="299" stroke="var(--ui-frame)"
                                stroke-width="1" fill="none" />

                            <g transform="translate(20, 30)">
                                <text x="0" y="0" class="header">> KNOWN_LANGUAGES</text>
                            </g>

                            <g transform="translate(0, 45)">
                                <svg x="20">
                                    <mask id="rect-mask">
                                        <rect x="0" y="0" width="260" height="6" fill="white" rx="0" />
                                    </mask>

                                    <rect mask="url(#rect-mask)" class="lang-progress" x="0" y="0" width="102.3"
                                        height="6" fill="var(--accent)" />
                                    <rect mask="url(#rect-mask)" class="lang-progress" x="102.3" y="0" width="53.04"
                                        height="6" fill="var(--text-primary)" opacity="0.6" />
                                    <rect mask="url(#rect-mask)" class="lang-progress" x="155.34" y="0" width="33.56"
                                        height="6" fill="var(--accent)" opacity="0.4" />
                                    <rect mask="url(#rect-mask)" class="lang-progress" x="188.9" y="0" width="30.74"
                                        height="6" fill="var(--text-primary)" opacity="0.3" />

                                    <g transform="translate(0, 20)">
                                        <g class="stagger" style="animation-delay: 450ms">
                                            <circle cx="5" cy="6" r="3" fill="var(--accent)" />
                                            <text x="15" y="10" class="lang-name">PHP 40.92%</text>
                                        </g>
                                        <g transform="translate(0, 20)" class="stagger" style="animation-delay: 600ms">
                                            <circle cx="5" cy="6" r="3" fill="var(--text-primary)" />
                                            <text x="15" y="10" class="lang-name">Python 21.22%</text>
                                        </g>
                                        <g transform="translate(0, 40)" class="stagger"
                                            style="animation-delay: 750ms">
                                            <circle cx="5" cy="6" r="3" fill="var(--accent)"
                                                opacity="0.5" />
                                            <text x="15" y="10" class="lang-name">Vue 13.42%</text>
                                        </g>
                                        <g transform="translate(130, 0)" class="stagger"
                                            style="animation-delay: 450ms">
                                            <circle cx="5" cy="6" r="3" fill="var(--text-primary)"
                                                opacity="0.5" />
                                            <text x="15" y="10" class="lang-name">JS 12.29%</text>
                                        </g>
                                        <g transform="translate(130, 20)" class="stagger"
                                            style="animation-delay: 600ms">
                                            <circle cx="5" cy="6" r="3" fill="var(--accent)" />
                                            <text x="15" y="10" class="lang-name">Blade 9.19%</text>
                                        </g>
                                    </g>
                                </svg>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="border-l-2 border-[#DBCCB1] pl-4">
                    <h2 class="text-[#DBCCB1] mb-4 font-bold">// PREVIOUS JOB POSITIONS</h2>
                    <p class="text-sm leading-relaxed">
                    <ul>
                        <li> Software Engineer at Max Mara Fashion Group:</li>
                        <li> Developed and maintained internal software solutions supporting ERP and PLM systems
                            across
                            group subsidiaries.</li>
                        <li> Provided secondary-level support for daily business operations, resolving user requests
                            and
                            technical issues related to ERP/PLM services. </li>
                        <li>Collaborated with cross-functional teams using tools like Figma and Git to streamline
                            development processes.</li>
                        <li> Participated in sprint planning, daily stand-ups, and code reviews.</li>
                        <li> Worked in a corporate, multinational structure with cross-departmental communication.
                        </li>
                        </p>
                </div>
                <div class="border-l-2 border-[#FF5F45] pl-4">
                    <h2 class="text-[#FF5F45] mb-4 font-bold">// INTEL_SUMMARY</h2>
                    <p class="text-sm leading-relaxed">
                        Junior developer focused on building immersive, high-performance web applications.
                        Passionate about clean code and "videogame-logic" interfaces.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        // Particle Config (The "Neural Brain" effect)
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 100,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#FF5F45"
                },
                "shape": {
                    "type": "circle"
                },
                "opacity": {
                    "value": 0.5
                },
                "size": {
                    "value": 2
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#DBCCB1",
                    "opacity": 0.3,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1.5
                }
            },
            "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "push": {
                        "particles_nb": 4
                    }
                }
            }
        });
    </script>
</body>

</html>
