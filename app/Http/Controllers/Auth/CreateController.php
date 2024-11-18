<?php
namespace App\Http\Controllers\Auth;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    public function showForm()
    {
        return view('create');
    }

    public function home()
    {
        $courses = Course::paginate(5);
        return view('home', compact('courses'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cid' => ['required', 'string', 'max:255', 'unique:course'],
            'cname' => ['required', 'string', 'max:255'],
            'clocation' => ['required', 'string', 'max:255'],
            'cfee' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('create')->withErrors($validator)->withInput();
        }

        Course::create([
            'cid' => $request->cid,
            'cname' => $request->cname,
            'clocation' => $request->clocation,
            'cfee' => $request->cfee,
        ]);
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->delete();
        }
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cname' => 'required|string|max:255',
            'clocation' => 'required|string|max:255',
            'cfee' => 'required|string|max:255',
        ]);

        $course = Course::findOrFail($id);
        $course->update($validated);
        return redirect()->route('home')->with('success', 'Course updated successfully');
    }
}
