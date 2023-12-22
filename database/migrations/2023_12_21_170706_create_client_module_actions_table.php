<?php

use App\Models\Client;
use App\Models\Module;
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
        Schema::create('client_module_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->timestamps();

            $table->foreignIdFor(Module::class);
            $table->foreignIdFor(Client::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_module_actions');
    }
};
