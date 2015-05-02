<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $table = 'posts';
    protected $fillable = ['topic', 'user_id', 'text'];



    public function users()
    {
        return $this->belongsToOne('User');
    }
    public function Categories()
    {
        return $this->belongsToMany('Category', 'post_categories');
    }

}
