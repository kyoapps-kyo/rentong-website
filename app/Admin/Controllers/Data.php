<?php

namespace App\Admin\Controllers;

use Encore\Admin\Admin;
use Illuminate\Support\Arr;
use App\Models\AdminUser;
use App\Models\Category;

class Data
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function title()
    {
        return view('admin.data.title');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function users()
    {
        $users = AdminUser::all();
        $count = count($users);
        $data = [
            ['name' => 'システム利用者数',       'value' => $count]
        ];

        return view('admin.data.users', compact('data'));
    }

    public static function categories()
    {
        $categories = Category::all();
        $sell_count = $categories[0]->post_count;
        $rent_count = $categories[1]->post_count;
        $data = [
            ['name' => $categories[0]->name,  'value' => $sell_count],
            ['name' => $categories[1]->name,  'value' => $rent_count]
        ];

        return view('admin.data.categories', compact('data'));
    }


}
