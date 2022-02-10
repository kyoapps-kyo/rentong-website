<?php

namespace App\Admin\Controllers;

use App\Models\Price;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PricesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Price';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Price());

        $grid->column('id', __('Id'));
        $grid->column('price', __('Price'));
        $grid->column('rent', __('Rent'));
        $grid->column('administrative_fee', __('Administrative fee'));
        $grid->column('gratuity_fee', __('Gratuity fee'));
        $grid->column('deposit', __('Deposit'));
        $grid->column('other', __('Other'));
        $grid->column('topic_id', __('Topic id'));
        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('name', 'name');

        });

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
        $show = new Show(Price::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('price', __('Price'));
        $show->field('rent', __('Rent'));
        $show->field('administrative_fee', __('Administrative fee'));
        $show->field('gratuity_fee', __('Gratuity fee'));
        $show->field('deposit', __('Deposit'));
        $show->field('other', __('Other'));
        $show->field('topic_id', __('Topic id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Price());

        $form->decimal('price', __('Price'));
        $form->decimal('rent', __('Rent'));
        $form->decimal('administrative_fee', __('Administrative fee'));
        $form->decimal('gratuity_fee', __('Gratuity fee'));
        $form->decimal('deposit', __('Deposit'));
        $form->text('other', __('Other'));
        $form->number('topic_id', __('Topic id'));

        return $form;
    }
}
