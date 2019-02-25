<div class="popup_supprimer" id="popup_supprimer">

<form>

    <input type="radio" id="sup-album" name="delete" value="sup_album" checked>
    <label for="sup-album">Supprimer de l'album</label>
    <p id="supp_p">Les documents seront placés dans l'album par défaut</p>

    <br><br>

    <input type="radio" id="sup-def" name="delete" value="sup_definitif">
    <label for="sup-def">Supprimer définitivement</label>

    <br>

    <input type="submit" name="delete" class="button_delete" value="Supprimer">

</form>
    
    <div class="croix" id="croix_supprimer"><i class="fas fa-times"></i></div>

</div>

<script>
    
    var btn_supprimer = document.getElementById("supprimer");
    var popup_supprimer = document.getElementById("popup_supprimer");
    var croix_supprimer = document.getElementById("croix_supprimer");
    
    btn_supprimer.addEventListener("click", function() {
            popup_supprimer.style.display = "block";
    });
    
    croix_supprimer.addEventListener("click", function (){
        popup_supprimer.style.display = "none";
    });
    
    </script>