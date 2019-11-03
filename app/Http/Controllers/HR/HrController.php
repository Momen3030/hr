<?php

namespace App\Http\Controllers\HR;
use App\SaveUserId;
use App\Subscription;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use \App\Http\Controllers\Auth;
class HrController extends Controller
{
    public $user;

    public function __construct()
    {
//    Session::put('user_id', Auth::user()?Auth::user()->id:null);
    }

    public function index()
    {


//           $saveUserId=new SaveUserId();
//           $saveUserId->user_id=auth()->user()->id;
//           $saveUserId->save();
//        $this->checksubscribe();
//           return view('admin.dashbord');
    }


//     dd($date1);
//        $this->dailayCall(auth()->user()->id);


    public function createDB()
    {
        $dbname = auth()->user()->name . '_db';
        $schemaName = $dbname ?: config("database.connections.mysql.database");
        $charset = config("database.connections.mysql.charset", 'utf8');
        $collation = config("database.connections.mysql.collation", 'utf8_unicode_ci');
        config(["database.connections.mysql.database" => null]);
        $query = "CREATE DATABASE IF NOT EXISTS $schemaName CHARACTER SET $charset COLLATE $collation;";
        config(["database.connections.mysql.database" => $schemaName]);
        DB::statement($query);
        $CreatUsersTable = "CREATE TABLE IF NOT EXISTS $dbname.users( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE);";
        DB::statement($CreatUsersTable);
//        dd($creattable);
        return redirect('/dashbord');
    }


    public function checksubscribe()
    {


        $currentDate = Carbon::now()->format('Y-m-d');
        $subcribe = Subscription::where('user_id', auth()->user()->id)->first();
        $annualDate = $subcribe->annual;
        $monthlyDate = $subcribe->monthly;
        $freeDate = $subcribe->free;
        if (Carbon::parse($currentDate)->subYear() > Carbon::parse($annualDate) || Carbon::parse($currentDate)->subMonth() > Carbon::parse($monthlyDate) || Carbon::parse($currentDate)->subDays(14) > Carbon::parse($freeDate)) {
            $subcribe->update(array('expired' => 1));
            Session::put('expired','exp');
            return redirect('/');

        } else {

            return 'fsdsd';

        }

    }

}