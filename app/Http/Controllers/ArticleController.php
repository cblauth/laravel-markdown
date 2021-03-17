<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use GrahamCampbell\Markdown\Facades\Markdown;

class ArticleController extends Controller
{

    public function index()
    {
        //$articles = Article::orderByDesc('updated_at')->where('online', true)->get();
        $articles = Article::orderByDesc('updated_at')->get();
        return view ('cms/list', ['articles' => $articles]);
    }


    public function blog_index()
    {
        //$articles = Article::orderByDesc('updated_at')->where('online', true)->get();
        $articles = Article::orderByDesc('updated_at')->get();  
        return view ('cms/blog_index', ['articles' => $articles]);
    }

    public function create()
    {
        return view ('cms/create');
    }


    public function store(Request $request)
    {   

        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'summary' => 'required'       
        ]);
        //create new Article instance and assign values
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->summary = $request->summary;
        $article->save();      
        //save article  
        return redirect()->route('blog_index');
    }

    public function show($id)
    {
        $id = (int) $id;
        $article = Article::find($id); 
        $article->body = Markdown::convertToHtml($article->body);
        $article->summary = Markdown::convertToHtml($article->summary);
                              
        return view('cms/article', ['article' => $article]);
    }

    public function edit($id)
    {
        //$id = (int) $id;
        $article = Article::find($id);                           
        return view('cms/edit', ['article' => $article]);
    }


    public function update(Request $request, Article $article)
    {   

        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'summary' => 'required'       
        ]);

        $request->id = (int) $request->id;
        $article = Article::find($request->id);   
        $article->title = $request->title;
        $article->body = $request->body;
        $article->summary = $request->summary;
        $article->save();      
        //save article  
        return redirect()->route('blog_index');  
    }

    public function delete($id)
    {
        $article = Article::find($id)->delete(); 
        return redirect()->route('blog_index');  
    }
}
