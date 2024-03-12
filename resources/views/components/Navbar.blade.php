<nav>
    <ul class="flex gap-2 justify-center py-6 text-xl">
        @foreach ($navbar_voices as $key => $voice)
            <li class="{{ $voice['link'] == $location ? 'text-pink-700 font-extrabold' : '' }}">
                <a href="{{ $voice['link'] }}">
                    {{ $key }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
