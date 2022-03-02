<?php

namespace App\Admin\Controllers;

use App\Models\InternationalTrade;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(InternationalTrade::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('body', __('Body'));
        $show->field('link', __('Link'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
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
