<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href=" {{ route('admin') }} " class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                <i class="nav-icon fa fa-home"></i>
                <p>
                    Inicio
                </p>
            </a>
        </li>
        <!-- <li class="nav-item has-treeview menu-open"> -->
        <li class="nav-item has-treeview  {{ request()->is('admin/posts*') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ request()->is('admin/posts*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                    Blog
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link  {{ request()->is('admin/posts') ? 'active' : '' }}">
                        <i class="fas fa-eye nav-icon"></i>
                        <p>Ver Todos los Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/posts/create') ? 'active' : '' }} " data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-pen-square nav-icon"></i>
                        <p>Crear Post</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>