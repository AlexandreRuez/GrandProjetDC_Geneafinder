<a href="#top-page" id="btn_top-page"><span>Vers le haut de la page</span><i class="fas fa-angle-up fa-lg"></i></a>

<footer>
    
    <hr>
    
		<section id="social">
			<h4>Suivez-nous sur les réseaux sociaux !</h4>
			<div id="reseau">
				<a href="https://www.facebook.com/Geneafinder-541996719522534/?ref=br_rs" id="facebook">facebook</a>
				<a href="https://twitter.com/geneafinder?lang=fr" id="twitter">twitter</a>
			</div>
		</section>

	</footer>

<script>
    
    var toppage = document.getElementById("btn_top-page");
    
    window.addEventListener("scroll", function() {
    if (pageYOffset > 100) {
        toppage.style.display = "block"
    } else {
        toppage.style.display = "none";
    }})
    
    </script>