<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'hotpeppar',
        'tabelog',
        'google',
        'average',
        'address',
        'tell',
        'time',
        'genre',
        'pay',
        'close',
        'station',
        'budget',
        'parking',
        'image_url1',
        'image_url2',
        'image_url3',
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
