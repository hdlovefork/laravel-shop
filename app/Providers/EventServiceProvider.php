<?php

namespace App\Providers;

use App\Events\OrderPaid;
use App\Events\OrderReviewed;
use App\Listeners\RegisteredListener;
use App\Listeners\SendOrderPaidMail;
use App\Listeners\UpdateCrowdfundingProductProgress;
use App\Listeners\UpdateProductRating;
use App\Listeners\UpdateProductSoldCount;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            RegisteredListener::class,
        ],
        // 订单支付成功事件
        OrderPaid::class=>[
            // 更新产品销量
            UpdateProductSoldCount::class,
            // 发送邮件通知
            SendOrderPaidMail::class,
            UpdateCrowdfundingProductProgress::class,
        ],
        // 订单评价事件
        OrderReviewed::class=>[
            // 更新产品评价数量
            UpdateProductRating::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
