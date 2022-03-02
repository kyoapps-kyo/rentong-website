<?php

namespace App\Admin\Controllers;

use App\Models\HistoryImg;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HistoryImgsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HistoryImg';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HistoryImg());
        $grid->column('year', '年');
        $grid->column('title', 'タイトル');
        $grid->column('body', '内容');
        $grid->column('imgs')->image();
        return $grid;
    }
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HistoryImg());

        $form->text('title', 'タイトル');
        $form->textarea('body', '内容');
        $form->date('year', '時間')->format('YYYY');
        $form->multipleImage('imgs', 'イメージ')->resize('500',null, function ($constraint) {
            $constraint->aspectRatio();
        })->removable();

        return $form;
    }
}
