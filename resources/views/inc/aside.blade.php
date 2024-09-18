<nav class="sidebar sidebar-offcanvas" id="sidebar" style="height: 250vh;">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html" style="text-decoration: none; color:white;">
            <h3>My Portfolio</h3>
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-sm rounded-circle" src="{{ asset('portfolio/img/LogoWeb.png') }}"
                            alt="">
                    </div>
                    <div class="profile-name">
                        <h3 class="mb-0 font-weight-normal">Portfolio</h3>
                        <span></span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Create Portfolio</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('about.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">About Me</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('education.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Education</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('experience.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Work Experience</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('skill.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Skills</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Project</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('project.index') }}">Project</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('contact.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Contact</span>
                <i class="menu-arrow"></i>
            </a>
        </li>


    </ul>
</nav>
