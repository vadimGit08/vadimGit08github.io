<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <i class="fas fa-user-shield fa-lg" style="color: #c1c6cf;"></i>
        </div>
        <div class="info">
            <a href="#" class="d-block" style="text-decoration: none">{{ Auth::user()->name }}</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.message.index') }}" class="nav-link">
                    <i class="nav-icon far fa-comment-dots"></i>
                    <p>
                        Messages
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.message.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit" style="color: #c2c7d0;"></i>
                    <p>
                        Creates
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.RDIndex') }}" class="nav-link">
                    <i class="nav-icon fas fa-trash-alt" style="color: #c2c7d0;"></i>
                    <p>
                        Recently deleted
                        <span class="badge badge-info right"></span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
