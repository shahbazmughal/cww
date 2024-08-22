<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Adding new columns based on the form
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('b_state')->nullable();
            $table->string('zip')->nullable();
            $table->string('title')->nullable();
            $table->string('company')->nullable();
            $table->text('business')->nullable(); // Business Type
            $table->text('product')->nullable();  // Product / Services
            $table->string('business_phone')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('password')->nullable(); // Password column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Dropping columns if migration is rolled back
            $table->dropColumn([
                'firstname',
                'lastname',
                'email',
                'address',
                'city',
                'b_state',
                'zip',
                'title',
                'company',
                'business',
                'product',
                'business_phone',
                'mobile_no',
                'password',
            ]);
        });
    }
};
