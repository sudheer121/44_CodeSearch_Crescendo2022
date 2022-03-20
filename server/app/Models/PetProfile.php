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
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $name
 * @property string|null $image_url
 * @property string|null $description
 * @property int $organization_id
 * @property string|null $address
 * @property string|null $city
 * @property-read \App\Models\Organization $organization
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetProfile whereUpdatedAt($value)
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
