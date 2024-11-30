<?php

namespace App\Services;

use App\Models\URL;
use Exception;

class URLService
{
    public function getAllURL($searchQuery, $paginateBy = 10,)
    {
        return URL::withTrashed()->select('id', 'original_url', 'short_code', 'expires_at', 'deleted_at')
            ->when(isset($searchQuery), function ($query) use ($searchQuery) {
                $query->where('short_code', 'like', '%' . $searchQuery . '%');
            })
            ->latest()
            ->paginate($paginateBy);
    }
    public function findOrFailByShortCode($shortCode)
    {
        return URL::withTrashed()->where('short_code', $shortCode)->first();
    }
    public function createURL($validatedData)
    {
        return URL::create($validatedData)->fresh();
    }
    public function checkURLExpires($urlId)
    {
        return URL::where('id', $urlId)->where('expires_at', '<=', now())->exists();
    }
    public function deleteByShortCode($shortCode)
    {
        return URL::where('short_code', $shortCode)->delete();
    }
}
