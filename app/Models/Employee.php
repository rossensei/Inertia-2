<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['last_name', 'first_name', 'designation'];


    public function offices() {
        return $this->hasMany('App\Models\Office', 'office_head');
    }
}
