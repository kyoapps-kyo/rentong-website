<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Admin\Controllers\Data;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('ダッシュボード')
            ->description('システムインフォメーション...')
            ->row(Data::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::extensions());
                // });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::dependencies());
                // });

                $row->column(4, function (Column $column) {
                    $column->append(Data::users());
                });
                $row->column(4, function (Column $column) {
                    $column->append(Data::categories());
                });
            })
            ;
    }
}
