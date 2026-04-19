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
        <div class="hacker-frame max-w-5xl">
            <a href="/" class="menu-option text-xs nostyle">[ EXIT_TO_ROOT ]</a>
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-xl tracking-[0.4em] font-bold uppercase">.// PROJECTS_ARCHIVE</h1>
            </div>

            <div class="flex border-b border-[var(--ui-frame)] overflow-x-auto no-scrollbar">
                <button class="tab-btn active" data-target="project-1">PRJ_01: CALLSCRIBE</button>
                <button class="tab-btn" data-target="project-2">PRJ_02: PIP-POY AKA BE-BOP</button>
                <button class="tab-btn" data-target="project-3">PRJ_03: DEV_MARKET</button>
                <button class="tab-btn" data-target="project-4">PRJ_04: WISE_BUDGET</button>
            </div>

            <div class="project-display mt-8">
                <div id="project-1" class="tab-content active">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <h2 class="text-lg text-[var(--accent)] font-bold">.// CALLSCRIBE</h2>
                            <p class="text-sm opacity-80">A "real-time" transcribing web tool, listen actively throught
                                your speaker or active browser's audio and sends chunks of audio to the live server
                                where,
                                thanks to faster-whisper AI, transcribe the audio and sends it back giving the feeling
                                of
                                live-transcription.</p>
                            <br><a href="https://callscribe-hm0l.onrender.com" target="_blank"
                                class="menu-option my-4 text-center nostyle ">TRY
                                IT</a></br>
                            <div class="border-l-2 border-[var(--ui-frame)] pl-4 py-2 space-y-1">
                                <p class="text-[10px] uppercase opacity-50">Stack_Used:</p>
                                <p class="text-xs font-bold">DOCKER / PYTHON / JAVASCRIPT / CSS / HTML</p>
                            </div>
                        </div>
                        <div class="screenshot_layout border flex items-center justify-center relative">
                            <div class="screenshot_layout-frame"></div>
                            <img src="{{ asset('images/callscribe_layout.png') }}" alt="[ UI_SCREENSHOT_MOCKUP ]">
                        </div>
                        <div class="github-stats-container opacity-90">
                            <g transform="translate(0, 45)">
                                <div class="github-stats-container opacity-90 mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="165"
                                        viewBox="0 0 300 165" fill="none" role="img">
                                        <style>
                                            .header {
                                                font: 600 14px 'JetBrains Mono', monospace;
                                                fill: var(--accent);
                                                animation: fadeInAnimation 0.8s ease-in-out forwards;
                                                text-transform: uppercase;
                                                letter-spacing: 2px;
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

                                        <rect x="0.5" y="0.5" rx="0" height="164" width="299"
                                            stroke="var(--ui-frame)" stroke-width="1" fill="none" />

                                        <g transform="translate(20, 30)">
                                            <text x="0" y="0" class="header">> REPO_COMPOSITION</text>
                                        </g>

                                        <g transform="translate(0, 45)">
                                            <svg x="20">
                                                <mask id="rect-mask">
                                                    <rect x="0" y="0" width="260" height="6" fill="white"
                                                        rx="0" />
                                                </mask>

                                                <rect mask="url(#rect-mask)" class="lang-progress" x="0" y="0"
                                                    width="136.5" height="6" fill="#3572A5" />

                                                <rect mask="url(#rect-mask)" class="lang-progress" x="136.5" y="0"
                                                    width="61.62" height="6" fill="#f1e05a" />

                                                <rect mask="url(#rect-mask)" class="lang-progress" x="198.12" y="0"
                                                    width="41.08" height="6" fill="#563d7c" />

                                                <rect mask="url(#rect-mask)" class="lang-progress" x="239.2" y="0"
                                                    width="18.98" height="6" fill="#e34c26" />

                                                <rect mask="url(#rect-mask)" class="lang-progress" x="258.18" y="0"
                                                    width="1.82" height="6" fill="#384d54" />

                                                <g transform="translate(0, 20)">
                                                    <g class="stagger" style="animation-delay: 200ms">
                                                        <circle cx="5" cy="6" r="3" fill="#3572A5" />
                                                        <text x="15" y="10" class="lang-name">Python 52.5%</text>
                                                    </g>
                                                    <g transform="translate(0, 20)" class="stagger"
                                                        style="animation-delay: 300ms">
                                                        <circle cx="5" cy="6" r="3" fill="#f1e05a" />
                                                        <text x="15" y="10" class="lang-name">JavaScript
                                                            23.7%</text>
                                                    </g>
                                                    <g transform="translate(0, 40)" class="stagger"
                                                        style="animation-delay: 400ms">
                                                        <circle cx="5" cy="6" r="3" fill="#563d7c" />
                                                        <text x="15" y="10" class="lang-name">CSS 15.8%</text>
                                                    </g>
                                                    <g transform="translate(140, 0)" class="stagger"
                                                        style="animation-delay: 500ms">
                                                        <circle cx="5" cy="6" r="3" fill="#e34c26" />
                                                        <text x="15" y="10" class="lang-name">HTML 7.3%</text>
                                                    </g>
                                                    <g transform="translate(140, 20)" class="stagger"
                                                        style="animation-delay: 600ms">
                                                        <circle cx="5" cy="6" r="3" fill="#384d54" />
                                                        <text x="15" y="10" class="lang-name">Dockerfile
                                                            0.7%</text>
                                                    </g>
                                                </g>
                                            </svg>
                                        </g>
                                    </svg>
                                </div>
                        </div>
                    </div>
                </div>

                <div id="project-2" class="tab-content">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <h2 class="text-lg text-[var(--accent)] font-bold">.// PIPBOY AKA BE-BOP</h2>
                            <p class="text-sm opacity-80">This project is my attempt to recreate a fully functional,
                                accurate replica of the Pip-Boy interface from the Fallout 4 universe.

                                The goal is to build a mobile application written primarily in Python that reproduces
                                the look, behavior, and interaction model of the iconic Pip-Boy device. The application
                                is designed to run on smartphones and emulate the experience of navigating a Pip-Boy</p>
                            <p>
                                system, including screens such as:</p>
                            <ul>
                                STAT
                                <li>INV</li>
                                <li>DATA</li>
                                <li>MAP</li>
                                <li>RADIO</li>
                            </ul>
                            <p>
                                The project aims to reproduce the logic and interaction flow of the original interface
                                while maintaining clean architecture and maintainable code.

                                This project serves two main purposes:

                                Technical exploration of mobile UI development using Python.
                                Portfolio demonstration of software architecture, UI replication, and application
                                design.
                            </p>
                            <div class="border-l-2 border-[var(--ui-frame)] pl-4 py-2 space-y-1">
                                <p class="text-[10px] uppercase opacity-50">Technology Stack
                                    The project is built using the following technologies:</p>
                                <p>Language</p>
                                <ul>
                                    <li>Python</li>
                                </ul>
                                <p>Framework</p>
                                <ul>
                                    <li>Kivy</li>
                                </ul>
                                <p>Packaging</p>
                                <ul>
                                    <li>Buildozer (Android)</li>
                                    <li>Kivy-iOS (iOS)</li>
                                </ul>
                                <p>Graphics</p>
                                <ul>
                                    <li>OpenGL (via Kivy)</li>
                                    <li>Custom fonts and textures</li>
                                </ul>
                                <p>Audio</p>
                                <ul>
                                    <li>Built-in audio support provided by Kivy</li>
                                </ul>
                                <p>Why Kivy ?! Why not</p>
                                <p>Python-native mobile application and access to:</p>

                                <ul>
                                    <li>GPU-accelerated rendering</li>
                                    <li>touch input</li>
                                    <li>cross-platform compatibility</li>
                                    <li>custom UI widgets</li>
                                </ul>
                                <p>Kivy provides all of these features while allowing me to stay entirely within the
                                    Python ecosystem.</p>
                            </div>
                            <div class="screenshot_layout border flex items-center justify-center relative">
                                <div class="screenshot_layout-frame2"></div>
                                <img src="{{ asset('images/be-bop1.png') }}" alt="[ UI_SCREENSHOT_MOCKUP ]">
                                <br>
                            </div>
                            <div class="github-stats-container opacity-90">
                                <g transform="translate(0, 45)">
                                    <div class="github-stats-container opacity-90 mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="165"
                                            viewBox="0 0 300 165" fill="none" role="img">
                                            <style>
                                                .header {
                                                    font: 600 14px 'JetBrains Mono', monospace;
                                                    fill: var(--accent);
                                                    animation: fadeInAnimation 0.8s ease-in-out forwards;
                                                    text-transform: uppercase;
                                                    letter-spacing: 2px;
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

                                            <rect x="0.5" y="0.5" rx="0" height="164" width="299"
                                                stroke="var(--ui-frame)" stroke-width="1" fill="none" />

                                            <g transform="translate(20, 30)">
                                                <text x="0" y="0" class="header">> REPO_COMPOSITION</text>
                                            </g>

                                            <g transform="translate(0, 45)">
                                                <svg x="20">
                                                    <mask id="rect-mask">
                                                        <rect x="0" y="0" width="260" height="6"
                                                            fill="white" rx="0" />
                                                    </mask>

                                                    <rect mask="url(#rect-mask)" class="lang-progress" x="0" y="0"
                                                        width="260" height="6" fill="#3572A5" />
                                                    <g transform="translate(0, 20)">
                                                        <g class="stagger" style="animation-delay: 200ms">
                                                            <circle cx="5" cy="6" r="3"
                                                                fill="#3572A5" />
                                                            <text x="15" y="10" class="lang-name">Python 100.0%</text>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </g>
                                        </svg>
                                    </div>
                                </g>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="project-3" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <h2 class="text-lg text-[var(--accent)] font-bold">.// DEV_MARKET</h2>
                        <p class="text-sm opacity-80">IT-Skill Marketplace (Hire your custom Developer)</p>
                        <p class="text-sm opacity-80">Main purpose of this web app is to have fun adding to the ideal
                            developer the
                            infinite competences to be known in the software developing market..</p>
                        <div class="border-l-2 border-[var(--ui-frame)] pl-4 py-2 space-y-1">
                            <p class="text-[10px] uppercase opacity-50">Stack:</p>
                            <p class="text-xs font-bold">PHP 8.3/ LARAVELL 11 / BLADE / TAILWIND CSS / JAVASCRIPT</p>
                        </div>
                    </div>
                    <div class="screenshot_layout border flex items-center justify-center relative">
                        <div class="screenshot_layout-frame2"></div>
                        <img src="{{ asset('images/dev_market.png') }}" alt="[ UI_SCREENSHOT_MOCKUP ]">
                        <br>
                    </div>
                    <div class="github-stats-container opacity-90 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="150" viewBox="0 0 300 150"
                            fill="none" role="img">
                            <style>
                                .header {
                                    font: 600 14px 'JetBrains Mono', monospace;
                                    fill: var(--accent);
                                    animation: fadeInAnimation 0.8s ease-in-out forwards;
                                    text-transform: uppercase;
                                    letter-spacing: 2px;
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

                            <rect x="0.5" y="0.5" rx="0" height="149" width="299"
                                stroke="var(--ui-frame)" stroke-width="1" fill="none" />

                            <g transform="translate(20, 30)">
                                <text x="0" y="0" class="header">> REPO_COMPOSITION</text>
                            </g>

                            <g transform="translate(0, 45)">
                                <svg x="20">
                                    <mask id="rect-mask-php">
                                        <rect x="0" y="0" width="260" height="6" fill="white"
                                            rx="0" />
                                    </mask>

                                    <rect mask="url(#rect-mask-php)" class="lang-progress" x="0" y="0" width="169.52"
                                        height="6" fill="#4F5D95" />

                                    <rect mask="url(#rect-mask-php)" class="lang-progress" x="169.52" y="0"
                                        width="87.88" height="6" fill="#f7523f" />

                                    <rect mask="url(#rect-mask-php)" class="lang-progress" x="257.4" y="0"
                                        width="2.6" height="6" fill="#ededed" />

                                    <g transform="translate(0, 20)">
                                        <g class="stagger" style="animation-delay: 200ms">
                                            <circle cx="5" cy="6" r="3" fill="#4F5D95" />
                                            <text x="15" y="10" class="lang-name">PHP 65.2%</text>
                                        </g>
                                        <g transform="translate(0, 20)" class="stagger"
                                            style="animation-delay: 400ms">
                                            <circle cx="5" cy="6" r="3" fill="#f7523f" />
                                            <text x="15" y="10" class="lang-name">Blade 33.8%</text>
                                        </g>
                                        <g transform="translate(140, 0)" class="stagger"
                                            style="animation-delay: 600ms">
                                            <circle cx="5" cy="6" r="3" fill="#ededed" />
                                            <text x="15" y="10" class="lang-name">Other 1.0%</text>
                                        </g>
                                    </g>
                                </svg>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div id="project-4" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <h2 class="text-lg text-[var(--accent)] font-bold">.// WISE_BUDGET</h2>
                        <p class="text-sm opacity-80">This application offers a robust, modular, and extensible finance
                            tracking system. Each file has a clear responsibility, from database access to user
                            interface. The use of Flask's routing, context-managed DB operations, and AJAX-driven UI
                            updates creates a modern and user-friendly experience. The code is ready to be extended with
                            further analytics, authentication, or multi-user capabilities.</p>
                        <div class="border-l-2 border-[var(--ui-frame)] pl-4 py-2 space-y-1">
                            <p class="text-[10px] uppercase opacity-50">Stack:</p>
                            <p class="text-xs font-bold">PYTHON / HTML / JAVASCRIPT / CSS / DOCKER</p>
                        </div>
                    </div>
                    <div class="screenshot_layout border flex items-center justify-center relative">
                        <div class="screenshot_layout-frame2"></div>
                        <img src="" alt="[ UI_SCREENSHOT_MOCKUP ]">
                        <br>
                    </div>
                    <div class="github-stats-container opacity-90 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="150" viewBox="0 0 300 150"
                            fill="none" role="img">
                            <style>
                                .header {
                                    font: 600 14px 'JetBrains Mono', monospace;
                                    fill: var(--accent);
                                    animation: fadeInAnimation 0.8s ease-in-out forwards;
                                    text-transform: uppercase;
                                    letter-spacing: 2px;
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

                            <rect x="0.5" y="0.5" rx="0" height="149" width="299"
                                stroke="var(--ui-frame)" stroke-width="1" fill="none" />

                            <g transform="translate(20, 30)">
                                <text x="0" y="0" class="header">> STACK_DISTRIBUTION</text>
                            </g>

                            <g transform="translate(0, 45)">
                                <svg x="20">
                                    <mask id="rect-mask-hybrid">
                                        <rect x="0" y="0" width="260" height="6" fill="white"
                                            rx="0" />
                                    </mask>

                                    <rect mask="url(#rect-mask-hybrid)" class="lang-progress" x="0" y="0"
                                        width="98.02" height="6" fill="#3572A5" />

                                    <rect mask="url(#rect-mask-hybrid)" class="lang-progress" x="98.02" y="0"
                                        width="78.52" height="6" fill="#e34c26" />

                                    <rect mask="url(#rect-mask-hybrid)" class="lang-progress" x="176.54" y="0"
                                        width="67.86" height="6" fill="#f1e05a" />

                                    <rect mask="url(#rect-mask-hybrid)" class="lang-progress" x="244.4" y="0"
                                        width="15.6" height="6" fill="#563d7c" />

                                    <g transform="translate(0, 20)">
                                        <g class="stagger" style="animation-delay: 200ms">
                                            <circle cx="5" cy="6" r="3" fill="#3572A5" />
                                            <text x="15" y="10" class="lang-name">Python 37.7%</text>
                                        </g>
                                        <g transform="translate(0, 20)" class="stagger"
                                            style="animation-delay: 300ms">
                                            <circle cx="5" cy="6" r="3" fill="#e34c26" />
                                            <text x="15" y="10" class="lang-name">HTML 30.2%</text>
                                        </g>
                                        <g transform="translate(140, 0)" class="stagger"
                                            style="animation-delay: 400ms">
                                            <circle cx="5" cy="6" r="3" fill="#f1e05a" />
                                            <text x="15" y="10" class="lang-name">JS 26.1%</text>
                                        </g>
                                        <g transform="translate(140, 20)" class="stagger"
                                            style="animation-delay: 500ms">
                                            <circle cx="5" cy="6" r="3" fill="#563d7c" />
                                            <text x="15" y="10" class="lang-name">CSS 6.0%</text>
                                        </g>
                                    </g>
                                </svg>
                            </g>
                        </svg>
                    </div>
                </div>
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
