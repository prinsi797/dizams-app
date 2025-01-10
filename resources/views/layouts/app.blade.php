<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar p-3" style="height: 650px;">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" style="color: #1b1e20; font-size:20px; font-weight:700;">Di<span style="color: #ff545a;">zams</span>
                            {{-- <img src="{{ asset('assets/images/favicon.png') }}" alt="Icon"
                                style="width: 90px; height: 30px;"> --}}
                            </a>
                    </li>

                    {{-- @if (Auth::user() && Auth::user()->role === 'admin') --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}" style="color: #1b1e20;">Users</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reviews.index') }}" style="color: #1b1e20;">Reviews</a>
                    </li>
                    {{-- @endif --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" style="color: #1b1e20;"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="pt-3">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
