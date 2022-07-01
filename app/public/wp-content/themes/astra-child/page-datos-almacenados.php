<?php
//
acf_form_head();
get_header();
?>
<section style="background-color:#d8bf20";>
		<main role="main">
		<?php
		while ( have_posts() ) : the_post(); ?>
			<h1 style= "display: flex; margin-top:130px; font-weight: bold; font-family: arial; font-size:20px; margin-left:20px; ">Contacto</h1>
            <p style="font-family:arial; font-size:13px; margin-left:20px; margin-top:20px";>Lorem Ipsum as their default model text, and a search for 'lorem iopsum´will uncover <br>
many web sites still in their infancy.</p>
			<?php
			the_content();
			$args = [
				'new_post'        => [
					'post_type'   => 'contacto',
					'post_status' => 'publish'
				],
				'post_id'         => 'new_post',
				'post_title'      => false,
				'submit_value'    => 'View All',
                'html_updated_message'  => '<div id="message" class="updated"><p class="data">Datos almacenados correctamente.</p>   </div>',
			];
			acf_form( $args );
		endwhile;
		?>
	</main>
    </section>