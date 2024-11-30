<?php

namespace App\Livewire;

use App\Models\URL;
use App\Services\URLService;
use Livewire\Component;
use Livewire\WithPagination;

class ShortUrlTable extends Component
{
    use WithPagination;
    public $search = '';

    public function delete(URLService $urlService, $short_code)
    {
        return $urlService->deleteByShortCode($short_code);
    }
    public function render(URLService $urlService)
    {
        return view('livewire.short-url-table', [
            'shortUrls' => $urlService->getAllURL($this->search)
        ]);
    }
}
