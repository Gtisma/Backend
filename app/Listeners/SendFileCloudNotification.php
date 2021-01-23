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
        $reportF = json_decode($uploadCloud->report_file,true);
        for($i = 0 ; $i < count($reportF); $i++){
            $report_file =$reportF;
            if(isset($report_file[$i]["file"])){
                $typeid =  $report_file[$i]["type"] ?? "picture";
                $id = Constants::ReportContentTpye[$typeid];
                $f = $report_file[$i]["file"];
                if(is_array($report_file[$i]["file"])){
                    foreach ($report_file[$i]["file"] as $file)
                    {
                        Log::info("Report File4 Array each-------",$file);
                        $fileurl = Controller::uploadToCloudStatic($file, 'reports');
                        $reportcontent = new ReportContent();
                        $reportcontent->file_url = $fileurl;
                        $reportcontent->report_type_id = $id;
                        $reportcontent->report_id = $uploadCloud->report_id;
                        $reportcontent->save();
                    }
                }else {
                    Log::info("Report File4 Single-------",[$report_file[$i]["file"]]);
                    $fileurl = Controller::uploadToCloudStatic($report_file[$i]["file"], 'reports');
                    $reportcontent = new ReportContent();
                    $reportcontent->file_url = $fileurl;
                    $reportcontent->report_type_id = $id;
                    $reportcontent->report_id = $uploadCloud->report_id;
                    $reportcontent->save();
                }
            }
        }
        //
    }
}
