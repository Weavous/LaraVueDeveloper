<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Hobby;
use App\Models\Tool;
use App\Models\DeveloperHobby;
use App\Models\DeveloperTool;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sex', 'birthdate', 'hobby_id'];

    public function hobbies(): BelongsToMany
    {
        return $this->belongsToMany(Hobby::class, DeveloperHobby::class);
    }

    public function tools(): BelongsToMany
    {
        return $this->BelongsToMany(Tool::class, DeveloperTool::class);
    }
}
