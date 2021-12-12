<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">V</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <nav>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}"
                        href="/categories">CATEGORIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('order') ? 'active' : '' }}" href="/order">ORDER</a>
                </li>
            </ul>
</nav>
        </div>


        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="/dashboard"> DASHBOARD</a>
            </li>


            @else
            <li class="nav-item">
                <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i
                        class="bi bi-person-fill"></i></i> LOGIN</a>
            </li>
            @endauth
        </ul>

    </div>
</nav>
