<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';
    protected $fillable = ['name'];


    public function users()
    {
        return $this->belongsToMany('User', 'user_categories');
    }
    public function posts()
    {
        return $this->belongsToMany('Post', 'post_categories');
    }
}
