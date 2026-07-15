<div class="sidebar d-flex flex-column justify-content-between h-100">

    <!-- Profile -->
    <div>
        <div class="text-center py-4">
            <div class="profile-img mx-auto">
                <img src="{{ asset('images/photo1.jpg') }}" alt="Profile" class="img-fluid rounded-circle">
            </div>

            <h3 class="text-white mt-3 st-font mb-3">Bishwajeet Paul</h3>
            <span class="badge bg-warning text-dark px-3 py-2">
                Full Stack Developer
            </span>
        </div>

        <!-- Navigation -->
        <nav class="nav flex-column px-3">

            <a class="nav-link sidebar-link {{ request()->routeIs('home') ? 'active' : '' }}"
                href="{{ route('home') }}">
                <i class="fas fa-house me-3"></i> Home
            </a>

            <a class="nav-link sidebar-link {{ request()->routeIs('about') ? 'active' : '' }}"
                href="{{ route('about') }}">
                <i class="fas fa-user me-3"></i> About
            </a>

            <a class="nav-link sidebar-link {{ request()->routeIs('resume') ? 'active' : '' }}"
                href="{{ route('resume') }}">
                <i class="fas fa-file-alt me-3"></i> Resume
            </a>

            <a class="nav-link sidebar-link {{ request()->routeIs('skill') ? 'active' : '' }}"
                href="{{ route('skill') }}">
                <i class="fas fa-code me-3"></i> Skills
            </a>

            <a class="nav-link sidebar-link {{ request()->routeIs('portfolio') ? 'active' : '' }}"
                href="{{ route('portfolio') }}">
                <i class="fas fa-briefcase me-3"></i> Portfolio
            </a>

            <a class="nav-link sidebar-link {{ request()->routeIs('services') ? 'active' : '' }}"
                href="{{ route('services') }}">
                <i class="fas fa-laptop-code me-3"></i> Services
            </a>

            <a class="nav-link sidebar-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                href="{{ route('contact') }}">
                <i class="fas fa-envelope me-3"></i> Contact
            </a>

        </nav>
    </div>

</div>