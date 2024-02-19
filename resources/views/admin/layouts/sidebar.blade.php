<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <br>
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
<br>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                @can('users_index')
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('admin.users.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-user-line"></i></div>
                            {{ __('backend.users') }}
                        </a>
                    </li>
                @endcan
                @can('permissions_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.permissions.index') }}">
                            <div class="sb-nav-link-icon"><i class="  ri-lock-fill"></i></div>
                            Permissions
                        </a>
                    </li>
                @endcan
                @can('projects_index')
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('admin.projects.index') }}">
                            <div class="sb-nav-link-icon"><i class="  ri-share-line"></i></div>
                            {{ __('backend.projects') }}
                        </a>
                    </li>
                @endcan
                @can('partners_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.partner.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-suitcase-line"></i></div>
                            {{ __('backend.partners') }}
                        </a>
                    </li>
                @endcan
                @can('fillials_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.filillar.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-earth-line"></i></div>
                            {{ __('backend.fill') }}
                        </a>
                    </li>
                @endcan
                @can('vacancy_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.vacancy.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-team-line"></i></div>
                            {{ __('backend.vacancy') }}
                        </a>
                    </li>
                @endcan
                @can('products_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.products.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-dropbox-line"></i></div>
                            {{ __('backend.products') }}
                        </a>
                    </li>
                @endcan
                @can('documents_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.docs.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-file-line"></i></div>
                            Documents
                        </a>
                    </li>
                @endcan
                @can('contacts_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.contact.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-contacts-book-line"></i></div>
                            {!! __('backend.contact') !!}
                        </a>
                    </li>
                @endcan
                @can('news_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.blogs.index') }}">
                            <div class="sb-nav-link-icon"><i class="ri-newspaper-line"></i></div>
                            {{ __('backend.blogMenu') }}
                        </a>
                    </li>
                @endcan
                @can('comments_index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.comment.index') }}">
                            <div class="sb-nav-link-icon"><i class=" ri-chat-1-line"></i></div>
                            {{ __('backend.comment') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
