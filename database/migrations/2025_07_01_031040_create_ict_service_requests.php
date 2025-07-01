<?php

use App\Models\IctServiceRequestType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ict_service_requests', function (Blueprint $table) {
        // First, add the column
        $table->unsignedBigInteger('ict_service_request_type_id')->nullable(); // Optional: make nullable if needed

        // Then, set the foreign key
        $table->foreign('ict_service_request_type_id')
              ->references('id')
              ->on('ict_service_request_types');
              
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ict_service_requests', function (Blueprint $table) {
            
        });
    }
};
