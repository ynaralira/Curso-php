<div class="titulo">Desafio</div>


<ul>
    <li>1 + 1 = 
        <?php echo 1 + 1 //primeira forma de somar usando somente echo 
         ?>
    </li>

    <li>4 + 4 = <?php //segunda forma de somar com variaveis
    $num_1 = 4;
    $num_2 = 4;
    $resultado = $num_1 + $num_2;
    echo $resultado;
    ?>
 </li>

    <li>8 + 8 =  
       <?php //terceira forma de somar com função
    function soma($num_1,$num_2){

        $total = $num_1 + $num_2;
      
        return $total;
      
      }
      echo soma(8,8);
    ?>
    </li>
</ul>