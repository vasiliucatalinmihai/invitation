<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $fullname
 * @property string $hash
 * @property string $message
 * @property bool $accepted
 * @property int $guests
 * @property int $infants
 * @property int $infants_age
 * @property bool $vegan
 * @property string $food_restriction
 * @property bool $after_party
 */
class Invitation extends Model
{
    use HasFactory;
}
