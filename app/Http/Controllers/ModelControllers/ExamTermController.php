<?php

namespace App\Http\Controllers\ModelControllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use DebugBar;

use Carbon\Carbon;
use App\Models\ExamTerm;

class ExamTermController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $exam_terms = ExamTerm::all();
    return view('models.examterms.index', ['exam_terms' =>  $exam_terms]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('models.examterms.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $exam_term = new ExamTerm;
    $exam_term->code = $request->input('code');
    $exam_term->name = $request->input('name');
    $exam_term->description = $request->input('description');
    $exam_term->start_date = Carbon::createFromFormat('Y-m-d', $request->input('start_date'));
    $exam_term->end_date = Carbon::createFromFormat('Y-m-d', $request->input('end_date'));

    if($exam_term->save()){
      return redirect()->route('examterm.index');
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $exam_term = ExamTerm::findOrFail($id);

    return view('models.examterms.edit', ['exam_term' =>  $exam_term]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $exam_term = ExamTerm::findOrFail($id);

    $exam_term->code = $request->input('code');
    $exam_term->name = $request->input('name');
    $exam_term->description = $request->input('description');
    $exam_term->start_date = Carbon::createFromFormat('Y-m-d', $request->input('start_date'));
    $exam_term->end_date = Carbon::createFromFormat('Y-m-d', $request->input('end_date'));

    if($exam_term->save()){
      return redirect()->route('examterm.index');
    }
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $exam_term = ExamTerm::findOrFail($id);
    if($exam_term->delete()){
      $exam_terms = ExamTerm::all();
      return view('models.examterms.index', ['exam_terms' =>  $exam_terms]);
    }
  }
}
