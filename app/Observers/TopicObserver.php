<?php

namespace App\Observers;

use App\Models\Topic;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Log;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
        $topic->admin_user_id = Admin::user()->id;
    }
    public function created(Topic $topic)
    {
        //
        Log::info('用户 '.Admin::user()->name.' 创建了 topic_id= '.$topic->id.' 的数据 在topics中');
    }

    public function updating(Topic $topic)
    {
        //
        $topic->last_edit_admin_user_id = Admin::user()->id;
        Log::info('用户 '.Admin::user()->name.' 对 topic_id= '.$topic->id.' 的数据执行了更行操作 在topics中');
    }
    public function deleted(Topic $topic)
    {
        //
        Log::warning('用户 '.Admin::user()->name.' 删除了 topic_id= '.$topic->id.' 的数据 在topics中');
    }
}
