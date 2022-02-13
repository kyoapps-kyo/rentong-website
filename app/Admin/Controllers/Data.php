<?php

namespace App\Admin\Controllers;

use Encore\Admin\Admin;
use Illuminate\Support\Arr;
use App\Models\AdminUser;
use App\Models\Topic;

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

    public static function topics()
    {
        $topics = Topic::all();
        $count = count($topics);
        $data = [
            ['name' => 'システム利用者数',       'value' => $count]
        ];

        return view('admin.data.topics', compact('data'));
    }


}
