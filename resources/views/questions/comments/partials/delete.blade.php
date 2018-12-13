
{!! Form::open([
    'route' => ['questions.comments.destroy', $object->id, $comment->id],
    'method' => 'delete',
    'class' => 'float-left'
	]) !!}

  &nbsp;<button class="btn btn-danger btn-xs">delete</button>

{!! Form::close() !!}