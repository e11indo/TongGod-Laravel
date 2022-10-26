<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class contact extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'contact';
    protected $fillable = ['title','content','username','password'];

    public function searchableAs()
    {
        return 'contact';
    }
}
