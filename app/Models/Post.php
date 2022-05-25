<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Populate Data.
     *
     * @param  array  $data
     * @return $this
     */
    public function populate(Array $data){
        $this->fill($data);
        $this->user_id =  Auth::user()->id;
        return $this;
    }

    /**
     * Craete Post.
     *
     * @param  array  $data
     * @return $this
     */
    public function createPost(Array $data){
        $this->populate($data)->save();
        return $this;
    }
}
