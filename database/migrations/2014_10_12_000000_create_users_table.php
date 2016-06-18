<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $create = function (Blueprint $table) {
            $table->engine = 'TokuDB';
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->string('email'); //->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        };
        Schema::create('users', $create);
        Schema::create('tusers', $create);
        DB::unprepared('
            CREATE TRIGGER trigger_before_insert_tusers
                BEFORE INSERT ON tusers
                FOR EACH ROW
                    SET new.id = uuid();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        DB::unprepared('DROP TRIGGER IF EXISTS `trigger_before_insert_tusers`');
        Schema::drop('tusers');
    }
}
