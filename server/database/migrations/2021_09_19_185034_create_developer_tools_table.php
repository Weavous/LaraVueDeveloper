<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Tool;
use App\Models\Developer;

class CreateDeveloperToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_tools', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Tool::class);
            $table->foreignIdFor(Developer::class);

            $table->foreign("tool_id")->references("id")->on("tools")->onDelete("CASCADE");
            $table->foreign("developer_id")->references("id")->on("developers")->onDelete("CASCADE");

            $table->unique(["tool_id", "developer_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developer_tools');
    }
}
