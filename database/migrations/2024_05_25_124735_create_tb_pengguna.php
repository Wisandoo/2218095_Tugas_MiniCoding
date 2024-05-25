
<?php
public

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengguna extends Migration
{
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('ID_NIK');
            $table->string('Nama', 255);
            $table->string('No_HP', 255);
            $table->enum('Jenis_Kelamin', ['L', 'P']);
            $table->string('Email', 150)->unique();
            $table->string('Kota', 150);
            $table->string('password', 255);
            $table->timestamps();
        });
    }
    
}
