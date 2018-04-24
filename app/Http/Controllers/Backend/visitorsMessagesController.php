<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Validator;

class visitorsMessagesController extends Controller
{
    //

    public  function  getvisitorsMessages(){

        // this is function to get all services request :-
        $contacts  = Contact::all();
        return view('backend.visitorsMessages.index', compact('contacts'));

    }


    public  function  deletevisitorsMessages($id){
        $deletevisitorsMessages = Contact::destroy($id);
        session()->flash('success' , trans('تم حذف الرسالة بنجاح'));

        return redirect()->route('visitorsMessages');

    }

        public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'  => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
         ]);
        if ($validator->passes()) {    
                $contact          = new Contact();
                $contact->name    = $request->name;
                $contact->email   = $request->email;
                $contact->phone   = $request->phone;
                $contact->message = $request->message;
             
                $contact->save();

            }else{
            foreach ((array)$validator->errors() as $value){
                if (isset($value['name'])) {
                    $msg='user name is required' ;
                    return response()->json([
                        'error'=>1,
                        'value'=>false,
                        'user'=>[],
                        'msg'=>$msg
                    ]);
                }elseif (isset($value['email'])) {
                    $msg='email is required ' ;
                    return response()->json([
                        'error'=>2,
                        'status'=>false,
                        'user'=>[],
                        'msg'=>$msg
                    ]);
                }elseif (isset($value['message'])) {
                    $msg='message is required' ;
                    return response()->json([
                        'error'=>3,
                        'status'=>false,
                        'user'=>[],
                        'msg'=>$msg
                    ]);
                }elseif (isset($value['phone'])) {
                    $msg='phone is required' ;
                    return response()->json([
                        'error'=>4,
                        'status'=>false,
                        'user'=>[],
                        'msg'=>$msg
                    ]);
                }else{
                    $msg='لم يتم التسجيل';
                    return response()->json([
                        'error'=>0,
                        'status'=>false,
                        'user'=>[],
                        'msg'=>$msg
                    ]);
                }
            } 
        }

    return back();

    }

}
