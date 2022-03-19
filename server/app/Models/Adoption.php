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
