<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    <div class="sidebar-brand">
        <a href="#" class="brand-link">
            <span class="brand-text">Sistema IICS</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">

            <ul class="nav sidebar-menu flex-column">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/resultados') }}" class="nav-link">
                        <i class="nav-icon bi bi-clipboard-data"></i>
                        <p>Resultados</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/usuarios') }}" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ url('/role-users') }}" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Designar Roles</p>
                    </a>
                </li>

            </ul>

        </nav>
    </div>

</aside>