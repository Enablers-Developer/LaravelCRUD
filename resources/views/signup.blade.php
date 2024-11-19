<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <title>@yield('title', 'CRUDAPP - Signup')</title>
</head>

<body>
    @include('components.navbar')


    <main class="container bg-primary text-white rounded-pill shadow-intense">
        <div>
            <div>
                <h1 class="text-center mt-4 pt-3">User SignUp</h1>
            </div>

            <div>
                <h6 class="text-center"><span class="text-danger">*</span> Required Fields.</h6>
            </div>

            <div class="d-flex justify-content-center align-items-center mt-5">
                <form action="{{ route('signup') }}" method="POST" class="w-75">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fname">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="fname" id="fname"
                                    placeholder="Enter your first name *" class="form-control border-0 border-bottom"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" placeholder="Enter your email *"
                                    class="form-control border-0 border-bottom" required>
                            </div>

                            <div class="mb-3">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password"
                                    placeholder="Enter your password *" class="form-control border-0 border-bottom"
                                    required>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="lname">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="lname" id="lname" placeholder="Enter your last name *"
                                    class="form-control border-0 border-bottom" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone">Phone No. <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone"
                                    placeholder="Enter your phone number *" class="form-control border-0 border-bottom"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Re-Enter your password *" class="form-control border-0 border-bottom"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 d-flex align-items-center">
                            <input type="checkbox" name="checkbox" id="checkbox" required>
                            <label for="checkbox" class="ms-2">I agree to the <a href="#">terms and conditions</a></label>
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
