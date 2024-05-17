<?php

namespace App\Models;

use App\Models\User;
use App\Enums\TickerPriorityEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'priority' => TickerPriorityEnum::class,
        ];
    }
}
