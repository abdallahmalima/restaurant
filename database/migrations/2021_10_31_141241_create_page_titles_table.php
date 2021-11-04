v<?php

use App\Models\PageTitle;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_titles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $names=['page_menu','page_gallery','page_testimony','page_team','page_price','page_blog','page_contact'];
          foreach($names as $name){
            PageTitle::create(['name'=>$name]);       
          }
       

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_titles');
    }
}
