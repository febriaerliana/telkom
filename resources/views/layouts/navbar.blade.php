<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar js-scroll-trigger" href="{{ route('frontpage.index') }}#page-top"><img src="{{ asset('img/logos/telkom-logo.png') }}" height="50px" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('frontpage.index') }}#logistik">Logistik</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('frontpage.index') }}#fitur">Fitur</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('frontpage.index') }}#denah">Denah</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('frontpage.brankas') }}">Brankas</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('frontpage.index') }}#contact">Hubungi</a></li>
            </ul>
        </div>
    </div>
</nav>