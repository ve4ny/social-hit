<?php

namespace App\Http\Controllers;

use App\Actions\Images\SaveImage;
use App\Http\Requests\ProfileChangesRequest;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        $user = auth()->user();
        $user->load('details');
        return view('pages.profile', compact('user'));
    }

    public function save(ProfileChangesRequest $request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->save();
        $data = ['country' => $request->country];
        if($request->has('photo')) {
            $newImage = new SaveImage();
            $image = $newImage->saveUserPhoto($request->photo);
            $data['image'] = $image;
        }
        $details = UserDetails::where('user_id', auth()->user()->id)->first();
        $details->update($data);
        $details->save();
        return response()->json(['message' => 'ok'], 200);
    }
}
