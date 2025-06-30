  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
          <a class="navbar-brand fw-bold" href="#">
              <i class="bi bi-cross"></i> Evangéliste du Net
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link @if (request()->route()->getName() === 'home') active @endif"
                          href="{{ route('index') }}">Accueil</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link @if (request()->route()->getName() === 'evang') active @endif"
                          href="{{ route('salut') }}">Connaitre Jésus</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link @if (request()->route()->getName() == 'enseig') active @endif"
                          href="{{ route('enseig') }}">Enseignements</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link @if (request()->route()->getName() == 'pensees.index') active @endif"
                          href="{{ route('pensee') }}">Pensées du Jour</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link @if (request()->route()->getName() == 'about') active @endif" href="{{ route('about') }}">À
                          propos</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
