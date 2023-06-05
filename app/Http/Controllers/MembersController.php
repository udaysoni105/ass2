<?php

namespace App\Http\Controllers;
//query builder
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MembersController extends Controller
{
//query builder    
    function dbOperations(){
        return DB::table('members')->get();
    }
    // function dbOperations(){
    //     $data =  DB::table('members')->get();
    //     return view('list',['data'=>$data]);
    // }
    // function dbOperations(){
    //         return DB::table('members')->where('address','123 Main St')->get();
    //     }
    // function dbOperations(){
    //     return DB::table('members')->find(3);
    // }
    // function dbOperations(){
    //     return DB::table('members')->count();
    // }


//insert
    // function dbOperations(){
    //     return DB::table('members')->insert([
    //         'name'=> 'anil',
    //         'email'=> 'u@gmail.com',
    //         'address'=>'USA'
    //     ]);

    // function dbOperations(){
    //     return DB::table('members')->where('id',3)->update([
    //         'name'=> 'uday',
    //         'email'=> 'uday@gmail.com',
    //         'address'=>'india'
    //     ]);

    // function dbOperations(){
    //     return DB::table('members')->where('id',2)->delete();
    // }
    
};
