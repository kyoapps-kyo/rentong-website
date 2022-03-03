<?php

namespace App\Admin\Controllers;

use App\Models\Topic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Widgets\Table;

class TopicsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'トピック';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Topic);

        $grid->id('ID')->sortable()->width('50');
        $grid->title('タイトル')->width('200');
        $grid->body('内容')->width('1000');
        $grid->column('category.name','種類')->width('90');
        // $grid->column('price.price','金額')->width('90');
        // $grid->column('price.rent','家賃')->width('90');
        $grid->column('金額')->display(function () {
            if($this->category->name == '売買')
                return isset($this->price->price) ?  $this->price->price : '金額なし';
            else
                return isset($this->price->rent) ? $this->price->rent : '金額なし';
        })
        ->expand(function ($model) {

            $price = $model->price()->get()->map(function ($price) {
                return $price->only(['price', 'rent', 'administrative_fee', 'gratuity_fee', 'deposit', 'other']);
            });

            return new Table(['金額', '家賃', '管理費', '礼金', '敷金', '補説'], $price->toArray());
        })
        ->width('90');
        $grid->column('adminUser.name','オーサー')->width('90');
        $grid->column('lastEditAdminUser.name','更新者')->width('90');
        $grid->created_at('作成日時')->width('90')->sortable();
        $grid->updated_at('更新日時')->width('90')->sortable();
        $grid->column('status', '注目')->switch();

        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {

            });
        });
        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('title', 'タイトル');
            $filter->like('adminUser.name', 'オーサー');
            $filter->like('lastEditAdminUser.name', '更新者');
            $filter->equal('category.name','種類')->select(['売買' => '売買', '賃貸' => '賃貸']);
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
        $form = new Form(new Topic());

        $form->text('title', 'タイトル')->required()->rules('min:2|max:24|unique:topics');
        $form->switch('status','注目')->default(false);
        $form->text('postcode','郵便番号')->icon('fa-map-signs')->rules('required|size:7');
            $form->text('prefecture','都道府县')->readonly();
            $form->text('city','市区')->readonly();
            $form->text('suburb','街道')->readonly();
            $form->text('detail_address','详细地址');
        $form->textarea('body', '内容')->required()->rules('min:5|max:240');
        $form->select('category_id','タイプ')->options([ 1 => '売買', 2 => '賃貸'])->when(1, function (Form $form) {
            $form->currency('price.price', '価格')->symbol('￥');
        })->when(2, function (Form $form) {
            $form->currency('price.rent', '家賃')->symbol('￥');
            $form->currency('price.gratuity_fee', '礼金')->symbol('￥');
            $form->currency('price.deposit', '敷金')->symbol('￥');
        })->required();
        $form->currency('price.administrative_fee', '管理費・共益費')->symbol('￥');
        $form->textarea('price.other', '補説')->rules('max:124');
        $form->latlong('latitude', 'longitude', 'Position')->default(['lat' => 34.98455650, 'lng' => 135.75357201207106])->height('500');
        $form->hasMany('imgs', '画作', function (Form\NestedForm $form) {
            $form->image('img')
            ->resize(1980, 1164)
            ->thumbnail('small', 430, 250);
        });
        $form->setWidth(6, 3);
        $form->confirm('ご確認');
        return $form;
    }
}
