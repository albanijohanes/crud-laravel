<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('main') }}">CRUD</a>
            </li>
            </li>
            <li class="nav-item">
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="text" value="{{ auth()->user()->name }}" aria-label="Disabled input example" disabled>
            <button class="btn btn-outline-success" type="submit"><a
                    class="link-light link-offset-2 link-underline link-underline-opacity-0" href="{{ route('logout') }}">Log
                    Out</a></button>
        </form>
    </div>
</nav>