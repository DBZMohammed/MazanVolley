<?php

namespace App\Http\Controllers;


use App\models\Category;
use App\models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }



    public function category($title)
    {

        $category = Category::where([
            ['title','=',$title]

        ])->first();

        $categories = Category::all();
        $posts = Post::where([
            ['active','=', true],
            ['draft','=', false],
            ['category_id','=', $category->id]

        ])

        ->orderBy('created_at','DESC')
        ->paginate(9);


        return view('category',[
            'posts' => $posts,
            'title_category' => $category->title,
            'categories' => $categories
        ]);


    }







        public function articles(){

            $categories = Category::all();
            $posts = Post::where([
                ['active','=', true],
                ['draft','=', false]

            ])
            ->orderBy('created_at','DESC')
            ->paginate(9);


            return view('articles',[
                'posts' => $posts,
                'categories' => $categories,
            ]);
        }


    /**
     * Show the application dashboard.
     *
     * //@return \Illuminate\Contracts\Support\Renderable
     */

    public function article($id)
    {

        $post = Post::find($id);
        // $this->middleware('auth');
            //  dump($post->id);
            //  dump($post->title);
            //  dump($post->content);

            // dump($id);

        return view('article',[
            'post' => $post,


            ]);
    }

    public function infos() {
        return view('infos');

    }
}
