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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('photos')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('summary')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->date('discount_start')->nullable();
            $table->date('discount_end')->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('stock')->nullable();
            $table->string('stock_alert')->nullable();
            $table->string('weight')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('featured', ['yes', 'no'])->default('no');
            $table->enum('trending', ['yes', 'no'])->default('no');
            $table->enum('best_rated', ['yes', 'no'])->default('no');
            $table->enum('hot_new', ['yes', 'no'])->default('no');
            $table->enum('buyone_getone', ['yes', 'no'])->default('no');
            $table->enum('special_offer', ['yes', 'no'])->default('no');
            $table->enum('special_deal', ['yes', 'no'])->default('no');
            $table->integer('vat')->nullable();
            $table->integer('tax')->nullable();
            $table->enum('free_shipping', ['yes', 'no'])->default('no');
            // product video
            $table->string('product_video_link')->nullable();
            // product audio
            $table->string('product_audio_link')->nullable();
            // product file
            $table->string('product_file_link')->nullable();

            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId("color_id")->nullable()->constrained("colors")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
