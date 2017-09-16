<?php
/**
 * template name: single
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package numero
 */

get_header(); ?>


<div id="Blog-post"> 
	<?php
		if(have_posts()):		  
		while ( have_posts() ) : the_post();
	?>
		<div id="page-banner" style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>);">
			<div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	<?php endwhile;endif;?>
	<div class="container">
		<div class="row wow fadeInUp"> 
				<!--blog posts container-->
				<div class="col-md-8 col-sm-8 single-post">
				
					<?php
						if(have_posts()):		  
							while ( have_posts() ) : the_post();
					?>
						
						<article class="post">       
							<p><?php the_content();?> </p>
						</article>
					
					<?php endwhile;endif;?>
					<div class="clearfix"></div>
					<footer class="entry-footer entry-meta-bar">
						<div class="entry-meta">
							<i class="fa fa-tags"></i> 
								<span class="tag-links  clearfix"> 
									<a href="#" rel="tag">wordpress</a>
									<a href="#" rel="tag">themes</a> 
								</span> 
						</div>
					</footer>
					<!--/footer tags-->
			
					<div class="clearfix"></div>
			
					<!--author box-->
					<div class="author-box"> 
						<img alt="" src="img/team/03.jpg"  class="avatar " height="100" width="100">
						<div class="author-box-title"> Authored By <a href="#" rel="author">Author </a> </div>
						<div class="author-description"> Foysal loves to dig into WordPress, explore what’s possible and share his knowledge with readers. He also has deep interest in anything related to increasing productivity, writing better and being happy! </div>
						<div class="author_social"> </div>
					</div>
					<!--/author box-->
			
					<div class="clearfix"></div>
			
					<!--posts navigation-->
					<nav class="navigation posts-navigation"  role="navigation">
						<ul>
							<li class="pull-left">
								<div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i> Previous post</a></div>
							</li>
							<li class="pull-right">
								<div class="nav-next"><a href="http://localhost/wordpress/page/2/">Next post <i class="fa fa-chevron-right"></i></a></div>
							</li>
						</ul>
					</nav>
					<!--/posts navigation-->
			
					<div class="clearfix"></div>
					<!--Also like-->
					<div class="also-like-block"> 
					  
						<!-- article-->
						<article class="col-md-4 col-sm-6 col-xs-12">
							<header class="entry-header"> 
								<img src="img/04-screenshot.jpg" alt="image 1">
								<a href="#">
									<h6>10 Incredible Quotes To Guide Your Life</h6>
								</a> 
								<a href="#">Web-design</a> , <a href="#">Front-end</a>
							</header>
						</article>
						<!--/ article --> 

						<!--article-->
						<article class="col-md-4 col-sm-6 col-xs-12">
							<header class="entry-header"> <img src="img/02-screenshot.jpg" alt="image 1"> 
								<a href="#">
									<h6>Responsive Website in 2017 – Step by Step Guide</h6>
								</a> 
								<a href="#">Web-design</a> 
							</header>
						</article>
						<!--/article --> 

						<!-- article-->
						<article class="col-md-4 col-sm-6 col-xs-12">
							<header class="entry-header"> <img src="img/03-screenshot.jpg" alt="image 1"> 
								<a href="#">
									<h6>10 Incredible Quotes To Guide Your Life</h6>
								</a> 
								<a href="#">Web-design</a> , <a href="#">Front-end</a> 
							</header>
						</article>
						<!--/ article --> 

					</div>
					<!--/Also like-->

					<div class="clearfix"></div>
			
					<!--comment-->
					<div id="comments" class="comments-area text-left">
						<h2 class="comments-title"> Comments </h2>
						<ol class="comment-list">
							<li id="comment-1" class="comment even thread-even depth-1 parent">
								<article id="div-comment-1" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard"> 
											<img alt="" src="img/team/03.jpg"  class="avatar avatar-42 photo avatar-default img-circle" height="42" width="42"> 
											<b class="fn">
												<a href="#" rel="external nofollow" class="url">Mr WordPress</a>
											</b> 
											<span class="says">says:</span> 
										</div>
										<!-- .comment-author -->

										<div class="comment-metadata"> 
											<a href="#">
												<time datetime="2016-04-30T08:16:28+00:00"> April 30, 2016 at 8:16 am </time>
											</a> 
										</div>
										<!-- .comment-metadata --> 
									</footer>
									<!-- .comment-meta -->
									<div class="comment-content">
										<p>
											Hi, this is a comment.<br>
											To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.
										</p>
									</div>
									<!-- .comment-content -->
									<div class="reply">
										<a rel="nofollow" class="comment-reply-link" href="#"  aria-label="Reply to Mr WordPress">Reply</a>
									</div>
								</article>
								<!-- .comment-body -->
								<ol class="children">
									<li id="comment-2" class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
										<article id="div-comment-2" class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard"> 
													<img alt="" src="img/team/02.jpg"  class="avatar avatar-42 photo img-circle" height="42" width="42"> 
													<b class="fn">admin</b> 
													<span class="says">says:</span> 
												</div>
												<!-- .comment-author -->
											  
												<div class="comment-metadata"> 
													<a href="#">
														<time datetime="2016-11-02T06:27:52+00:00"> November 2, 2016 at 6:27 am </time>
													</a> 
												</div>
												<!-- .comment-metadata --> 
											</footer>
											<!-- .comment-meta -->

											<div class="comment-content">
												<p>just log in and view the post's comments.</p>
											</div>
											<!-- .comment-content -->

											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="http://localhost/burstfly/hello-world1/?replytocom=2#respond" onclick="return addComment.moveForm( &quot;div-comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;1&quot; )" aria-label="Reply to admin">Reply</a>
											</div>
										</article>
									<!-- .comment-body --> 
									</li>
								<!-- #comment-## -->
								</ol>
							<!-- .children --> 
							</li>
							<li id="comment-1" class="comment even thread-even depth-1 parent">
								<article id="div-comment-1" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard"> 
											<img alt="" src="img/team/01.jpg"  class="avatar avatar-42 photo avatar-default img-circle" height="42" width="42"> 
											<b class="fn">
												<a href="#" rel="external nofollow" class="url">Mr WordPress</a>
											</b> 
											<span class="says">says:</span> 
										</div>

										<div class="comment-metadata"> 
											<a href="#">
												<time datetime="2016-04-30T08:16:28+00:00"> April 30, 2016 at 8:16 am </time>
											</a> 
										</div>
									</footer>

									<div class="comment-content">
										<p>
											Hi, this is a comment.<br>
											To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.
										</p>
									</div>
									<!-- .comment-content -->

									<div class="reply">
										<a rel="nofollow" class="comment-reply-link" href="#"  aria-label="Reply to Mr WordPress">Reply</a>
									</div>
								</article>
								<!-- .comment-body -->
								<ol class="children">
									<li id="comment-2" class="comment byuser comment-author-admin bypostauthor odd alt depth-2">
										<article id="div-comment-2" class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard"> 
													<img alt="" src="img/team/04.jpg"  class="avatar avatar-42 photo img-circle" height="42" width="42"> 
													<b class="fn">admin</b> 
													<span class="says">says:</span> 
												</div>
												<!-- .comment-author -->

												<div class="comment-metadata"> 
													<a href="#">
														<time datetime="2016-11-02T06:27:52+00:00"> November 2, 2016 at 6:27 am </time>
													</a> 
												</div>
												<!-- .comment-metadata --> 
											</footer>

											<div class="comment-content">
												<p>There you will have the option to edit or delete them.</p>
											</div>
											<!-- .comment-content -->

											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="http://localhost/burstfly/hello-world1/?replytocom=2#respond" onclick="return addComment.moveForm( &quot;div-comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;1&quot; )" aria-label="Reply to admin">Reply</a>
											</div>
										</article>
										<!-- .comment-body --> 
									</li>
								<!-- #comment-## -->
								</ol>
							<!-- .children --> 
							</li>
						<!-- #comment-## -->
						</ol>
						
						<!-- .comment-list -->
						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/?p=1#respond" style="display:none;">Cancel reply</a></small></h3>
							<form action="http://localhost/burstfly/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
								<p class="comment-form-author">
									<label for="author">Name <span class="required">*</span></label>
									<input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required>
								</p>
								<p class="comment-form-email">
									<label for="email">Email <span class="required">*</span></label>
									<input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required>
								</p>
								<p class="comment-form-url">
									<label for="url">Website</label>
									<input id="url" name="url" type="url" value="" size="30" maxlength="200">
								</p>
								<p class="comment-form-comment">
									<label for="comment">Comment</label>
									<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required></textarea>
								</p>
								<p class="form-submit">
									<input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
									<input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
									<input type="hidden" name="comment_parent" id="comment_parent" value="0">
								</p>
							</form>
						</div>
						<!-- #respond --> 
					</div>
				<!--/comment--> 
			</div>
			<!--blog posts container--> 
			
			<!--aside-->
			<aside class="col-md-4 col-sm-4" > 
				<!--Search-->
				<section class="widget widget_search  wow fadeInUp">
					<form>
						<div class="input-group">
							<input class="form-control" type="text" placeholder="Email Address...">
							<span class="input-group-btn">
								<button  type="button"><i class="fa  fa-search"></i></button>
							</span>
						</div>
					</form>
				</section>
				<!--/Search--> 
				
				<!--Recent Comments-->
				<section class="widget widget_recent_comments  wow fadeInUp">
					<h2 class="widget-title">Recent Comments</h2>
					<ul >
						<li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-18">Tips For Designing a Business</a></li>
						<li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-17">Barbecue Sauce Barbeque</a></li>
						<li ><span class="comment-author-link"><a href="#">Steeve</a></span> on <a href="http://localhost/wordpress/potato-cakes-with-smoked-salmon-cream-cheese/comment-page-1/#comment-16">What Makes A Hotel Boutique</a></li>
					</ul>
				</section>
				<!--Recent Comments end--> 

				<!--Archives start-->
				<section class="widget widget_archive  wow fadeInUp">
					<h2 class="widget-title">Archives</h2>
						<ul >
							<li ><a href="#"> support <span >(01)</span> </a> </li>
							<li><a href="#"> DESIGN<span >(10)</span> </a></li>
							<li ><a href="#"> USER INTERFACE<span>(100)</span> </a> </li>
							<li><a href="#"> Wiki<span >(100)</span> </a></li>
						</ul>
				</section>
				<!--Archives end--> 

				<!--Archives start-->
				<section class="widget widget_categories  wow fadeInUp">
					<h2 class="widget-title">category</h2>
					<ul >
						<li ><a href="#"> Budget </a> </li>
						<li><a href="#"> Industry </a></li>
						<li ><a href="#"> Factory </a> </li>
						<li><a href="#"> Business</a></li>
					</ul>
				</section>
				<!--Archives end--> 
				
				<!--Recent posts start-->
				<section  class="widget  widget_recent_entries  wow fadeInUp ">
					<h2 class="widget-title">Recent posts</h2>
					<ul class="media-list main-list">
						<li class="media"> <a class="" href="#"> <img class="media-object" src="img/04-screenshot.jpg" alt="..."> </a>
							<div class="media-body">
								<p class="media-heading"><a href="#">Tips For Designing a Business </a> </p>
								<ul class="entry-meta">
									<li>10th July 2014</li>
								</ul>
							</div>
						</li>
						<li class="media"> <a class="" href="#"> <img class="media-object" src="img/03-screenshot.jpg" alt="..."> </a>
							<div class="media-body">
								<p class="media-heading"><a href="#">Barbecue Sauce Barbeque</a></p>
								<ul class="entry-meta">
									<li>10th July 2014</li>
								</ul>
							</div>
						</li>
						<li class="media"> <a class="" href="#"> <img class="media-object" src="img/02-screenshot.jpg" alt="..."> </a>
							<div class="media-body">
								<p class="media-heading"> <a href="#">What Makes A Hotel Boutique </a></p>
								<ul class="entry-meta">
									<li>10th July 2014</li>
								</ul>
							</div>
						</li>
					</ul>
				</section>
				
				<!--ad --> 
				<img src="img/ad-250x250.jpg" class="img-responsive"> 
				<!--ad end--> 
				
				<!--Recent posts end-->
				<section class="widget widget_social sidebar  wow fadeInUp">
					<h2 class="widget-title">Follow Us</h2>
					<ul >
						<li ><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
						<li ><a href="#" title="twitter"><i class="fa  fa-twitter"></i></a></li>
						<li ><a href="#" title="google-plus"><i class="fa  fa-google-plus"></i></a> </li>
						<li><a href="#" title="Rss Feed"><i class="fa  fa-rss"></i></a></li>
					</ul>
				</section>
				
				<!--Tags start-->
				<section id="tag_cloud-2" class="widget widget_tag_cloud  wow fadeInUp">
					<h2 class="widget-title">Tags</h2>
					<div class="tagcloud"><a href="#"  title="1 topic" style="font-size: 1em;">Ideas</a> <a href="#" title="1 topic" style="font-size: 1em;">Exterior</a> <a href="#"  title="1 topic" style="font-size: 1em;">Interior</a> <a href="#" title="1 topic" style="font-size: 1em;">Architecture</a> <a href="#"  title="1 topic" style="font-size: 1em;">displays</a> <a href="#"  title="1 topic" style="font-size: 1em;">Design</a> <a href="#"  title="1 topic" style="font-size: 1em;">psd</a></div>
				</section>
				<!--Tags end--> 
				
				<!--Meta  start-->
				<section id="meta-2" class="widget widget_meta  wow fadeInUp">
					<h2 class="widget-title">Meta</h2>
					<ul >
						<li ><a href="#">Site Admin</a></li>
						<li><a href="#">Log out</a></li>
						<li ><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li ><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li ><a href="#" title="">WordPress.org</a></li>
					</ul>
				</section>
				<!--Meta  end--> 
				
				<!--Meta  start-->
				<section id="meta-2" class="widget widget_meta  wow fadeInUp">
					<h2 class="widget-title">Text</h2>
					<p>Subscribe to our free newsletter to be in touch with our new articles. Subscribe to our free newsletter to be in touch with our new articles. Subscribe to our free newsletter to be in touch with our new articles.</p>
				</section>
				<!--Meta  end--> 
				
				<!--Meta  start-->
				<section id="meta-2" class="widget  wow fadeInUp">
					<h2 class="widget-title">custom menu</h2>
					<ul>
						<li><a href="#">Magzine</a></li>
						<li><a href="#">Bootstrap</a></li>
						<li><a href="#">CSS3</a></li>
						<li><a href="#">HTML5</a></li>
					</ul>
				</section>
				<!--Meta  end--> 
			</aside>
			<!--aside-->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
get_sidebar();
get_footer();
