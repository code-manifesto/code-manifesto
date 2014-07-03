<div class="col-xs-6 sidebar-offcanvas col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="{{ set_active('/') }}">
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

        <li class="{{ set_active('about') }}">
        	<a href="/about">About</a>
        </li>

        <li class="{{ set_active('support') }}">
        	<a href="/support">Support It</a>
        </li>

        <li class="{{ set_active('thankYou') }}">
        	<a href="/thankYou">View Supporters</a>
        </li>

    </ul>
</div>