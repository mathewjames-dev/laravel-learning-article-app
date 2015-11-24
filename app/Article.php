<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Tag;

class Article extends Model
{
    //This is the things that the user needs to input. They are protected as we dont want anyone else changing
    //Anyone elses inputs
    protected $fillable = [
        'title',
        'body',
        'published_at',
    ];

    protected $dates = ['published_at']; //$article->published_at->format('Y-m');

    public function scopePublished($query) // Article::published()
    {
        //This is the creation of that scope we named published. Simple scope that will query all the published
        //at fields of all the articles and only return the ones that are equal to or less than the current time
        $query->where('published_at', '<=', Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        //The commented code is the code we could use to use as the date for the publish at
        //But the carbon parse will set any published at time for any article which will be published in the
        //future to be publised at midnight.
        //this is also called a mutator
        //$this->attributes['published_at'] = Caron::createFromFormat('Y-m-d', $date);
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * An article is owned by a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    //$article->writer to have it show the article creator as Writer and not user then i can use that code
    //but will have to rename the function below to writer.
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the tags associated with the given article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the current article.
     *
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }
}
