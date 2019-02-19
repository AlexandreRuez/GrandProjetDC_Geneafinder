<div class="popup_deplacer" id="popup_deplacer">
    <form>
        <label for="album">Album</label>
        <select name="album" id="album">
            <option value="jean-rene-1974">Jean René 1974</option>
            <option value="arrieres-grands-parents">Arrières grand-parents</option>
            <option value="colette-1985">Colette 1985</option>
            <option value="vacances-jacques-1960">Vacances Jacques 1960</option>
        </select>

        <input type="submit" value="Déplacer">
    </form>
    
    <div class="croix" id="croix_deplacer"><i class="fas fa-times"></i></div>
</div>


<script>
    
    var btn_deplacer = document.getElementById("deplacer");
    var popup_deplacer = document.getElementById("popup_deplacer");
    var croix_deplacer = document.getElementById("croix_deplacer");
    
    btn_deplacer.addEventListener("click", function() {
            popup_deplacer.style.display = "block";
    });
    
    croix_deplacer.addEventListener("click", function (){
        popup_deplacer.style.display = "none";
    });
    
    </script>