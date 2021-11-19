<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Partners
 *
 * @property int $id
 * @property string $name
 * @property string $inn
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Partners newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partners newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partners query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partners whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partners whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partners whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partners whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partners whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Partners extends Model
{
    use HasFactory;
}
