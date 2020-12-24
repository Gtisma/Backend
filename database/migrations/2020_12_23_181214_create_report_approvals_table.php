<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Models\ReportApproval;
use App\Domain\Models\User;
use App\Domain\Models\Report;

class CreateReportApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_approvals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(ReportApproval::USER_ID)->nullable();
            $table->unsignedBigInteger(ReportApproval::REPORT_ID)->nullable();
            $table->foreign(ReportApproval::USER_ID)->references(User::ID)->on(
                User::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();
            $table->foreign(ReportApproval::REPORT_ID)->references(Report::ID)->on(
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
        Schema::dropIfExists('report_approvals');
    }
}
