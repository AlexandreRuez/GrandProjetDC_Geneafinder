
<section class="main_btn" id="actions">
	<btn href="#" id="diaporama">
	Diaporama
	<i class="fas fa-play-circle fa-lg"></i></btn>

	<btn href="#" id="ajouter">
	Ajouter
	<i class="fas fa-plus-circle fa-lg"></i></btn>

	<btn href="#" id="deplacer">
	Déplacer
	<i class="fas fa-arrow-circle-right fa-lg"></i></btn>

	<btn href="#" id="supprimer">
	Supprimer
	<i class="fas fa-trash-alt"></i></btn>

</section>

<script>
    
    //barre actions

    
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