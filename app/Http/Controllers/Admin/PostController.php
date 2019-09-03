<?php

namespace App\Http\Controllers\Admin;

use App\http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactReceived;
use App\models\Post;
use App\models\category;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(10);
        // Mail::to('mohammed.dbiza@gmail.com')->send(new ContactReceived());
        return view('admin.posts.index', [
            'posts' => $posts
            ]);

    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create',[
            'categories' => $categories

        ]);
    }

    public function store(PostRequest $request)
    {
        $postData = $request->validated();

        dump($postData);

        $post = new Post;
        $post->title = $postData['title'];
        $post->content = $postData['content'];
        $post->category_id = $postData['category_id'];
        $post->theme = $postData['theme'];
        if(isset($postData['draft'])) {
            $post->draft = true;
        }else {
                $post->draft = false;
            }

        if(isset($postData['active'])) {
            $post->active = true;
        }else {
                $post->active = false;
            }

        $post->save();

        return redirect()->route('articles');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.posts.edit', [
            'categories' => $categories,
            'post' => $post
        ]);
    }


    public function update(PostRequest $request, $id)
    {
        $postData = $request->validated();

        $post = Post::find($id);
        $post->title = $postData['title'];
        $post->content = $postData['content'];
        $post->category_id = $postData['category_id'];
        $post->theme = $postData['theme'];

        if(isset($postData['draft'])) {
            $post->draft = true;
        }else {
                $post->draft = false;
            }
            if(isset($postData['active'])) {
                $post->active = true;
            }else {
                $post->active = false;
            }

            $post->save();

            $request->session()->flash('status', 'Votre article a bien été modifié');

        return redirect()->route('posts.index');


    }


    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        $post->delete();
        $request->session()->flash('status', 'Votre article a bien été supprimé !');

        return redirect()->route('posts.index');

    }


    public function licences() {
        return view('admin.pages.licences');

    }



    public function uploads() {
        return view('admin.posts.uploads');

    }
}
