//
import './bootstrap'; // This now works because the file exists
import $ from 'jquery';
window.$ = window.jQuery = $;

// We will load particles.js via a CDN or public script to keep Vite clean
console.log('PP01: Frontend Core Loaded');

$(document).ready(function() {
    let currentIndex = 0;
    const $options = $('.menu-option');

    function updateSelection(index) {
        currentIndex = index;
        $options.removeClass('active');
        $options.eq(currentIndex).addClass('active');
    }

    // Mouse Hover Sync
    $options.on('mouseenter', function() {
        updateSelection($(this).data('index'));
    });

    // Unified Keyboard Listener (ONE listener only)
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
            // THEME TOGGLE LOGIC
            $('body').toggleClass('light-theme');
            
            // Sync Particles Color
            if (window.pJSDom && window.pJSDom[0]) {
                const isLight = $('body').hasClass('light-theme');
                const newColor = isLight ? "#303830" : "#FF5F45";
                
                window.pJSDom[0].pJS.particles.color.value = newColor;
                window.pJSDom[0].pJS.particles.line_linked.color = isLight ? "#303830" : "#DBCCB1";
                window.pJSDom[0].pJS.fn.particlesRefresh();
            }
            
            console.log("System Theme Shifted.");
        }
    });

    $options.on('click', function() {
        triggerSelected();
    });

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
});