<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Models\ReportContent;
use App\Domain\Models\ReportType;
use App\Domain\Models\Report;
class CreateReportContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_contents', function (Blueprint $table) {
            $table->id();
            $table->string(ReportContent::FILE_URL);
            $table->unsignedBigInteger(ReportContent::REPORT_TYPE_ID)->nullable();
            $table->unsignedBigInteger(ReportContent::REPORT_ID)->nullable();
            $table->foreign(ReportContent::REPORT_TYPE_ID)->references(ReportType::ID)->on(
                ReportType::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();
            $table->foreign(ReportContent::REPORT_ID)->references(Report::ID)->on(
                Report::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_contents');
    }
}
