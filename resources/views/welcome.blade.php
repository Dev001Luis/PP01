<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PP01 // ARCH_INTERFACE</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>

    <div id="particles-js"></div>

    <div class="ui-overlay">
        <div class="terminal-header mb-12 text-center">
            <h1 class="text-xl tracking-[0.5em] text-[#DBCCB1]">SYSTEM: .//PP01_LUIS_STASI\'S_PORTFOLIO</h1>
            <p class="text-[#DBCCB1] text-xs uppercase tracking-[0.3em] mb-6">Status: Neural Link Established</p>
            <div class="h-[1px] w-64 bg-[#FF5F45] mx-auto mt-2 opacity-50"></div>
        </div>

        <nav id="game-menu" class="flex flex-col gap-4">
            <div class="menu-option active" data-index="0" data-url="/about">
                <span class="bracket">[</span>
                <span class="label">INITIALIZE_BIO</span>
                <span class="bracket">]</span>
            </div>
            <div class="menu-option" data-index="1" data-url="/projects">
                <span class="bracket">[</span>
                <span class="label">LOAD_PROJECTS</span>
                <span class="bracket">]</span>
            </div>
            <div class="menu-option" data-index="2" data-url="/contact">
                <span class="bracket">[</span>
                <span class="label">ESTABLISH_UPLINK</span>
                <span class="bracket">]</span>
            </div>
        </nav>
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
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    }
                }
            }
        });
    </script>
</body>

</html>
