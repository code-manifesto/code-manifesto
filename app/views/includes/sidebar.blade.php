<div class="col-xs-6 sidebar-offcanvas col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li
        @if($active_item == "home")
        class="active"
        @endif
        >
        <a href="/">Home</a>
        </li>

        <li>
            <a class="text-muted disabled">Translations</a>
            <ul>
                                @foreach ($languages as $link => $language)
                                    <li>
                                        <a href="/ln/{{$link}}">
                                            {{$language}}
                                        </a>
                                    </li>
                                @endforeach
            </ul>
        </li>

        <li
        @if($active_item == "about")
        class="active"
        @endif
        >
        <a href="/about">About</a>
        </li>



        <li
        @if($active_item == "support")
        class="active"
        @endif
        >
        <a href="/support">Support It</a>
        </li>

        <li
        @if($active_item == "list")
        class="active"
        @endif
        >
        <a href="/thankYou">View Supporters</a>
        </li>

    </ul>
</div>