<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PP01 // CONTACT_UPLINK</title>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <script>
        if (localStorage.getItem('theme') === 'light') {
            document.documentElement.classList.add('light-theme');
        }
    </script>
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

    <div class="ui-overlay">
        <div class="hacker-frame max-w-5xl">
            <a href="/" class="menu-option text-sm nostyle">[ BACK_TO_ROOT ]</a>
            <div class="flex justify-between items-center mb-10 border-b border-dashed border-[var(--ui-frame)] pb-4">
                <div>
                    <h1 class="text-xl tracking-[0.4em] font-bold uppercase">Uplink: Establish Connection</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="space-y-8">
                    <div>
                        <h3 class="text-[var(--accent)] text-xs font-bold mb-2">// DIRECT_CHANNELS</h3>
                        <p class="text-sm opacity-80 ">
                            <a href="mailto:stasi93work@gmail.com" class="nostyle menu-option" target="_blank">MAIL:
                                stasi93work@gmail.com
                            </a>
                        </p>
                        <p class="text-sm opacity-80">
                            <a href="https://maps.google.com/maps?q=Lincoln" class="nostyle menu-option"
                                target="_blank">LOCATION:
                                Lincoln, Lincolnshire, UK
                            </a>
                        </p>
                    </div>
                    <div>
                        <h3 class="text-[var(--accent)] text-xs font-bold mb-2">// SOCIAL_NODES</h3>
                        <ul class="text-sm space-y-2">
                            <li><a href="https://www.linkedin.com/in/luis-stasi-webdeveloper/"
                                    class="menu-option transition nostyle" target="_blank">> LINKEDIN</a>
                            </li>
                            <li><a href="https://github.com/Dev001Luis" class="menu-option transition nostyle"
                                    target="_blank">>
                                    GITHUB_REPOS</a></li>
                        </ul>
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
