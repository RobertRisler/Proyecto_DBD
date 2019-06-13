<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerMesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement
        ('
            CREATE OR REPLACE FUNCTION mesas_por_defecto()
            RETURNS trigger AS
            $$
                BEGIN
                IF NEW.cantidad_asientos = 0 THEN
                    UPDATE mesas
                    SET cantidad_asientos = 4
                    WHERE mesas.id = NEW.id;
                END IF;
                RETURN NEW;
                END;
            $$
            LANGUAGE plpgsql;
        ');
        DB::unprepared
        ('
            CREATE TRIGGER cantidad_sillas
            AFTER INSERT ON mesas
            FOR EACH ROW
            EXECUTE PROCEDURE mesas_por_defecto();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_mesa');
    }
}
