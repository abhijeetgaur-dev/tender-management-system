<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorFiles extends Model
{
    use HasFactory;

    protected $fillable = ['vendor_id', 'name', 'file_path'];

    
}
