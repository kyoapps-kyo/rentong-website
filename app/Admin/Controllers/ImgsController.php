<?php

namespace App\Admin\Controllers;

use App\Models\Img;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Illuminate\Http\Request;
use App\Models\Topic;

class ImgsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Img';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Img());

        // $grid->column('id', __('Id'));
        $grid->column('topic.title', 'トピック タイトル');
        $grid->column('img', 'イメージ')->image();
        $grid->column('type', 'タイプ')->filter();
        $grid->filter(function ($filter) {
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('topic.title', 'トピック タイトル');
        });
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });
        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Img());

        $form->image('img', 'イメージ')->crop(1700, 1000)
        ->thumbnail('small', 430, 250)
        ;
        $form->select('type', 'タイプ')->options(['normal' => 'normal', 'big_img' => 'big_img']);
        // $form->select('topic_id', 'トピックのタイトル')->options('/api/topics');
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

    public function topics(Request $request)
    {
        $q = $request->get('q');
        return Topic::where('title', 'like', "%$q%")->paginate(null, ['id', 'title as text']);
    }
}
