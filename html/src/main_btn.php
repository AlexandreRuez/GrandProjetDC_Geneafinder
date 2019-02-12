<<<<<<< HEAD
<section class="main_btn">
    <a href="#" id="diaporama">
        Diaporama
        <i class="fas fa-play-circle fa-lg"></i></a>
        
    <a href="#" id="ajouter">
        Ajouter
        <i class="fas fa-plus-circle fa-lg"></i></a>

    <a href="#" id="deplacer">
        Déplacer
        <i class="fas fa-arrow-circle-right fa-lg"></i></a>

    <a href="#" id="supprimer">
        Supprimer
        <i class="fas fa-trash-alt"></i></a>

</section>
=======
<section class="main_btn" id="actions">
	<a href="#" id="diaporama">
	Diaporama
	<i class="fas fa-play-circle fa-lg"></i></a>

	<input type="checkbox" id="image">

	<a href="#" id="ajouter">
	Ajouter
	<i class="fas fa-plus-circle fa-lg"></i></a>

	<a href="#" id="deplacer">
	Déplacer
	<i class="fas fa-arrow-circle-right fa-lg"></i></a>

	<a href="#" id="supprimer">
	Supprimer
	<i class="fas fa-trash-alt"></i></a>

</section>

<script>



var checkbox = document.getElementById('image');
var btn_ajouter = document.getElementById('ajouter');
var btn_deplacer = document.getElementById('deplacer');
var btn_supprimer = document.getElementById('supprimer');

checkbox.addEventListener('click', function() {
	if (checkbox.checked) {
	btn_deplacer.style.display = "block";
	btn_supprimer.style.display = "block";
} else {
	btn_deplacer.style.display = "none";
	btn_supprimer.style.display = "none";
}
});

    
    var barre_action = document.getElementById("actions");
    
    window.addEventListener("scroll", function() {
    if (pageYOffset > 520) {
        barre_action.style.position = "fixed";
        barre_action.style.top = "82px";
        barre_action.style.marginBottom = "100px";
        barre_action.style.marginTop = "0";
        
    } else {
        barre_action.style.position = "relative";
        barre_action.style.top = "auto";
        barre_action.style.marginBottom = "20px";
        barre_action.style.marginTop = "20px";
    }})

</script>
>>>>>>> 5d72387110447e9f86821985413f3a8e7a003a9f
