{extends file="layout/layout.tpl"}
{block name=content}
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover" id="jeuxVideo">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Réalisateur</th>
                        <th>Année</th>
                        <th>Plateforme</th>
                        <th colspan="2" class="text-center"><a href="create" class="btn btn-outline-success btn-block"><i class="fas fa-plus"></i></a></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Réalisateur</th>
                    <th>Année</th>
                    <th>Plateforme</th>
                    <th colspan="2"></th>
                    </tr>
                </tfoot>
                <tbody>
                {foreach $jeux as $jeu}
                    <tr>
                        <td>{{$jeu->ID}}</td>
                        <td>{{$jeu->nom}}</td>
                        <td>{{$jeu->realisateur}}</td>
                        <td>{{$jeu->annee}}</td>
                        <td>{{$jeu->plateforme}}</td>
                        <td>
                            <a href="update/{{$jeu->ID}}" class="btn btn-outline-warning btn-block"><i class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a href="delete/{{$jeu->ID}}" class="btn btn-outline-danger btn-block delete"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>

    <script>
    (function(){
        var itemsToDelete = document.querySelectorAll('.delete');
        itemsToDelete.forEach(function(item){
            // console.log(item);
            item.addEventListener("click", function(e) {
                if(!confirm("Are you sure you want to delete ?")){
                    e.preventDefault();
                }
            });
        });
    })();
    </script>
{/block}