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
						<a href="./index.php">Mes réalisations</a>
					</li>					
					<li class="destock-menu__item menu-item">
						<a href="./OutilsWeb.php">Outils Web</a>
					</li>					
					<li class="destock-menu__item menu-item">
						<a href="https://stephane-mouron.fr/cv/index.html" target="_blank">Mon CV</a>
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
					onclick="window.location.href = '#main-navigation';">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="mobile-menu__content">
					<ul>
						<li class="mobile-menu__item menu-item">
							<a href="./index.php">Mes réalisations</a>
						</li>
						<li class="mobile-menu__item menu-item">
							<a href="./OutilsWeb.php">Outils Web</a>
						</li>
						<li class="mobile-menu__item menu-item">
							<a href="https://stephane-mouron.fr/cv/index.html">Mon CV</a>
						</li>
					</ul>
				</div>
			</div>
			</div>
		</nav>
		</div>
	</header>