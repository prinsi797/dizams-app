<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 bg-light sidebar p-3" style="height: 650px;">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <img src="{{ asset('assets/images/favicon.png') }}" alt="Icon"
                                style="width: 70px; height: 30px;"></a>
                    </li>

                    @if (Auth::user() && Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reviews.index') }}">Reviews</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Content -->
            <main class="col-md-9">
                <h3>Welcome, {{ Auth::user()->name }}</h3>
            </main>
        </div>
    </div>
</body>

</html>
