<div class="popup_nouveau_album" id="popup_nouveau_album">
    <form>
        <input type="text" name="nom_album" placeholder="Nom de l'album">

        <input type="submit" value="Ajouter">
    </form>
    
    <div class="croix" id="croix_nouveau"><i class="fas fa-times"></i></div>
</div>


<script>
    
    var btn_nouveau = document.getElementById("Album_add");
    var popup_nouveau_album = document.getElementById("popup_nouveau_album");
    var croix_nouveau = document.getElementById("croix_nouveau");
    
    btn_nouveau.addEventListener("click", function() {
        if (popup_nouveau_album.style.display === "none") {
            popup_nouveau_album.style.display = "block";
        } else {
            popup_nouveau_album.style.display = "none";
        }
    });
    
    croix_nouveau.addEventListener("click", function (){
        popup_nouveau_album.style.display = "none";
    });
    
    </script>