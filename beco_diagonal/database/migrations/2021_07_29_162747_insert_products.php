<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria'=>'Geral']);
        $cat->save();


        $prod1 = new \App\Models\Produto(['nome'=>'harry1', 'valor'=>50, 'foto'=>'/img/harry1.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod1->save();

        
        $prod2= new \App\Models\Produto(['nome'=>'harry2', 'valor'=>50, 'foto'=>'/img/harry2.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod2->save();

        
        $prod3 = new \App\Models\Produto(['nome'=>'harry3', 'valor'=>50, 'foto'=>'/img/harry3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod3->save();

        
        $prod4 = new \App\Models\Produto(['nome'=>'harry4', 'valor'=>50, 'foto'=>'/img/harry4.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod4->save();

        
        $prod5 = new \App\Models\Produto(['nome'=>'rpg1', 'valor'=>50, 'foto'=>'/img/rpg1.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod5->save();

        
        $prod6 = new \App\Models\Produto(['nome'=>'rpg2', 'valor'=>50, 'foto'=>'/img/rpg2.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod6->save();

        
        $prod7 = new \App\Models\Produto(['nome'=>'rpg3', 'valor'=>50, 'foto'=>'/img/rpg3.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod7->save();

        
        $prod8 = new \App\Models\Produto(['nome'=>'rpg4', 'valor'=>50, 'foto'=>'/img/rpg4.jpg', 'descricao'=>'', 'categoria_id'=>$cat->id]);
        $prod8->save();

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
