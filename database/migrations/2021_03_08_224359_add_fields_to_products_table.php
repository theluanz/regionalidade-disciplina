<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $product = new Product();
        $unitKeys = array_keys($product->getUnits());
        Schema::table('products', function (Blueprint $table) use ($unitKeys) {
            $table->enum('unit',$unitKeys)->default('un');
            $table->float('quantity')->default(0);            
            $table->foreignId('rural_property_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('unit');
            $table->dropColumn('quantity');
            $table->dropColumn('rural_property_id');
        });
    }
}
