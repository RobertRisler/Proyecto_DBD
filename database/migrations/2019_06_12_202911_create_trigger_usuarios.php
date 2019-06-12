<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerUsuarios extends Migration
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
            CREATE OR REPLACE FUNCTION dar_rol()
            RETURNS trigger AS
            $$
                BEGIN
                IF NEW.id > 10 THEN
                    UPDATE usuarios
                    SET id_tipo_usuario = 2
                    WHERE usuarios.id = NEW.id;
                END IF;
                RETURN NEW;
                END;
            $$
            LANGUAGE plpgsql;
        ');
        DB::unprepared
        ('
            CREATE TRIGGER asignar_rol
            AFTER INSERT ON usuarios
            FOR EACH ROW
            EXECUTE PROCEDURE dar_rol();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_usuarios');
    }
}
