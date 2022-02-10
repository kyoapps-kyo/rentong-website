<?php

namespace App\Observers;

use App\Models\Img;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Encore\Admin\Facades\Admin;

class ImgObserver
{
    /**
     * Handle the Img "created" event.
     *
     * @param  \App\Models\Img  $img
     * @return void
     */
    public function created(Img $img)
    {
        //
        Log::info('用户 '.Admin::user()->name.' 创建了 img_id= '.$img->id.' 的数据 在imgs中');
    }

    /**
     * Handle the Img "updated" event.
     *
     * @param  \App\Models\Img  $img
     * @return void
     */
    public function updated(Img $img)
    {
        //
        Log::info('用户 '.Admin::user()->name.' 更新了 img_id= '.$img->id.' 的数据 在imgs中');
    }

    /**
     * Handle the Img "deleted" event.
     *
     * @param  \App\Models\Img  $img
     * @return void
     */
    public function deleted(Img $img)
    {

        // $path = Storage::url('uploads/'.$img->img);
        // dd($path);
        // Storage::delete($path);
        Log::warning('用户 '.Admin::user()->name.' 删除了 img_id= '.$img->id.' 的数据 在imgs中');
    }

    /**
     * Handle the Img "restored" event.
     *
     * @param  \App\Models\Img  $img
     * @return void
     */
    public function restored(Img $img)
    {
        //
    }

    /**
     * Handle the Img "force deleted" event.
     *
     * @param  \App\Models\Img  $img
     * @return void
     */
    public function forceDeleted(Img $img)
    {
        //
    }
}
