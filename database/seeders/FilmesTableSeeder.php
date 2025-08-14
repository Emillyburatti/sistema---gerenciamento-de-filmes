<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('filmes')->insert([
            [
                'nome' => 'My Oxford Year',
                'sinopse' => 'Em Oxford, uma universitária descobre que a vida e o amor não acontecem de acordo com os planos.',
                'ano' => 2025,
                'categoria' => 'Romance',
                'imagem_capa' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQdXaEYmIG4uyvJ4_nodwsjLRhZrUu4nrCtIqYPI6FQa75IxEl6',
                'link_trailer' => 'https://www.youtube.com/watch?v=6GQm-RaMTuQ',
            ],
            [
                'nome' => 'Gênio Indomável',
                'sinopse' => 'Will é um rapaz brilhante e tem um grande talento para a matemática, mas trabalha como faxineiro em uma famosa universidade. O psicólogo Sean Maguire o ajuda a formar sua identidade e lidar com as emoções, direcionando-o na vida.',
                'ano' => 2020,
                'categoria' => 'Romance/Drama',
                'imagem_capa' => 'https://www.calone.com.br/storage/2025/05/matt_damon_e_robin_williams_em_genio_indomavel_foto_divulgacao.jpg',
                'link_trailer' => 'https://www.youtube.com/watch?v=ReIJ1lbL-Q8',
            ],

            [
                'nome' => 'Marley & Eu',
                'sinopse' => 'Recém-casados, John e Jenny Grogan se mudam de Michigan para a Flórida. Lá, o casal compra sua primeira casa e encontra trabalho em jornais concorrentes. Mais tarde, John e Jenny adotam Marley, um adorável filhote de labrador amarelo.',
                'ano' => 2008,
                'categoria' => 'Infantil/Comédia',
                'imagem_capa' => 'https://upload.wikimedia.org/wikipedia/pt/0/09/Marley_Me_2008.jpg',
                'link_trailer' => 'https://www.youtube.com/watch?v=eC9rI4tPWrA',
            ],

            [
                'nome' => 'Como Eu Era Antes de Você',
                'sinopse' => 'De origem modesta e sem grandes aspirações, a peculiar Louisa Clark é contratada para ser cuidadora de Will, um jovem tetraplégico depressivo e cínico.',
                'ano' => 2016,
                'categoria' => 'Romance/Drama',
                'imagem_capa' => 'https://cdn.pensador.com/img/imagens/fa/to/fatos_sobre_como_eu_era_antes_de_voce_f_l.jpg?class=ogImageWide',
                'link_trailer' => 'https://www.youtube.com/watch?v=PnqUs3xiAVI',
            ],

            [
                'nome' => 'Diário de uma Paixão',
                'sinopse' => 'Na década de 1940, na Carolina do Sul, o operário Noah Calhoun e a rica Allie se apaixonam desesperadamente, mas os pais da jovem não aprovam o namoro. Noah é enviado para lutar na Segunda Guerra Mundial, e parece ser o fim do romance. Enquanto isso, Allie se envolve com outro homem. No entanto, a paixão deles ainda não acabou quando Noah retorna para a pequena cidade anos mais tarde, próximo ao casamento de Allie.',
                'ano' => 2004,
                'categoria' => 'Romance/Drama',
                'imagem_capa' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQItcIG5CYEvd9Q8n9PYgDgN793r3Xm8rRi-DtogVX9sbZda1wg',
                'link_trailer' => 'https://www.youtube.com/watch?v=DyfWPxB1pZM',
            ],
            
        ]);
    }
}