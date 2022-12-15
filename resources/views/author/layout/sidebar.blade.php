<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('author_home') }}">Panel Autora</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('author_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('author/home') ? 'active' : ''}}"><a class="nav-link" href="{{ route('author_home') }}"><i class="fas fa-hand-point-right"></i> <span>Pulpit</span></a></li>

            <li class="{{ Request::is('author/post/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('author_post_show') }}"><i class="fas fa-hand-point-right"></i> <span>Artykuły</span></a></li>

        </ul>
    </aside>
</div>