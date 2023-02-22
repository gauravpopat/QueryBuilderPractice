<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $faculty = DB::table('faculties')->get();
        return response(view('home',['faculty'=>$faculty]));
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'qualification' => 'required',
            'city' => 'required',
            'email' => 'email | required',
            'phone' => 'required|regex:/[7-9][0-9]{9}/',
        ]);

        DB::table('faculties')->insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'city' => $request->city,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
       return redirect(route('index'))->with('success','Record Inserted Successfully');
    }

    public function editform($id)
    {
        $faculty = DB::table('faculties')->find($id);
        return response(view('editform',['faculty'=>$faculty]));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'qualification' => 'required',
            'city' => 'required',
            'email' => 'email | required',
            'phone' => 'required|regex:/[7-9][0-9]{9}/',
        ]);
        $id = DB::table('faculties')->where('id',$id)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'city' => $request->city,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect(route('index'))->with('success','Record Updated Successfully');
    }

    public function delete($id)
    {
        DB::table('faculties')->where('id',$id)->delete();
        return redirect(route('index'))->with('success','Record Deleted Successfully');
    }
}
