<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Memberdetails;

class MemberContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('layouts.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "hai";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone =  $request->input('phone');
        $password =  $request->input('password');
        
        $this->validate($request, [
            'phone'=>'required',
            'password' => 'required',
        ]);
        $account = Member::where('phone',$phone)->first();
     
        if ($account) {
            $match = Member::where(['phone' => $phone,'password' => $password ])->first();

            if ($match) {
                //$a = $match->id;
                
                //$request->session()->put('userPhone',$phone,'userId',$a);
                $request->session()->put([
                    'userPhone' => $phone,
                    'userId' => $match->id
                ]);
                
                //check form1 completed
                $md = Memberdetails::where(['memberid' => $match->id])->first();
                
                if($md){
                    if(($md->isdoneform1 == 0) && ($md->isdoneform2 == 0)){
                         //return view('layouts.memberform1');
                         return redirect('/form1');
                    }
                    else if(($md->isdoneform1 == 1) && ($md->isdoneform2 == 0)){
                        //return view('layouts.memberform2');
                        return redirect('/form2');
                    }
                    else{
                        //return view('layouts.memberform2');
                        //return view('layouts.profile');
                        return redirect('/profile');
                    }
                }
                else{
                    //return view('layouts.memberform1');
                    return redirect('/form1');
                    
                }

                //return $request;
                //$value = $request->session()->get('userId');

                //$value = $request->session()->get('userPhone');
                //$request->session()->forget('userPhone');
                //return $value;
                
            }
            else{
                $message = array('password' => 'Invalid Password');
                return redirect('/')->withErrors($message);

            }
        }else{
            $message = array( 'Account' => 'Account Not Exist');
            return redirect('/')->withErrors($message);
        }
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
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
