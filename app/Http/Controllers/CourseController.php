<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::latest()->paginate(10);
        return view('courses.index', compact('courses'));
    }
    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'              => 'required',
            'description'       => 'required',
            'start'             => 'required|before:end',
            'end'               => 'required|after:start',
            'tags'              => 'required',
            'instructor_id'     => 'required|numeric',
        ]);

        Course::create($request->all());
        return redirect('/courses')->with('info', 'New course has been added');
    }

    public function edit(Course $course){
        return view('courses.edit', ['course'=>$course]);
    }

    public function update(Request $request, Course $course){
        $this->validate($request, $this->rules());
        $course->update($request->all());

        return redirect('/courses')->with('info', "Updated Successfully!");
    }

    public function rules(){
        return [
            'name'              => 'required',
            'description'       => 'required',
            'start'             => 'required|before:end',
            'end'               => 'required',
            'tags'              => 'required',
            'instructor_id'     => 'required|numeric'
        ];
    }

    public function delete(Request $request){
        $courseId = $request['course_id'];
        $course = Course::find($courseId);
        $course->delete();
        return  redirect('/courses')->with('info', "The course $course->name has been deleted successfully.");
    }
}
