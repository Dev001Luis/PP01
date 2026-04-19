//
import './bootstrap'; // This now works because the file exists
import $ from 'jquery';
window.$ = window.jQuery = $;

// We will load particles.js via a CDN or public script to keep Vite clean
console.log('PP01: Frontend Core Loaded');

$(document).ready(function() {
    // Side Menu Toggle
    $('.menu-trigger').on('click', function() {
        $('#side-menu').toggleClass('active');
        $(this).text($(this).text() === '[ MENU ]' ? '[ CLOSE ]' : '[ MENU ]');
    });

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