<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Session;
class SiteController extends Controller
{
    function Home(){
        // $showData = Crud::all();
        // $showData = Crud::paginate(5);
        $showData = Crud::simplePaginate(5);
        return view('HomePage',compact('showData'));

    }
    function addData(){
        return view('AddPage');
    }
    function storeData(Request $request){
        $rules = [
            'name'=> 'required|max:50',
            'email'=> 'required|email',
        ];

        $cm = [
            'name.required' => 'Enter Your Name',
            'name.max' => 'Your Name Must be Contain under 50 Char',
            'email.required' => 'Enter Your Email',
            'email.email' => 'Email must be valide Email',
        ];
        $this->validate($request, $rules,$cm);

        $crud = new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg','Data SUccessfully Add');
        
        return redirect('/');
    }

    function editData($id = null){
        $editData = Crud::find($id);
        //  return view('Update',['editData'=>$editData]);
            return view('Update',compact('editData'));
    }

     function updateDate(Request $request,$id){
        $rules = [
            'name'=> 'required|max:50',
            'email'=> 'required|email',
        ];

        $cm = [
            'name.required' => 'Enter Your Name',
            'name.max' => 'Your Name Must be Contain under 50 Char',
            'email.required' => 'Enter Your Email',
            'email.email' => 'Email must be valide Email',
        ];
        $this->validate($request, $rules,$cm);

        $crud = Crud::find($id);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg','Data SUccessfully Add');
        
        return redirect('/');
    }

   
}
