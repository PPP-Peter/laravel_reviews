<?php


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
        Schema::create('reviews', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->text('review')->nullable();
            $table->double('rating');
            $table->tinyInteger('status')->default('0');
            $table->ulidMorphs('model');
            $table->foreignUlid('updated_status_by')->default(null)->nullable()->constrained('users');
            $table->timestamp('updated_status_at')->default(null)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
