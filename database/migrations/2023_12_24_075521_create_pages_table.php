<?php

use App\Models\Page;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('pages', function (Blueprint $table) {
			$table->id();
			$table->foreignIdFor(Page::class, 'parent_id')->nullable()->constrained('pages')->nullOnDelete()->cascadeOnUpdate();
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('body')->nullable();
			$table->integer('sorting')->default(0);
			$table->unsignedInteger('_lft');
			$table->unsignedInteger('_rgt');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('pages');
	}
};
