<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <title>CryptTube</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
</head>

<body>

<h1>CryptTube</h1>


<main>
    <?php

            require_once "src/YouTubeVideo.php";
            require_once "src/VimeoVideo.php";

            $Videos = [
                new \src\YouTubeVideo("LOOK-SEE | The Wedding Hand", "VUdR6vMucHU"),
                new \src\YouTubeVideo("The Birch | The Protector", "SxQj0DumF8Y"),
                new \src\YouTubeVideo("SOOT | Current | S1E1", "006-4r5g7S0"),
                new \src\YouTubeVideo("The Burch | The Protector", "SxQj0DumF8Y"),
                new \src\YouTubeVideo("LOOK-SEE | The Wedding Hand", "VUdR6vMucHU"),
                new \src\VimeoVideo("The Drawing", "256141301"),
                new \src\VimeoVideo("Close before Midnight", "157198166"),
                new \src\VimeoVideo("Bath Bomb", "278823133"),
                new \src\VimeoVideo("ROTARY", "228930383"),
                new \src\VimeoVideo("The Drawing", "256141301"),
                new \src\YouTubeVideo("LOOK-SEE | The Wedding Hand", "VUdR6vMucHU"),
                new \src\YouTubeVideo("The Birch | The Protector", "SxQj0DumF8Y"),
                new \src\YouTubeVideo("SOOT | Current | S1E1", "006-4r5g7S0"),
                new \src\YouTubeVideo("The Birch | The Protector", "SxQj0DumF8Y"),
                new \src\YouTubeVideo("LOOK-SEE | The Wedding Hand", "VUdR6vMucHU"),
                new \src\VimeoVideo("The Drawing", "256141301"),
                new \src\VimeoVideo("Close before Midnight", "157198166"),
                new \src\VimeoVideo("Bath Bomb", "278823133"),
                new \src\VimeoVideo("ROTARY", "228930383"),
                new \src\VimeoVideo("The Drawing", "256141301")

            ];

            foreach ($Videos as $video) {          //klein video ist der zähler
                echo "<section><h2>" . $video->getTitle() . "</h2><p>" . $video->getOrigin() . "</p>" . $video->getIFrame() . "</section>";
    }

    ?>
</main>

    <footer>
        <a href="https://www.youtube.com/channel/UCpJ6Dn01AqjvFVN2EiK72Ag" target="_blank"> To visit the original channel, click here </a>
    </footer>


</body>
</html>