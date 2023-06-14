<?php 
/**
 * Footer template for the site footer
 * 
 * The footer is split into three sections:
 * 
 *  - Upper footer with widgets
 *  - Instagram section
 *  - Copyright and Back to top button
 */


?>
	</div> <!-- .main-content -->

	<footer id="main-footer" class="main-footer mt-4 mb-12 md:mb-20 px-6">
		<div class="xl:max-w-8xl container mx-auto flex flex-col gap-y-8 md:gap-y-0 md:flex-row md:py-12">
			<div class="footer-logo-icons order-2 lg:order-1 w-full space-y-8 md:w-1/4 lg:w-2/5">
			<img src="images/levo-logo.svg" class="w-full max-w-[170px] lg:max-w-none lg:w-44" />
			<p class="text-lev-xs text-dim-gray-pale">© 2022 Levo. All Rights Reserved</p>
			<div class="flex flex-row gap-x-2">
				<a href="#">
				<img src="images/footer-fb-icon.svg" class="w-9 hover:opacity-90" />
				</a>
				<a href="#">
				<img src="images/footer-instagram-icon.svg" class="w-9 hover:opacity-90" />
				</a>
				<a href="#">
				<img src="images/footer-twitter-icon.svg" class="w-9 hover:opacity-90" />
				</a>
			</div>
			</div>
			<div class="footer-links flex order-1 lg:order-2 w-full flex-wrap gap-y-8 md:flex-row md:w-3/4 lg:w-3/5">
			<div class="footer-link-column space-y-4 w-1/2 sm:w-1/3">
				<h4 class="text-lev-title-xs font-medium capitalize text-outer-space">Company</h4>
				<ul class="list-none space-y-1">
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> About Us </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Press </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Get Newsletter </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Contact Us </a>
				</li>
				</ul>
			</div>
			<div class="footer-link-column space-y-4 w-1/2 sm:w-1/3">
				<h4 class="text-lev-title-xs font-medium capitalize text-outer-space">Services</h4>
				<ul class="list-none space-y-1">
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Career Coaching </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Job Board </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> E-Learning </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Webinars </a>
				</li>
				</ul>
			</div>
			<div class="footer-link-column space-y-4 w-1/2 sm:w-1/3">
				<h4 class="text-lev-title-xs font-medium capitalize text-outer-space">Explore</h4>
				<ul class="list-none space-y-1">
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Articles </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Interviews </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Downloads </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Podcast </a>
				</li>
				<li>
					<a href="#" class="text-lev-s capitalize text-dim-gray-pale hover:text-outer-space"> Book </a>
				</li>
				</ul>
			</div>
			</div>
		</div>
	
	</footer>
	
</div> <!-- .body-wrapper -->

<?php wp_footer(); ?>

</body>
</html>