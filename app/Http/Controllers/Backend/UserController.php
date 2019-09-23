<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        return view('backend.profile.show');
    }

    public function edit()
    {
        return view('backend.profile.edit');
    }

    public function update(Request $request)
    {


        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->has('image')) {

            $image = $request->file('image');
            $imageName = time() . $image->getClientOriginalName();
            $path = public_path('upload/');
            $image->move($path, $imageName);

            $oldImage = $path . $user->image;
            if(file_exists($oldImage)) {
                unlink($oldImage);
            }


            $user->image = $imageName;

        }

        if($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect('admin/profile')
        ->with('status', 'Profile has been updated successfully.');
    }
}
