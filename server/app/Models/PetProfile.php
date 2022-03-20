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
        'address',
        'city'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
