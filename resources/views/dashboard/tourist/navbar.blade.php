  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container-fluid text-uppercase ">
          <a class="navbar-brand" href="{{ route('tourist.home') }}">{{ config('app.name', 'myproject') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="#">Show Tourist Places</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="#">Show Festivals</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="#">Show Products</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="#">Show Tour Guides</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="#">Update Profile </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="{{ route('tourist.logout') }}"
                          onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                      <form action="{{ route('tourist.logout') }}" method="post" class="d-none" id="logout-form">@csrf
                      </form>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
