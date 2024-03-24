<?php
/**
 * Template Name: TableGen – WP Data Table Generator
 * Template Post Type: download
 *
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
ob_start();
?>

<div class="product-key-features wpwax_only-features pb-130">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="shape shape-bottom">
					<?php echo Helper::the_svg('shapes/circle-primary'); ?>
				</div>
				<div class="features-box">
					<h2 class="text-center display-3">Key Features</h2>
					<ul class="list-unstyled">
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Extremely Easy to use:  If you can not use a plugin happily, then no matter how great the plugin is, it is just useless. We developed this plugin giving user’s usability our first priority. So, you can create very beautiful data table or normal table very easily without having a coding knowledge.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Very Elegant user interface:  We know you do not like ugly user interface when using a plugin that is why we have paid a lot of time creating the interface that will give you peace of mind to use it. We bet you will like the simple and beautiful interface of our plugin.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Modern and Attractive Table Design: If the design of the table is not attractive then your data may not be attractive to your users too. This is why we have integrated modern and minimal design to the table.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?>Design Compatibility: No matter what your theme is, this plugin will display your data in a very adaptable table that will comply with any theme’s design.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Extensibility: We know every user has different needs. So, we have made this plugin extensible and modular. So, you can use the extension you like and increase the feature of this plugin very easily without touching any codes.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Export your table/data: You can export your table and save them in a safe place or you can take your table data and use them in any other program. So, your data will always be portable and safe.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Import your table/data: If you have data saved from somewhere like Google sheets, MS Excel or you exported them from this plugin then you can easily import them using this plugin and create table instantly with that data.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Small Size: The size of the plugin is very small. It will not use your valuable hosting space. No junk and useless codes.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Blazing fast and secure: It is very fast and secure. We take no exception to security. We crafted this plugin using latest Object-oriented codes and following latest security and WordPress Coding standard.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Availability of new extensions: We are developing new extensions for this plugins constantly. So, you can extend this plugin very easily.</li>
						<li><?php echo wpwax_icon( 'uil uil-check-circle', false); ?> Fast Updates: We update our plugin with new features very often and fix any bug very fast. So, your site is always fast and safe. And many more features.</li>
					</ul>
                    <p>So, why do you not give this plugin a try and see yourself how this plugin can make your life easier when you are in need of creating a powerful data table or just a general table.</p>
				</div>
			</div>
		</div>
	</div>
</div><!-- ends: .product-key-features -->

<?php
$custom_content = ob_get_clean();
Helper::get_template_part('single-download', compact('custom_content'));