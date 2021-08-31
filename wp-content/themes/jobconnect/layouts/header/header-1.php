<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a class="logo"><?php the_custom_logo(); ?></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_id'         => 'test',
								'menu_class'      => 'nav',
								'depth'           => 3,
							));
					?>
                   
                </nav>
            </div>
        </div>
    </div>
</header>