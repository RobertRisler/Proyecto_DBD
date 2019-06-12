<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerHorariosMesas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        DB::statement
        ('
            CREATE OR REPLACE FUNCTION comparar_horarios()
            RETURNS trigger AS
            $$
            BEGIN
                IF NEW.hora_fin <= NEW.hora_inicio THEN
                    RAISE EXCEPTION "No es posible insertar";
                END IF;
                IF NEW.hora_fin > NEW.hora_inicio THEN
                    RETURN NEW;
                END IF;
            END;
            $$ 
            LANGUAGE plpgsql;
        ');
        DB::unprepared
        ('
            CREATE TRIGGER comparacion_horarios
            BEFORE INSERT ON horarios_mesas
            FOR EACH ROW
            EXECUTE PROCEDURE comparar_horarios();
        ');
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_horarios_mesas');
    }
}
