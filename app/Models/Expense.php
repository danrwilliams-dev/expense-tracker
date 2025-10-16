<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    use HasFactory;

    // The table name (optional if it follows the plural rule: "expenses")
    protected $table = 'expenses';

    // The fields that can be mass-assigned
    protected $fillable = [
        'name',
        'category',
        'amount_in_pence',
        'date',
    ];
    
    // Optionally cast certain columns to specific types
    protected $casts = [
        'date' => 'date',
    ];
    
    // relationships
    public function user() {
        return $this->
        belongsTo(User::class, 'user_id', 'id');
    }

}