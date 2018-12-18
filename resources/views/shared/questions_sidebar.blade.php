<div class="col-sm-3 float-right">
	
	<h3>Languages</h3>

	<div class="list-group">
		@foreach ($languages as $language)
		   <a href="{{ route('languages.show', [$language->id])}}" class="list-group-item">
			   {{$language->name}}
		   </a>
		@endforeach
		</div>

</div> <!-- /.col-sm-3 -->