<footer class="footer mt-4 border-t-2 border-grey-lighter flex w-full p-4">
    <div class="w-1/2">
        © {{ carbon()->format('Y') }}
        <a href="{{ url('/') }}" class="no-underline">Pepe García</a>
    </div>
    <div class="w-1/2 text-right">
        <a href="{{ url('feed') }}" data-turbolinks="false" class="footer__rss">
            <span class="icon -xs" title="RSS">
                {{ svg('rss') }}
            </span>
        </a>
    </div>
</footer>
