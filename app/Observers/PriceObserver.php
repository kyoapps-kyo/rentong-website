<?php

namespace App\Observers;

use App\Models\Price;
use Illuminate\Support\Facades\Log;
use Encore\Admin\Facades\Admin;

class PriceObserver
{
    /**
     * Handle the Price "created" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function created(Price $price)
    {
        //
        Log::info('用户 '.Admin::user()->name.' 创建了 price_id= '.$price->id.' 的数据 在imgs中');
    }

    /**
     * Handle the Price "updated" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function updated(Price $price)
    {
        //
        Log::info('用户 '.Admin::user()->name.' 更新了 price_id= '.$price->id.' 的数据 在imgs中');
    }

    /**
     * Handle the Price "deleted" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function deleted(Price $price)
    {
        //
        Log::warning('用户 '.Admin::user()->name.' 删除了 price_id= '.$price->id.' 的数据 在imgs中');
    }

    /**
     * Handle the Price "restored" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function restored(Price $price)
    {
        //
    }

    /**
     * Handle the Price "force deleted" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function forceDeleted(Price $price)
    {
        //
    }
}
