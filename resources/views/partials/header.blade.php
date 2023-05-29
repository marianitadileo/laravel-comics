<header class="header">
    <div class="logo">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
    </div>
    <ul>
        @foreach ($dbHeader as $element)
            <li class="header-navbar" href="#"> {{ $element }}</li>
        @endforeach
    </ul>
</header>