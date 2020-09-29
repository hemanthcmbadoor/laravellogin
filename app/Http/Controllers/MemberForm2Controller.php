<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memberdetails;

class MemberForm2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if(session()->has('userPhone')){
            $userPhone = session()->get('userPhone');
            return view('layouts.memberform2');
            //return $a;
        }
        else{*/
            //return view('layouts.login');
       // }
       return view('layouts.memberform2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filepath' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
        ],[
            'filepath.required'=>'Please choose a image file',
            'filepath.mimes'=>'The image must be a file of type: jpeg, png, jpg, svg.'
        ]);

        $id = $request->session()->get('userId');
        
        if($file = $request->file('filepath')){
            $fname = $file->getClientOriginalName();
            $file->move('images',$fname);
            //$input['filepath'] = $fname;
        }

        // return $request->all();
        Memberdetails::where('memberid', $id)->update([
           'filepath' => $fname,'isdoneform2'=> '1'
        ]);

        //return view('layouts.profile');
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
