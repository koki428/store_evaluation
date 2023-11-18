<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this::with('evaluation')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
    
    protected $fillable = [
        'name',
        'evaluation_id'
    ];
}
