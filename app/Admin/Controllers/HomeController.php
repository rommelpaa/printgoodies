<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Admin\Controllers\Dashboard;
use App\Admin\Facades\Admin;
use App\Admin\Layout\Column;
use App\Admin\Layout\Content;
use App\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Dashboard');
            $content->description('This is to display the chart');

            $content->row(function (Row $row) {

                $row->column(12, function (Column $column) {
                    $column->append(Dashboard::content());
                });
            });
        });
    }
}
