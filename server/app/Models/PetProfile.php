<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PetProfile
 *
 * @method static \Database\Factories\PetProfileFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile query()
 * @mixin \Eloquent
 */
class PetProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image_url',
        'description',
        'organization_id',
        'city'
    ];

    public function organization()
    {
        $this->belongsTo(Organization::class);
    }

    public function posts()
    {
        $this->hasMany(Post::class);
    }
}
