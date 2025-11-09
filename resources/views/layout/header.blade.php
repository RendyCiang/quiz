
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img height="50" width="75" src="{{ asset('/images/logo.png') }}" alt="Logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('multimedia') || request()->is('software-engineering') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/multimedia">Interactive Multimedia</a></li>
                        <li><a class="dropdown-item" href="/software-engineering">Software Engineering</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ request()->is('writers') ? 'active' : '' }}" href="/writers">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ request()->is('about-us') ? 'active' : '' }}" href="/about-us">About Us</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link  {{ request()->is('popular') ? 'active' : '' }}" href="/popular">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
