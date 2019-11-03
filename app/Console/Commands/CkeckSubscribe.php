<?php

namespace App\Console\Commands;
use App\SaveUserId;
use \Auth;
use Illuminate\Console\Command;
use Carbon\Carbon;
use DB;
use App\Subscription;

use App\Http\Requests;
use Session;
class CkeckSubscribe extends Command
{
    public $user;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ckeck:days';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'remove day everyday';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

//        $user_id=SaveUserId::OrderBy('id','asc')->first()->user_id;
//        $currentDate = Carbon::now()->format('Y-m-d');
//        $subcribe = Subscription::where('user_id',$user_id)->first();
//        $annualDate = $subcribe->annual;
//        $monthlyDate = $subcribe->monthly;
//        $freeDate = $subcribe->free;
//        if ($annualDate == $currentDate || $monthlyDate == $currentDate || $freeDate == $currentDate) {
//            $subcribe->update(array('expired' => 1));
//        } else {
//            if ($annualDate != null) {
//                $AnnualDateSub = Carbon::parse($annualDate)->subDay()->format('Y-m-d');
//                $subcribe->update(array('annual' => $AnnualDateSub));
//            } elseif ($monthlyDate != null) {
//                $monthlyDateSub = Carbon::parse($monthlyDate)->subDay()->format('Y-m-d');
//                $subcribe->update(array('monthly' => $monthlyDateSub));
//            } else {
//                $freeDateSub = Carbon::parse($freeDate)->subDay()->format('Y-m-d');
//                $subcribe->update(array('free' => $freeDateSub));
//            }
//        }
//
//        $q="
//          DELETE FROM save_user_ids
//          WHERE user_id='$user_id';
//          ";
//          DB::statement($q);
    }


  }


