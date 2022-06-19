<?php
foreach($this->dadosarray as $valor){
    extract($valor);
?>

<a href="<?php echo "noticias".$CATEGORIAS."/". $ID; ?>"><section class='noticia'>
    <h1><?php echo $NOME;?></h1>
    <p><?php echo $NOTICIA;?></p>
    <h2><?php echo $DTHRINSERT;?></h2>
</section>
</a>
<?php
}