<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Member;
use App\Models\Memberdetails;


class MemberForm1Controller extends Controller
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
            return view('layouts.memberform1');
            //return $a;
        }
        else{
            return view('layouts.login');
        }*/
        
        return view('layouts.memberform1');
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
        //return $request->all();
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'aadhar_no'=>'required|digits:12',
            'cast'=>'required',
        ],[
            'aadhar_no.digits'=>'Enter Valid Aadhar No',
            'cast.required'=>'Select the cast'
        ]);

        //get member id
        $id = $request->session()->get('userId');
        $input = $request->all();
        $input['memberid'] = $id;

        $skills = '';
        if($skills != '')
            foreach($input['skills'] as $ip){
                $skills.=$ip.',';  
            }
            //remove last ,
            $skills = rtrim($skills, ",");
            
        $input['skills'] = $skills;
       
        Memberdetails::create($input);//strore to database
        return redirect('/form2'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        echo "hai";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
