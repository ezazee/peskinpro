<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\ProductSize;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $orders = Order::where('status', 'pending')
                ->where('created_at', '<', now()->subMinutes(30))
                ->get();
        
            foreach ($orders as $order) {
                $orderItems = $order->products;
        
                foreach ($orderItems as $item) {
                    $productSize = ProductSize::where('product_id', $item->id)
                                              ->where('id', $item->pivot->size_id)
                                              ->first();
    
                    if ($productSize) {
                        $productSize->increment('stock', $item->pivot->quantity);
                    } else {
                        \Log::error('Product size not found for Product ID: ' . $item->id . ' and Size ID: ' . $item->pivot->size_id);
                    }
                }
                $order->update(['status' => 'canceled']);
            }
        })->everyMinute();
    }
    

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

}
