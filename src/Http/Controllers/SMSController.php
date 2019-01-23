<?php
namespace Naif\NovaSms\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\SMS\Facades\SMS;

class SMSController
{
    public function send(Request $request)
    {
        try {
            SMS::send($request->sms_text, null, function ($sms) use ($request) {
                $sms->to($request->mobile_number);
            });
            return ['msg' =>'SMS Sent Successfully', 'status' => true];
        } catch (\Exception $e){
            return ['msg' => $e->getMessage(),'status'=> false];

        }
    }
}
