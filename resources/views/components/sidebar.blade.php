<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            {{-- <li class="nav-title">Theme</li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="nav-icon cui-user"></i> User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <i class="nav-icon icon-notebook"></i> Posts</a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
