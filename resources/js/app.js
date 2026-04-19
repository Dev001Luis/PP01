//
import './bootstrap';
import $ from 'jquery';
import 'particles.js';

window.$ = window.jQuery = $;

// Initialize Particles
particlesJS.load('particles-js', '/particlesjs-config.json', function() {
    console.log('PP01: Neural Network Online');
});