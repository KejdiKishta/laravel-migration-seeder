<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Milestone 1:
// Creiamo una tabella trains e relativa Migration
// Ogni treno dovrà avere:
// Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * `id` Unsigned BIGINT NOT_NULL AUTO_INCREMENT,
     * `company` VARCHAR(255) NOT_NULL,
     * `departure_station` VARCHAR(255) NOT_NULL,
     * `arrival_station` VARCHAR(255) NOT_NULL,
     * `departure_time`TIMESTAMP NOT_NULL DEFAULT('2024-06-11 12:34:56'),
     * `arrival_time`TIMESTAMP NOT_NULL DEFAULT('2024-06-11 12:34:56'),
     * `train_code` VARCHAR(255) NOT_NULL,
     * `carriages` Unsigned TINYINT NOT_NULL,
     * `is_on_time` TINYINT NOT_NULL DEFAULT(1),
     * `is_cancelled` TINYINT NOT_NULL DEFAULT(0),
     * `created_at` TIMESTAMP NULL,
     * `updated_at` TIMESTAMP NULL,
     * PRIMARY KEY(`id`).
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->timestamp('departure_time')->default('2024-06-11 12:34:56');
            $table->timestamp('arrival_time')->default('2024-06-11 12:34:56');
            $table->string('train_code');
            $table->unsignedTinyInteger('carriages');
            $table->boolean('is_on_time')->default(true);
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
