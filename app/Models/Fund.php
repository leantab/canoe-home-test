<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fund extends Model
{
    use HasFactory;

    public function manager(): BelongsTo
    {
        return $this->belongsTo(FundManager::class, 'fund_manager_id');
    }

    public function companies(): BelongsToMany 
    {
        return $this->belongsToMany(Company::class);
    }
}
