<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'office_head', 'building'];

    public function items() {
        return $this->hasMany('App\Models\Item');
    }

    public function employee() {
        return $this->belongsTo('App\Models\Employee', 'office_head');
    }
}
