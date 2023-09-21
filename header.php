<!-- header.php -->

<header id="header" class="site-header directionRow">
	<div id="container_header" class="container_header directionRow">
		<div id="logo" class="logo">
			<a href="./index.php">
				<img src="./assets/images/stephane_mouron.png" alt="Logo Stéphane Mouron">
			</a>
		</div>
		<nav id="main-navigation" class="main-navigation">
			<div>
			<div id="main-destock-menu" class="main-destock-menu directionRow">
				<ul class="link-in directionRow">
					<li class="destock-menu__item menu-item">
						<a href="./OpenClassrooms.php">OpenClassrooms</a>
					</li>
					<ul class="hidden">
						<li class="destock-menu__item menu-item"><a href="#training_courses">Développement</a></li>
						<li class="destock-menu__item menu-item"><a href="#development_exercises">Exercices</a></li>
					</ul>
					<li class="destock-menu__item menu-item">
						<a href="./FromScratch.php">From Scratch</a>
					</li>
					<li class="destock-menu__item menu-item">
						<a href="./perso.php">Stéphane Mouron</a>
					</li>
					<li class="destock-menu__item menu-item">
						<a href="./OutilsWeb.php">Outils Web</a>
					</li>
				</ul>
			</div>
			<div id="main-mobile-menu" class="main-mobile-menu directionRow">
				<button id="open" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"
					onclick="window.location.href = '#main-mobile-menu';">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<button id="close" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"
					onclick="window.location.href = '#';">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="mobile-menu__content">
					<ul>
						<li class="mobile-menu__item menu-item">
							<a href="./OpenClassrooms.php">OpenClassrooms</a>
						</li>
						<li class="mobile-menu__item menu-item">
							<a href="./FromScratch.php">From Scratch</a>
						</li>						
						<li class="mobile-menu__item menu-item">
							<a href="./perso.php">Stéphane Mouron</a>
						</li>
						<li class="mobile-menu__item menu-item">
							<a href="./OutilsWeb.php">Outils Web</a>
						</li>
					</ul>
				</div>
			</div>
			</div>
		</nav>
		</div>
	</header>