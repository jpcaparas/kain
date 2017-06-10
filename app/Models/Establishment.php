<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Establishment extends Model
{
    use SoftDeletes, HasTimestamps;

    protected $fillable = [
        'name',
        'address',
        'address2',
        'suburb',
        'postcode',
        'city',
        'phone',
    ];

    /**
     * @return MorphOne
     */
    public function contact()
    {
        return $this->morphOne(Contact::class, 'contactable');
    }
}
