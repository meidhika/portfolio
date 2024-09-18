<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search products">
                </form>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                    href="{{ route('register') }}">+ Create New
                    Project</a>
            </li>
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="mx-3 btn btn-primary create-new-button" id="createbuttonDropdown"
                    href="{{ route('portfolio.hero') }}">Look Portfolio</a>
            </li>
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    @foreach ($contacts as $contact)
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">{{ $contact->name }}</p>
                                <p class="text-muted mb-0">{{ $contact->email }}</p>
                            </div>
                        </a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">{{ $contact->count() }} new messages</p>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                    <div class="navbar-profile">

                        <img class="img-xs rounded-circle" src="{{ asset('portfolio/img/LogoWeb.png') }}"
                            alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">Portfolio</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>

                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                    aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">Logout</button>
                                <!-- <p type="submit" class="preview-subject mb-1">Log out</p> -->
                            </form>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
