<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <title>Insondable</title>
</head>
<body>
    <div class="gradient"></div>
    <div class="fond"></div>
    <div class="dcases">
        <?php
            $texte = array (
                0 => 'Pour nous, animaux sociaux…',
                1 => 'c’est si simple de coffrer quelqu’un dans une case. C’est si pratique de réduire quelqu’un à une couleur de peau. un accent “exotique”. Un drapeau étrange. Un prénom avec des K et des Z à des endroits inattendus.',
                2 => 'On veut aller vite, donc on ne cherche pas à en voir plus. On a peur de l’inconnu, donc on ne cherche pas non plus à comprendre ce qui nous dépasse.',
                3 => 'Ça relève de l’instinct, non ? On cherche toujours ce qui nous ressemble. Pourquoi faire l’effort de chercher les choses qui résistent à notre interprétation ?',
                4 => 'J’ai l’impression que c’est comme ça qu’on a sectorisé nos sociétés. Pas par malice, mais par peur, par commodité.',
                5 => 'C’est comme ça que la notion de l’Autre, avec un grand A, naît. l’Autre qui ne nous ressemble pas. L’Autre qu’on isole.',
                6 => 'C’est dans les interlignes de ces classifications sociétales rigides que nous, on tombe.',
                7 => 'Nous, qui venons de “loin” mais qui n\'appartenons pas non plus à “ici”. Nous qui avons échangé notre langue contre la vôtre.',
                8 => 'Nous, les incompréhensibles.',
                9 => 'Bienvenue dans les interlignes des classifications arbitraires de la société, l’ami.',
                10 => 'Tu es un amalgame de cultures,',
                11 => 'Trop différent pour t’intégrer, apparemment, hein.',
                12 => 'À l\'instant où tu mets les pieds dans ce nouveau monde, remarque, comprend, assimile l’indéniable différence qui te sépare de ton entourage.',
                13 => 'Comprends le bien, ça, que tu auras toujours à faire plus d’efforts que les autres pour avoir droit à ce que, eux, possèdent en pure vertu d’être né ici.',
                14 => 'Parce que si tu as l’audace de vouloir t\'intégrer…',
                15 => 'Si tu as l’arrogance de vouloir devenir l’un des leurs…',
                16 => 'Tu dois être prêt à devenir irréprochable.',
                17 => 'Tu dois être prêt à devenir inconcevable.',
                18 => 'Tu dois être prêt à devenir incompréhensible',
                19 => 'Parce qu’ILS n’attendront pas moins de toi.',
                20 => 'Parce que les gens ne veulent pas te connaître, toi. Ils veulent connaître le personnage parfait que tu as sculpté pour eux.',
                21 => 'Sois prêt à devenir l’ami “trophée”, qu’on côtoie juste pour avoir le joker “Eh ! J’suis pas raciste j’ai un ami immigré !”',
                22 => 'Tu sais ce qui se passera si le masque tombe.<br />Tu sais ce qui se passera si tu oses être moins que parfait.',
                23 => 'Rappelle-toi, l’ami.',
                24 => 'Rappelle-toi, ce qu’être différent nous a fait.',
                25 => 'Tout le monde attend de toi la perfection. La société, la famille, toi-même.<br />Ce monde ne veut pas te comprendre, il ne veut pas t’aimer.<br />Tu n’es là que pour donner une bonne image de ton peuple, rappelle-toi.<br />Tout le monde a les yeux sur toi.',
                26 => 'Tu ne souhaites pas être amputé de ton vécu, car ce serait amputer une partie de ton identité. Et tu ne veux pas non plus être réduit qu’à tes excentricités.<br />Souhaites-tu être toi-même, ou souhaites-tu être aimé ?<br />Ça fait tellement longtemps que tu te bats contre toi-même que tu ne sais même plus dans quelle langue sont tes pensées. :)',
                27 => 'Couper tes cornes ne suffira pas.<br />Tu dois couper plus.<br />Tu dois t\'amputer plus.<br />Tu seras toujours perçu comme l’intrus tant que tu ne leur ressemble pas.',
                28 => '',
                29 => 'Mais malgré tout, c’est dans cet équilibre si fragile que je suis persuadé qu’on peut créer un monde moins dégueulasse.',
                30 => 'Un monde où on cherche tous à regarder droit dans l\'inconnu, et y chercher quelque chose qui nous parle. Un monde où on parvient à comprendre en quoi "l\'intrus" est unique.<br />Un monde où on n\'est plus effrayé de l\'inconnu.',
                31 => 'Car on n\'a pas le même vécu, mais ce vécu aboutit souvent en des leçons et ressentis qu’on a tous en commun. Non ?',
                32 => 'Grandir sans amis.',
                33 => 'Avoir l’impression d\'être compris par personne.',
                34 => 'Avoir l’impression qu’on ne peut pas être soi-même autour des gens.',
                35 => 'Certes, ceux qui viennent d’autres pays connaissent bien ces ressentis. Mais ce ne sont pas des expériences propres aux immigrés, si ?',
                36 => 'Tout le monde connaît ces ressentis, juste, on n\'a pas vécu ces sentiments dans le même contexte… Tu vois ce que je veux dire ?<br />Et puis même si on n\'a aucune expérience en commun, c’est ça la partie la plus marrante quand tu te fais des amis, apprendre à les connaître !<br />Non ?!',
                37 => '‘Fin, j’veux dire. Je suis peut-être en train de dire des trucs perchés donc dis le moi si…',
                38 => '… pardon ?',
                39 => 'Ah, Tu le penses vraiment ?',
                40 => 'Ouais… On devrait peut-être se concentrer sur ça, hein ?<br />Apprendre à se connaître, à se respecter…<br />On peut au moins essayer, non ? J\'sais pas…',
                41 => 'Évidemment qu’on n\'a pas tous le même vécu et évidemment qu’on ne va pas être sur la même longueur d\'onde avec tout le monde, pas la peine de se voiler la face non plus.<br />Mais y aura toujours quelqu’un, quelque part, qui te ressemble pas du tout mais qui arrivera quand même à te comprendre !',
                42 => 'Peu importe d\'où tu viens, tout le monde peut partager un bon plat bien chaud autour d’une table… Ça au moins ça met tout le monde d\'accord, la bouffe ! Haha !',
                43 => 'Hehe...<br />...',
                44 => '(C\'est la classe ce que je viens de dire quand même.)<br />(Je devrais en faire une bande dessinée.)',
                45 => 'Haha… Peut-être que je suis trop optimiste. Je t’en voudrais pas si tu me trouves un peu perché, à parler de… d’animaux sociaux et de cases… Et tout…',
                46 => 'Pour être tout à fait honnête, je disais tout à l’heure “Tu es incompréhensible", mais en fait j’ai dit ça surtout parce qu\'au collège on me disait que mon accent était incompréhensible... Et je l\'ai encore au travers de la gorge. Hehe...',
                47 => 'C’est… Je voulais dire un truc qui faisait stylé mais en fait… Bon…',
                48 => 'Incompréhensible ça sonne pas bien, je préfère dire “insondable”, comme un abysse que tu as envie d’explorer, un abysse qui regorge de mystères et de choses à découvrir !',
                49 => 'Ouais…',
                50 => '"Insondable", ça sonne bien.',
            );
        ?>

        <div class="intro">
            <div class="case2">
                <h2>Choisissez une langue</h2>
                <a href="index.php">Français</a>
                <a href="EN.php">English</a>
            </div>

            <div class="scrollContainer">
                <p>scroll</p>
                <div class="mouseContainer">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro2">
            <p>Je vous recommande de vous mettre en plein écran</p>
            <button class="F11" onclick="openFullscreen()">F11</button>
        </div>
    </div>

    <?php
        for($i=1 ; $i<=51 ; $i++){
            echo '<img src="images/'.$i.'.png" class="cases shadow"><p>'.$texte[$i-1].'</p>';
        }
    ?>

    <script>
        var elem = document.documentElement;
        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) {
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            }
        }
    </script>
</body>
</html>