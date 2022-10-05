<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    use HasFactory;
    protected $table = 'pharmacies';
    protected $primaryKey = 'id';
    protected $fillable = ['pharma_name', 'Manager_name', 'phone', 'pharma_email', 'password', 'city', 'domain', 'loc_lat', 'loc_long', 'notes', 'pharma_logo'];
}
