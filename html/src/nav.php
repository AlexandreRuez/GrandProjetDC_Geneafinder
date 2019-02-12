<nav id="Album_wrapper">
    <div id="Album_left">  </div>
    <ul id="Album_list">
        <li id="Album_add"> <i class="fas fa-plus-circle fa-5x"></i> </li>
        <li id="" class="navitem"> <p> Jean René 1974 </p> </li>
        <li id="navitem_1" class="navitem"> <p> Arrières grand parents </p> </li>
        <li id="navitem_2" class="navitem"> <p> Colette 1985 </p> </li>
        <li id="navitem_3" class="navitem"> <p> Vacances jacques 1960 </p> </li>
        <li id="navitem_4" class="navitem"> <p> Ski 1987 </p> </li>
        <li id="" class="navitem"> <p> Potos école </p> </li>
        <li id="" class="navitem"> <p> Photos vacances </p> </li>
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
