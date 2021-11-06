<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->is_admin){
            return view('users.edit',['user'=>auth()->user()]);
        }
      return  view('users.index',['users'=>User::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           abort_if(!auth()->user()->is_admin,403);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['image'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['string', 'min:8', 'confirmed'],
        ]);

        $inputs=$request->only('name','email');
        $inputs['password']=bcrypt($request->input('password'));
        $user=User::create($inputs);
        if($request->hasFile('image')){
            $this->storeImage($user);
        }
        return redirect()->route('users.create')->with('user',$user)->withSuccess('Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        abort_if(auth()->user()->id !=$user->id,403);
        //
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
           abort_if(auth()->user()->id !=$user->id,403);
       
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['image'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable','min:8', 'confirmed'],
        ]);
      
        $inputs=$request->only('name','email');
        if($request->filled('password')){
            $inputs['password']=bcrypt($request->input('password'));
        }

        $user->update($inputs);
        if($request->hasFile('image')){
            $this->updateImage($user);
        }
       
        return redirect()->route('users.edit',$user)->with('user',$user)->withSuccess('Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        abort_if(!auth()->user()->is_admin || $user->is_admin,403);
       
        $this->deleteWithImage($user);
        return redirect()->route('users.index')->withSuccess('Deleted Successfuly');
    }
}
