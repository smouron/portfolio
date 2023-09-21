<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Réalisations - Développement et intégration</title>
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <?php 
    include_once('./variables.php'); 
    ?> 

    <!-- Header -->
    <?php include_once ('header.php'); ?>
	
    <main>		
		<section class="development">
			<h1>Les différentes réalisations que j'ai effectuées avec From Scratch</h1>
			<div id="liste-achievements" class="directionRow">
				<?php foreach ($achievements as $realization): ?> 
					<?php if($realization['origine'] == "From Scratch" || $realization['origine'] == "from scratch" || $realization['origine'] == "fromscratch"): ?>
						<a class="article realization" href="<?php echo $realization['link']; ?>" target="<?php echo $realization['target']; ?>">
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
					<?php endif; ?> 
                <?php endforeach; ?>     
            </div>

		</section>
	</main>

	<!-- FOOTER -->
    <?php include_once './footer.php'; ?>

</body>

</html>