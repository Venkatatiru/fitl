{!! Form::open(
	[
	  'action' => 'QuestionController@search',
	  'method' => 'get',
	  'class'  => 'form navbar-form navbar-right searchform'
	]

)!!}

   <div class="input-group">
   	  {!!Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Search for...'])!!}
   	  <span>
   	  	  <button class="btn btn-default" type="submit">Go!</button>
   	  </span>
   </div><!-- /.input-group -->

{!! Form::close() !!}