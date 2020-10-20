<!DOCTYPE html>
        <html lang="pt-br">
    <head>
	    <title>Formulário HTML</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	
    <body>
        <form action="/pagina-processa-dados-do-form" method="post">
    <div>
	    <label for"codigo">Codigo:</label>
	    <input type="number">
	</div>
	 
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" />
    </div>
	
	<div>
	    <label for="msg">Texto Mensagem:</label>
        <textarea id="msg" name="usuario_msg"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Enviar sua mensagem</button>
    </div>
	
</form>
</body>
</html>

<?php
$path = "arquivos/";
$diretorio = dir($path);

echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();
?>
<?php
 $pasta = 'deletar';

if(rmdir($pasta))
{
echo 'Pasta deletada com sucesso.';
}
else
{
echo 'A pasta não pode ser deletada.';
}
?>
<script type="text/JavaScript">
    function delete(){
        var agree=confirm("deseja deletar os dados??");
        if (agree)
            return true ;
        else
            return false ;
    }
</script>
