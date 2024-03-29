<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsletterEmailsTable extends Migration
{
    public function up()
    {
        Schema::create('newsletter_emails', function (Blueprint $table) {
            $table->id();

            $table->string('email');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('newsletter_emails');
    }
}
