<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    /**
     * Get all of the aditionalNoted for the Note
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aditionalNote()
    {
        return $this->hasMany(AditionalNote::class);
    }
}
