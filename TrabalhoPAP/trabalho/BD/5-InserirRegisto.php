<?php
/* conexão à base de dados TrabalhoFinal*/
$mysql_id = mysql_connect('localhost', 'vera', '1996');
mysql_select_db('trabalhofinal',$mysql_id);
if(!mysql_select_db('trabalhofinal',$mysql_id)){
die ('Erro'.mysql_error());
}
$query='insert into utilizadores set Username="i11904",Pass="1234", Email="i11904@epcjc.net", Nome="Diana", Admin= 0';
$query='insert into utilizadores set Username="Martins",Pass="1234", Email="i11979@epcjc.net", Nome="Nuno", Admin= 0';
$result=mysql_query($query);
if(!$result){
echo(mysql_error());
}
else{
echo("Adicionado o Registo");
}
