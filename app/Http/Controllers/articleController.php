<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 18/11/2015
 * Time: 12:50
 */

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {
        $articles = Article::latest()->published()->get();

        //The above code gets all the latest articles that are published only. The ->published() is a scope
        //That lies inside the Article.php file.

        return view('article', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        //This code is for when you want to show a article. It will get the variable/s inside of $article
        // and then it will also output/find each id of each article as well.

        return view('artshow', compact('article'));
    }

    public function create()
    {
//        if (Auth::guest()){
//            redirect('/login');
//        }
        return view('artcreate');
    }

    public function store(ArticleRequest $request)
    {
        //This function gets the request from the CreateArticleRequest which has some rules for the
        //actual creation of an article. It will create a new article from the request and put it into the variable
        //article.

        $article = new Article($request->all()); //doesn't have user id set but laravel will do it auto behind scences
        //as we referenced it in the way below

//        Article::create($request->all());
//        return redirect('articles');

        Auth::user()->articles()->save($article); //Then it will get the authenticated users articles then save a new one.

        return redirect('articles');
    }

    public function edit(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $user = Auth::user();
        $user->id = $request->get('id');

        if ($id == $user->id)
        {
            return view('artedit', compact('article'));
        }

//We do find or fail so if it doesnt find an article with the id you want then it will give an error page.

        return view('home');
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        //here is the update method for the update form for an article. We have to first pass the article we want
        //to update and then we have to use the values from the form to use the article in the code and then
        //we pass the request i made for the other form as that request is relevant

        return redirect('articles');
    }

    public function destroy($id)
    {
        //this function destroys an article
        $article = Article::findOrFail($id)->delete();

        return redirect('articles');
    }
}