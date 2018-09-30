<hr>

@if(auth()->check())

@if(session('success'))
	<div class="alert alert-success" role="alert">
		<button class="close" data-dismiss="alert">x</button>
		{{ session('success') }}
	</div>
@endif

@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<form action="{{ route('comment.store') }}" class="form" method="POST">
	@csrf
	<input type="hidden" name="post_id" value="{{ $post->id }}">
	
	<div class="form-group">
		<input type="text" name="title" class="form-control" placeholder="Título">
	</div>

	<div class="form-group">
		<textarea name="body" placeholder="Comentário" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block">Salvar Comentário</button>
	</div>
</form>
@else
	<p>Você precisa está logado para fazer um comentário. <a href="{{ route('login') }}">Clique aqui para realizar login.</a></p>
@endif

<hr>
<h3>Comentários({{ $post->comments->count() }})</h3>

@forelse($post->comments as $comment)
	<p>
		<b>{{ $comment->user->name }} comentou: </b>
		{{ $comment->title }} - {{ $comment->body }}
	</p>

	<hr>
@empty
	<p>Nenhum comentário</p>
@endforelse