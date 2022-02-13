<?php

namespace App\Admin\Controllers;

use App\Models\Price;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use App\Models\Topic;

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

        // $grid->column('id', '');
        $grid->column('topic.title', 'トピック タイトル');
        $grid->column('price', '売値');
        $grid->column('rent', '家賃');
        $grid->column('administrative_fee', '管理費・共益費');
        $grid->column('gratuity_fee', '礼金');
        $grid->column('deposit', '敷金');
        $grid->column('other', '補説');
        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('topic.title', 'トピック タイトル');

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

        $form->decimal('price', '売値');
        $form->decimal('rent', '家賃');
        $form->decimal('administrative_fee', '管理費・共益費');
        $form->decimal('gratuity_fee', '礼金');
        $form->decimal('deposit', '敷金');
        $form->textarea('other', '補説');
        $form->select('topic_id', 'トピックのタイトル')->options(function ($id) {
            if ($id) {
                $topic = Topic::find($id);
            } else {
                $topic = Topic::first();
            }
            if ($topic) {
                return [$topic->id => $topic->title];
            }
        })->ajax('/rtadmin/api/topics');

        return $form;
    }
}
