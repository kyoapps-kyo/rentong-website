<?php

namespace App\Admin\Controllers;

use App\Models\InternationalTrade;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class InternationalTradesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'InternationalTrade';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new InternationalTrade());

        $grid->column('id', __('Id'));
        $grid->column('title', __('タイトル'));
        $grid->column('body', '内容');
        $grid->column('link', 'ビデオ リンク');

        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new InternationalTrade());

        $form->text('title', 'タイトル');
        $form->text('body', '内容');
        $form->url('link', 'ビデオ リンク');

        return $form;
    }
}
