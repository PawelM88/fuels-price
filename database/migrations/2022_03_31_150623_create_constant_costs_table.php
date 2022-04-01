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
        Schema::create('constant_costs', function (Blueprint $table) {
            $table->id();
            $table->char('cost_name');
            $table->string('cost_description');
            $table->decimal('amount_of_cost', $precision = 10, $scale = 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constant_costs');
    }
};
