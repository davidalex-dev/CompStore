<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <a class="navbar-brand">CompStore</a>

            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('sparepart.index') }}">Spare Parts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('computer.index') }}">Computers</a>
            </li>
        </ul>
    </div>

</nav>