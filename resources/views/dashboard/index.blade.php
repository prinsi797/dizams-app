<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dizams - App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar p-3" style="height: 650px;">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}"
                            style="color: #1b1e20; font-size:20px; font-weight:700;">Di<span
                                style="color: #ff545a;">zams</span>
                            {{-- <img src="{{ asset('assets/images/favicon.png') }}" alt="Icon"
                                style="width: 90px; height: 30px;"> --}}
                        </a>
                    </li>

                    @if (Auth::user() && Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}" style="color: #1b1e20;">Users</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reviews.index') }}" style="color: #1b1e20;">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('articles.index') }}"
                                style="color: #1b1e20;">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('resumes.index') }}" style="color: #1b1e20;">Resumes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('packages.index') }}" style="color: #1b1e20;">Price
                                Edit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('settings.index') }}" style="color: #1b1e20;">Setting
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reviews.index') }}" style="color: #1b1e20;">Reviews</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" style="color: #1b1e20;"
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
