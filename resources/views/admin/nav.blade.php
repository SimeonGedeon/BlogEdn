<nav class="navbar navbar-expand-lg navbar-dark bg-primary admin-navbar fixed-top">
    <div class="container-fluid">
        <!-- Bouton hamburger standard de Bootstrap -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar"
            aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="#" data-show="dashboard">
            <i class="bi bi-book me-2"></i>Évangéliste du Net
        </a>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-show="dashboard">
                        <i class="bi bi-house-door me-1"></i>Accueil
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contentDropdown" role="button"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-file-earmark-plus me-1"></i>Créer
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" data-show="pensee">
                                <i class="bi bi-sun me-2"></i> Pensée du jour
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" data-show="enseignement">
                                <i class="bi bi-book me-2"></i> Enseignement
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" data-show="etude">
                                <i class="bi bi-journal-text me-2"></i> Étude biblique
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" data-show="motivation">
                                <i class="bi bi-emoji-smile me-2"></i> Motivation
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="d-flex">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="userDropdown" data-bs-toggle="dropdown">
                        <img src="{{ asset('image/image1.jpg') }}" alt="Profile" width="32" height="32"
                            class="rounded-circle me-2">
                        <span>Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Paramètres</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-box-arrow-right me-2"></i>Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('click', function(event) {
        const navbar = document.getElementById('adminNavbar');
        const toggler = document.querySelector('.navbar-toggler');

        const isClickInsideNavbar = navbar.contains(event.target) || toggler.contains(event.target);

        if (!isClickInsideNavbar && navbar.classList.contains('show')) {
            const bsCollapse = bootstrap.Collapse.getInstance(navbar);
            bsCollapse.hide();
        }
    });
</script>
