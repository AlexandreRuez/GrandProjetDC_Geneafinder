<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galerie</title>
    <link rel="stylesheet" href="../css/main_nav.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<header>
    <p>Header GENEAFINDER</p>
</header>
<hr>
<section class="searchbar">
    <p>Barre de recherche + stockage</p>
</section>
<hr>
<nav id="Album_wrapper">
    <div id="Album_left">  </div>
    <ul id="Album_list">
        <li id="Album_add"> <i class="fas fa-plus-circle fa-5x"></i> </li>
        <li id="" class="navitem"> <div style='background-image: url("../img/photo-1.jpg");'> </div> <p> Jean René 1974 </p> </li>
        <li id="navitem_1" class="navitem"> <div style="background-image: url('../img/photo-2.jpg')"> </div> <p> Arrières grand parents </p> </li>
        <li id="navitem_2" class="navitem"> <div style="background-image: url('../img/photo-3.jpg')"> </div> <p> Colette 1985 </p> </li>
        <li id="navitem_3" class="navitem"> <div style="background-image: url('../img/photo-4.jpg')"> </div> <p> Vacances jacques 1960 </p> </li>
        <li id="navitem_4" class="navitem"> <div style="background-image: url('../img/photo-5.jpg')"> </div> <p> Ski 1987 </p> </li>
        <li id="" class="navitem"> <div style="background-image: url('../img/photo-6.jpg')"> </div> <p> Photos école </p> </li>
        <li id="" class="navitem"> <div style="background-image: url('../img/photo-7.jpg')"> </div> <p> Photos vacances </p> </li>
    </ul>
    <div id="Album_right"> </div>
</nav>

<script>

    submitB = document.getElementById("Album_left");
    submitB.addEventListener('click', function search() {
        var check_L=0;
        for (i=0; i<document.getElementsByClassName("navitem").length; i++) {
            if (document.getElementsByClassName("navitem")[0].id == "navitem_1"){

            }
            else {
                if (document.getElementsByClassName("navitem")[i].id == "navitem_1" && check_L==0) {
                    for (x=0; x<document.getElementsByClassName("navitem").length; x++) {
                        document.getElementsByClassName("navitem")[x].id = "";
                    }

                    document.getElementsByClassName("navitem")[i-1].id = "navitem_1";
                    document.getElementsByClassName("navitem")[i].id = "navitem_2";
                    document.getElementsByClassName("navitem")[i+1].id = "navitem_3";
                    document.getElementsByClassName("navitem")[i+2].id = "navitem_4";
                    check_L=1;
                }
            }
        }
        check_L=0;
    });

    submitB = document.getElementById("Album_right");
    submitB.addEventListener('click', function search() {
        var check_R=0;
        for (i=0; i<document.getElementsByClassName("navitem").length; i++) {
            if (document.getElementsByClassName("navitem")[((document.getElementsByClassName("navitem").length)-1)].id == "navitem_4"){

            }
            else {
                if (document.getElementsByClassName("navitem")[i].id == "navitem_1" && check_R==0) {
                    for (x=0; x<document.getElementsByClassName("navitem").length; x++) {
                        document.getElementsByClassName("navitem")[x].id = "";
                    }
                    document.getElementsByClassName("navitem")[i+1].id = "navitem_1";
                    document.getElementsByClassName("navitem")[i+2].id = "navitem_2";
                    document.getElementsByClassName("navitem")[i+3].id = "navitem_3";
                    document.getElementsByClassName("navitem")[i+4].id = "navitem_4";
                    check_R=1;
                }
            }
        }
        check_R=0;
    });

</script>

<hr>
<section class=main>
    <p>Main = galerie</p>
</section>
<hr>
<footer>
    <p>Footer GENEAFINDER</p>
</footer>

</body>
</html>
