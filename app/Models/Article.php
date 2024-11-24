<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'images',
        'title',
        'content',
    ];

    /**
     * @return \App\Models\User
     */
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
