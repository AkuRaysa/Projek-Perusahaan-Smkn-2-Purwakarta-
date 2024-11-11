<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('dash.dash', compact('users'));
    }

    public function destroy($id)
{

    $user = User::findOrFail($id);

    if (auth()->user()->isAdmin()) {
        $user->galery()->artikel()->delete();
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }

    return redirect()->route('dashboard')->with('error', 'You are not authorized to delete this user.');
}


}