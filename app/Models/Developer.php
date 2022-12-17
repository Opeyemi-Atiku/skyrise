<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'city', 'province', 'postal_code',
        'website', 'contact_firstname', 'contact_lastname',
        'contact_phone', 'contact_email', 'country', 'unit'
    ];

    
    public function project() {
        return $this->hasMany('App\Models\Project');
    }
}
