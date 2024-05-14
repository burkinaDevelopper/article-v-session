$(document).ready(function() {
    // Fonction pour récupérer et afficher les données JSON
    // var urlGet=window.location.href;
    // var urlPost=window.location.href;
    // urlGet=urlGet.split("articles");
    // urlGet=urlGet[0]+"favorit-json";

    // urlPost=urlPost.split("favorites");
    // urlPost=urlPost[0]+"delete_favorite";

    function loadData() {
        $.getJSON("http://localhost/azzouz/favorit-json", function(data) {
            $("#itemList").empty(); // Vide la liste avant d'ajouter les nouveaux éléments
            if (data.length !=0) {
                $.each(data, function(index, row) {
                    var display=`
                            <div class='article'>;
                                <h3><a href='${URL}/articles/${row['id_art']}'>${row['title_art']}</a></h3>
                                <figure>
                                   <img src='${PUBLIQUE}/asset/images/${row['image_art']}' alt='' class='article-image'>
                                </figure>
                                <p>Date: ${row['date_art']}</p>
                                <button data-id='${row['id_art']}' class='favorite-button deleteBtn' type='submit'>Supprimer</button>
                            </div>;
                    `
                    $("#itemList").append(display);
                });
                
            } else {
                var display=`<p class='error-message' align='center'>Votre panier est vide.</p>`;
                $("#itemList").append(display);
            }  
        });
    }

    // Appel de la fonction pour charger les données au chargement de la page
    loadData();

    $(document).on("click", ".deleteBtn", function() {
        var itemId = $(this).closest("button").data("id");
        
        $.post("http://localhost/azzouz/delete_favorite", { article_id: itemId }, function() {
            loadData(); // Recharge les données après la suppression
        });
    });

});