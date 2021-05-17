{extends file="layout/layout.tpl"}
{block name=content}
    
    <form name="AddJeuVideo" method="POST" action="update">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control" value="{$jeu->nom}">
        <label for="realisateur">Réalisateur</label>
        <input name="realisateur" id="realisateur" class="form-control" placeholder="Réalisateur" value="{$jeu->realisateur}">
        <label for="annee">Année</label>
        <input type="number" name="annee" id="annee" placeholder="Année" class="form-control" value="{$jeu->annee}">
        <label for="plateforme">Plateforme</label>
        <input type="text" name="plateforme" id="plateforme" placeholder="Plateforme" class="form-control" value="{$jeu->plateforme}">
        <hr>
        <input type="hidden" name="action" id="action" value="update">
        <input type="hidden" name="ID" id="ID" value="{$jeu->ID}">
        <a type="button" class="btn btn-secondary" href="accueil">Retour</a>
		<button type="Submit" class="btn btn-primary">Save data</button>
    </form>
{/block}