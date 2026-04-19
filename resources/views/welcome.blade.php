<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body>

    <div id="particles-js"></div>
    <!--WHAT ARE YOU DOING STEP-BRO/SIS ...DON'T BREAK MY PAGE PLS.-->
    <div class="ui-overlay">
        <div class="mt-8 mb-8 text-[10px] opacity-50">
            PRESS [T] TO TOGGLE LIGHT/DARK MODE
        </div>
        <div class="hacker-frame">
            <div class="terminal-header mb-8 text-center">
                <h1 class="text-l  ">.//PP01_LUIS_STASI_PORTFOLIO</h1>
                <p class=" text-xs uppercase tracking-[0.3em] mb-6">Status: Link Established</p>
                <div class="h-[1px] w-64 bg-[#FF5F45] mx-auto mt-2 opacity-50"></div>
            </div>

            <nav id="game-menu" class="flex flex-col gap-4">
                <div class="menu-option my-4 active text-center" data-index="0" data-url="/about">
                    <span class="bracket">[</span>
                    <span class="label">ABOUT_ME</span>
                    <span class="bracket">]</span>
                </div>
                <div class="menu-option my-4 text-center" data-index="1">
                    <a href="https://github.com/Dev001Luis" class="nostyle" target="_blank">
                        <span class="bracket">[</span>
                        <span class="label">GO_TO_REPO_PROJECTS</span>
                        <span class="bracket">]</span>
                    </a>
                </div>
                <div class="menu-option my-4 text-center" data-index="2" data-url="/contact">
                    <span class="bracket">[</span>
                    <span class="label">CONTACTS_UPLINK</span>
                    <span class="bracket">]</span>
                </div>
                <!--<div class="menu-option text-center" data-index="3" data-url="/game">
                    <span class="bracket">[</span>
                    <span class="label">LET'S_HAVE_FUN</span>
                    <span class="bracket">]</span>
                </div>-->
            </nav>
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
