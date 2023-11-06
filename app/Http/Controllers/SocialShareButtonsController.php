<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialShareButtonsController extends Controller
{
    public ?string $metaTitle = null;
    public ?string $metaDescription = null;

    public function __construct(?string $metaTitle = null, ?string $metaDescription = null)
    {
        $this->metaTitle = $metaTitle ?? "agro-insight-blog";
        $this->metaDescription = $metaDescription ?? "agro-insight-blog";
    }
    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            url('/blog'),
            'text'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('blog')
            ->with('metaTitle', $this->metaTitle)
            ->with('metaDescription', $this->metaDescription)
            ->with('shareComponent');
    }
}
