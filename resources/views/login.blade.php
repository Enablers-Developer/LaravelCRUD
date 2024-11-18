<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

    <title>@yield('title', 'CRUDAPP - Login')</title>
</head>

<body>
    @include('components.navbar')
    <main class="container bg-primary text-white rounded-pill shadow-intense">
        <div>
            <div>
                <h1 class="text-center mt-5 pt-3">User Login</h1>
            </div>

            <div class="d-flex justify-content-center align-items-center mt-5">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control border-0 border-bottom" name="email"
                                id="email" placeholder="Enter you email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control border-0 border-bottom" name="password"
                                id="password" placeholder="Enter your password" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </main>
    @include('includes.scripts')
</body>

</html>
