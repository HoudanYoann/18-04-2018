$(function () {

    $("#submit").click(function (e) {
        // J'annule la function du bouton submit afin que le bouton soit caché (si je veux le cacher)
        e.preventDefault();
        // Je retire le message d'erreur disant que je n'ai rien noté en mettant : html('');
        $('#resultMarque').html('');
        $('#resultModele').html('');
        $('#resultAnnee').html('');
        $('#resultCouleur').html('');
        $('#post').html('');


        // $("#submit").hide();


        // Envoi de la requête HTTP en mode asynchrone
        var marque = $('#marque').val();
        var modele = $('#modele').val();
        var annee  = $('#annee').val();
        var couleur = $('#couleur').val();

        if (marque.length == 0 || modele.length == 0 || annee.length == 0 || couleur.length == 0){
            if (marque.length == 0){
                $('#resultMarque').html('<div class="MarqueVide">Veuillez remplir le champs : Marque</div>')
            }
            if (modele.length == 0) {
                $('#resultModele').append('<div class="ModeleVide">Veuillez remplir le champs : Modèle</div>')
            }
            if (annee.length == 0) {
                $('#resultAnnee').append('<div class="AnneeVide">Veuillez remplir le champs : Année</div>')
            }
            if (couleur.length == 0) {
                $('#resultCouleur').append('<div class="CouleurVide">Veuillez remplir le champs : Couleur</div>')
            }
        } else {
            $.ajax({
                // PARAMETRES
                url: '', // 
                type: 'POST', // On récupère la méthode (post)
                data: {
                    marque: marque,
                    modele: modele,
                    annee: annee,
                    couleur: couleur,
                }, // On prend les données du POST['email'] et POST['password']
                dataType: 'json',

                // TRAITEMENT DU SUCCES
                success: function(data) { // Si ça c'est passé avec succès
                },


                // TRAITEMENT DE L'ERROR
                error: function(data){},
            });
            // Je rajoute une phase de succès quand les champs ont bien été remplis.
            $('#post').append('<p> Votre véhicule a été ajoutée </p>')
        } // Else


    });

});