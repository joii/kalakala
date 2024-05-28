<header class="header">
    <div class="container-fluid">
        <button class="btn btn-icon navbar-toggle" type="button">
            <span class="group">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <div class="navbar-brand">
            <a>
                <img class="svg-js" src="{{  asset('frontend/assets/img/logo.svg') }}" alt="">
            </a>
        </div>

        <div class="lang">
            <a class=" {{  session()->get('language')=='english'?'active':'' }}"   href="{{ route('language.english') }}">EN</a> /
            <a class=" {{  session()->get('language')=='thai'?'active':'' }}" href="{{ route('language.thai') }}">TH</a>
        </div>
    </div><!--container-fluid-->
</header>
