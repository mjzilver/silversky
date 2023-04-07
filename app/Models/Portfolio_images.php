<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_images extends Model
{
    use HasFactory;

    protected $table = 'portfolio_images';
    public $timestamps = true;
    public function images()
    {
        return $this->morphTo();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'portfolio_id',
    ];
}
