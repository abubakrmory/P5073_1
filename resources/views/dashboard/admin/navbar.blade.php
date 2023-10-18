  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container-fluid text-uppercase">
          <a class="navbar-brand" href="{{ route('admin.home') }}">{{ config('app.name', 'myproject') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Touristes Management</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Touristes Places Management</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Festivals Management</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Products  Management</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Tour Guides  Management</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('admin.logout') }}"
                          onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                      <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
