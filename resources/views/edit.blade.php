<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <title>@yield('title', 'CRUDAPP - Edit')</title>
</head>

<body>

    @include('components.navbar')

    <main class="container bg-primary text-white rounded-pill shadow-intense">
        <div>
            <div>
                <h1 class="text-center header pt-3">Edit a Course</h1>
            </div>

            <div class="d-flex justify-content-center align-items-center mt-5">
                <form action="{{ route('course.update', ['id' => $course->id]) }}" method="POST" class="w-75">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cid">Course ID</label>
                                <input type="text" name="cid" id="cid" value="{{ old('cid', $course->cid) }}"
                                    class="form-control border-0 border-bottom" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="clocation">Course Location</label>
                                <input type="text" name="clocation" id="clocation"
                                value="{{ old('clocation', $course->clocation) }}" class="form-control border-0 border-bottom"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cname">Course Name</label>
                                <input type="text" name="cname" id="cname" value="{{ old('cname', $course->cname) }}"
                                    class="form-control border-0 border-bottom" required>
                            </div>

                            <div class="mb-3">
                                <label for="cfee">Course Fees</label>
                                <input type="text" name="cfee" id="cfee" value="{{ old('cfee', $course->cfee) }}"
                                    class="form-control border-0 border-bottom" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Update Course</button>
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
