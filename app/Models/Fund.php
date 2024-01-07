<?php

namespace App\Models;

use App\Events\FundCreatedEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fund extends Model
{
    use HasFactory;

    protected $fillable = [
        'fund_manager_id',
        'name',
        'start_year',
        'alias',
        'created_at',
        'updated_at',
    ];

    protected $dispatchesEvents = [
        'created' => FundCreatedEvent::class,
    ];

    public function manager(): BelongsTo
    {
        return $this->belongsTo(FundManager::class, 'fund_manager_id');
    }

    public function companies(): BelongsToMany 
    {
        return $this->belongsToMany(Company::class);
    }
}
