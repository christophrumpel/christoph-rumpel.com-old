<div class="little-seperator"></div>
<footer class="footer">
    <div>
        © {{ carbon()->format('Y') }}
        <a href="{{ url('about') }}">Christoph Rumpel</a>
    </div>
    <a href="{{ url('feed') }}" data-turbolinks="false" class="footer__rss">
        <span class="icon -xs" title="RSS">
            {{ svg('rss') }}
        </span>
    </a>
</footer>
