<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Developer;
use App\Models\Hobby;

class CreateDeveloperHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_hobbies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Hobby::class);
            $table->foreignIdFor(Developer::class);

            $table->foreign("hobby_id")->references("id")->on("hobbies")->onDelete("CASCADE");
            $table->foreign("developer_id")->references("id")->on("developers")->onDelete("CASCADE");

            $table->unique(["hobby_id", "developer_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developer_hobbies');
    }
}
