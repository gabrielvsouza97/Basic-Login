<?php
foreach($this->dadosarray as $valor){
    extract($valor);
?>

<a href="noticias<?php echo $CATEGORIAS;    ?>"><section class='noticia'>
 <h1><?php echo $NOME;?></h1>
    <a href="noticias<?php echo $CATEGORIAS."/".$ID;?>"><p><?php echo $NOTICIA;?></p></a>
    <h2><?php echo $DTHRINSERT;?></h2>
</section>
</a>


<?php
}