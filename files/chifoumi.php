<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Notable&display=swap" rel="stylesheet">
        <title>Chifoumi | Le jeu </title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <H1>Chifoumi</H1>
        <ul>
            <li><a href="?page=chifoumi">Acceuil</a></li>
            <li><a href="?page=regles">Les règles</a></li>
        </ul>
        <section>
            <div id="choix">
                <p>Alors ... pierre, feuille ou ciseaux  ?</p>
                <img src="img/choix1.png" onClick="choixJoueur(1)" alt="PIERRE">
                <img src="img/choix2.png" onClick="choixJoueur(2)" alt="PAPIER">
                <img src="img/choix3.png" onClick="choixJoueur(3)" alt="CISEAUX">
            </div>
            <div id="resultat">
                <h2 id="wol">Go !</h2>
                <hr>
                <p>L'ordinateur à choisi : </p>
                <img src="img/choix.png" name="choixpc" alt="Ready or not, here i come !">
                <img src="img/choix.png" name="choixjoueur" alt="Choose wisely">
                <p> : Vous avez choisi</p>
                <hr>
                <h6>L'ordinateur à <span id="pointsPc">0</span> point(s)</h6>
                <h6>Vous avez <span id="pointsJoueur">0</span> point(s)</h6>
            </div>
        </section>

        <script>
            let joueur;
            let pc;
            let wol = document.getElementById('wol');
            let pointsPc = document.getElementById('pointsPc');
            let pointsJoueur = document.getElementById('pointsJoueur');
            let scorejoueur = 0;
            let scorepc = 0;

            function choixJoueur(choix){
                joueur = choix;
                document.choixjoueur.src = 'img/choix'+joueur+'.png';
                choixPC();
            }

            function choixPC(){
                pc = Math.round(Math.random()*2)+1;
                document.choixpc.src = 'img/choix'+pc+'.png';
                chifoumiWin();
            }

            function chifoumiWin(){
                if((joueur===1) && (pc===3) || (joueur===2) && (pc===1) || (joueur===3) && (pc===2)) {
                    wol.textContent = "Bravo tu as gagné !";
                    scorejoueur ++;
                    pointsJoueur.textContent = `${scorejoueur}`;
                    document.choixjoueur.src='img/choix'+joueur+'.png';
                    document.choixpc.src='img/choix'+pc+'.png';
                }
                else{chifoumiLoose();}
            }

            function chifoumiLoose(){
                if((pc===1) && (joueur===3) || (pc===2) && (joueur===1) || (pc===3) && (joueur===2)) {
                    wol.textContent = 'Oh, perdu :(';
                    scorepc ++;
                    pointsPc.textContent = `${scorepc}`;
                    document.choixjoueur.src='img/choix'+joueur+'.png';
                    document.choixpc.src='img/choix'+pc+'.png';
                } else {
                    wol.textContent = `Égalité !`;
                    document.choixjoueur.src='img/choix'+joueur+'.png';
                    document.choixpc.src='img/choix'+pc+'.png';}
            }
        </script>
    </body>
</html>
