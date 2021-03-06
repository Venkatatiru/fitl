<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Question;
use App\Language;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        
        $data = array();
        $data['questions'] = $questions;
        $data['languages'] = Language::all();

        return view('questions.index', $data);
    }

    public function search(Request $request)
    {
        $q = $request->q;
        $q_query = '%'.$q.'%';

        $questions = Question::where('title', 'LIKE', $q_query)
                             ->orWhere('description', 'LIKE', $q_query)
                             ->orWhere('code', 'LIKE', $q_query)
                             ->get();
        /*echo '<pre>';
       print_r($questions);
       echo '</pre>';
       exit;*/

        return view('questions.search',
                     ['q' => $q, 'questions' => $questions, 'languages' => Language::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question =  new Question;
        $data = array();
        $data['question'] = $question;
        //lists functions splits the data as
        //<option value="1">JavaScript</option>
        //<option value="2">PHP</option>
        $data['languages'] = Language::lists('name','id');
       
       /*echo '<pre>';
       print_r($data['languages']);
       echo '</pre>';
       exit;*/

        return view('questions.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;

        // Set the question's data from the form data
        $question->title = $request->title;
        $question->description = $request->description;
        $question->code = $request->code;
        

        //create a new question in the database
        if (!$question->save()) {
            $errors = $question->getErrors();
            // Redirect back to the create page
            // and pass along the errors
            return redirect()
               ->action('QuestionController@create')
               ->with('errors',$errors)
               ->withInput();
        }


      $question->languages()->sync($request->language_id);
        //Success
        return redirect()
           ->action('QuestionController@index')
           ->with('message',
                   '<div class="alert alert-success">Question created Successfully!</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();        
        $question = Question::findOrFail($id);
        $data['object'] = $question;
        return view('questions/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $languages = Language::lists('name','id');
        return view('questions.edit', ['question' => $question, 'languages' => $languages]);
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
        $question = Question::findOrFail($id);

        $question->title = $request->title;
        $question->description = $request->description;
        $question->code = $request->code;

        /*echo '<pre>';
       print_r($request->language_id);
       echo '</pre>';
       exit;*/
        $question->languages()->sync($request->language_id);

        if (!$question->save()) {
            $errors = $question->getErrors();
            // Redirect back to the create page
            // and pass along the errors
            return redirect()
               ->action('QuestionController@edit', $question->id)
               ->with('errors',$errors)
               ->withInput();
        }

        //Success
        return redirect()
           ->action('QuestionController@index')
           ->with('message',
                   '<div class="alert alert-success">Question updated Successfully!</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);

        $question->delete();

        return redirect()
             ->action('QuestionController@index')
             ->with('message',
                   '<div class="alert alert-info">The question was deleted!</div>');

    }
}
