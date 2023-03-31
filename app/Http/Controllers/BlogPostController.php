<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = BlogPost::all();
        return view("blog.index", ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogPost = BlogPost::create([
                'title'     => $request->title,
                'body'      => $request->body,
                'user_id'   => 1
        ]);
        return redirect(route('blog.index'))->withSuccess("Post Ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        
        return view('blog.show', ['blogPost' => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title' => $request->title , 
            'body' => $request->body
        ]);
        return redirect(route('blog.index'))->withSuccess("Post Modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect(route('blog.index'))->withSuccess("Post Deleted");
    }

    public function query(){

            //select * from blog_post
            $blog1 = BlogPost::all();
            $blog2 = BlogPost::select()->get();
            $blog3 = BlogPost::select('id', 'title')->get();
            $blog4 = BlogPost::select()->first();
            $blog5 = BlogPost::find(1); // marche juste si la clé primaire est un int
            $blog6 = BlogPost::select()
                        ->where('id', 1)
                        ->first();      // attention retourne multidimentionnel

            $blog7 = BlogPost::select()
                    ->where('user_id', '>', 1)
                    ->orderby('title', 'desc') //orderby ascendant d'office sinon 2emem param asc ou desc
                    ->get();    
                    // parametre du millieu est automatiquement égal a moins d'etre specifié
            $blog8 = BlogPost::select()
                    ->where('id', 1) // pour AND on rajoute simplement un autre where
                    ->where('title', 'patate') // pour OR on ajoute un orwhere
                    ->orwhere('text', 'patate')
                    ->get();  


        // INSERT

            Blogpost::create([]);

            $blog = new BlogPost;
            $blog->title = "Abc";
            $blog->save();

            $bloginated = BlogPost::select()
                    ->paginate(5);
            
    }
    public function page(){
        $blogs = BlogPost::select()
        ->paginate(5);
        return view('blog.page', ['blogs' => $blogs]);
    }




}
