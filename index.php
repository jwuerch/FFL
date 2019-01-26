<?php get_header(); ?>
                <section class="featured-article-section">
                    <div class="banner-holder">
                        <div class="overlay">
                            <div class="wrap">
                                <div class="banner">
                                    <div class="row">
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
            <section class="email-sign-up-section">
                <div class="email-sign-up">
                    <div class="wrap">
                        <h2 class="main-text">Want to learn about even more ways to earn extra&nbsp;money?</h2>
                        <div class="small-text">Join our mailing list to get access to exclusive articles, courses and money&nbsp;making&nbsp;tips.</div>
                        <form class="email-form">
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Email Address">
                            <button>Subscribe</button>
                        </form>
                    </div>

                </div>
            </section>

    <div class="feature-box">
				<div class="wrap">

				</div>
			</div>
			<section class="most-popular">
				<div class="wrap">
					<h2 class="section-title">Popular Posts</h2>
					<div class="row">
						<div class="col-1 col">
							<div class="art-1 art">
								<div class="img-wrap">
									<img src="https://mk0frugalforlesh94so.kinstacdn.com/wp-content/uploads/2018/12/what-to-do-if-your-identity-has-been-stolen-247x187.jpg">
								</div>
								<div class="transcript">
									<div class="category">
										<h6>Make Money</h6>
									</div>
									<div class="title">
										<h2>25+ Best Survey Survey Sites: Earn $600+/Month</h2>
									</div>
									<div class="excerpt">
										<p>With thousands of survey sites claiming they can make you thousands, it's difficult to find which ones are scam or legit.</p>
									</div>
									<div class="read-more">
										<p>Read More <span class="arrow">→</span></p>
									</div>
								</div>

							</div>
						</div>
						<div class="col-2 col">
							<div class="art-2 art">
								<div class="img-wrap">
									<img src="https://mk0frugalforlesh94so.kinstacdn.com/wp-content/uploads/2018/12/lifestyle-changes-to-save-money-247x187.jpg">
								</div>
								<div class="transcript">
									<div class="category">
										<h6>Make Money</h6>
									</div>
									<div class="title">
										<h2>101 Easy &amp; Practical Ways To Make Money Now</h2>
									</div>
									<div class="excerpt">
										<p>Looking for cash and need it fast? The methods below are ways in which you can make money now, or rather quickly.</p>
									</div>
									<div class="read-more">
										<p>Read More <span class="arrow">→</span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3 col">
							<div class="art-3 art">
								<div class="img-wrap">
									<img src="https://mk0frugalforlesh94so.kinstacdn.com/wp-content/uploads/2018/12/earnably-review-247x187.jpg">
								</div>
								<div class="transcript">
									<div class="category">
										<h6>Make Money</h6>
									</div>
									<div class="title">
										<h2>101 Free Money Making Apps For Your Phone</h2>
									</div>
									<div class="excerpt">
										<p>Want to earn free cash from while on the go and quickly? This list of 101 money making apps allows you to do just that.</p>
									</div>
									<div class="read-more">
										<p>Read More <span class="arrow">→</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="content">

				<div id="inner-content" class="wrap cf">


					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<h2 class="section-title">Recent Posts</h2>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<?php

									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									?><div class="img-wrap"><img src="<?php echo $thumb_url[0]; ?>"></div>



								<div class="transcript">

								<header class="article-header">

									<h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<p class="byline entry-meta vcard">
                                                                        <?php printf( __( '', 'bonestheme' ).' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'in', 'bonestheme').'</span>'
                    							); ?><?php printf( '<span class="footer-category">' . __('', 'bonestheme' ) . ' %1$s</span>' , get_the_category_list(', ') ); ?></p>
										<div class="excerpt"><?php the_excerpt(); ?></div>

                                    <div class="read-more"><p><a href="<?php the_permalink() ?>">Read More <span class="arrow">→</span></a></p></div>



									</p>

								</header></div>


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

                        <button class="end-section-button">Go to Latest Posts</button>
						</main>


				</div>

			</section>
            <section class="blogging-section">

                <div class="banner-holder">
                    <div class="overlay">
                        <div class="banner wrap">
                            <h2>Do&nbsp;you want&nbsp;to&nbsp;earn extra&nbsp;income blogging?</h2>
                            <p class="text">We've put together a <b>FREE&nbsp;7&#8209;day&nbsp;course</b> that will guide you step by step on how to become a professional blogger.</p>
                            <button>Get Started</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="courses-guides-section">
                <div class="wrap">
                    <h2 class="section-title">
                        Courses &amp; Guides
                    </h2>
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
                        <div class="col-3 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-laptop" aria-hidden="true"></i>


                                </span>
                                <div class="feature-text">
                                    <span>Start a Blog in 7 Days: Make&nbsp;This&nbsp;Your&nbsp;Side&nbsp;Hustle</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-4 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-rocket" aria-hidden="true"></i>

                                </span>
                                <div class="feature-text">
                                    <span>Blog Rocket Course: Become&nbsp;a&nbsp;Professional&nbsp;Blogger</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-5 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>

                                </span>
                                <div class="feature-text">
                                    <span>How to Earn an Average of&nbsp;7%&nbsp;Cash&nbsp;Back&nbsp;on&nbsp;All&nbsp;Purchases</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col">
                            <div class="feature-box">
                                <span class="feature-icon icon-credit color-green">
                                    <i class="fa fa-money" aria-hidden="true"></i>


                                </span>
                                <div class="feature-text">
                                    <span>Best High-Yield Savings Accounts</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button class="end-section-button">View All Courses &amp; Guides</button>
                </div>
            </section>
            <section class="youtube-section">
                <div class="wrap">
                    <h2 class="section-title">Follow us on YouTube!</h2>
                    <div class="youtube-wrap">
                        <iframe width="100%" height="184.57" src="https://www.youtube.com/embed/tQy3fTwF-u0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <p class="text">Need cash and need it now? Below are some great and quick ways to earn cash (usually within a week) by taking online surveys, using money making apps and participating&nbsp;in&nbsp;online&nbsp;jobs.</p>
                    <div class="row">
                        <div class="col col-1">
                            <h3>Free Survey Sites</h3>
                            <ul>
                                <li><a href="#">Survey Junkie</a></li>
                                <li><a href="#">Vindale Research</a></li>
                                <li><a href="#">Swagbucks</a></li>
                                <li><a href="#">MyPoints</a></li>
                                <li><a href="#">Pinecone Research</a></li>
                                <li><a href="#">Springboard America</a></li>
                                <li><a href="#">Global Test Market</a></li>
                                <li><a href="#">Survey Sites 1</a></li>
                                <li><a href="#">Survey Sites 2</a></li>

                            </ul>
                        </div>
                        <div class="col col-2">
                            <h3>Money Making Apps</h3>
                            <ul>
                                <li><a href="#">Ibotta</a></li>
                                <li><a href="#">Fetch Rewards</a></li>
                                <li><a href="#">Shoptracker</a></li>
                                <li><a href="#">Shopkick</a></li>
                                <li><a href="#">Trunow</a></li>
                                <li><a href="#">CoinOut</a></li>
                                <li><a href="#">Nielsen Mobile Panel</a></li>
                                <li><a href="#">Mobile App 1</a></li>
                                <li><a href="#">Mobile App 2</a></li>
                                <li><a href="#">Mobile App 3</a></li>
                            </ul>

                        </div>
                        <div class="col col-3">
                            <h3>Online Jobs</h3>
                            <ul>
                                <li><a href="#">Drive for Lyft</a></li>
                                <li><a href="#">Drive for Uber</a></li>
                                <li><a href="#">DoorDash Delivery Driver</a></li>
                                <li><a href="#">Instacart Deliver Driver</a></li>
                                <li><a href="#">Data Entry Jobs</a></li>
                                <li><a href="#">Turk By Amazon</a></li>
                                <li><a href="#">Online Job 1</a></li>
                                <li><a href="#">Online Job 2</a></li>
                                <li><a href="#">Online Job 3</a></li>
                                <li><a href="#">Online Job 4</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sign-up-box">
                <div class="wrap">
                    <h2 class="main-text">Want to learn about even more ways to earn extra&nbsp;money?</h2>
                    <div class="small-text">Join our mailing list to get access to exclusive articles, courses and money&nbsp;making&nbsp;tips.</div>
                    <form class="email-form">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Email Address">
                        <button>Subscribe</button>
                    </form>
                </div>

            </section>


<?php get_footer(); ?>
