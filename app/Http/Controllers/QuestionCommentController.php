<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionCommentController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $questionId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $questionId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $questionId, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *@param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($questionId, $id)
    {
        //
    }
}
