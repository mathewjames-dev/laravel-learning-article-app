<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 18/11/2015
 * Time: 12:50
 */

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $tags = \App\Tag::lists('name', 'id');
        //This gets the model tag into an object and then will list all the tags by just there name.

        return view('artcreate', compact('tags'));
    }

    public function store(ArticleRequest $request)
    {
        //This function gets the request from the CreateArticleRequest which has some rules for the
        //actual creation of an article. It will create a new article from the request and put it into the variable
        //article.
        //$user = User::isLoggedIn();
        $user = Auth::user();

        $article = new Article($request->all()); //doesn't have user id set but laravel will do it auto behind scences
        //as we referenced it in the way below
        $article->user_id = $user->id;
        //Need to give the article the user id before we save

        $article->save();

//        Article::create($request->all());
//        return redirect('articles');

        $article->tags()->attach($request->input('tag_list'));
        //This will get the article and attatch the tags from the input when we create an article

        //Then it will get the authenticated users articles then save a new one.
        Auth::user()->articles()->save($article);


        session()->flash('flash_message', 'Your article has been created!');

        return redirect('articles');
        //->with([ 'flash_message' => 'Your article has been created!', 'flash_message_important' => true]);
        //This is another way to do a flash message
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        $tags = Tag::lists('name', 'id');

        return view('artedit', compact('article', 'userid', 'user', 'tags'));

//We do find or fail so if it doesnt find an article with the id you want then it will give an error page.

    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        $article->tags()->sync($request->input('tag_list'));

        //Attach is attaching something for example adding tags
        //detach is detaching which could be used in removing tags
        //sync is when you want to sync everything up example adding and removing at same time.
        //the line of code above will get the input from the tag_list part of the form

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