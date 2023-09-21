<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Réalisations - Développement et intégration</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php 
    include_once('./variables.php'); 
    ?> 

    <!-- Header -->
    <?php include_once ('header.php'); ?>
	
    <main>		
		<section class="development">
			<h1>Les différentes réalisations que j'ai effectuées</h1>
			<!-- Mise en place de filtres pour afficher les réalisations -->
			<div class="container__filter">
				<form class="flexrow" method="post" >	
					<div class="filter_select flexcolumn">      
						<label for="filter_type">Type des réalisations</label>
						<i class="fa-solid fa-caret-down filter_type select__close"></i>
						<select class="filter_option filter_type" name="filter_type" id="filter_type">
							<option class="filter_type__value" value="">Tout</option>
							<option class="filter_type__value" value="parcours">Parcours de formation</option>
							<option class="filter_type__value" value="exercice">Exercices de développement</option>
							<option class="filter_type__value" value="perso">Personnelles</option>							
							<!-- <option class="filter_type__value" value="clients">Autres</option> -->
						</select>
					</div>	       
					<div class="filter_select flexcolumn">   
						<label for="filter_origin">Origine des réalisations</label>
						<i class="fa-solid fa-caret-down filter_origin select__close"></i>
						<select class="filter_option filter_origin" name="filter_origin" id="filter_origin">							
							<option class="filter_origin__value" value="">Tout</option>
							<option class="filter_origin__value" value="openclassrooms">OpenClassrooms</option>
							<option class="filter_origin__value" value="fromscratch">From Scratch</option>
							<option class="filter_origin__value" value="stephanemouron">Stéphane Mouron</option>
						</select>
					</div>
				</form>
			</div>
			<div id="liste-achievements" class="directionRow">
                <?php foreach ($achievements as $realization): ?> 
					<?php 
					// filtre pour supprimer : " " -> les espaces, "\r\n" -> le saut de ligne
					$str1 = array(" ", "\t", "\r\n");
					// filtre pour remplacer les e accentués par e
					$str2 = array("é", "è", "ê");

					// Récupération de l'origine de la réalisation pour l'ajouter en class
					$origin = strtolower($realization['origine']);
    				$origin = str_replace($str1, "", $origin);  					
    				$origin = str_replace($str2, "e", $origin);  

					// Récupération du type de réalisation pour l'ajouter en class
					$type = strtolower($realization['type']);
    				$type = str_replace($str1, "", $type);  					
    				$type = str_replace($str2, "e", $type); 
					?> 

					<!-- Génération de la carte de la réalisation -->
					<a class="article realization <?php echo($origin . " " . $type); ?>" href="<?php echo $realization['link']; ?>" target="<?php echo $realization['target']; ?>">
						<div class="article__text">
							<p class="article_<?php echo $realization['realization_id']; ?> hidden"><?php echo $realization['realization_id']; ?></p>
							<h2><?php echo $realization['title']; ?></h2>
							<p class="origine">- <?php echo $realization['origine']; ?> -</p>
							<?php if(isset($realization['description']) && $realization['description'] != ""): ?> 	
								<p class="description"><?php echo $realization['description']; ?></p>
								<?php endif; ?> 
						</div>
						<div class="directionRow center">
							<span class="icone icone_html" title="Utilisation de HTML5"><i
									class="fa-brands fa-html5"></i></span>
							<span class="icone_css" title="Utilisation de CSS3"><i class="fa-brands fa-css3"></i></span>
							<?php if($realization['js'] == true): ?> 
								<span class="icone_js hidden" title="Utilisation de JavaScript"><i
										class="fa-brands fa-js"></i></span>
							<?php endif; ?> 	
							<?php if($realization['php'] == true): ?> 	
								<span class="icone_php hidden" title="Utilisation de PHP8"><i
									class="fa-brands fa-php"></i></span>
							<?php if($realization['wordpress'] == true): ?>
							<?php endif; ?> 
								<span class="icone_wp hidden" title="Utilisation de WordPress 6"><i
									class="fa-brands fa-wordpress"></i></span>
							<?php endif; ?> 							
						</div>
						<div>
							<p class="fulldescription"><?php echo $realization['full_description']; ?></p>
						</div>
						<div class="article__img">
							<img src="./assets/images/<?php echo $realization['image']; ?>" alt="realization_image <?php echo $realization['alt_image']; ?>" title="<?php echo $realization['title_image']; ?>">
						</div> 
				</a>
                <?php endforeach; ?>   
				<div id="message" class="message directionRow center hidden">  
					<p>Aucune réalisation ne correspond à cette demande.<p>
				</div>
            </div>

		</section>
	</main>

	<!-- FOOTER -->
    <?php include_once './footer.php'; ?>
	<script src="./assets/js/filter_realization.js"></script>
</body>

</html>