<?php
foreach($this->dadosarray as $valor){
    extract($valor);
?>

<section class='noticia'>
    <h1><?php echo $NOME;?></h1>
    <p><?php echo $NOTICIA;?></p>
    <h2><?php echo $DTHRINSERT;?></h2>
</section>

<?php
}