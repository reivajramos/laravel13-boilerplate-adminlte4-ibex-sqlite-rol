<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">

        <!-- Left side -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>

        <!-- Right side -->
        <ul class="navbar-nav ms-auto">

            <!-- Simple icon (opcional) -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-bell"></i>
                </a>
            </li>

            <!-- USER DROPDOWN -->
            <li class="nav-item dropdown user-menu">

                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle me-1"></i>
                    <span class="d-none d-md-inline">Usuario</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

                    <!-- Header user -->
                    <li class="user-header text-bg-primary text-center">
                        <i class="bi bi-person-circle fs-1"></i>
                        <p>
                            Usuario del Sistema
                            <small>Sesión activa</small>
                        </p>
                    </li>

                    <!-- Body (opcional) -->
                    <li class="user-body">
                        <div class="row text-center">
                            <div class="col-4"><a href="#">Perfil</a></div>
                            <div class="col-4"><a href="#">Datos</a></div>
                            <div class="col-4"><a href="#">Ayuda</a></div>
                        </div>
                    </li>

                    <!-- Footer -->
                    <li class="user-footer d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-secondary btn-sm">Perfil</a>
                        <a href="#" class="btn btn-outline-danger btn-sm">Salir</a>
                    </li>

                </ul>
            </li>

        </ul>

    </div>
</nav>