<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('project_posts', function (Blueprint $table) {
      $table->id();
      $table->string('project_title');
      $table->string('client_company_name');
      $table->string('client_name');
      $table->string('client_role');
      $table->string('project_image')->nullable();
      $table->string('our_challenge_images')->nullable();
      $table->text('description');
      $table->string('reference_link');
      $table->text('our_challenge');
      $table->text('our_solution');
      $table->text('review');
      $table->string('next_project')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('project_posts');
  }
};
