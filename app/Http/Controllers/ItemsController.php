<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Registration;

class ItemsController extends Controller
{

   
    public function itemStore(Request $request){
        $request->validate([
            'title'=>'required'
         ]);
    

         $regisid = Registration::where('email', $request->session()->get('email'))->get();
        $item = new Item;
        $item->userId = $regisid[0]->user_Id;
        $item->title = $request->input('title');
        $item->description = $request->input('description');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items', $filename);
            $item->image=$filename;
        }
        $item->color = $request->input('color');
        $item->theme = $request->input('theme');
        $item->save();
        return redirect('/home')->with('flash_message', 'student Updated!');
    }



public function itemsShow(Request $request){
    if(session()->has('email')){   
    $regisid2 = Registration::where('email', $request->session()->get('email'))->get();
     $items = Item::where('userId',  $regisid2[0]->user_Id)->get();
    return view ('items')->with('items', $items);
    }
else{
    return redirect('/');
}

}

public function editItem($id){
    if(session()->has('email')){
    $items = Item::find($id);
    return view('singleitem')->with('items', $items);
    }
    else{
        return redirect('/');
    }
    
    
}

public function showItem($id){
    if(session()->has('email')){
    $items = Item::find($id);
    return view('showitempage')->with('items', $items);
    }
    else{
        return redirect('/');
    }
    
}

public function destroyItem($id)
{
    Item::destroy($id);
    return redirect('/items');  
}


public function updateItem(Request $request, $id)
{
    $item = Item::find($id);
    $item->title = $request->input('title');
        $item->description = $request->input('description');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items', $filename);
            $item->image=$filename;
        }
        $item->color = $request->input('color');
        $item->theme = $request->input('theme');
        $item->save();
    return redirect('/items');  
}

public function searchItems(Request $req){
    if(session()->has('email')){
    $items = Item::where('title', 'like', '%'. $req->input('query'). '%')->get();
    return view ('items')->with('items', $items);
    }

    else{
        return redirect('/');
    }

}



public function updateRegistration(Request $request, $email)
{ 
    Registration::where('email', $email)->update([
           'email' => $request->input('regemail')
        ]);
        $email = $request->input('regemail');
        $request->session()->put('email', $email);
        return redirect('/home');  
    }
}
