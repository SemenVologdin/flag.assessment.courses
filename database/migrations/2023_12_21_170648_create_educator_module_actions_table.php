<?php

use App\Models\Client;
use App\Models\Educator;
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
        Schema::create('educator_module_actions', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->text('comment');
            $table->smallInteger('rate');
            $table->timestamps();

            $table->foreignIdFor(Module::class);
            $table->foreignIdFor(Client::class);
            $table->foreignIdFor(Educator::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educator_module_actions');
    }
};
