<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;
Use App\Models\Person;
Use Log;

class BusinessControlier extends Controller
{
    // https://carbon.now.sh/
    public function getAll(){
        $data = Business::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        Business::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }

    public function delete($id){
        $res = Business::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = Business::find($id);
        return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['phone'] = $request['phone'];
        Business::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }
}
