<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index() {
        $learners = learner::Latest()->paginate(10);
        return view('learners.index', ['learners'=>$learners]);
    }
    public function create() {
        return view('learners.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'level' => 'required',
            'status' => 'required',
        ]);

        Learner::create([
            'user_id' => $request['user_id'],
            'level' => $request['level'],
            'status' => $request['status'],
        ]);


        return redirect('/learners')->with('info', 'New learner has been added.');
    }
    public function edit($id) {
        $learner = Learner::find($id);

        return view('learners.edit', ['learner'=>$learner]);
    }

    public function update(Request $request, $id) {
        $learner = Learner::find($id);

        $learner->update($request->all());

        return redirect('/learners')->with('info', "The record of $learner->user_id $learner->levels has been updated. ");
    }

    public function delete(Request $request){
        $learnerId = $request['learner_id'];
        $learner = learner::find($learnerId);
        $name = $learner->user->fname . " " . $learner->user->lname;
        $learner->delete();
        return  redirect('/learners')->with('info', "The record of $name has been deleted successfully.");
    }



}
