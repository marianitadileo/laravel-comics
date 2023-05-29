<footer>
    <div class="wrapper">
        <div class="footer-list">
            @foreach ($dbFooter as $element)
                <ul class="nav" v-for="element in FooterNav"> 
                    <li class="list-name">
                        {{$element['Name']}}
                        <ul class="nav2">
                            @foreach ($element['NavElement'] as $contenuti)
                            <li class="list-item" >{{ $contenuti }}</li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            @endforeach
        </div>
        <div class="img-wrapper">
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo">
        </div>
    </div>
</footer>
