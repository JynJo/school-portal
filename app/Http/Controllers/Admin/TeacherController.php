<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index');
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:155|min:6',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Teacher::create([
            'user_id' => $user->id
        ]);

        return redirect()->back()->with('success', 'Teacher created successfully.');

    }
}
