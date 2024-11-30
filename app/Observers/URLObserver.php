<?php

namespace App\Observers;

use App\Models\URL;

class URLObserver
{
    public function creating(URL $url): void
    {
        $url->short_code = $this->getShortCode();
    }
    public function getShortCode($length = 5)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        do {
            $shortCode = substr(str_shuffle($characters), 0, $length);
        } while (URL::where('short_code', $shortCode)->exists());
        return $shortCode;
    }
}
