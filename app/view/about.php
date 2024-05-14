<?php include_once('header.php') ?>





<div class="body-1">


    <!-- single page section of about us -->
    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 1:
        </h1>
        <div class="magazine__main-content">
            <p>Ce projet consiste en la création d'une imitation du site Google News, avec cinq pages HTML et des
                styles CSS intégrant des techniques avancées telles que Grid et Flexbox. L'objectif est de
                reproduire les fonctionnalités principales du site, en mettant en œuvre une page d'actualités, une
                page de formulaire, une page d'article principal, page présentant tous les articles sélectionnés,et
                une à propos.</p>
        </div>

        <!-- main content of about us page -->

        <main class="magazine__main-content">
            <h3> 1. Page d'Actualités (landing page): </h3>
            <p>
                La page d'actualités est la première vue du site, accueillant les utilisateurs avec une sélection de
                8 à 10 articles de presse. Chaque article est représenté par un titre et une illustration. Le design
                est réalisé en utilisant Grid et Flexbox pour une mise en page efficace et responsive.

            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot home.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour la page d'accueil/landing page nommé "index.html".
            </cite>
            <!-- second page: formular page -->
            <h3> 2. Page Article Principal: </h3>
            <p>
                La page d'article principal présente en détail un article spécifique. Elle affiche un titre, une accroche (résumé), le corps de l'article et une illustration. Le design est soigné, mettant en valeur le contenu tout en garantissant une expérience utilisateur optimale.

            </p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot article.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour page Article Principal
            </cite>
            <!-- third page: the main article -->
            <h3>3. Page Formulaire:</h3>
            <p>La page formulaire est conçue pour permettre aux utilisateurs de soumettre des articles ou des commentaires. Elle offre une interface conviviale avec des champs appropriés et un design responsive pour s'adapter à divers dispositifs.
                Nous avons conçu un ensemble de champs de saisie pour recueillir
                des informations de profil utilisateur telles que le nom, l'e-mail et la biographie.
                Chaque champ de saisie est soigneusement stylisé pour améliorer l'esthétique globale et
                l'expérience utilisateur.
            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot formulaire.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour page Formulaire
            </cite>
            <!-- fourth page:showcase articles -->
            <h3>4. Page Présentation des Articles Sélectionnés:</h3>
            <p>Cette page regroupe les articles sélectionnés par catégorie ou source, présentant les trois titres des articles principaux pour chaque journal. L'utilisation de techniques CSS avancées assure une mise en page esthétique et responsive.</p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/Screenshot Page Présentation des Articles Sélectionnés.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour la Page Présentation des Articles Sélectionnés
            </cite>
            <h3>5. Page "À Propos":</h3>
            <p> La page "À Propos" offre une vue d'ensemble du site en regroupant les différentes pages créées dans le cadre de ce projet avec la déscription de chaque page ci-joint caprure d'écran prise.</p>


            <h3>Livrables annexes:</h3>

            <p>- Un fichier de styles CSS global qui harmonise l'apparence du site sur toutes les pages.</p>
            <p>- Des images optimisées et bien intégrées pour améliorer l'expérience visuelle.</p>
            <p>- Des pages HTML bien structurées, respectant les normes de développement web.</p>
            </p>

            <h3>Remarques:</h3>
            <p>Le site est responsive, assurant une expérience utilisateur cohérente sur une gamme d'appareils, des grands écrans aux smartphones.</p>
            <h3>Date de Livrable:</h3>
            <p>Le projet sera livré d'ici le 14 Décembre 2022, garantissant la disponibilité du site dans les délais impartis.

                Ce rapport synthétise les principales caractéristiques du projet, mettant en évidence les choix de conception et les techniques utilisées pour atteindre les objectifs donner </p>
        </main>
    </section>

    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 2:
        </h1>
        <div class="magazine__main-content">
            <p>
                Ce livrable consiste à utiliser le modèle d'architecture MVC (Modèles, Vues, Contrôleurs) et à utiliser des fichiers CSV pour la connexion des utilisateurs. De plus, il inclut la fonctionnalité de basculement entre les modes sombre et normal, ainsi qu'une petite base de données pour les articles et la gestion des favoris.
            </p>
        </div>



        <main class="magazine__main-content">
            <h3> 1. Page de Login (Login page): </h3>
            <p>

                La page de connexion permet aux utilisateurs de se connecter en utilisant les informations enregistrées dans le fichier login.csv, qui contient l'email et le mot de passe. Une fois connecté, l'utilisateur peut ajouter des articles à ses favoris.

                Exemple d'utilisation :

                Email administrateur : admin@admin.com

                Mot de passe administrateur : admin

                Email utilisateur : user@user.com

                Mot de passe utilisateur : user

                En cas d'erreur dans les informations, l'utilisateur doit vérifier son email ou son mot de passe pour s'assurer de leur exactitude.
            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/loginpage.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour page login page
            </cite>

            <h3>2. Page pour la rechreche:</h3>
            <p>Cette page permet au utilisateur de faire la rechreche en tapant soit un titre ou la sujet soit la catégorie en tapant par exemple ici guerre
            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/recherche.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour la recherche
            </cite>

            <h3>3. Page de fonctionnalités DARK mode</h3>
            <p>Cette fonctionnalités permettre au utilisateur de changer le mode en cliquant sur l'icon soit le mode sombre soit le mode normal </p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/pagedarkmode.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour le Dark mode
            </cite>
            <h3>4. Page d'affichage aprés faire la connexion</h3>
            <p>cette page montre apres une connexion réussite ,l'utilisateur va voir ce affichage ,bonjour Nom d'utilisateur,et aussi a l'acces pour faire les favorie en cliquant sur le button ajouter au panier,et aussi on a le lien Déconnexion on cas ou l'utilisateur veut déconnecté de son compte </p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/pagede connexion.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour affichage aprés la connexion
            </cite>
            <h3>5. Page de favorie</h3>
            <p>Cette page affiche les articles que l'utilisateur a marqués comme favoris ou qu'il préfère consulter ultérieurement. </p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/favorie.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour la page favorie
            </cite>




        </main>
    </section>
    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 3:
        </h1>
        <div class="magazine__main-content">
            <p>
                Dans la partie 3 de notre projet, nous devons intégrer une base de données SQL pour stocker les articles. En parallèle, nous allons mettre en place une connexion via une API pour gérer l'authentification des utilisateurs lors de la connexion. De plus, nous allons également utiliser cette API pour gérer les fonctionnalités liées aux sponsors. En outre, nous ajouterons une barre de recherche pour permettre aux utilisateurs de trouver rapidement des articles spécifiques. Enfin, nous veillerons à ce que chaque article puisse être consulté en détail, avec son contenu, sa catégorie et son titre affichés de manière claire et organisée.
        </div>



        <main class="magazine__main-content">
            <h3> 1.la connexion de Login PAR API JSON </h3>
            <p>

                La page de connexion permet aux utilisateurs de se connecter en utilisant les informations enregistrées dans le api, qui contient le username et le mot de passe. Une fois connecté, l'utilisateur peut ajouter des articles à ses favoris.

                Exemple d'utilisation :

                username administrateur : admin

                Mot de passe administrateur : admin

                Ema utilisateur : user

                Mot de passe utilisateur : user

            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/loginPage2.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour page login page
            </cite>
            <h3>2. Page de affichage de tout les articles</h3>
            <p>Cette fonctionnalités permettre au utilisateur d'afficher tout les artiles a partir de la base de donnne 4PIDW en ultilisant une requete SQL et aussi affichage en PAGINATION </p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/affichagetout.png" alt="">

                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/articleaffcihae.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour l'affichage des articles
            </cite>
            <h3>3. Page pour la rechreche:</h3>
            <p>cette partie est commme livrable 2 mais maintenant la recherche est faite par une requete SQL,Cette page permet au utilisateur de faire la rechreche en tapant soit un titre ou la sujet soit la catégorie en tapant par exemple ici guerre
            </p>

            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/recherche1.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour la recherche
            </cite>


            <h3>4. Page d'affichage article en détails</h3>
            <p>Cette page affiche chaque article avec son contenu complet, sa catégorie et son titre. Les utilisateurs peuvent accéder à cette page pour lire en détail un article spécifique. Elle offre une vue approfondie de l'article, permettant aux utilisateurs de comprendre son sujet, son contexte et son contenu dans son intégralité. En fournissant le titre et la catégorie de l'article, les utilisateurs peuvent rapidement identifier le contenu qui les intéresse. Cette page vise à offrir une expérience utilisateur complète en permettant aux lecteurs de parcourir et de consulter les articles de manière détaillée et organisée. </p>
            <figure class="figure">
                <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/pagedetails.png" alt="">
            </figure>
            <cite class="magazine__citation">
                Capture d'ecran pour affichage d'article en details
            </cite>
            e>




        </main>
    </section>

    <section class="magazine">
        <h1 class="magazine__title">
            Livrable 4:
        </h1>
        <div class="magazine__main-content">
            <p>
                Dans la partie 4 de notre projet, D’une part, grâce à un script JQuery/AJAX, l’utilisateur peut afficher ou cacher les détails
                d’un article. Par défaut, celui-ci s’affiche sans tous les détails. En cliquant ou en passant sur
                l’article avec la souris, tous les détails de cet article sauvegardés dans la base de données
                apparaissent sur la page.
                D’une part, grâce à un autre script JQuery/AJAX, l’utilisateur peut gérer ses favoris de
                manière asynchrone (sans rafraîchissement de la page) depuis la home page. Il a la possibilité
                d’ajouter ou de retirer l’article de son choix dans ses favoris en un simple clic
        </div>



        <main class="magazine__main-content">
            <h3> Gestion asynchrone des favori</h3>
            <p>

                1. Quand l’utilisateur coche le bouton “ajouter (retirer) aux favoris” d’un article, alors un
                script JQuery est lancé (programmation événementielle) qui communiquera avec le
                serveur via une requête AJAX.
                2. A partir de celle-ci, un script PHP est lancé qui enregistre l’article sélectionné dans la
                variable session $_SESSION..
                3. Celle-ci est retournée au navigateur via la même requête AJAX. Le script JQuery affiche
                dans un
            <div> sur la page son contenu, par ex. : “vos articles favoris : [titre de ces
                articles]”.

                </p>

                <figure class="figure">
                    <img class="figure__img" src="<?= PUBLIQUE ?>/asset/images/affichagetout.png" alt="">
                </figure>
                <cite class="magazine__citation">
                    Capture d'ecran pour page login page
                </cite>

        </main>
    </section>
</div>


<hr style="margin-top: 20px;margin-bottom: 20px;border-color:transparent ;">
<footer class="footer">

    <div class="box-container" style="max-width: 1110px; margin: auto; padding: 16pxs;border-radius: 18px;">

        <div class="box">
            <h3 class="footer-box-h3">thémes</h3>
            <a href="#">my europe</a>
            <a href="#">sport</a>
            <a href="#">actualités locales</a>
            <a href="#">culture et musique</a>
            <a href="#">environnement et nature</a>
            <a href="#">monde</a>
            <a href="#">sciences et technologies </a>
            <a href="#">vie pratique</a>
        </div>
        <div class="box">
            <h3 class="footer-box-h3">services</h3>
            <a href="#">live</a>
            <a href="#">score centre</a>
            <a href="#">météo</a>
            <a href="#">Le JT</a>
            <a href="#">titres diffusés</a>
            <a href="#">concours</a>
            <a href="#">archives (sitemap)</a>
            <a href="#">code promo</a>
        </div>
        <div class="box">
            <h3 class="footer-box-h3">Liens pricipales</h3>
            <a href="../../index.php">acceuil</a>
            <a href="../../../views/articles.php">tous les articles</a>
            <a href="../../../views/profile.php">profile</a>
            <a href="../../../views/aboutMe.html">à propos</a>
        </div>
        <div class="box">
            <h3 class="footer-box-h3">programme radios</h3>
            <a href="#">classic 21</a>
            <a href="#">la Premiére</a>
            <a href="#">vivacité</a>
            <a href="#">tipik</a>
            <a href="#">musiq3</a>
            <a href="#">tarmac</a>
            <a href="#">viva+</a>
        </div>
    </div>

</footer>
<?php include_once('footer.php') ?>