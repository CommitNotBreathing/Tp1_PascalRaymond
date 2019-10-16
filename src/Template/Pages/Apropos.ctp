<?php

?>

<!DOCTYPE html>
<html>
<head>
<style>
img {
    width: 100%;
}
</style>
</head>
<body>
<p>Pascal Raymond
<br/>
    Applications Internet 4205B7MO
<br/>
	Automne 2019, Collège Montmorency
<br/>
    Cette base de donnée est faite pour la gestion d'une garderie.
    <br/>
    <br/>
        Je n'ai pas réussi a faire la migration. Lorsque je faisais les commandes, j'avais un message d'erreur qui disait que ma table childrens avait plus d'une clé primaire.
    <br/>
        Pour régler ce probleme j'ai donc fait:

    <li>
        Essayer de débuger avec les messages qui apparaissait dans la cmd, c'était dans des fichier contenu dans le folder "vendor" (ex: PDOStatement.php)
    </li>
    <li>
        Recommencer le processus décrit (plusieurs fois mais toujours le même probleme)
    </li>
    <li>
        Essayer de la creer avec l'importation de phpMyAdmin, les clé primaire et foreigne key ne sont pas defini pareil
    </li>
    <li>
        Chercher dans d'autre site, je n'ai pas trouver d'autre information pertinente pour m'aider a régler le probleme.
    </li>
<br/>
Malheuresement je n'ai pas réussi a le faire... donc ma base de données est dans un folder nommé db dans l'app
<br/><br/>
<br/>
Base de données actuelle
<br/>

<img src="img/ImgBD.png"  style="width:800px;height:400px;">

	<br/>
	Diagramme original
<br/>
<img src="img/data_model.gif"  style="width:400px;height:350px;">
</p>
</body>
</html>

