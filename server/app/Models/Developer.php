<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Hobby;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = ["name", "sex", "birthdate", "hobby_id"];

    public function hobby(): BelongsTo
    {
        return $this->belongsTo(Hobby::class);
    }
}
