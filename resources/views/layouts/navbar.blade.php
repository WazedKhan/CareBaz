<nav class="navbar navbar-light bg-gray-light navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbar_main">
            <ul class="navbar-nav">
                @foreach ($cate as $item)
                <li class="nav-item">
                    <a class="nav-link ps-0" href="#"> {{ $item->name }} </a>
                </li>
                @endforeach
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">
                        Others
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="#">Submenu one </a> </li>
                        <li> <a class="dropdown-item" href="#">Submenu two</a> </li>
                        <li> <a class="dropdown-item" href="#">Submenu three</a> </li>
                    </ul>
                </li>
            </ul>
        </div> <!-- collapse end.// -->
    </div> <!-- container end.// -->
</nav> <!-- navbar end.// -->