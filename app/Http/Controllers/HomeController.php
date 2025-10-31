<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'features' => [
                [
                    'id' => 1,
                    'title' => 'Lightning Fast',
                    'description' => 'Optimized performance with Vue 3 and modern build tools',
                    'icon' => 'lightning'
                ],
                [
                    'id' => 2,
                    'title' => 'User Focused',
                    'description' => 'Intuitive design that puts user experience first',
                    'icon' => 'heart'
                ],
                [
                    'id' => 3,
                    'title' => 'Secure',
                    'description' => 'Built with security best practices and modern authentication',
                    'icon' => 'shield'
                ]
            ],
            'stats' => [
                ['label' => 'Uptime', 'value' => '99.9%'],
                ['label' => 'Happy Users', 'value' => '10k+'],
                ['label' => 'Support', 'value' => '24/7']
            ]
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function features()
    {
        return Inertia::render('Features');
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }
    public function allApp(){
        return Inertia::render('ExpenseTrack');
    }
}