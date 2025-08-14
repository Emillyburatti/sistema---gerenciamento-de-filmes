<?php

use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateFilmesTable extends Migration
    {
        public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('sinopse');
            $table->year('ano');
            $table->string('imagem_capa');
            $table->string('link_trailer');
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Adicionando a chave estrangeira
            $table->timestamps();
        });
    }

        public function down()
        {
            Schema::dropIfExists('filmes');
        }

        
    }
