<?php

namespace App\Http\Controllers;

use App\Models\model1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class Homecontroller extends Controller
{
    public function homepage()
    {

        $count = model1::all()->count();
        $posts = model1::orderBy('date', 'desc')->get();
        if ($count < 7) {
            return redirect('error')->with('msg', 'need at least 8 photos to make homepage work');
        }

        return view('homepage2', compact('posts'));

    }

    public function search()
    {

        return view('search');
    }

    public function adminview()
    {

        $posts = model1::all();
        return view('adminview2', compact('posts'));
    }
    public function about()
    {

        return view('about');
    }

    public function album($id)
    {

        $posts = model1::where('albumid', $id)->get();
        if (!$posts) {
            return view('album');
        }

        return view('album', compact('posts', 'id'));

    }
    public function destroy($id)
    {
        DB::delete('delete from lav where id = ?', [$id]);

        $destinationPath = public_path("source");
        File::delete($destinationPath . '/' . $id . '.jpg');

        return redirect('/adminview');

    }
    public function albumsview()
    {
        $posts = model1::all();

        return view('albumsview', compact('posts'));

    }

    public function edit($id)
    {
        $posts = model1::where('id', $id)->get();
        return view('/editview', compact('posts', 'id'));
    }
    public function viewitem($id)
    {
        $posts = model1::where('id', $id)->get();
        return view('viewitem', compact('posts'));
    }

    public function store(Request $req): RedirectResponse
    {

        $validated = Validator::make($req->all(), [
            'name' => 'required|unique:lav|max:255',
            'desc' => ['required'],
            'albumid' => ['required'],
            'img' => [
                'required',
                'mimes:jpg,png,jpeg,gif,svg',
            ],

        ]);
        if ($validated->fails()) {
            return redirect('create')->with('msg', 'FAIL');
        }

        $img = $req->file('img');
        $dest = public_path("source");
        $model1 = new model1;
        $model1->name = $req->name;
        $model1->desc = $req->desc;
        $model1->albumid = $req->albumid;

        $model1->save();
        $img->move($dest, ($model1->id . '.jpg'));
        return redirect('/adminview');

    }

    public function update(Request $req)
    {

        $validated = Validator::make($req->all(), [

            'id' => ['required'],
            'img' => [
                'mimes:jpg,png,jpeg,gif,svg',
            ],

        ]);
        if ($validated->fails()) {
            return redirect('create')->with('msg', "problem");
        }

        $item = model1::find($req->id)
        ;
        $item->name = $req->name;
        $item->desc = $req->desc;
        $item->albumid = $req->albumid;
        $item->save();
        if ($req->has("img")) {

            $dest = public_path("source");

            File::delete($dest . '/' . $item->id . '.jpg');

            $img = $req->file('img');
            $img->move($dest, ($item->id . '.jpg'));

        }

        return redirect('/adminview');

    }

    public function verifi(Request $req)
    {

        $validated = Validator::make($req->all(), [

            'name' => ['required'],
            'password' => ['required'],
        ]);
        if ($validated->fails()) {
            return redirect('create')->with('msg', "problem");
        }

        $credencials = $req->only('name', 'password');
        if (Auth::attempt($credencials)) {

            echo ("work");
            return redirect('/');

        } else {
            return redirect('/');

        }

    }

}
