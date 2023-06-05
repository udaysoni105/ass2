<?php
//eloquent model
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function getData(){
        return DB::table('students')->get();
    }
    // function getData(){
    //     return DB::table('students')->find(3);
    // }

    // function getData(){
    //     return DB::table('students')->count();
    // }

    // function getData()
    // {
    //     return User::all();
    // }


//insert data

//         function getData(){
//         return DB::table('students')->insert([
//             'name'=> 'anil',
//             'email'=> 'u@gmail.com',
//             'address'=>'USA'
//         ]);
// }
}