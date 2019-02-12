<a href="#top-page" id="btn_top-page"><span>Vers le haut de la page</span><i class="fas fa-angle-up fa-lg"></i></a>
<script>
    var checkboxs = document.querySelectorAll('input[type="checkbox"]');
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
    })
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

</script>