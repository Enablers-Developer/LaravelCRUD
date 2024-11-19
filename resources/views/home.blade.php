<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <title>@yield('title', 'CRUDAPP - Home')</title>
</head>


<body>
    {{-- Including the navbar --}}
    @include('components.navbar')

    <header class="header container d-flex">
        <div class="row">
            <img src={{ asset('assets/download-3.jpg') }} alt="Freelancer Image">
        </div>
        <div class="row">
            <h1 class="mx-5" style="font-size: 45px;">
                <span class="bg-warning text-white p-1 bgColor">PAKISTAN'S</span>
                <span style="font-size: 45px;" class="font-900">LARGEST SKILLED BASED GROUP</span>
            </h1>
            <p class="mx-5" style="font-size: 35px;"><span class="bgColor">E-COMMERCE</span> ECOSYSTEM FOR <br>
                CO-WORKING SPACES
            </p>
        </div>
    </header>

    <main class="container">
        <div class="row">
            <div class="mt-5 mb-3 d-flex justify-content-center align-items-center col-md-12">
                <h1 class="text-center" style="font-weight: 800;">
                    <u>COURSES YOU CAN ENROLL IN</u>
                </h1>
            </div>
            <div class="d-flex justify-content-center align-items-center container mt-5 mb-5">
                <table class="table table-bordered tableBorder">
                    <thead>
                        <tr class="text-center">
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Course Location</th>
                            <th>Course Fees</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr class="text-center">
                                <td class="align-middle">{{ $course->cid }}</td>
                                <td class="align-middle">{{ $course->cname }}</td>
                                <td class="align-middle">{{ $course->clocation }}</td>
                                <td class="align-middle">Rs {{ $course->cfee }}</td>
                                <td class="align-middle">
                                    @if (auth()->check())
                                        <div class="d-flex justify-content-center">
                                            <div class="mx-3">
                                                <a href={{ route('course.edit', ['id' => $course->id]) }}>
                                                    <button class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </a>
                                            </div>
                                            <div>
                                                <form action="{{ route('course.delete', ['id' => $course->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    @else
                                        <div>
                                            <button class="btn btn-primary">Enroll</button>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-5">
            {{ $courses->links('pagination::bootstrap-5') }}
        </div>
        <div class="mb-5 d-flex justify-content-center">
            <h4 class="mx-4 bg-dark text-white p-4 rounded-pill">Total Courses: {{ $courses->total() }}</h4><br>
            <h4 class="bg-dark text-white p-4 rounded-pill">Current Page No. {{ $courses->currentPage() }}</h4>
        </div>
    </main>
    {{-- Including the footer --}}
    {{-- @include('components.footer') --}}
    @include('includes.scripts')
</body>
</html>