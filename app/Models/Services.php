<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'url',
        'description',
        'short_description',
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
