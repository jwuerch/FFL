<?php get_header(); ?>
			<div class="banner-holder">
				<div class="overlay">
					<div class="banner wrap">
						<div class="col-1">
							<div class="featured-article-text">+ Featured Article</div>
							<h2 class="featured-article-title">Earn $600+/Month Taking Online Surveys</h2>
							<p class="featured-article-excerpt">We break down the best 25 survey sites and examine how much they pay, how long they take and if they are really&nbsp;worth&nbsp;it.</p>
							<button class="featured-article-button">Read Now</button>
						</div>
						<div class="col-2">
							<div class="sign-up-box">
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
			<div class="feature-box">
				<div class="wrap">

				</div>
			</div>
			<section class="most-popular">
				<div class="wrap">
					<h2 class="section-title">Featured Articles</h2>
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
                    							); ?><?php printf( '<span class="footer-category">' . __('', 'bonestheme' ) . ' %1$s</span>' , get_the_category_list(', ') ); ?>
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


						</main>


				</div>

			</section>


<?php get_footer(); ?>
