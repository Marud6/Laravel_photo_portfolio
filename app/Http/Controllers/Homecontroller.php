<?php

namespace App\Http\Controllers;

use App\Models\model1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;
use Illuminate\Support\Facades\File;

class Homecontroller extends Controller
{
        public function homepage(){
        $posts=model1::all();


        return view('homepage',compact('posts' ));    }
    public function adminview(){


      //  $posts=model1::all();
      $posts=model1::all();
      return view('adminview',compact('posts' ));  }




      public function album(){
return view('album');

      }
    public function destroy($id) {
        DB::delete('delete from lav where id = ?',[$id]);
       

        
        
        $destinationPath =public_path("source");
        File::delete($destinationPath.'/'.$id.'.jpg');

        return redirect('/adminview');




    }

    public function edit($id) {
 $posts=model1::where('id', $id)->get();
         return view('/editview',compact('posts','id'));
    }
    public function viewitem($id) {
      $posts=model1::where('id', $id)->get();
      return view('viewitem',compact('posts' )); 
       }
    

       public function store(Request $req)
       {

        if($req->has("img")){
          $model1= new model1;

          $img=$req->file('img');
          $dest=public_path("source");
          $model1= new model1;
          $model1->name= $req->name;  
          $model1->desc= $req->desc;  
          $model1->albumid= $req->albumid;   
 
          $model1->save();
          $img->move($dest,($model1->id.'.jpg'));

        }
        else{
          return redirect('create')->with('msg','no image found');
        }
       
        return redirect('/adminview');

}



public function update(Request $req){

 

  $item = model1::find($req->id);
  $item->name = $req->name;
  $item->desc = $req->desc;
  $item->albumid= $req->albumid;   
  $item->save();
  if($req->has("img")){
  
    $dest=public_path("source");

    File::delete($dest.'/'.$item->id.'.jpg');

    $img=$req->file('img');
    $img->move($dest,($item->id.'.jpg'));

  }




  
  return redirect('/');


}


public function verifi(Request $req){

return redirect('/adminview');


}

    


}
