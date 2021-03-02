<?php

$files = $request->file('image');

foreach($files as $file){
    $this->modelo::create([
        'title' => $request->title,
        'product_id' => base64_decode($request->product_id),
        'image' => $upload->upload_global($file, 'productimage'),
        'create_uid' => Auth::user()->id,
        'write_uid' => Auth::user()->id
    ]);
}

function upload_global($file, $folder){ 

    $file_type = $file->getClientOriginalExtension(); 
    $folder = $folder; 
    $destinationPath = public_path() . '/uploads/'.$folder; 
    $destinationPathThumb = public_path() . '/uploads/'.$folder.'thumb'; 
    $filename = uniqid().'_'.time() . '.' . $file->getClientOriginalExtension();
    $url = '/uploads/'.$folder.'/'.$filename; 

    if ($file->move($destinationPath.'/' , $filename)) { 
        return $filename; 
    } 
}