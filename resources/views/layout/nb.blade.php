<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">LARAVEL CRUD</a>
        <form class="d-flex">
            <button class="btn btn-outline-success me-2" type="button"><a
                    class="link-light link-offset-2 link-underline link-underline-opacity-0" 
                    href="{{ route('login') }}">Login</a></button>
            <button class="btn btn-outline-warning me-2" type="button"><a
                    class="link-light link-offset-2 link-underline link-underline-opacity-0"
                    href="{{ route('register') }}">Register</a></button>
        </form>
    </div>
</nav>