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
    // include_once('./variables.php'); 
    ?> 

    <!-- Header -->
    <?php include_once ('header.php'); ?>
	
	<main>
		<div>
			<h1>Liste d'outils et de librairies sur la toile</h1>
		</div>

		<!-- ******************************** -->
		<!-- ***     Première section     *** -->
		<!-- ******************************** -->
		<section class="container_tools">
			<h2 id="tools">Outils en ligne</h2>
			<div class="container-article directionRow">

				<!-- >Validateur HTML du W3C -->
				<a class="article" href="https://validator.w3.org/" target="_blank">
					<div class="article__text">
						<h3>Validateur HTML du W3C</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/validator-thml-w3c.png" title="Validateur HTML du W3C"
							alt="Validateur HTML du W3C">
					</div>
				</a>

				<!-- Validateur CSS du W3C -->
				<a class="article" href="https://jigsaw.w3.org/css-validator/validator.html.fr" target="_blank">
					<div class="article__text">
						<h3>Validateur CSS du W3C</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/validator-css-w3c.png" title="Validateur CSS du W3C"
							alt="Validateur CSS du W3C" />
					</div>
				</a>

				<!-- What CMS Is This Site Using ? -->
				<a class="article" href="https://whatcms.org/" target="_blank">
					<div class="article__text">
						<h3>What CMS Is This Site Using ?</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/whatcms.png" title="Vérifier la technologie d'un site web"
							alt="Vérifier la technologie d'un site web" />
					</div>
				</a>

				<!-- Answer The Public -->
				<a class="article" href="https://answerthepublic.com/" target="_blank">
					<div class="article__text">
						<h3>Answer The Public</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/answerthepublic.png"
							title="Permet de voir les mots qui sont associés à une recherche."
							alt="Gestion des mots clés">
					</div>
				</a>

				<!-- Google Keyword planner -->
				<a class="article" href="https://ads.google.com/intl/fr_fr/home/tools/keyword-planner/" target="_blank">
					<div class="article__text">
						<h3>Google Keyword planner</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/ads-google.png"
							title="Permet de connaitre l'historique des recherches sur Google (pour les annonces payantes)."
							alt="Gestion des mots clés" />
					</div>
				</a>

				<!-- Kwfinder -->
				<a class="article" href="https://mangools.com/kwfinder/" target="_blank">
					<div class="article__text">
						<h3>Kwfinder</h3>
						<p>(payant)</p>
					</div>
					<div class="article__img">
						<img src="./assets/images/kwfinder.png" title="Calcule la concurrence pour des mots-clés."
							alt="Gestion des mots clés">
					</div>
				</a>

				<!-- GTmetrix -->
				<a class="article" href="https://gtmetrix.com" target="_blank">
					<div class="article__text">
						<h3>GTmetrix</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/gtmetrix.png" title="Contrôle le temps de chargement d'une page"
							alt="GTmetrix">
					</div>
				</a>

				<!-- Pingdom -->
				<a class="article" href="https://www.pingdom.com/" target="_blank">
					<div class="article__text">
						<h3>Pingdom</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/pingdom.png" title="Contrôle le temps de chargement d'une page"
							alt="Pingdom">
					</div>
				</a>

				<!-- Tiny jpg -->
				<a class="article" href="https://tinyjpg.com/" target="_blank">
					<div class="article__text">
						<h3>Tiny jpg</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/tinyjpg.png" title="Optimiseur d'images" alt="Tiny jpg">
					</div>
				</a>

				<!-- Générateur de code Flexbox -->
				<a class="article" href="https://flexbox.help/" target="_blank">
					<div class="article__text">
						<h3>Générateur de code Flexbox</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/css_flexbox_rules.png" title="CSS Flexbox Rules"
							alt="CSS Flexbox Rules">
					</div>
				</a>

				<!-- Générateur de petits bouts de code Html -->
				<a class="article" href="https://cssgenerator.org/" target="_blank">
					<div class="article__text">
						<h3>Générateur de petits bouts de code Html.</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/css_generator.png" title="cssgenerator" alt="cssgenerator" />
					</div>
				</a>

				<!-- CSS clip-path maker -->
				<a class="article" href="https://bennettfeely.com/clippy/" target="_blank">
					<div class="article__text">
						<h3>CSS clip-path maker</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/css_clip-path_maker.png" title="CSS clip-path maker"
							alt="CSS clip-path maker">
					</div>
				</a>

				<!-- Générateur de code CSS pour ajouter des filtres -->
				<a class="article" href="https://www.cssfiltergenerator.com/" target="_blank">
					<div class="article__text">
						<h3>Générateur de code CSS pour ajouter des filtres</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/css_filter_generator.png" title="CSS Filter Generator"
							alt="CSS Filter Generator">
					</div>
				</a>

				<!-- Générateur de code CSS pour ajouter des filtres + des Box-shadow -->
				<a class="article" href="https://cssgenerator.org/filter-css-generator.html" target="_blank">
					<div class="article__text">
						<h3>Générateur de code CSS pour ajouter des filtres & des Box-shadow</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/box-shadow_css_generator.png" title="Box-shadow CSS Generator"
							alt="Site Filter-CSS-Generator">
					</div>
				</a>

				<!-- Générateur de code pour border-radius complex -->
				<a class="article" href="https://9elements.github.io/fancy-border-radius/" target="_blank">
					<div class="article__text">
						<h3>Générateur de code pour border-radius complexe</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/fancy-border-radius.png"
							title="Générateur de code pour border-radius complexe" alt="Site FANCY-BRODER-RADIUS">
					</div>
				</a>

				<!-- HTML CheatSheet -->
				<a class="article" href="https://htmlcheatsheet.com" target="_blank">
					<div class="article__text">
						<h3>HTML CheatSheet</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/html_cheatsheet.png" title="HTML Cheat Sheet" alt="HTML Cheat Sheet">
					</div>
				</a>

				<!-- CSS CheatSheet -->
				<a class="article" href="https://htmlcheatsheet.com/css/" target="_blank">
					<div class="article__text">
						<h3>CSS CheatSheet</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/css_cheatsheet.png" title="CSS Cheat Sheet" alt="CSS Cheat Sheet">
					</div>
				</a>

				<!-- JS CheatSheet -->
				<a class="article" href="https://htmlcheatsheet.com/js/" target="_blank">
					<div class="article__text">
						<h3>JS CheatSheet</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/js_cheatsheet.png" title="JS Cheat Shee" alt="JS Cheat Shee">
					</div>
				</a>

				<!-- jQuery CheatSheet -->
				<a class="article" href="https://htmlcheatsheet.com/jquery/" target="_blank">
					<div class="article__text">
						<h3>jQuery CheatSheet</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/jquery_cheatsheet.png" title="jQuery CheatSheet"
							alt="jQuery CheatSheet">
					</div>
				</a>

				<!-- ASCII Character Codes Table & Cheat Sheet -->
				<a class="article" href="https://www.petefreitag.com/cheatsheets/ascii-codes/" target="_blank">
					<div class="article__text">
						<h3>ASCII Character Codes Table & Cheat Sheet</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/ascii_character_codesctable-cheat_sheet.png" title="JS Cheat Shee"
							alt="JS Cheat Shee">
					</div>
				</a>

				<!-- Correspondance des icones avec leur code asci et HTML -->
				<a class="article" href="https://www.toptal.com/designers/htmlarrows/symbols/" target="_blank">
					<div class="article__text">
						<h3>Correspondance des icones avec leur code asci et HTML.</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/toptal-html_currency_symbols.png"
							title="TopTal - HTML Currency Symbols" alt="TopTal - HTML Currency Symbols">
					</div>
				</a>

				<!-- CSS2 Cheat Sheet -->
				<a class="article" href="https://cheatography.com/davechild/cheat-sheets/css2/" target="_blank">
					<div class="article__text">
						<h3>CSS2 Cheat Sheet</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/css2_cheat_sheet.png" title="CSS2 Cheat Sheet" alt="CSS2 Cheat Sheet">
					</div>
				</a>

				<!-- YouTube Video Downloader -->
				<a class="article" href="https://www.freemake.com/fr/free_video_downloader_ideal/" target="_blank">
					<div class="article__text">
						<h3>YouTube Video Downloader</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/youtube_video_downloader.png" title="Video Donwloader"
							alt="Video Donwloader">
					</div>
				</a>

				<!-- Guide to Flexbox -->
				<a class="article" href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">
					<div class="article__text">
						<h3>Guide to Flexbox </h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/guide_to_flexbox.png" title="Guide FlexBox" alt="Guide FlexBox">
					</div>
				</a>

				<!-- Guide to Table Element -->
				<a class="article" href="https://css-tricks.com/complete-guide-table-element/" target="_blank">
					<div class="article__text">
						<h3>Guide to Table Element </h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/guide_to_table_element.png" title="Guide Table Element"
							alt="Guide Table Element">
					</div>
				</a>

				<!-- Guide to Media Queries -->
				<a class="article" href="https://css-tricks.com/a-complete-guide-to-css-media-queries/" target="_blank">
					<div class="article__text">
						<h3>Guide to Media Queries </h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/guide_to_media_queries.png" title="Guide Media Queries"
							alt="Guide Media Queries">
					</div>
				</a>

				<!-- Guide to CSS Grid -->
				<a class="article" href="https://css-tricks.com/snippets/css/complete-guide-grid/" target="_blank">
					<div class="article__text">
						<h3>Guide to CSS Grid</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/guide_to_css_grid.png" title="Guide CSS Grid" alt="Guide CSS Grid">
					</div>
				</a>

				<!-- Colour Contrast Checker -->
				<a class="article" href="https://colourcontrast.cc/" target="_blank">
					<div class="article__text">
						<h3>Colour Contrast Checker</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/colour_contrast_checker.png" title="Colour Contrast Checker"
							alt="Colour Contrast Checker">
					</div>
				</a>

				<!-- htmlcolorcodes - Color names -->
				<a class="article" href="https://htmlcolorcodes.com/color-names/" target="_blank">
					<div class="article__text">
						<h3>htmlcolorcodes - Color names</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/htmlcolorcodes_color-names.png"
							title="Guide des couleurs CSS (htmlcolorcodes)"
							alt="Guide des couleurs CSS (htmlcolorcodes)">
					</div>
				</a>

				<!-- W3Schools - Color names -->
				<a class="article" href="https://www.w3schools.com/colors/colors_names.asp" target="_blank">
					<div class="article__text">
						<h3>W3Schools - Color names</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/w3schools_color-names.png" title="Guide des couleurs CSS (W3Schools)"
							alt="Guide des couleurs CSS  (W3Schools)">
					</div>
				</a>

				<!-- HTML Color Mixer -->
				<a class="article" href="https://www.w3schools.com/colors/colors_mixer.asp" target="_blank">
					<div class="article__text">
						<h3>HTML Color Mixer</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/html_color_mixer.png" title="HTML Color Mixer" alt="HTML Color Mixer">
					</div>
				</a>

				<!-- Coolors - Color Palettes -->
				<a class="article" href="https://coolors.co/" target="_blank">
					<div class="article__text">
						<h3>Coolors - Color Palettes</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/coolors_color_palettes.png" title="Color Palettes"
							alt="Color Palettes">
					</div>
				</a>

				<!-- Guide to CSS Gradients -->
				<a class="article" href="https://css-tricks.com/a-complete-guide-to-css-gradients/" target="_blank">
					<div class="article__text">
						<h3>Guide to CSS Gradients</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/guide_to_css_gradients.png" title="Guide CSS Gradients"
							alt="Guide CSS Gradients">
					</div>
				</a>

				<!-- CSS Gradient -->
				<a class="article" href="https://cssgradient.io/" target="_blank">
					<div class="article__text">
						<h3>CSS Gradient</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/css_gradients.png" title="CSS Gradient" alt="CSS Gradient">
					</div>
				</a>

				<!-- Banque de gift -->
				<a class="article" href="https://giphy.com/" target="_blank">
					<div class="article__text">
						<h3>Banque de gift</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/giphy.png" title="Giphy" alt="Giphy">
					</div>
				</a>

				<!-- Banque d'images -->
				<a class="article" href="https://unsplash.com/fr" target="_blank">
					<div class="article__text">
						<h3>Banque d'images</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/unsplash.png" title="Giphy" alt="Unsplash">
					</div>
				</a>

				<!-- Banque d'images et de musique -->
				<a class="article" href="https://pixabay.com/fr/" target="_blank">
					<div class="article__text">
						<h3>Banque d'images, de musique et d'effets sonorts libres de droit.</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/pixabay.png" title="Pixabay" alt="Pixabay">
					</div>
				</a>

				<!-- Pour vérifier les versions de navigateurs qui acceptent les fonctions -->
				<a class="article" href="https://caniuse.com/" target="_blank">
					<div class="article__text">
						<h3>Pour vérifier les versions de navigateurs qui acceptent les fonctions</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/can_i_use.png" title="Can I use" alt="Can I use">
					</div>
				</a>

				<!-- Détourer une image -->
				<a class="article" href="https://www.remove.bg/fr" target="_blank">
					<div class="article__text">
						<h3>Détourer une image</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/remove_background.png" title="Remove Background"
							alt="Remove Background">
					</div>
				</a>

				<!-- Xml-Sitemaps -->
				<a class="article" href="https://www.xml-sitemaps.com/" target="_blank">
					<div class="article__text">
						<h3>Xml-Sitemaps</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/xml-sitemaps.png" title="Xml Sitemaps" alt="Xml Sitemaps">
					</div>
				</a>

				<!-- Cheat-Sheets -->
				<a class="article" href="https://cheat-sheets.org/" target="_blank">
					<div class="article__text">
						<h3>Cheat-Sheets</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/cheat-sheets.png" title="Cheat Sheets" alt="Cheat Sheets">
					</div>
				</a>

				<!-- Google Maps Cheat Sheet -->
				<a class="article" href="https://www.cheat-sheets.org/saved-copy/Google_Maps_Cheat_Sheet.pdf"
					target="_blank">
					<div class="article__text">
						<h3>Google Maps Cheat Sheet</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/google_maps_cheat_sheet.png" title="Google Maps Cheat Sheet"
							alt="Google Maps Cheat Sheet">
					</div>
				</a>

				<!-- Liste des fonctions et des méthodes PhP -->
				<a class="article" href="https://www.php.net/manual/fr/indexes.functions.php#indexes.functions"
					target="_blank">
					<div class="article__text">
						<h3>Liste des fonctions et des méthodes PhP</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/liste_des_fonctions_et_des_methodes_php.png"
							title="Liste des fonctions et des méthodes PhP"
							alt="Liste des fonctions et des méthodes PhP">
					</div>
				</a>

				<!-- Tutoriel PhP -->
				<a class="article" href="https://www.conseil-webmaster.com/formation/php/" target="_blank">
					<div class="article__text">
						<h3>Tutoriel PhP</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/tutoriel_php.png" title="Tutoriel PhP" alt="Tutoriel PhP">
					</div>
				</a>

				<!-- Tutoriel CSS Selectors -->
				<a class="article"
					href="https://code.tutsplus.com/tutorials/the-30-css-selectors-you-must-memorize--net-16048#toc-7x72-"
					target="_blank">
					<div class="article__text">
						<h3>Tutoriel CSS Selectors</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/tutoriel_css_selectors.png" title="Tutoriel CSS Selectors"
							alt="Tutoriel CSS Selectors">
					</div>
				</a>

				<!-- CSS for People Who Hate CSS -->
				<a class="article" href="https://paulcpederson.com/articles/css-for-people-who-hate-css/"
					target="_blank">
					<div class="article__text">
						<h3>CSS for People Who Hate CSS</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/tutoriel_css_for_people_hate_css.png"
							title="CSS for People Who Hate CSS" alt="CSS for People Who Hate CSS">
					</div>
				</a>

				<!-- Générateur Neumorphism -->
				<a class="article" href="https://neumorphism.io/#e0e0e0" target="_blank">
					<div class="article__text">
						<h3>Générateur Neumorphism</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/neumorphism.io.png" title="Générateur Neumorphism"
							alt="Générateur Neumorphism">
					</div>
				</a>

				<!-- Open-Source loaders made with HTML and CSS -->
				<a class="article" href="https://uiverse.io/loaders" target="_blank">
					<div class="article__text">
						<h3>Open-Source loaders made with HTML and CSS</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/uiverse-css-loader.png" title="Open-Source loaders"
							alt="Open-Source loaders">
					</div>
				</a>

				<!-- Open-Source cards made with HTML and CSS -->
				<a class="article" href="https://uiverse.io/cards" target="_blank">
					<div class="article__text">
						<h3>Open-Source cards made with HTML and CSS</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/uiverse-css-card.png" title="Open-Source cards"
							alt="Open-Source cards">
					</div>
				</a>

				<!-- Open-Source forms made with HTML and CSS -->
				<a class="article" href="https://uiverse.io/forms" target="_blank">
					<div class="article__text">
						<h3>Open-Source forms made with HTML and CSS</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/uiverse-css-forms.png" title="Open-Source forms"
							alt="Open-Source forms">
					</div>
				</a>
			</div>
		</section>

		<!-- ************************** -->
		<!-- ***     Séparateur     *** -->
		<!-- ************************** -->
		<div class="separator">
			<span class="separator__element"></span>
			<span class="separator__element"></span>
			<span class="separator__element"></span>
			<span class="separator__element"></span>
			<span class="separator__element"></span>
			<span class="separator__element"></span>
			<span class="separator__element"></span>
			<span class="separator__element"></span>
		</div>

		<!-- ******************************* -->
		<!-- ***     Seconde section     *** -->
		<!-- ******************************* -->
		<section class="container_database">
			<h2 id="database">Librairies en ligne</h2>
			<div class="container-article directionRow">

				<!-- RGPD -->
				<a class="article" href="https://entreprendre.service-public.fr/vosdroits/F31228" target="_blank">
					<div class="article__text">
						<h3>RGPD</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/rgpd.png"
							title="Pour déterminer quelles mentions légales sont obligatoires en fonction de votre activité"
							alt="législation française et européenne (RGPD)">
					</div>
				</a>

				<!-- Accessibilité -->
				<a class="article" href="https://paris.wordcamp.org/2018/session-category/accessibilite/"
					target="_blank">
					<div class="article__text">
						<h3>Wordcamp Paris 218 - Accessibilité</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/wordcamp_paris-accessibilite.png"
							title="Vidéo au Wordcamp Paris 218 - Accessibilité"
							alt="video Wordcamp Paris - accessibilité">
					</div>
				</a>

				<!-- Fonts Google -->
				<a class="article" href="https://fonts.google.com/icons?icon.set=Material+Icons" target="_blank">
					<div class="article__text">
						<h3>Fonts Google</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/fonts_google.png" title="Fonts Google" alt="Fonts Google">
					</div>
				</a>

				<!-- Librairies Font awesome -->
				<a class="article" href="https://cdnjs.com/librairies/font-awesome " target="_blank">
					<div class="article__text">
						<h3>Librairies Font awesome</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_font_awesome.png" title="Font awesome cdn"
							alt="Font awesome cdn">
					</div>
				</a>

				<!-- Banque d'icones libres de droit -->
				<a class="article" href="https://fontawesome.com/v5/icons/" target="_blank">
					<div class="article__text">
						<h3>Banque d'icones libres de droit (Font awesome).</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/font_awesome.png" title="Font awesome" alt="Font awesome">
					</div>
				</a>

				<!-- Librairies angular-animate -->
				<a class="article" href="https://cdnjs.com/librairies/angular-animate " target="_blank">
					<div class="article__text">
						<h3>Librairies angular-animate (Angular Js)</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_angular_js.png" title="Librairies Angular Js cdn"
							alt="Librairies Angular Js cdn">
					</div>
				</a>

				<!-- Angular Js -->
				<a class="article" href="https://angularjs.org/" target="_blank">
					<div class="article__text">
						<h3>Angular Js</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/angular_js.png" title="Angular Js" alt="Angular Js">
					</div>
				</a>

				<!-- Librairies Animate -->
				<a class="article" href="https://cdnjs.com/librairies/animate.css " target="_blank">
					<div class="article__text">
						<h3>Librairies Animate</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_animate-style.png" title="Librairies Animate.style"
							alt="Librairies Animate.style">
					</div>
				</a>

				<!-- Banque d'icones libres de droit -->
				<a class="article" href="https://animate.style/" target="_blank">
					<div class="article__text">
						<h3>Banque d'icones libres de droit (Animate.style).</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/animate_style.png" title="Font awesome" alt="Animate.style">
					</div>
				</a>

				<!-- Librairies Bootstrap -->
				<a class="article" href="https://cdnjs.com/librairies/bootstrap " target="_blank">
					<div class="article__text">
						<h3>Librairies Bootstrap</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_bootstrap.png" title="bootstrap cdn" alt="bootstrap cdn">
					</div>
				</a>

				<!-- Bootstrap -->
				<a class="article" href="https://getbootstrap.com " target="_blank">
					<div class="article__text">
						<h3>Bootstrap</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/bootstrap.png" title="bootstrap cdn" alt="bootstrap">
					</div>
				</a>

				<!-- Bootstrap Icons -->
				<a class="article" href="https://icons.getbootstrap.com/ " target="_blank">
					<div class="article__text">
						<h3>Bootstrap Icons</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/bootstrap_icons.png" title="bootstrap cdn" alt="bootstrap Icons">
					</div>
				</a>

				<!--  -->
				<a class="article" href="https://cdnjs.com/librairies/react" target="_blank">
					<div class="article__text">
						<h3>Librairies React</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_react.png" title="react cdn" alt="react cdn">
					</div>
				</a>

				<!-- Librairies React -->
				<a class="article" href="https://fr.reactjs.org/" target="_blank">
					<div class="article__text">
						<h3>Librairies React</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/react.png" title="react" alt="React">
					</div>
				</a>

				<!-- Librairies Vue -->
				<a class="article" href="https://cdnjs.com/librairies/vue" target="_blank">
					<div class="article__text">
						<h3>Librairies Vue</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_vue.png" title="vue cdn" alt="vue cdn">
					</div>
				</a>

				<!-- Librairies Moment Js -->
				<a class="article" href="https://cdnjs.com/librairies/moment.js" target="_blank">
					<div class="article__text">
						<h3>Librairies Moment Js</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_moment_js.png" title="Moment Js cdn" alt="Moment Js cdn">
					</div>
				</a>

				<!-- Moment Js -->
				<a class="article" href="https://momentjs.com/" target="_blank">
					<div class="article__text">
						<h3>Moment Js</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/moment_js.png" title="Moment Js" alt="Moment Js">
					</div>
				</a>

				<!--  -->
				<a class="article" href="https://cdnjs.com/librairies/hover.css" target="_blank">
					<div class="article__text">
						<h3>Librairies Hover CSS</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/librairies_hover_css.png" title="Hover CSS cdn" alt="Hover CSS cdn">
					</div>
				</a>

				<!-- Hover CSS -->
				<a class="article" href="https://ianlunn.github.io/Hover/#effects" target="_blank">
					<div class="article__text">
						<h3>Hover CSS</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/hover_css.png" title="Hover CSS" alt="Hover CSS">
					</div>
				</a>

				<!-- CSShake -->
				<a class="article" href="https://elrumordelaluz.github.io/csshake/" target="_blank">
					<div class="article__text">
						<h3>CSShake</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/csshake.png" title="CSShake" alt="CSShake">
					</div>
				</a>

				<!-- hamburgers -->
				<a class="article" href="https://jonsuh.com/hamburgers/" target="_blank">
					<div class="article__text">
						<h3>Hamburgers</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/hamburgers.png" title="Hamburgers" alt="Hamburgers">
					</div>
				</a>

				<!-- hamburgers -->
				<a class="article" href="https://nzbin.github.io/three-dots/" target="_blank">
					<div class="article__text">
						<h3>Three dots</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/three-dots.png" title="Three dots" alt="Three dots">
					</div>
				</a>

				<!-- Whirl -->
				<a class="article" href="https://whirl.netlify.app/" target="_blank">
					<div class="article__text">
						<h3>Whirl</h3>
					</div>
					<div class="article__img">
						<img src="./assets/images/whirl.png" title="Whirl" alt="Whirl">
					</div>

					<!-- Magic -->
					<a class="article" href="https://www.minimamente.com/project/magic/" target="_blank">
						<div class="article__text">
							<h3>Magic</h3>
						</div>
						<div class="article__img">
							<img src="./assets/images/magic.png" title="Magic" alt="Magic">
						</div>
					</a>
			</div>
		</section>
	</main>

<!-- FOOTER -->
<?php include_once './footer.php'; ?>

</body>

</html>