<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        $menuItems = [
            [
                'title' => 'Dashboard',
                'icon' => 'tachometer-alt',
                'route' => '#',
                'submenu' => []
            ],
            [
                'title' => 'Profile',
                'icon' => 'user',
                'route' => '#',
                'submenu' => [
                    [
                        'title' => 'View Profile',
                        'icon' => 'eye',
                        'route' => '#'
                    ],
                    [
                        'title' => 'Edit Profile',
                        'icon' => 'edit',
                        'route' => '#'
                    ]
                ]
            ],
            [
                'title' => 'Settings',
                'icon' => 'cog',
                'route' => '#',
                'submenu' => [
                    [
                        'title' => 'Account Settings',
                        'icon' => 'user-cog',
                        'route' => '#'
                    ],
                    [
                        'title' => 'Privacy Settings',
                        'icon' => 'shield-alt',
                        'route' => '#'
                    ]
                ]
            ],
            [
                'title' => 'Messages',
                'icon' => 'envelope',
                'route' => '#',
                'submenu' => []
            ],
            [
                'title' => 'Notifications',
                'icon' => 'bell',
                'route' => '#',
                'submenu' => []
            ],
            [
                'title' => 'Orders',
                'icon' => 'shopping-cart',
                'route' => '#',
                'submenu' => []
            ]
        ];

        return view('dashboard.user.index', compact('menuItems'));
    }
}
