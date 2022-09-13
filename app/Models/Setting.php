<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'site_name',
        'title',
        'content',
        'image',
        'success_title', 
        'success_content',
        'success_file_content',
        'success_botton_content',
        'home_page_terms',
    ];
}
