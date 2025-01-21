<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    {{-- <div class="container mt-5">
        <h3>Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div> --}}
    <section class="login-content">
        <div class="text-center">
            <h1 class="text-white mb-5">DIZAMS APP</h1>
            @if (session()->has('message'))
                <p class="alert alert-info">{{ session()->get('message') }}</p>
            @endif
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="my-3">
                            <ul class="list-group list-group-flush">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            {{ __('Login') }}
                        </div>
                        <div class="card-body">
                            <form class="login-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                                        type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><br>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input id="password" class="form-control @error('password') is-invalid @enderror"
                                        type="password" name="password" required autocomplete="current-password"
                                        placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><br>
                                <div class="form-group btn-container">
                                    <button class="btn btn-primary btn-block" type="submit"><i
                                            class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('Login') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
