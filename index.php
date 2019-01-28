<?php get_header(); ?>
                <section id="featured-article-section" class="featured-article-section">
                    <div class="banner-holder">
                        <div class="overlay">
                            <div class="wrap">
                                <div class="banner">
                                    <div class="row-0">
                                        <div class="col-1 col">
                                            <div class="sub-title">+ Featured Article</div>
                                            <h1 class="title">25+ Best Survey Sites To&nbsp;Earn $600/Month or&nbsp;More</h1>
                                            <p class="text">A list of 25 legitimate online survey sites to help you make extra money from home. All of these sites are 100%&nbsp;free.</p>
                                            <button class="featured-article-button">Read Now</button>
                                        </div>
                                        <div class="col-2 col">
                                            <div class="email-sign-up">
                                                <h2 class="main-text">Want to learn about even more ways to earn&nbsp;extra&nbsp;money?</h2>
                                                <div class="small-text">Join our mailing list to get access to exclusive articles, courses and money&nbsp;making&nbsp;tips.</div>
                                                <form class="email-form">
                                                    <input type="text" placeholder="First Name">
                                                    <input type="text" placeholder="Email Address">
                                                    <button>Subscribe</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="email-sign-up-section email-sign-up-section-1">
                        <div class="row">
                            <div class="col col-2">
                                <div class="email-sign-up">
                                        <h2 class="main-text">Want to learn about even more ways to earn extra&nbsp;money?</h2>
                                        <div class="small-text">Join our mailing list to get access to exclusive articles, courses and money&nbsp;making&nbsp;tips.</div>
                                        <form class="email-form">
                                            <input type="text" placeholder="First Name">
                                            <input type="text" placeholder="Email Address">
                                            <button>Subscribe</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                </section>

			<section class="popular-posts-section">
				<div class="wrap">
					<h2 class="section-title">Most Popular Posts</h2>
                    <hr class="section-title-spacer">

                    <div class="row">
						<div class="col-1 col">
							<div class="grid-item">
								<div class="img-wrap">
									<img src="https://mk0frugalforlesh94so.kinstacdn.com/wp-content/uploads/2018/12/what-to-do-if-your-identity-has-been-stolen-247x187.jpg">
								</div>
								<div class="text-wrap">
									<div class="category">
										<p>Make Money</p>
									</div>
									<div class="title">
										<h2>25+ Best Survey Survey Sites: Earn $600+/Month</h2>
									</div>
                                    <div class="excerpt">
                                        <p>Want to earn free cash from while on the go and quickly? This list of 101 money making apps allows you to do just that.</p>
                                    </div>
									<p class="read-more">
										Read More <span class="arrow">→</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-2 col">
                            <div class="grid-item">
                                <div class="img-wrap">
                                    <img src="https://mk0frugalforlesh94so.kinstacdn.com/wp-content/uploads/2018/12/lifestyle-changes-to-save-money-247x187.jpg">
                                </div>
                                <div class="text-wrap">
                                    <div class="category">
                                        <p>Make Money</p>
                                    </div>
                                    <div class="title">
                                        <h2>101 Easy &amp; Practical Ways To Make Money Now</h2>
                                    </div>
                                    <div class="excerpt">
                                        <p>Want to earn free cash from while on the go and quickly? This list of 101 money making apps allows you to do just that.</p>
                                    </div>
                                    <p class="read-more">
                                        Read More <span class="arrow">→</span>
                                    </p>
                                </div>
                            </div>
						</div>
						<div class="col-3 col">
                            <div class="grid-item">
                                <div class="img-wrap">
                                    <img src="https://mk0frugalforlesh94so.kinstacdn.com/wp-content/uploads/2018/12/earnably-review-247x187.jpg">
                                </div>
                                <div class="text-wrap">
                                    <div class="category">
                                        <p>Make Money</p>
                                    </div>
                                    <div class="title">
                                        <h2>101 Free Money Making Apps For Your Phone</h2>

                                    </div>
                                    <div class="excerpt">
                                        <p>Want to earn free cash from while on the go and quickly? This list of 101 money making apps allows you to do just that.</p>
                                    </div>
                                    <p class="read-more">
                                        Read More <span class="arrow">→</span>
                                    </p>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</section>

			<section id="content" class="recent-articles-section">

				<div id="inner-content" class="wrap cf">
                    <h2 class="section-title">Recent Articles</h2>
                    <hr class="section-title-spacer">

					<main id="main wrap" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<?php

									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									?><div class="img-wrap"><img src="<?php echo $thumb_url[0]; ?>"></div>





								<header class="article-header">
                                    <div class="category-wrap desktop-category">
                                        <span class="byline entry-meta vcard">
                                        <?php printf( __( '', 'bonestheme' ).' %1$s %2$s',
                                            /* the time the post was published */
                                            '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                                            /* the author of the post */
                                            '<span class="by">'.__( 'in', 'bonestheme').'</span>'
                                        ); ?></span>
                                        <?php printf( '<span class="entry-category category desktop-category">' . __('', 'bonestheme' ) . ' %1$s</span>' , get_the_category_list(', ') ); ?>
                                    </div>

                                    <div class="category-wrap mobile-category">
                                        <?php printf( '<div class="entry-category category mobile-category">' . __('', 'bonestheme' ) . ' %1$s</div>' , get_the_category_list(', ') ); ?>
                                    </div>
									<h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                    <p class="read-more desktop-category">Read More <span class="arrow">→</span></p>

                                    <div class="category-wrap mobile-category">
                                        <span class="byline entry-meta vcard">
                                            <?php printf( __( '', 'bonestheme' ).' %1$s %2$s',
                                                /* the time the post was published */
                                                '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'in', 'bonestheme').'</span>'
                    							); ?></span>
                                        <?php printf( '<span class="entry-category category desktop-category">' . __('', 'bonestheme' ) . ' %1$s</span>' , get_the_category_list(', ') ); ?>
                                    </div>




									</p>

								</header>


							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>
                    <div class="btn-wrap col"><button class="end-section-button">More Posts</button></div>



                </div>

			</section>
            <section class="blogging-section">

                <div class="banner-holder">
                    <div class="overlay">
                        <div class="banner wrap">
                            <div class="row">
                                <div class="col">
                                    <h2>Want&nbsp;to earn&nbsp;extra&nbsp;money by&nbsp;blogging?</h2>
                                    <p class="text">Take a look at our <b>FREE</b> guide on how to setup a successful blog within just a few hours of your time.</p>
<!--                                    <p class="text">We've put together a <b>FREE&nbsp;7&#8209;day&nbsp;course</b> that will<br>guide you step by step on how to<br>become a professional&nbsp;blogger.</p>-->
                                    <div class="btn-wrap"><button>Get Started</button></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="courses-guides-section">
                <div class="wrap">
                    <h2 class="section-title">
                        Courses &amp; Guides
                    </h2>
                    <hr class="section-title-spacer">
                    <p class="text">Browse through our custom-made courses and guides that were designed to help you earn extra income.</p>
                    <div class="row">
                        <div class="col-1 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-usd" aria-hidden="true"></i>

                                </span>
                                <div class="feature-text">
                                    <span>Best Online Survey Sites to&nbsp;Earn&nbsp;$600+/Month&nbsp;or&nbsp;More</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-2 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>


                                </span>
                                <div class="feature-text">
                                    <span>Money Making Apps to&nbsp;Earn&nbsp;from&nbsp;Your&nbsp;Smartphone</span>
                                </div>

                            </div>
                        </div>
<!--                        <div class="col-3 col">-->
<!--                            <div class="feature-box">-->
<!--                                <span class="feature-icon icon-credit color-green">-->
<!--                                    <i class="fa fa-laptop" aria-hidden="true"></i>-->
<!---->
<!---->
<!--                                </span>-->
<!--                                <div class="feature-text">-->
<!--                                    <span>Start a Blog in 7 Days: Make&nbsp;This&nbsp;Your&nbsp;Side&nbsp;Hustle</span>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-7 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-laptop" aria-hidden="true"></i>


                                </span>
                                <div class="feature-text">
                                    <span>How to Start a Successful Blog as Your Side Hustle</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-8 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-camera" aria-hidden="true"></i>


                                </span>
                                <div class="feature-text">
                                    <span>Make Money Taking Pictures of Receipts From Your Smartphone</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-9 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-home" aria-hidden="true"></i>


                                </span>
                                <div class="feature-text">
                                    <span>Best Second Jobs to Make Extra Money From Home</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-10 col">
                            <a href="https://www.frugalforless.com/comparison-shopping-guide/">
                                <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>


                                </span>
                                <div class="feature-text">
                                    <span>The Ultimate Shopping Comparison Guide to Help You Save</span>
                                </div>

                            </div>
                            </a>
                        </div>
<!--                        <div class="col-4 col">-->
<!--                            <div class="feature-box">-->
<!--                                <span class="feature-icon icon-credit color-green">-->
<!--                                    <i class="fa fa-rocket" aria-hidden="true"></i>-->
<!---->
<!--                                </span>-->
<!--                                <div class="feature-text">-->
<!--                                    <span>Blog Rocket Course: Become&nbsp;a&nbsp;Professional&nbsp;Blogger</span>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-5 col">-->
<!--                            <div class="feature-box">-->
<!--                                <span class="feature-icon icon-credit color-green">-->
<!--                                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>-->
<!---->
<!--                                </span>-->
<!--                                <div class="feature-text">-->
<!--                                    <span>How to Earn an Average of&nbsp;7%&nbsp;Cash&nbsp;Back&nbsp;on&nbsp;All&nbsp;Purchases</span>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-6 col">-->
<!--                            <div class="feature-box">-->
<!--                                <span class="feature-icon icon-credit color-green">-->
<!--                                    <i class="fa fa-money" aria-hidden="true"></i>-->
<!---->
<!---->
<!--                                </span>-->
<!--                                <div class="feature-text">-->
<!--                                    <span>Best High-Yield Savings Accounts</span>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
<!--                    <div class="btn-wrap"><button class="end-section-button">View All Courses &amp; Guides</button></div>-->
                </div>
            </section>
            <section class="youtube-section">
                <div class="wrap">
                    <div class="col">
                    <h2 class="section-title">Follow us on YouTube!</h2>
                    <div class="youtube-wrap">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tQy3fTwF-u0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                        </div>
                    <button class="end-section-button"><i class="fa fa-youtube" aria-hidden="true"></i>
                        Find us on YouTube</button>

                </div>
            </section>
            <section class="quick-money-section">
                <div class="wrap">
                    <h2 class="section-title">
                        Ways To Earn Cash Now
                    </h2>
                    <hr class="section-title-spacer">

                    <p class="text">Need cash and need it now? Below are some great and quick ways to earn cash (usually within a week) by taking online surveys, using money making apps and participating&nbsp;in&nbsp;online&nbsp;jobs.</p>
                    <div class="row">
                            <div class="box-item">
                                <h3>Free Survey Sites</h3>
                                <ul>
                                    <li><a href="#">Survey Junkie</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Vindale Research</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Swagbucks</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">MyPoints</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Pinecone Research</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Springboard America</a><br><i>one of the highest-paying survey sites</i></i>)</li>
                                    <li><a href="#">Global Test Market</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Survey Sites 1</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Survey Sites 2</a><br><i>one of the highest-paying survey sites</i></li>

                                </ul>
                            </div>
                            <div class="box-item">
                                <h3>Money Making Apps</h3>
                                <ul>
                                    <li><a href="#">Ibotta</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Fetch Rewards</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Shoptracker</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Shopkick</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Trunow</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">CoinOut</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Nielsen Mobile Panel</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Mobile App 1</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Mobile App 2</a><br><i>one of the highest-paying survey sites</i></li>
                                    <li><a href="#">Mobile App 3</a><br><i>one of the highest-paying survey sites</i></li>
                                </ul>
                            </div>

                        <div class="box-item">
                            <h3>Online Jobs</h3>
                            <ul>
                                <li><a href="#">Drive for Lyft</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Drive for Uber</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">DoorDash Delivery Driver</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Instacart Deliver Driver</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Data Entry Jobs</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Turk By Amazon</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Online Job 1</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Online Job 2</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Online Job 3</a><br><i>one of the highest-paying survey sites</i></li>
                                <li><a href="#">Online Job 4</a><br><i>one of the highest-paying survey sites</i></li>


                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            <section class="categories-section">
                <div class="wrap">
                    <div class="row">
                        <div class="col col-1">
                            <div class="banner-holder">
                                <div class="overlay">
                                    <div class="category-box"><span class="title">Make Money</span></div>
                                </div>

                            </div>
                        </div>

                        <div class="col col-2">
                            <div class="banner-holder">
                                <div class="overlay">
                                    <div class="category-box"><span class="title">Save Money</span></div>
                                </div>

                            </div>
                        </div>

                        <div class="col col-3">
                            <div class="banner-holder">
                                <div class="overlay">
                                    <div class="category-box"><span class="title">Frugal Travel</span></div>
                                </div>

                            </div>
                        </div>

                        <div class="col col-4">
                            <div class="banner-holder">
                                <div class="overlay">
                                    <div class="category-box"><span class="title">Wisdom</span></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="email-sign-up-section email-sign-up-section-2">
                <div class="banner-holder">
                    <div class="overlay">
                        <div class="row">
                            <div class="wrap">
                                <div class="col col-1">
                                    <div class="sub-title">+ Free Ebook</div>
                                    <h2 class="title">101 Free Money Making Apps For Your Smartphone</h2>
                                    <p class="description">We've put together an ebook of the best 101 FREE money making apps to help you quickly and efficiently earn extra money from your smartphone.</p>
                                </div>
                            </div>
                            <div class="col col-2">
                                <div class="email-sign-up">
                                    <div class="wrap">
                                        <h2 class="main-text">Start Making Free&nbsp;Money From&nbsp;Your&nbsp;Smartphone</h2>
                                        <div class="small-text">Tell us the best email address to send&nbsp;you&nbsp;this&nbsp;free&nbsp;ebook.</div>
                                        <form class="email-form">
                                            <input type="text" placeholder="First Name">
                                            <input type="text" placeholder="Email Address">
                                            <button>Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


            </section>



<?php get_footer(); ?>
