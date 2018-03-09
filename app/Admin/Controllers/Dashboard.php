<?php

namespace App\Admin\Controllers;

use App\Admin\Admin;

class Dashboard
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function title()
    {
        return view('admin.dashboard.title');
    }
    
    public static function content()
    {
        $page = array(
                    'panel' =>array(
                        'title' => '<i class="fa fa-chart-line"></i>Activity'
                    ),
                );

        return view('admin.dashboard.content', $page);
    }
}
