<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    use SoftDeletes;

    protected $guarded = [];

    public $translatedAttributes = ['name'];

    protected $with = ['translations'];

    public function job()
    {
        return $this->hasMany(Job::class, 'experience_id');
    }
}