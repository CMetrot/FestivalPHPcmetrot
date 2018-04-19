<html>
    <head>
        <meta charset="utf-8" />
         <link href="css/cssLogin.css" rel="stylesheet" type="text/css">
        <title>Formulaire d'identification</title>
    </head>
    <body>
        <h2>Festival du folklore</h2>
        <div id="loginform"></div>
        <div id="mainlogin">
            <div id="or"></div>
            <h1>Formulaire d'identification</h1>
            <form id="blocLogin" action="cLogin.php" method="post">
                <input type="text" placeholder="Identifiant" name="login" required>
                <input type="password" placeholder="Mot de passe" name="pwd" required>
                <button type="submit" value="Connexion"><i class="fa fa-arrow-right">Valider</i></button>
                <input type="reset" value="Annuler">
            </form>    
        </div>
    </body>
</html>