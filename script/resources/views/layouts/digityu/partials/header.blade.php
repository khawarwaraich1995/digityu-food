<header>
    <nav class="navbar navbar-light navbar-expand-lg digit-theme-colort digi-index p-3">
        <div class="container">
            <a class="navbar-brand" href="#">

                <img src="{{ asset(config('constants.DIGITYU_IMAGES_PATH').'digityu-logo-3@2x.png') }}" class="logo-img" alt="">
            </a>
            <button class="navbar-toggler toggler-style" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home-app') }}">App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home-contactus') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home-pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home-aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home-features') }}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home-login') }}">Login</a>
                    </li>
                    <button class="nav-btn" type="submit">Start Free Trial</button>
                </ul>
            </div>
        </div>
    </nav>
</header>