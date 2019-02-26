<div id="diapo_wrapper" class="display_none">
    <div id="diapo_exit"> <i class="fas fa-times-circle fa-3x"></i> </div>
    <div id="left"></div>
    <ul id="diapo">
        <li class="navitem_diapo" style='background-image: url("../img/photo-1.jpg");'></li>
        <li class="navitem_diapo" style='background-image: url("../img/photo-2.jpg");'></li>
        <li class="navitem_diapo" style='background-image: url("../img/photo-3.jpg");'></li>
        <li class="navitem_diapo" style='background-image: url("../img/photo-4.jpg");'></li>
        <li class="navitem_diapo" style='background-image: url("../img/photo-5.jpg");'></li>
    </ul>
    <div id="right"></div>
    <div id="diapo_play"> <i class="fas fa-play-circle fa-3x"></i> </div>
    <div id="diapo_pause" class="display_none"> <i class="fas fa-pause-circle fa-3x"></i> </div>
</div>

<script>
    document.getElementsByClassName("navitem_diapo")[0].id="navitem_diapo";
    submitB = document.getElementById("left");
    submitB.addEventListener('click', function search() {
        var check_L=0;
        for (i=0; i<document.getElementsByClassName("navitem_diapo").length; i++) {
            if (document.getElementsByClassName("navitem_diapo")[0].id == "navitem_diapo"){

            }
            else {
                if (document.getElementsByClassName("navitem_diapo")[i].id == "navitem_diapo" && check_L==0) {
                    for (x=0; x<document.getElementsByClassName("navitem_diapo").length; x++) {
                        document.getElementsByClassName("navitem_diapo")[x].id = "";
                    }

                    document.getElementsByClassName("navitem_diapo")[i-1].id = "navitem_diapo";
                    check_L=1;
                }
            }
        }
        check_L=0;
    });

    submitB = document.getElementById("right");
    submitB.addEventListener('click', function search() {
        var check_R=0;
        for (i=0; i<document.getElementsByClassName("navitem_diapo").length; i++) {
            if (document.getElementsByClassName("navitem_diapo")[((document.getElementsByClassName("navitem_diapo").length)-1)].id == "navitem_diapo"){

            }
            else {
                if (document.getElementsByClassName("navitem_diapo")[i].id == "navitem_diapo" && check_R==0) {
                    for (x=0; x<document.getElementsByClassName("navitem_diapo").length; x++) {
                        document.getElementsByClassName("navitem_diapo")[x].id = "";
                    }
                    document.getElementsByClassName("navitem_diapo")[i+1].id = "navitem_diapo";
                    check_R=1;
                }
            }
        }
        check_R=0;
    });

    var isPaused = true;

    play = document.getElementById("diapo_play");
    play.addEventListener('click', function search() {
        isPaused = false;
        document.getElementById("diapo_play").className="display_none";
        document.getElementById("diapo_pause").className="";
    });


    pause = document.getElementById("diapo_pause");
    pause.addEventListener('click', function search() {
        isPaused = true;
        document.getElementById("diapo_play").className="";
        document.getElementById("diapo_pause").className="display_none";
    });

    exit = document.getElementById("diapo_exit");
    exit.addEventListener('click', function search() {
        document.getElementById("diapo_wrapper").className="display_none";
        document.getElementsByTagName("body")[0].style.overflow="auto";
    });

    open = document.getElementById("diaporama");
    open.addEventListener('click', function search() {
        document.getElementById("diapo_wrapper").className="";
        document.getElementsByTagName("body")[0].style.overflow="hidden";
    });

    setInterval( function () {
        if(!isPaused) {
            var check_R = 0;
            for (i = 0; i < document.getElementsByClassName("navitem_diapo").length - 1; i++) {
                if (document.getElementsByClassName("navitem_diapo")[((document.getElementsByClassName("navitem_diapo").length) - 1)].id == "navitem_diapo") {
                    for (x = 0; x < document.getElementsByClassName("navitem_diapo").length; x++) {
                        document.getElementsByClassName("navitem_diapo")[x].id = "";
                    }
                    document.getElementsByClassName("navitem_diapo")[0].id = "navitem_diapo";
                }
                else {
                    if (document.getElementsByClassName("navitem_diapo")[i].id == "navitem_diapo" && check_R == 0) {
                        for (x = 0; x < document.getElementsByClassName("navitem_diapo").length; x++) {
                            document.getElementsByClassName("navitem_diapo")[x].id = "";
                        }
                        document.getElementsByClassName("navitem_diapo")[i + 1].id = "navitem_diapo";
                        check_R = 1;
                    }
                }
            }
        }
    }, 5000);
</script>
