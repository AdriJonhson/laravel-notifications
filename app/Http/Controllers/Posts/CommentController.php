<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Http\Requests\StoreCommentFormRequest;
use App\Notifications\PostCommented;

class CommentController extends Controller
{
	private $comment;

	public function __construct(Comment $comment)
	{
		$this->comment = $comment;
	}

    public function store(StoreCommentFormRequest $request)
    {
    	$comment = $request->user()
			    	->comments()
			    	->create($request->all());

		$author = $comment->post->user;
		$author->notify(new PostCommented($comment));

		return redirect()
					->back()
					->withSuccess('Comentário realizado com sucesso!');
    }
}
