
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-com</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ url('/admin/bootstrap.css') }}">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-black" id="sidebar-wrapper">
                <a href="{{ route('home') }}">
                    <div class="sidebar-heading border-bottom bg-light text-white bg-dark">Shop Name</div>
                </a>
                <div class="list-group list-group-flush">
                    <a class="nav-link dropdown-toggle list-group-item list-group-item-action list-group-item-light p-3 text-white bg-dark" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Orders</strong></a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <form action="{{ route('orders') }}" method="get">
                                            <input type="text" name="key" value="1" hidden>
                                            <button class="btn badge-info btn-block" type="submit">All</button>
                                        </form>
                                        <form action="{{ route('orders') }}" method="get">
                                            <input type="text" name="key" value="Pending" hidden>
                                            <button class="btn badge-info btn-block" type="submit">Pending</button>
                                        </form>
                                        <form action="{{ route('orders') }}" method="get">
                                            <input type="text" name="key" value="Canceled" hidden>
                                            <button class="btn badge-info btn-block" type="submit">Canceled</button>
                                        </form>
                                        <form action="{{ route('orders') }}" method="get">
                                            <input type="text" name="key" value="Confimed" hidden>
                                            <button class="btn badge-info btn-block" type="submit">Confimed</button>
                                        </form>
                                    </div>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-white bg-dark" href="{{ route('index') }}">
                        <strong>Dashboard</strong>
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-white bg-dark " href="{{ route('category') }}">
                        <strong>Category</strong>
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-white bg-dark" href="{{ route('admin.product') }}">
                        <strong>Products</strong>
                    </a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-white bg-dark" href="{{ route('contact.info') }}">
                        <strong>Messages</strong>
                    </a>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-secondary border-bottom">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">

                    @yield('content')
                    
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
