<?php

use App\Domain\Helpers\Constants;
use App\Domain\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Models\Report;
use App\Domain\Models\CrimeType;
use App\Domain\Models\ReportContent;
use \App\Domain\Models\User;
class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string(Report::ADDRESS)->nullable();
            $table->string(Report::STATUS)->nullable()->default(Constants::Status[0]);
            $table->string(Report::LOCATION)->nullable();
            $table->text(Report::DESCRIPTION)->nullable();
            $table->unsignedBigInteger(Report::USER_ID)->nullable();
            $table->unsignedBigInteger(Report::CRIME_TYPE_ID)->nullable();
            $table->unsignedBigInteger(Report::STATE_ID)->nullable();

            $table->foreign(Report::STATE_ID)->references(State::ID)->on(
                State::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();
            $table->foreign(Report::CRIME_TYPE_ID)->references(CrimeType::ID)->on(
               CrimeType::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();

            $table->foreign(Report::USER_ID)->references(User::ID)->on(
                User::getTableName()
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
        Schema::dropIfExists('reports');
    }
}
