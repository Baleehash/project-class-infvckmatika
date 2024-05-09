<?php

namespace App\Models;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Members extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function projects() 
    {
        return $this->hasMany(Projects::class);
    }
}
