<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes, HasTimestamps;

    protected $fillable = [
        'address',
        'address2',
        'suburb',
        'city',
        'region',
        'postcode',
        'latitude',
        'longitude',
        'phone_landline',
        'phone_mobile',
    ];

    protected $hidden = [
        'contactable_id',
        'contactable_type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function contactable()
    {
        return $this->morphTo();
    }
}
