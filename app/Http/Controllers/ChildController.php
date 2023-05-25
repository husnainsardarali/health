<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Child;
use App\Models\ImageIcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'dob' => 'required|date|date_format:Y-m-d',
            'image_id' => 'required|integer'
        ]);
        if($validator->fails()){
            return response(['message'=>[$validator->errors()]],404);
        }
        $image = ImageIcon::find($request->image_id);
        if(!$image){
            return "Kindly Select the Correct Image for your profile";
        }
        $child_id = new Child();
        $child_id = Child::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'image_icon_id' => $request->image_id,
            'parent_id' => Auth::id(),
        ]);
        return "Child has been added succesfully";
        // Child::created();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function show(Child $child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function edit(Child $child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Child $child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Child  $child
     * @return \Illuminate\Http\Response
     */
    public function destroy(Child $child)
    {
        //
    }
}
