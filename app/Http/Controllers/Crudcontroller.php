<?php

namespace App\Http\Controllers;


use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Crudcontroller extends Controller
{
    //

    public function fillable()
    {
        return Offer::select('name')->get();
    }

    /* public function store()
     {
         Offer::create([
             'name' => 'offer3',
             'price' => '100',
             'details' => 'offer details',
         ]);
     }*/
    public function create()
    {
        return view('offers/create');
    }

    public function store(Request $request)
    {
        // to viladate the data come from request first
        $roles = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ];
        $massage = [
            'name.required' => __('messages.offer name required'),
            'name.unique' => 'الاسم موجود',
            'price.numeric' => 'سعر العرض يجب ان يكون ارقام',
            'details.required' => 'تفاصيل العرض مطلوبه',
        ];

        $validator = Validator::make($request->all(), $roles, $massage);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        // to insert data to database by form
        Offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
        ]);
        return redirect()->back()->with(['success'=>'تم إضافة العرض بنجاح']);

    }

}
















