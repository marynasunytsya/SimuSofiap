<form id="form_simu">

    <div class="input_tab">
        <label for="employeur">Employeur</label>
        <select name="employeur" id="employeur_select">
            <option value="sncf">SNCF</option>
            <option value="edf">EDF</option>
        </select>
    </div>

    <div class="input_tab">
        <label for="montant_p">Montant du projet</label>
        <input type="text" id="montant" name="montant_p" class="input_euro">
    </div>
    
    <div class="input_tab">
        <label for="residence_p">Résidence principale</label>
        <select name="residence_p" id="residence_p_select">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
    </div>
  
    <div class="input_tab">
        <label for="duree">Durée souhaitée (en mois)</label>
        <input type="text" id="duree" name="duree">
    </div>

    <div class="input_tab">
        <label for="apport">Apport personnel</label>
        <input type="text" id="apport" name="apport" class="input_euro">
    </div>

    <div class="input_tab">
        <label for="cp_acquis">Code postal de l'acquisition</label>
        <input type="text" id="cp_acquis" name="cp_acquis">
    </div>

    <div class="input_tab">
        <label for="ville_acquis">Ville de l'acquisition</label>
        <input type="text" id="ville_acquis" name="ville_acquis">
    </div>

    <div class="input_tab">
        <label for="emprunteurs">Emprunteurs</label>
        <select name="emprunteurs" id="emprunteurs">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
    </div>
  
    <input type="submit" id="submit_btn" value="Suivant">
</form>