<?php

use App\Enum\StatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number', 50);
            $table->date('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('product', 50);
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->decimal('amount_collection')->nullable();;
            $table->decimal('amount_commission');
            $table->decimal('discount');
            $table->decimal('value_vat');
            $table->string('rate_vat', 999);
            $table->decimal('total');
            $table->integer('status')->default(StatusEnum::UNPAID);
            $table->text('note')->nullable();
            $table->date('payment_date')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
}
