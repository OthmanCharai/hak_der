<?php

namespace App\Console;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Notifications\ChildNeedNewAccount;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Stripe\Customer;
use Stripe\Source;
use Stripe\Stripe;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        // check if a child be more 17
        $schedule->call(function (){
            $users=User::all();
            $users=$users->filter(function($item){
               return $item->age>17;
            });
            foreach ($users as $user){
                try {
                    $user->notify(new ChildNeedNewAccount());
                }catch (\Exception $e){
                    dump($e);
                }
            }
        })->yearly();

        // create a new  charge for users

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
