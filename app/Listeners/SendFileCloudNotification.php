<?php

namespace App\Listeners;

use App\Domain\Helpers\Constants;
use App\Domain\Models\ReportContent;
use App\Events\UploadCloud;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class SendFileCloudNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UploadCloud  $event
     * @return void
     */
    public function handle(UploadCloud $uploadCloud)
    {
        $report_file =$uploadCloud->report_file;
        if(gettype($report_file) === "string") {
            $report_file = json_decode($uploadCloud->report_file,true);
        }
        for($i = 0 ; $i < count($report_file); $i++){
            if(isset($report_file[$i]["file"])){
                $typeid =  $report_file[$i]["type"] ?? "picture";
                $id = Constants::ReportContentTpye[$typeid];
                if(is_array($report_file[$i]["file"])){
                    foreach ($report_file[$i]["file"] as $file)
                    {
                        $fileurl = Controller::uploadToCloudStatic($file, 'reports');
                        if(isset($fileurl["data"])) {
                            $reportcontent = new ReportContent();
                            $reportcontent->file_url = $fileurl["data"];
                            $reportcontent->report_type_id = $id;
                            $reportcontent->report_id = $uploadCloud->report_id;
                            $reportcontent->save();
                        }
                    }
                }else {
                    $fileurl = Controller::uploadToCloudStatic($report_file[$i]["file"], 'reports');
                    if(isset($fileurl["data"])) {
                        $reportcontent = new ReportContent();
                        $reportcontent->file_url = $fileurl["data"];
                        $reportcontent->report_type_id = $id;
                        $reportcontent->report_id = $uploadCloud->report_id;
                        $reportcontent->save();
                    }
                }
            }
        }
        //
    }
}
