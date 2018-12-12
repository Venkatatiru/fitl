<hr>

<h2>Comments</h2>

<ul class="list-group">
@foreach($object->comments as $comment)
  <li class="list-group-item">
  	<div class="text-muted">
  		<small>{{ $comment->created_at->diffForHumans() }}</small>
  	</div>
   <p>{{ $comment->comment }}</p>
   
   </li>
@endforeach
</ul>