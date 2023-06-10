<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-gray">
			<div class="container-xl">
				<div class="site-footer__top">
					<div class="site-footer__top-logo-wrapper">
						<picture>
							<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/footer-logo-mobile.svg'?>">
							<img class="site-footer__logo" src="<?php echo get_template_directory_uri() . '/assets/public/images/footer-logo-desktop.svg'?>" alt="" width="383" height="36">
						</picture>
					</div>
					<div class="site-footer__top-boxes">
						<ul class="footer-menu">
							<li>
								<a class="footer-menu__link f-500" href="#">FAQ</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Affiliates</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Thunder VIP Club</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Legal</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Privacy And Security</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Provably Fair</a>
							</li>
						</ul>
						<ul class="footer-menu">
							<li>
								<a class="footer-menu__link f-500" href="#">Responsible Gaming</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Self-Exclusion</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Dispute Resolution</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">AML Policy</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">KYC Policy</a>
							</li>
							<li>
								<a class="footer-menu__link f-500" href="#">Payouts And Bonuses</a>
							</li>
						</ul>
						<div class="footer-menu">
							<address class="site-footer__top-address leading-normal">
								Paloma Media B.V.<br>
								Kaya Richard J. Beaujon Z/N,<br>
								Curaçao
							</address>
							<a class="site-footer__top-link" href="mailto:service@cs.thunderpick.io">service@cs.thunderpick.io</a>
						</div>
						<div class="sm-only">
							<p class="site-footer__top-icon">
								<span class="eighteen-plus-icon f-700">18+</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-dark">
			<div class="container-xl">
				<div class="site-footer__bottom">
					<ul class="logos-list-wrapper">
						<li>
							<picture>
								<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/footer/bitcoin-mobile.svg'?>" width="37" height="37">
								<img src="<?php echo get_template_directory_uri() . '/assets/public/images/footer/bitcoin-desktop.svg'?>" alt="" width="107" height="58">
							</picture>
						</li>
						<li>
							<picture>
								<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/footer/ethereum-mobile.svg'?>" width="37" height="37">
								<img src="<?php echo get_template_directory_uri() . '/assets/public/images/footer/ethereum-desktop.svg'?>" alt="" width="122" height="58">
							</picture>
						</li>
						<li>
							<picture>
								<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/footer/litecoin-mobile.svg'?>" width="37" height="37">
								<img src="<?php echo get_template_directory_uri() . '/assets/public/images/footer/litecoin-desktop.svg'?>" alt="" width="107" height="58">
							</picture>
						</li>
						<li>
							<picture>
								<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/footer/tether-mobile.svg'?>" width="37" height="37">
								<img src="<?php echo get_template_directory_uri() . '/assets/public/images/footer/tether-desktop.svg'?>" alt="" width="107" height="58">
							</picture>
						</li>
						<li>
							<picture>
								<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/footer/xrp-mobile.svg'?>" width="37" height="37">
								<img src="<?php echo get_template_directory_uri() . '/assets/public/images/footer/xrp-desktop.svg'?>" alt="" width="98" height="58">
							</picture>
						</li>
						<li>
							<picture>
								<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/footer/bitecoin-cash-mobile.svg'?>" width="37" height="37">
								<img src="<?php echo get_template_directory_uri() . '/assets/public/images/footer/bitecoin-cash-desktop.svg'?>" alt="" width="123" height="58">
							</picture>
						</li>
					</ul>
					<div class="md-only">
						<p class="site-footer__bottom-icon">
							<span class="eighteen-plus-icon f-700">18+</span>
						</p>
					</div>
					<p class="site-footer__bottom-text f-500 leading-tight">Copyright @ 2023 All thunderpick.io products are operated by Paloma Media B.V., registration number 146988, a company licensed and regulated by the laws of Curacao.</p>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
