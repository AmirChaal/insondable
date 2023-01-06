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
                0 => 'For us, social animals…',
                1 => 'It\'s so easy to put someone in a box. It\'s so convenient to reduce someone to a skin color. An "exotic" accent. A strange flag. A name with K\'s and Z\'s in unexpected places.',
                2 => 'We want to go fast, so we don\'t try to see more. We are afraid of the unknown, so we don\'t try to understand what is beyond us either.',
                3 => 'It\'s all instinct, isn\'t it? We always look for what is similar to us. Why make the effort to look for things that resist our understanding?',
                4 => 'I have the impression that this is how we have sectorized our societies. Not out of malice, but out of fear, out of convenience.',
                5 => 'This is how the notion of the Other, with a capital O, is born. The Other that we isolate. The Other that we fear. The Other that we hate.',
                6 => 'It is in the gaps of these rigid societal classifications that we fall.',
                7 => 'We, who come from "far away" but who do not belong to "here" either. We who have exchanged our language for yours.',
                8 => 'We, the incomprehensible.',
                9 => 'Welcome to the cracks of society\'s arbitrary classifications, friend.',
                10 => 'You are a patchwork of cultures,',
                11 => 'Too different to fit in, apparently, huh.',
                12 => 'The moment you step into this new world, notice, understand and assimilate the undeniable difference that separates you from your peers.',
                13 => 'Understand that you will always have to make more efforts than the others to have the right to what they have by pure virtue of being born here.',
                14 => 'Because if you have the audacity to want to fit in...',
                15 => 'If you have the arrogance to want to become one of them...',
                16 => 'Be prepared to become flawless.',
                17 => 'Be prepared to become inconceivable.',
                18 => 'Be prepared to become incomprehensible.',
                19 => 'Because THEY won\'t expect less from you.',
                20 => 'Because people don\'t want to know you. They want to know the perfect persona you\'ve sculpted for them.',
                21 => 'Be prepared to be the "token" friend, who we rub shoulders with just to get the "Hey I\'m not racist I have an immigrant friend!" joker.',
                22 => 'You know what will happen if the mask falls off<br />You know what will happen if you dare to be less than perfect.',
                23 => 'Remember, friend.',
                24 => 'Remember, what being different has done to us.',
                25 => 'Everyone expects you to be perfect. Society, family, yourself.<br />This world does not want to understand you, it does not want to love you.<br />You are only there to make your people look good, remember.<br />all eyes are on you.',
                26 => 'You don\'t want to be amputated from your experience, because that would be to amputate a part of your identity. And you don\'t want to be reduced to your eccentricities either.<br />Do you want to be yourself, or do you want to be loved?<br />You\'ve been fighting yourself for so long that you don\'t even know what language your thoughts are in anymore. :)',
                27 => 'Cutting off your horns will not be enough.<br />You need to cut more.<br />You need to amputate more.<br />You will always be seen as the odd one out until you look like them.',
                28 => '',
                29 => 'But despite everything, it is in this fragile balance that I am convinced we can create a less disgusting world.',
                30 => 'A world where we all try to look straight into the unknown, and look for something that speaks to us. A world where we manage to understand how the "intruder" is unique.<br />A world where we are no longer afraid of the unknown.',
                31 => 'Because we do not have the same experience, but this experience often results in lessons and feelings that we all have in common. Right ?',
                32 => 'Growing up without friends.',
                33 => 'Feeling like no one understands you.',
                34 => 'Feeling like you can\'t be yourself around people.',
                35 => 'Yeah sure, those who come from other countries are familiar with these feelings. But these are not solely the experiences of immigrants, are they?',
                36 => 'Everyone knows these feelings, we just haven\'t experienced them in the same context... You know what I mean?<br />And even though we don\'t have any experiences in common, that\'s the fun part about making friends, getting to know them!<br />Right ?!',
                37 => 'I mean. I might be saying some crazy stuff so let me know if...',
                38 => '… pardon ?',
                39 => 'Ah, you really mean it?',
                40 => 'Yeah... Maybe we should focus on that, huh?<br />Learn to know each other, to respect each other...<br />We can at least try, right? I don\'t know...',
                41 => 'Of course we don\'t all have the same experience and of course we won\'t be on the same wavelength with everyone, no need to hide from it either.<br />But there will always be someone, somewhere, who doesn\'t look like you at all but who will still manage to understand you!',
                42 => 'No matter where you come from, everyone can share a good hot meal... That at least makes everyone agree, food ! Haha !',
                43 => 'Hehe...<br />...',
                44 => '(Damn I\'m spitting bars out here.)<br />(I should make a comic out of that.)',
                45 => 'Haha... Maybe I\'m too optimistic. I wouldn\'t blame you if you think I\'m a bit crazy, talking about... social animals and boxes... and all that...',
                46 => 'To be perfectly honest, I was saying earlier, "You\'re incomprehensible" but actually I said that mostly because in middle school I was told that my accent was incomprehensible... And i\'m still not over it. Hehe...',
                47 => 'It\'s... I wanted to say something cool but actually... Well...',
                48 => 'Incomprehensible doesn\'t sound good, I prefer to say "unfathomable", like an abyss that you want to explore, an abyss full of mysteries and things to discover!',
                49 => 'Yeah…',
                50 => '"Unfathomable" has a nice ring to it.',
            );
        ?>

        <div class="intro">
            <div class="case2">
                <h2>Pick a language</h2>
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
            <p>This story is better experienced in fullscreen</p>
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
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }
    </script>
</body>
</html>