<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domain\Models\User;
use \App\Domain\Models\State;
use \App\Domain\Models\Rank;
use \App\Domain\Models\Gender;
use \App\Domain\Helpers\Constants;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(User::FIRST_NAME);
            $table->string(User::LAST_NAME);
            $table->string(User::EMAIL)->unique();
            $table->string(User::PHONE)->unique();
            $table->timestamp(User::EMAIL_VERIFIED_AT)->nullable();
            $table->timestamp(User::LAST_LOGIN)->nullable();
            $table->string(User::PASSWORD)->nullable();
            $table->string(User::SOURCE)->nullable()->default('regular');
            $table->string(User::FACEBOOK_ID)->nullable();
            $table->string(User::GOOGLE_ID)->nullable();
            $table->string(User::TWITTER_ID)->nullable();
            $table->unsignedBigInteger(User::STATE_ID)->nullable();
            $table->unsignedBigInteger(User::RANK_ID)->nullable();
            $table->unsignedBigInteger(User::GENDER_ID)->nullable();
            $table->string(User::PICTURE_URL)->nullable();
            $table->boolean(User::IS_ACTIVE)->nullable()->default(Constants::Active['Inactive']);
            $table->boolean(User::BLOCK)->nullable()->default(Constants::Active['Inactive']);
            $table->string(User::ACTIVATION_TOKEN)->unique()->nullable();
            $table->foreign(User::STATE_ID)->references(State::ID)->on(
                State::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();
            $table->foreign(User::GENDER_ID)->references(Gender::ID)->on(
                Gender::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();
            $table->foreign(User::RANK_ID)->references(Rank::ID)->on(
                Rank::getTableName()
            )->cascadeOnUpdate()->nullOnDelete();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
