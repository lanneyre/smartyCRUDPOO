{extends file="layout/layout.tpl"}
{block name=content}
    <form name="AddJeuVideo" method="POST" action="add">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control">
        <label for="realisateur">Réalisateur</label>
        <textarea name="realisateur" id="realisateur" class="form-control" placeholder="Réalisateur"></textarea>
        <label for="annee">Année</label>
        <input type="number" name="annee" id="annee" placeholder="Année" class="form-control">
        <label for="plateforme">Plateforme</label>
        <input type="text" name="plateforme" id="plateforme" placeholder="Plateforme" class="form-control">
        <hr>
        <input type="hidden" name="action" id="action" value="add">
        <a type="button" class="btn btn-secondary" href="accueil">Retour</a>
		<button type="Submit" class="btn btn-primary">Save data</button>
    </form>
{/block}