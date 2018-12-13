
{!!Form::model($comment,
     ['route' => ['questions.comments.update', $object->id, $comment->id],
       'method' => 'put',
       'class' => 'd-none edit-object-form'
     ])!!}

@include('questions.comments.partials.comment_form')

<button type="submit" class="btn btn-info">Update the Comment</button>

{!!Form::close() !!}