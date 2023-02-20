<?php  
    $menuItems = getNavigationMenu();  
    $data = getHomepageData(); 
?>
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
    <img src="https://www.pngmart.com/files/5/WWE-Logo-Transparent-Background.png" alt="Logo HubSpot"/>
<ul>
<?php foreach($menuItems as $item) { ?>  
    <li>  
        <a href="<?= $item->url ?>">  
            <?= $item->title ?>  
        </a>  
    </li>  
<?php  
}  
?>
</ul>
</nav>
</header>
<main>
<section class="section1">
<h1>YEPFOLIO<h1>
<h2>DEVELOPPEMENT WEB & MOBILE</h2>
</section>

<section class="section2">
<h3>YEPFOLIO EN QUELQUES MOTS</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
     sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
</section>

<section class="section3">
<h3>MES DERNIERS PROJETS</h3>


<ul>
<section id="about">  
    <h2><?= $data["a-propos"]["titre"] ?></h2>  
    <p>  
        <?= $data["a-propos"]["contenu"] ?>  
    </p>  
</section>
</section>
</ul>
<section class="section4">
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
       minlength="4" maxlength="8" size="60">

</fieldset>

<input type="submit" value="Envoyer le formulaire">

</form>
</section>
</main>

        <?php wp_footer(); ?>
    </body>
</html>