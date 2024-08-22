
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
         
            // Add timestamps columns
            $table->timestamps(); // This adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
           
            // Drop timestamps columns if rolling back
            $table->dropTimestamps();
        });
    }
};
