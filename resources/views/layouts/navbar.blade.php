  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container-fluid text-uppercase">
            <a class="navbar-brand" href="/">{{ config('app.name', 'myproject') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.login') }}"> Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tourist.login') }}"> tourist Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tourist.register') }}"> tourist Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>