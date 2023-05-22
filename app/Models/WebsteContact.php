<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsteContact extends Model
{
    use HasFactory;
    protected $guarded = [ 'cretaed_at', 'upadated_at'];
}
