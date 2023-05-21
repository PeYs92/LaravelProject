<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleModel extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'FirstName',
        'LastName',
        'Gender',
        'PhoneNumber',
        'Street',
        'City',
        'Country',
    ];

    public $timestamps = true;
    use HasFactory;
}
