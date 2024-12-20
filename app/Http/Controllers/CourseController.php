<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::orderBy('id', 'desc')
                    ->paginate(10);

        //return view('courses.index', compact('courses'));
    }

    public function create() {
        //return view('courses.create');
    }

    public function store(Request $request) {
        Course::create($request->all());

        //return redirect()->route('courses.index');
    }

    public function show(Course $course) {

        //return view('courses.show', compact('course'));
    }

    public function edit(course $course) {
        //return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course) {
        $course->update($request->all());

        //return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course) {
        $course->delete();

        //return redirect()->route('courses.index');
    }
}
