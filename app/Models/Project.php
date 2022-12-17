<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type_id', 'address', 'city', 'featured', 'province', 'price', 'images', 'videos','feature_sheet',
         'condos', 'commercial', 'townhouse', 'floor_size', 'levels', 'maintenance_fees', 'developer_id',
        'architect', 'CD', 'project_website', 'contact_firstname', 'contact_lastname',
        'contact_phone', 'contact_email', 'zone', 'completion', 'amenities', 'description', 'floors', 'lot', 'f_d',
        'bedrooms', 'bathrooms', 'status', 'list_by', 'mls', 'country', 'lat', 'lng', 'banner'
    ];

    protected $casts = [
        'floors' => 'array',
        'banner' => 'array',
        'documents' => 'array',
        'promotions' => 'array',
        'amenities' => 'array',
        'images' => 'array',
        'videos' => 'array',
        'feature_sheet' => 'array',
        'featured' => 'integer',
        'condos' => 'integer',
        'commercial' => 'integer',
        'townhouse' => 'integer',
        'type_id' => 'integer',
        'developer_id' => 'integer',
    ];
    public function types() {
        return $this->belongsTo('App\Models\Type');
    }

    public function developer() {
        return $this->belongsTo('App\Models\Developer');
    }

    
}
