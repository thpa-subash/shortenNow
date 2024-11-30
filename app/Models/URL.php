<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function PHPUnit\Framework\isNull;

class URL extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $table = 'urls';
    protected $fillable = ['original_url', 'short_code', 'expires_at', 'no_of_clicks'];
    protected $casts = ['expires_at' => 'datetime'];

    public function getExpiresAtAttribute($value)
    {
        return !is_null($value) ? Carbon::parse($value)->diffForHumans() : '-';
    }
}
