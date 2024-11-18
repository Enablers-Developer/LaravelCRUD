<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .cursorPointer {
            cursor: pointer;
        }

        .shadow-intense {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 6px 12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <nav class="shadow-intense">
        <div class="d-flex justify-content-between align-items-center px-5 text-white py-4 bg-dark">
            <div>
                <a href="/">
                    <img src={{ asset('assets/enablers-logo-with-slogan-new.webp') }} alt="Enablers logo"
                        class="img-fluid" style="filter: invert(1) brightness(1000%) saturate(0) contrast(1000%);">
                </a>
            </div>

            <div>
                <h1 style="font-weight: 800;">
                    CRUD APPLICATION
                </h1>
            </div>

            <div class="d-flex">
                @if (auth()->check())
                    @if (Route::currentRouteName() == 'home')
                        <a href="{{ route('create') }}" class="text-decoration-none text-white">
                            <h5 class="cursorPointer btn btn-success mx-3" style="font-weight: 700;">
                                Create
                            </h5>
                        </a>
                    @else
                        <a href="{{ route('home') }}" class="text-decoration-none text-white">
                            <h5 class="cursorPointer btn btn-success mx-3" style="font-weight: 700;">
                                Home
                            </h5>
                        </a>
                    @endif
                    <a href="{{ route('logout') }}" class="text-decoration-none text-white">
                        <h5 class="cursorPointer btn btn-danger" style="font-weight: 700;">
                            Logout
                        </h5>
                    </a>
                @else
                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <h5 class="cursorPointer btn btn-success text-white" style="font-weight: 700;">
                            Home
                        </h5>
                    </a>

                    <a href="{{ route('login') }}" class="text-decoration-none">
                        <h5 class="mx-3 cursorPointer btn btn-primary text-white" style="font-weight: 700;">
                            Login
                        </h5>
                    </a>

                    <a href="{{ route('signup') }}" class="text-decoration-none">
                        <h5 class="cursorPointer btn btn-warning text-white" style="font-weight: 700;">
                            Signup
                        </h5>
                    </a>
                @endif
            </div>
        </div>
    </nav>
</body>

</html>
