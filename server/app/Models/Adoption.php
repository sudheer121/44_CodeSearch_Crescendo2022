<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Adoption
 *
 * @method static \Database\Factories\AdoptionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Adoption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adoption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Adoption query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Adoption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adoption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adoption whereUpdatedAt($value)
 */
class Adoption extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

    ];
}
