import Highlight from './modules/highlight';
import Turbolinks from 'turbolinks';


Turbolinks.start();

document.addEventListener('turbolinks:click', function(e) {
    if (e.target.getAttribute('href').charAt(0) === '#') {
        return e.preventDefault()
    }
}, false);

document.addEventListener('turbolinks:load', function(e) {
    Highlight.start();
    if (window.location.hash) {
        // 1. You may also need to decodeURIComponent the hash if it contains certain characters.
        // 2. Change query element to fit your situation
        var element = document.getElementById(window.location.hash.substring(1));
        var pos = element.getBoundingClientRect();
        window.scrollTo(0, pos.y)
    }
}, false);
