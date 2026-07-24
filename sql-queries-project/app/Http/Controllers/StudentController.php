<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function show() {
        // ---------- SELECT METHOD ---------- //
        // $students = DB::select('select * from student');
        // dd($students);
        // $students = DB::select('select * from student where city = ?', ['Dhanbad']);
        // $students = DB::select('select * from student where id = ?', [1]);
        // $students = DB::select('select * from student where city = :city', ['city'=>'Dhanbad']);
        // ----------------------------------- //

        // ---------- INSERT METHOD ---------- //
        // DB::insert(
        //     'insert into student (name, city, email) values (?,?,?)', 
        //     ['Roushan Anand', 'Samastipur', 'anandroushan@gmail.com']
        //     );

        // DB::insert(
        //     'insert into student (name, email, city)
        //     VALUES(:name, :email, :city)', ['name'=>'Kali Mukharjee',
        //     'email'=>'kalimukherjee@gmail.com', 'city'=>'Asansol']);

        // $name = 'Ramkishan Paul';
        // $email = 'ramkishan@gmail.com';
        // $city = 'Dhanbad';
        
        // DB::insert(
        //     'insert into student (name, email, city)
        //     VALUES(:name, :email, :city)', ['name'=>$name,
        //     'email'=>$email, 'city'=>$city]);
        // ------------------------------------ //

        // ---------- UPDATE METHOD ----------- //
        // DB::update('update student set city = ? where id = ?', ['Kolkata', 6]);

        // DB::update('update student set city=:city where id=:id', ['city'=>'Dhanbad', 'id'=>6]);
        // ----------------------------------- //

        // ---------- DELETE METHOD ---------- //
        // DB::delete('delete from student where id=?', [4]);
        // DB::delete('delete from student where id=:id', ['id'=>7]);
        // ---------------------------------- //

        // ---------- Unprepared Statement ---------- //
        // DB::delete('delete from student where id = 2');
        // ------------------------------------------ //

        // ---------- Database Transactions ---------- //
        DB::transaction(function () {
            DB::update('update student set city = ? where id = ?', ['Asansol', 6]);
            DB::delete('delete from student where id= :id', ['id'=>5]);
        });
        // ------------------------------------------- //


        $students = DB::select('select * from student');
        return view('student', ['students' => $students]);
    }
}
