<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewForApproval extends Model
{
    use HasFactory;

    // Specify the table if the name doesn't match Laravel's naming conventions
    protected $table = 'reviews_need_approval';

    // Specify the fillable fields for mass assignment
    protected $fillable = ['user_id', 'media_id', 'rating', 'review', 'published_on'];
}
