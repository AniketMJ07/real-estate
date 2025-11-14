<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * @var mixed
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $hidden = array('created_at', 'updated_at');

    protected $fillable = ['key', 'value']; // ✅ allow both
}
