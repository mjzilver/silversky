<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio_Images;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';
    public $timestamps = true;

    public function images()
    {
        return $this->morphMany('App\Models\Portfolio_images', 'portfolio');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'url',
        'description',
    ];

    /**
     * Get the linker to send it to other pages.
     *
     * @return bool
     */
    public function getLinkerAttribute()
    {
        return strtolower(str_replace(' ', '-', $this->attributes['title']));
    }
    
    protected $appends = ['linker'];
}