<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function index()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
    ];

    if ($request->filled('password')) {
        $rules['password'] = 'min:6';
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
}

public function destroy($id)
{
    User::findOrFail($id)->delete();
    return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
}

}
