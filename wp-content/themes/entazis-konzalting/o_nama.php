<?php /* Template Name: O nama template */ ?>

<?php get_header(); ?>

<!--SECTION INTRO STARTS-->

<section id="intro" class="hero">
    <div class="hero-body"></div>

</section><!--SECTION INTRO ENDS-->

<section id="prica_o_nama">
    <div class="orange_layer"></div>
    <div class="container">
        <div class="poruka_onama">
            <h1><?php echo get_field('naslov_o_nama') ?></h1>
            <p><?php echo get_field('poruka_o_nama') ?><br></p>
        </div>
    </div>
</section>

<section id="opis">
    <div class="container"> 
        <div class="nas_opis">
            <p><?php echo get_field('tekst_1') ?></p>
        </div>
    </div>        
</section>

<section id="osnivanje">
<div class="orange_layer_2"></div>
        <div class="container">
            <div class="columns">
                <div class="left column is-6">
                    <div class="tekst">
                        <h3><?php echo get_field('naslov_sekcije_1') ?></h3>
                        <p><?php echo get_field('tekst_2') ?></p>
                   </div>
                </div>
                <div class="right column is-6">
                <?php $slika_1 = get_field('slika_1'); ?>
                    <img src="<?php echo esc_url($slika_1['url']); ?>" /> 
                </div>
            </div>    
       </div>
    </div>
</section>

<section id="nasa_misija">
    <div class="container">
        <div class="columns">
            <div class="right_2 column is-6">
            <?php $slika_1 = get_field('slika_2'); ?>
                    <img src="<?php echo esc_url($slika_1['url']); ?>" /> 
            </div>  
            <div class="left_2 column is-6"> 
                <div class="tekst">
                    <h3><?php echo get_field('naslov_sekcije_2') ?></h3>
                        <p><?php echo get_field('tekst_3') ?></p>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>

<section id="ostvarenja">
    <div class="orange_layer_2"></div>
        <div class="container">
            <div class="columns">
                <div class="right_3 column is-6">
                    <div class="tekst">
                        <h3><?php echo get_field('naslov_sekcije_3') ?></h3>
                        <p><?php echo get_field('tekst_4') ?></p>
                    </div>
                </div>
                <div class="left_3 column is-6">
                <?php $slika_1 = get_field('slika_3'); ?>
                    <img src="<?php echo esc_url($slika_1['url']); ?>" /> 
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials">
    <div class="orange_layer"></div>
        <div class="container">
        <div class="zvijezde"><i class="star"></i><i class="star"></i><i class="star"></i></div>
           <p><?php echo get_field('testimonials') ?><br></p>
           <hr>
        <div class="klijent">
        <?php $slika_klijenta = get_field('slika_klijenta'); ?>
            <img src="<?php echo esc_url($slika_klijenta['url']); ?>" /> 
            <p><?php echo get_field('podaci_klijenta') ?></p>

        </div>
        </div>
</section>

<?php get_footer(); ?>
