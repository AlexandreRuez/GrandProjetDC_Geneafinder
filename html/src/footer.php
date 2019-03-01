<a href="#top-page" id="btn_top-page"><span>Vers le haut de la page</span><i class="fas fa-angle-up fa-lg"></i></a>
<script>

    var checkboxs = document.getElementsByClassName('input_check');

    var checkboxs = document.querySelectorAll('input.input_check[type="checkbox"]');

    var btn_ajouter = document.getElementById('ajouter');
    var btn_deplacer = document.getElementById('deplacer');
    var btn_supprimer = document.getElementById('supprimer');
    var count = 0;

    checkboxs.forEach(function (elem) {
    elem.addEventListener("click", function () {
        if (elem.checked === true)
        {   
                count++;
        } else {
                count --;
        }
        if (count > 0) 
        {   
                btn_deplacer.style.display = "block";
                btn_supprimer.style.display = "block";
        } else {
                btn_deplacer.style.display = "none";
                btn_supprimer.style.display = "none";
        }
    ;
    });
});   

    
    var barre_action = document.getElementById("actions");
    var galerie = document.getElementById("galerie");
    
    window.addEventListener("scroll", function() {
    if (pageYOffset > 490) {
        barre_action.style.position = "fixed";
        barre_action.style.top = "82px";
        barre_action.style.marginBottom = "100px";
        barre_action.style.marginTop = "0";
        galerie.style.paddingTop = "110px";
        
    } else {
        barre_action.style.position = "relative";
        barre_action.style.top = "auto";
        barre_action.style.marginBottom = "20px";
        barre_action.style.marginTop = "20px";
        galerie.style.paddingTop = "0";
    }});


    
    
</script>
<footer>

    <hr>

    <section id="social">
        <h4>Suivez-nous sur les réseaux sociaux !</h4>
        <div id="reseau">
            <a href="https://www.facebook.com/Geneafinder-541996719522534/?ref=br_rs" target="_blank" id="facebook">facebook</a>
            <a href="https://twitter.com/geneafinder?lang=fr"  target="_blank" id="twitter">twitter</a>
        </div>
    </section>

</footer>

<script>

    var toppage = document.getElementById("btn_top-page");
    window.addEventListener("scroll", function () {
        if (pageYOffset > 100) {
            toppage.style.display = "block"
        } else {
            toppage.style.display = "none";
        }
    })


    
    var img_1 = document.getElementById("image-1");
    var croix_img_1 = document.getElementById("croix_1");
    var lightbox_1 = document.getElementById("light-image-1");

        
    img_1.addEventListener('click', function() {
        lightbox_1.style.display = "block";
    });    
    
    croix_img_1.addEventListener('click', function() {
        lightbox_1.style.display = "none";
    });
    
    var img_2 = document.getElementById("image-2");
    var croix_img_2 = document.getElementById("croix_2");
    var lightbox_2 = document.getElementById("light-image-2");

        
    img_2.addEventListener('click', function() {
        lightbox_2.style.display = "block";
    });    
    croix_img_2.addEventListener('click', function() {
        lightbox_2.style.display = "none";
    });
    
    var img_3 = document.getElementById("image-3");
    var croix_img_3 = document.getElementById("croix_3");
    var lightbox_3 = document.getElementById("light-image-3");

        
    img_3.addEventListener('click', function() {
        lightbox_3.style.display = "block";
    });    
    croix_img_3.addEventListener('click', function() {
        lightbox_3.style.display = "none";
    });
    
    var img_4 = document.getElementById("image-4");
    var croix_img_4 = document.getElementById("croix_4");
    var lightbox_4 = document.getElementById("light-image-4");

        
    img_4.addEventListener('click', function() {
        lightbox_4.style.display = "block";
    });    
    croix_img_4.addEventListener('click', function() {
        lightbox_4.style.display = "none";
    });
    
    var img_5 = document.getElementById("image-5");
    var croix_img_5 = document.getElementById("croix_5");
    var lightbox_5 = document.getElementById("light-image-5");

        
    img_5.addEventListener('click', function() {
        lightbox_5.style.display = "block";
    });    
    croix_img_5.addEventListener('click', function() {
        lightbox_5.style.display = "none";
    });
    
    var img_6 = document.getElementById("image-6");
    var croix_img_6 = document.getElementById("croix_6");
    var lightbox_6 = document.getElementById("light-image-6");

        
    img_6.addEventListener('click', function() {
        lightbox_6.style.display = "block";
    });    
    croix_img_6.addEventListener('click', function() {
        lightbox_6.style.display = "none";
    });

    var img_7 = document.getElementById("image-7");
    var croix_img_7 = document.getElementById("croix_7");
    var lightbox_7 = document.getElementById("light-image-7");

        
    img_7.addEventListener('click', function() {
        lightbox_7.style.display = "block";
    });    
    croix_img_7.addEventListener('click', function() {
        lightbox_7.style.display = "none";
    });
    
    var img_8 = document.getElementById("image-8");
    var croix_img_8 = document.getElementById("croix_8");
    var lightbox_8 = document.getElementById("light-image-8");

        
    img_8.addEventListener('click', function() {
        lightbox_8.style.display = "block";
    });    
    croix_img_8.addEventListener('click', function() {
        lightbox_8.style.display = "none";
    });
    
    var img_9 = document.getElementById("image-9");
    var croix_img_9 = document.getElementById("croix_9");
    var lightbox_9 = document.getElementById("light-image-9");

        
    img_9.addEventListener('click', function() {
        lightbox_9.style.display = "block";
    });    
    croix_img_9.addEventListener('click', function() {
        lightbox_9.style.display = "none";
    });
    
    var img_10 = document.getElementById("image-10");
    var croix_img_10 = document.getElementById("croix_10");
    var lightbox_10 = document.getElementById("light-image-10");

        
    img_10.addEventListener('click', function() {
        lightbox_10.style.display = "block";
    });    
    croix_img_10.addEventListener('click', function() {
        lightbox_10.style.display = "none";
    });
    
    var img_11 = document.getElementById("image-11");
    var croix_img_11 = document.getElementById("croix_11");
    var lightbox_11 = document.getElementById("light-image-11");

        
    img_11.addEventListener('click', function() {
        lightbox_11.style.display = "block";
    });    
    croix_img_11.addEventListener('click', function() {
        lightbox_11.style.display = "none";
    });


</script>
