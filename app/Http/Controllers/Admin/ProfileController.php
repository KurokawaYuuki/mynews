<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin/profle/create');
    }
    public function create()
    {
        return redirect('admin/profile/create');
    }
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update()
    {
        return redirect();
    }

}
