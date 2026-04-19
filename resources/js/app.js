//
import './bootstrap'; // This now works because the file exists
import $ from 'jquery';
window.$ = window.jQuery = $;

// We will load particles.js via a CDN or public script to keep Vite clean
console.log('PP01: Frontend Core Loaded');

$(document).ready(function() {
    // // Side Menu Toggle
    // $('.menu-trigger').on('click', function() {
    //     $('#side-menu').toggleClass('active');
    //     $(this).text($(this).text() === '[ MENU ]' ? '[ CLOSE ]' : '[ MENU ]');
    // });

    console.log("PP01: Terminal Ready.");

    let currentIndex = 0;
    const $options = $('.menu-option');

    function updateSelection(index) {
        $options.removeClass('active');
        $options.eq(index).addClass('active');
        
        // Play a subtle "blip" sound effect here if you have one later
        console.log("Navigating to Node: " + index);
    }

    // Keyboard Listener
    $(window).on('keydown', function(e) {
        if (e.key === "ArrowDown" || e.key === "s") {
            currentIndex = (currentIndex + 1) % $options.length;
            updateSelection(currentIndex);
        } 
        else if (e.key === "ArrowUp" || e.key === "w") {
            currentIndex = (currentIndex - 1 + $options.length) % $options.length;
            updateSelection(currentIndex);
        } 
        else if (e.key === "Enter") {
            const targetUrl = $options.eq(currentIndex).data('url');
            executeUplink(targetUrl);
        }
    });

    // Mouse Click Listener
    $options.on('click', function() {
        const targetUrl = $(this).data('url');
        executeUplink(targetUrl);
    });

    function executeUplink(url) {
        $('.ui-overlay').fadeOut(300, function() {
            window.location.href = url;
        });
    }

    // AJAX Contact Form with "Console" feedback
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        let $btn = $(this).find('button');
        $btn.text('> SENDING...');

        $.ajax({
            url: '/contact',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $btn.text('> ACCESS GRANTED. MESSAGE SENT.');
            },
            error: function() {
                $btn.text('> ERROR: UPLINK FAILED.');
            }
        });
    });
});