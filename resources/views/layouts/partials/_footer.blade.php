<footer>
    <div class="text-pink-500 hover:text-pink-600 underline">copyright</div>
    @if(Route::is('home'))
    <a href={{route('details')}}>details</a>
    @endif
</footer>