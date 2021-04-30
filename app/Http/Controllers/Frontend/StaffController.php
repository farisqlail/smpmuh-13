<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Staff;
use App\Kontak;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::latest()->paginate(10);

        return view('admin.staff.index', compact('staff'));
    }

    public function home(){
        $staff = Staff::latest()->paginate(10);
        $kontak = Kontak::all();
        
        return view('frontend.profile.staf', compact('staff', 'kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil Terupload');

        Staff::create([
            'name' => request('name'),
            'jabatan' => request('jabatan'),
            'image' => request('image')->store('staff')
        ]);

        return redirect()->route('frontend.staff-admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Staff $staff)
    {
        if($staff->image){
            \Storage::delete($staff->image);
        }

        Alert::success('Success', 'erhasil Terupdate');

        $staff->update([
            'name' => request('name'),
            'jabatan' => request('jabatan'),
            'image' => request('image')->store('staff')
        ]);

        return redirect()->route('frontend.staff-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        Alert::success('Success', 'Berhasil Dihapus');
        \Storage::delete($staff->image);

        return redirect()->route('frontend.staff-admin.index');
    }
}
