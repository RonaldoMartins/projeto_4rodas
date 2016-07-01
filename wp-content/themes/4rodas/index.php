<?php get_header(); ?>

<!-- <div class="container">
        <section class="container space-top-15 internal-space">
            <article class="principal1"> 
                <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/img01.png">
            </article>
            <article class="principal2" style="">
                <div class="min_banner">
                    <img class="align_left" src="http://localhost/wordpress/wp-content/themes/4rodas/img/img02.png">
                    <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/img03.png">
                </div>               
                <div class="min_banner second">
                    <img class="align_left" src="http://localhost/wordpress/wp-content/themes/4rodas/img/img04.png">
                    <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/img02.png">
                </div>
            </article>
        </section>  












			

















        <section class="container space-top-15">
            <article class="destaques">
                <div>
                    <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/img1.png">
                    <h2>Honda Civic VTi: apetite por giro alto</h2>
                    <p>O Honda Civic VTi de quinta geração se despediu do mercado há mais de 20 anos, mas o...</p>
                    <a href="#"><h4>Honda Civic VTi: apetite por </h4></a>
                </div>

                <div>
                    <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/img2.png">
                    <h2>Honda Civic VTi: apetite por giro alto</h2>
                    <p>O Honda Civic VTi de quinta geração se despediu do mercado há mais de 20 anos, mas o...</p>
                    <a href="#"><h4>Honda Civic VTi: apetite por </h4></a>
                </div>

                <div style="margin-right:0px;">
                    <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/img3.png">
                    <h2>Honda Civic VTi: apetite por giro alto</h2>
                    <p>O Honda Civic VTi de quinta geração se despediu do mercado há mais de 20 anos, mas o...</p>
                    <a href="#"><h4>Honda Civic VTi: apetite por </h4></a>
                </div>

                <div style="margin-left:10px; margin-right:0px;"">
                    <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/img4.jpg">
                    <h2>Honda Civic VTi: apetite por giro alto</h2>
                    <p>O Honda Civic VTi de quinta geração se despediu do mercado há mais de 20 anos, mas o...</p>
                    <a href="#"><h4>Honda Civic VTi: apetite por </h4></a>
                </div>
            </article>


			

 </section>   


  </div> -->
				

    <?php
			        if(have_posts()) : while(have_posts()) : the_post();
			        ?>

			        <h1><?php the_title(); ?></h1>

			        <?php the_content (); ?>

			        <?php
			            endwhile;
			            else:
			    ?>

			<p>Nenhum post encontrado</p>
			<?php
			    endif;
			?>





<?php get_footer(); ?>



  
   
    
