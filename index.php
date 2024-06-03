<?php get_header(); ?>
<body <?php body_class(); ?>>
<!-- header start hare -->
<header>
    <nav class="container">
        <div class="header-logo">
            <a href="index.html">
                <img id="head-logo" src="<?php echo get_template_directory_uri(); ?> /assets/images/logo.png"
                     alt="">
            </a>
        </div>
        <div class="icon-box">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'navmenu',
				'menu_id'        => 'nav-icon',
				'menu_class'     => 'nav-icon',
			) )
			?>
            <!--            <ul class="" id="">-->
            <!--                <li><a id="icon-one" href="index.html">Home</a></li>-->
            <!--                <li><a id="icon-two" href="author.html">Author</a></li>-->
            <!--                <li><a id="icon-three" href="single-post.html">Single Post</a></li>-->
            <!--                <li><a id="icon-four" href="#">Pages</a></li>-->
            <!--                <li><a id="icon-five" href="#">Contact</a></li>-->
            <!--            </ul>-->
        </div>
        <div class="nav-end">
            <div class="search-bar">
                <input type="text" name="" placeholder="Search" id="" class="search-field">
                <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="dark-mode" onclick="toggleDark()">
                <button class="sunny-btn">
                    <img class="sunny-img" id="sunny-img"
                         src="<?php echo get_template_directory_uri(); ?> /assets/images/moon.png" alt="">
                </button>
            </div>
        </div>
        <div class="nav-btn" onclick="toggleMenu()">
            <button class="menu-btn"><i class="fa-solid fa-bars"></i></button>
        </div>
    </nav>
</header>
<!-- header end hare -->

<!-- main start hare -->
<main>
    <!-- hero section start -->
    <section class="container">
		<?php
		global $hero;
		$args     = array( 'posts_per_page' => 1, 'post_type' => 'hero', 'orderby' => 'date', 'order' => 'DESC' );
		$my_posts = get_posts( $args );
		foreach ( $my_posts as $hero ) {
			setup_postdata( $hero );
			?>
			<?php
			$hero_name   = get_post_meta( $hero->ID, 'name', true );
			$hero_date   = get_post_meta( $hero->ID, 'date', true );
			$hero_button = get_post_meta( $hero->ID, 'hero-button', true );
			?>
            <div class="hero">
                <div class="hero-img">
					<?php echo get_the_post_thumbnail( $hero ); ?>
                </div>
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <button class="hero-btn"><?php echo $hero_button; ?></button>
                    <h1 class="hero-title"><?php the_content(); ?></h1>
                    <div class="hero-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-content-img.png"
                             alt="">
                        <p><?php echo $hero_name; ?></p>
                        <p><?php echo $hero_date; ?></p>
                    </div>
                </div>
            </div>
			<?php
		}
		wp_reset_postdata(); // Reset post data after the loop
		?>
    </section>

    <!-- hero section end -->

    <!-- post section start -->
    <section class="container">

        <div class="post-heading">
            <h1 class="post-title">Latest Post</h1>
            <div class="post-btn-group">
                <button class="post-heading-btn" onclick="handleCardThree()"><i
                            class="fa-solid fa-table-cells"></i></button>
                <button class="post-heading-btn" onclick="handleCardTwo()"><i
                            class="fa-solid fa-table-cells-large"></i></button>
                <button class="post-heading-btn" onclick="handleCardOne()"><i class="fa-solid fa-list"></i></button>
            </div>
        </div>

        <div class="card-container" id="card-container">
            <!-- card-1 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images//post-1.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/wilson.png" alt="">
                        <p>Tracey Wilson</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-2 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-2.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/hero-content-img.png"
                             alt="">
                        <p>Jason Francisco</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-3 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-3.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/stavin.png" alt="">
                        <p>Elizabeth Slavin</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-4 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-4.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/enric.png" alt="">
                        <p>Ernie Smith</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-5 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-5.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/eric-smith.png" alt="">
                        <p>Eric Smith</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-6 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-6.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/wilson.png" alt="">
                        <p>Tracey Wilson</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-7 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-7.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/hero-content-img.png"
                             alt="">
                        <p>Jason Francisco</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-8 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-8.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/stavin.png" alt="">
                        <p>Elizabeth Slavin</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>

            <!-- card-9 -->
            <div class="post-card">
                <div class="post-img">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/post-9.png" alt="">
                </div>
                <div>
                    <button class="post-btn">Technology</button>
                    <h1 class="card-title">The Impact of Technology on the Workplace: How Technology is Changing
                    </h1>
                    <div class="card-subtitle">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/enric.png" alt="">
                        <p>Ernie Smith</p>
                        <p>August 20, 2022</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-div">
            <button class="view-btn">View All Post</button>
        </div>

    </section>
    <!-- post section end -->

    <!-- ad section start -->
    <section class="ad-container">
        <div class="ad-section" id="ad-section">
            <img id="ad-img" src="<?php echo get_template_directory_uri(); ?> /assets/images/ads-space.png" alt="">
        </div>
    </section>
    <!-- ad section end -->
</main>
<!-- main end hare -->

<?php get_footer(); ?>