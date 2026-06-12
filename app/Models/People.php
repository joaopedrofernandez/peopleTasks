<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    
    protected $table = 'people';
    protected $fillable = ['name', 'email', 'created_at', 'updated_at'];

    public function tasks()
    {
        // belongsToMany traducao -> pertence a muitos
        return $this->belongsToMany(Tasks::class);
    }
}