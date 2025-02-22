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
        Schema::create('your_table_name', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('SupplierCode');
            $table->string('ItemCode');
            $table->integer('QtyIssued');
            $table->integer('Packs');
            $table->string('ItemName');
            $table->date('TxnDate');
            $table->string('LorryNo')->nullable();
            $table->date('RecDate')->nullable();
            $table->decimal('weight', 10, 2)->nullable();
            $table->string('code')->nullable();
            $table->boolean('Showme')->default(0);
            $table->integer('TakenStk')->default(0);
            $table->integer('BalanceStk')->default(0);
            $table->string('wearhouse')->nullable();
            $table->decimal('Expen1', 10, 2)->nullable();
            $table->decimal('Expen2', 10, 2)->nullable();
            $table->decimal('Expen3', 10, 2)->nullable();
            $table->decimal('Expen4', 10, 2)->nullable();
            $table->decimal('Expen5', 10, 2)->nullable();
            $table->string('AutoPurchaseNo')->nullable();
            $table->string('FinalSupplierReportCode')->nullable();
            $table->decimal('FinalPaymentAmount', 10, 2)->nullable();
            $table->date('IssueDateBill')->nullable();
            $table->decimal('TotalBillAmount', 10, 2)->nullable();
            $table->string('UniqueCode')->unique();
            $table->string('ManualRefNo')->nullable();
            $table->integer('PackBalance')->default(0);
            $table->decimal('WeightBalance', 10, 2)->nullable();
            $table->decimal('TotalSalesAsPer', 10, 2)->nullable();
            $table->timestamp('LastupdateTime')->nullable();
            $table->date('LastUpdateDate')->nullable();
            $table->unsignedBigInteger('customer_id'); // Foreign key

            // Foreign key constraint (assuming customer_id references 'customers' table)
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            $table->timestamps(); // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_data_web');
    }
};

