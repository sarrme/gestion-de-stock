<div class="cd-popup is-visible" role="alert" id="cache">
	<div class="cd-popup-container">

		<p>Etes Vous sûr pour supprimer <?php echo $categorie_cible->nom_categorie;?> ?</p>

		<ul class="cd-buttons">
			<li>
			<form action="<?php echo URL; ?>categorie/supprimercategorie" method="POST">
	            	<input type="hidden" name="id" value="<?php echo $categorie_cible->id_categorie; ?>" />
	           		<input type="submit" name="valider_supprimer" value="Valider" />
	      	</form>
	      	</li>

			<li><a href="#" onclick="validation()">Annuler</a></li>
		</ul>
		<a href="#" class="cd-popup-close img-replace">Close</a>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->

<script language="javascript">
function validation() 
{
    document.getElementById("cache").className = "cd-popup";
}
</script>
