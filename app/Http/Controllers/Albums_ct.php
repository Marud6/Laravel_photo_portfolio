<?php
namespace App\Http\Controllers;

use App\Models\albums;
use App\Models\model1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
            'filess[]' => [
                'mimes:jpg,png,jpeg,gif,svg',
            ],
        ]);
        if ($validated->fails()) {
            return redirect('create')->with('msg', 'FAIL');
        }

        $img = $req->file('img');
        $dest = public_path("source/albums/");
        $album = new albums;
        $album->name = $req->name;
        $album->desc = $req->desc;
        $album->att = $img->getClientOriginalExtension();

        $manager = new ImageManager(new Driver());
        $image = $manager->read($img);
        $image->scale(1500, 1500);
        $album->save();
        $imgname = ($album->id . '.' . $img->getClientOriginalExtension());
        $image->save($dest . $imgname);

        if ($req->hasFile('filess')) {
            $files = $req->file("filess");
            foreach ($files as $file) {
                $dest = public_path("source/");

                $model1 = new model1;
                $model1->name = $req->name;
                $model1->desc = "No description";
                $model1->albumid = $album->id;
                $model1->att = $file->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($file);
                $image->scale(1500, 1500);
                $model1->save();
                $imgname = ($model1->id . '.' . $file->getClientOriginalExtension());
                $image->save($dest . $imgname);

            }
        }

        return redirect('/adminview');

    }

    public function create_item()
    {
        $posts = albums::all();

        return view('createitem', compact('posts'));

    }
    public function destroy_album($id)
    {
        $album = albums::find($id);
        $photos = model1::where('albumid', $album->id)->get();

        foreach ($photos as $photo) {
            File::delete("source/" . $photo->id . '.' . $photo->att);
            $photo->delete();

        }

        $album->delete();

        $destinationPath = public_path("source/albums");
        File::delete($destinationPath . '/' . $id . '.' . $album->att);

        return redirect('/adminview');

    }
    public function edit_album($id)
    {
        $posts = albums::where('id', $id)->get();
        return view('/album_edit', compact('posts', 'id'));

    }
    public function update_album(request $req)
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

        $item = albums::find($req->id);
        $item->name = $req->name;
        $item->desc = $req->desc;
        $item->save();
        if ($req->has("img")) {

            $dest = public_path("source/albums/");

            File::delete($dest . '/' . $item->id . '.' . $item->att);

            $img = $req->file('img');
            $manager = new ImageManager(new Driver());
            $image = $manager->read($img);
            $image->scale(1500, 1500);
            $imgname = ($item->id . '.' . $item->att);
            $image->save($dest . $imgname);

        }

        return redirect('/adminview');

    }

}
