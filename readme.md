#Notificações

php artisan make:notification PostCommented

//Vai enviar um email para o dono do post
$author = $comment->post->user;
$author->notify(new PostCommented($comment));

//Implements faz com que os emails entre em queue
class PostCommented extends Notification implements ShouldQueue