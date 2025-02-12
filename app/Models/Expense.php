<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Specify which fields are mass assignable
    protected $fillable = [
        'description',
        'amount',
        'date',
    ];
}
