<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
   <header>
    <nav> 
<ul>
    <li></li>
<li><a href="https://example.com">ACCUEIL</a></li>
<li><a href="https://example.com">A PROPOS</a></li>
<li><a href="https://example.com">MES PROJETS</a></li>
<li><a href="https://example.com">ME CONTACTER</a></li>
</ul>
</nav>
</header>
<main>
<section>
<h1>YEPFOLIO<h1>
<h2>DEVELOPPEMENT WEB & MOBILE</h2>
</section>

<section>
<h3>YEPFOLIO EN QUELQUES MOTS</h3>
<p>lorem ipsum..............................<p>
</section>

<section>
<h3>MES DERNIERS PROJETS</h3>

<article> 
<h4>Publication Santé</h4>
<p>Pharmacie de Maurepas</p>
</article>

<article>
<h4>SITE E-COMMECER</h4>
<p>Librairie l'écume des jours</p>
</article>

<article>
<h4>SITE VITRINE</h4>
<p>Boulangerie Gattier</p>

</article>

<article>
<h4>SITE INSTITUTIONNEL</h4>
<p>Mairie de Ploutruc</p>
</article>

<article>
<h4>SITE PROMOTIONNEL</h4>
<p>Festival des choses</p>
</article>
</section>

<section>
<h3>ME CONTACTER</h3>

<form>
<fieldset>

<label for="prenom">Prénom + Nom*</label>
<input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10">
</fieldset>

<fieldset>

<label for="email">Email</label>
<input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10">

</fieldset>

<fieldset>

<label for="Message">Message</label>
<input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10">

</fieldset>

<input type="submit" value="Envoyer le formulaire">

</form>
</section>
</main>

        <?php wp_footer(); ?>
    </body>
</html>