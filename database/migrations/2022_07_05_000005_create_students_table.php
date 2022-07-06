<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->longText('address')->nullable();
            $table->string('post_code');
            $table->string('contact_no');
            $table->string('email');
            $table->date('date_of_birth')->nullable();
            $table->string('ni_no')->nullable();
            $table->date('date_of_entry')->nullable();
            $table->string('referred_by')->nullable();
            $table->string('employment_status')->nullable();
            $table->boolean('campus')->default(0)->nullable();
            $table->boolean('course_applying_for')->default(0)->nullable();
            $table->string('course_title')->nullable();
            $table->boolean('course_time_table')->default(0)->nullable();
            $table->string('sessions')->nullable();
            $table->string('previous_study')->nullable();
            $table->boolean('availibility')->default(0)->nullable();
            $table->boolean('qualifications')->default(0)->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            $table->longText('references')->nullable();
            $table->timestamps();
        });
    }
}