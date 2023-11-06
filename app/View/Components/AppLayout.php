<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class AppLayout extends Component
{
    public function __construct(?string $metaTitle = null, ?string $metaDescription = null)
    {
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
    }


    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View

    {
        $metaTitle = "agro-insight-blog";
        $metaDescription="agro-insight-blog";

        return view('layouts.app')
        ->with('metaTitle')
        ->with('metaDescription');
    }
}
