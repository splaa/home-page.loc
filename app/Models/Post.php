<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;
    protected $dateFormat = 'd-M-Y';

    protected $fillable = [
        'title',
        'description'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute(): string
    {
        return Carbon::createFromTimeStamp(strtotime($this->attributes['created_at']) )->format('d M Y');
    }
}
