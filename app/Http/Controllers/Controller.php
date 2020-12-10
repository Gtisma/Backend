<?php

namespace App\Http\Controllers;
use App\Mail\GtismaMailQueue;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadToCloud($data,$path){
        try {
            $publicid = date("Ymd") . time() . mt_rand(10000, 99999);
            $uploadedFileUrl = cloudinary()->uploadFile($data, array("folder"=> "gtisma/".$path."/","publicid" =>$publicid,"overwrite" => TRUE))->getSecurePath();
            Log::info("File Uploaded Path", [$uploadedFileUrl]);
            return ["data"=>$uploadedFileUrl];
        }catch (\Exception $e){
            Log::error("cloudinary exception",[$e->getMessage()]);
            return ["error"=>"File faIL to upload, Contact Admin"];
        }

    }
    public function sendEmailQueue($subject,$to,$from,$view,$data,$link){
        Mail::to($to)->queue(new GtismaMailQueue($data,$view,$to,$from,$subject,$link));
    }
    public function sendPushNotification($firebaseToken,$title,$body)
    {
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $title,
                "body" => $body,
            ]
        ];
        $headers = [
            'Authorization: key=' . config('constants.firebase_server_key'),
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, config('constants.firebase_base_url'));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        Log::info("FireBase Push Notification",[$response]);
    }

}
