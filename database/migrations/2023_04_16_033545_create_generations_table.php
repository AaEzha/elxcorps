<?php

use App\Models\User;
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
        Schema::create('generations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->year('periode')->nullable();
            $table->string('logo')->nullable();
            $table->text('logo_description')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generations');
    }
};
