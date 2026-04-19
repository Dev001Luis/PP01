import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(function() {
    let currentIndex = 0;
    const $options = $('.menu-option');

    // --- 1. IMMEDIATE THEME SYNC ---
    // Apply the class to the body immediately on load
    if (localStorage.getItem('theme') === 'light') {
        $('body').addClass('light-theme');
    }

    // --- 2. HELPER FUNCTIONS ---
    function syncParticles() {
        if (window.pJSDom && window.pJSDom[0]) {
            const isLight = $('body').hasClass('light-theme');
            const newColor = isLight ? "#303830" : "#FF5F45";
            const lineLinkColor = isLight ? "#303830" : "#DBCCB1";
            
            window.pJSDom[0].pJS.particles.color.value = newColor;
            window.pJSDom[0].pJS.particles.line_linked.color = lineLinkColor;
            window.pJSDom[0].pJS.fn.particlesRefresh();
        }
    }

    // Auto-sync particles once the library is ready
    let particleCheck = setInterval(() => {
        if (window.pJSDom && window.pJSDom[0]) {
            syncParticles();
            clearInterval(particleCheck);
        }
    }, 100);

    function updateSelection(index) {
        currentIndex = index;
        $options.removeClass('active');
        $options.eq(currentIndex).addClass('active');
    }

    function triggerSelected() {
        const $active = $options.eq(currentIndex);
        const $link = $active.find('a');
        const url = $active.data('url');

        if ($link.length > 0) {
            window.open($link.attr('href'), '_blank');
        } else if (url) {
            window.location.href = url;
        }
    }

    // --- 3. EVENT LISTENERS ---
    $options.on('mouseenter', function() {
        updateSelection($(this).data('index'));
    });

    $(window).on('keydown', function(e) {
        const key = e.key.toLowerCase();

        if (key === "arrowdown" || key === "s") {
            updateSelection((currentIndex + 1) % $options.length);
        } 
        else if (key === "arrowup" || key === "w") {
            updateSelection((currentIndex - 1 + $options.length) % $options.length);
        } 
        else if (key === "enter") {
            triggerSelected();
        } 
        else if (key === "t") {
            $('body').toggleClass('light-theme');
            const isLightNow = $('body').hasClass('light-theme');
            localStorage.setItem('theme', isLightNow ? 'light' : 'dark');
            syncParticles();
        }
    });

    $options.on('click', function() {
        triggerSelected();
    });
});