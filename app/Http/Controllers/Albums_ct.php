<?php
namespace App\Http\Controllers;

use App\Models\albums;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class Albums_ct extends Controller
{

    public function create_album(Request $req): RedirectResponse
    {

        $validated = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'desc' => ['required'],
            'img' => [
                'required',
                'mimes:jpg,png,jpeg,gif,svg',
            ],
        ]);
        if ($validated->fails()) {
            return redirect('create')->with('msg', 'FAIL');
        }

        $img = $req->file('img');
        $dest = public_path("source/albums");
        $album = new albums;
        $album->name = $req->name;
        $album->desc = $req->desc;

        $album->save();

        $img->move($dest, ($album->id . '.jpg'));
        return redirect('/adminview');

    }

}
