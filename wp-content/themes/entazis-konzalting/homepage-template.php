<?php /* Template Name: Homepage template */ ?>

<?php get_header(); ?>
<!--SECTION INTRO STARTS-->
<?php $image = get_field('slika'); ?>
<section id="s_intro" class="hero is-fullheight" style="background-image: url(<?php echo esc_url($image['url']); ?>"> 
    <div class="layer"></div>
    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1><?php echo get_field('glavni_naslov') ?></h1>
            <h3><?php echo get_field('podnaslov') ?></h3>
        </div>
    </div>

    <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot">
        <div class="container has-text-centered">
            <a href="#o_nama" class="icon"><i></i></a>
        </div>    
    </div>
</section><!--SECTION INTRO ENDS-->

<!--SECTION O NAMA STARTS-->
<section id="o_nama" class="section default-title about-us">
    <div class="opacity_layer"></div>
    <div class="container">
        <h1>Ko smo mi?</h1>
        <div class="subtitle">
            <hr>
            <h3><?php echo get_field('podnaslov_sekcije1') ?></h3>
        </div>
            <p><?php echo get_field('tekst_ispod_podnaslova') ?></p>
        <div class="buttons">
            <a href="<?php echo home_url(); ?>/o-nama" class="button"><span>SAZNAJTE VIŠE</span><i></i></a>
        </div>
    </div>
</section><!--SECTION O NAMA ENDS-->

<!--SECTION TEAM STARTS-->
<section id="nas_tim" class="section our-team">
    <div class="container">
        <div class="subtitle">
           <hr>
           <h3>Upoznajte naš tim</h3>
        </div>

<?php $image_1 = get_field('fotografija_1'); ?>
<!-- FIRST TEAM MEMBER STARTS -->  
        <div class="team_members columns">
            <div class="team_member column is-6 ">
                <div class="inner">
                    <div class="image">
                        <img src="<?php echo esc_url($image_1['url']); ?>" />
                    </div>
                    
                    <div class="team_content">
                        <h3><?php echo get_field('ime') ?></h3>
                        <p><?php echo get_field('titula') ?></p>
                        <p><b><?php echo get_field('telefon_1') ?></b></p>
                    </div>
                    
                    <div class="buttons">
                        <a class="button" href="mailto:<?php echo get_field('email_1'); ?>"><?php echo get_field('email_1'); ?></a>
                    </div>
                </div>
            </div> <!-- FIRST TEAM MEMBER ENDS -->             

<?php $image_2 = get_field('fotografija_2'); ?>
<!-- SECOND TEAM MEMBER STARTS --> 
        <div class="team_member column is-6 ">
            <div class="inner">
                <div class="image">
                    <img src="<?php echo esc_url($image_2['url']); ?>" />
                </div>

                <div class="team_content">
                    <h3><?php echo get_field('ime') ?></h3>
                    <p><?php echo get_field('titula') ?></p>
                    <p><b><?php echo get_field('telefon_2') ?></b></p>
                </div>

                <div class="buttons">
                    <a class="button" href="mailto:<?php echo get_field('email_2'); ?>"><?php echo get_field('email_2'); ?></a>
                </div>
            </div>
        </div> <!-- SECOND TEAM MEMBER ENDS --> 
    </div>
</section> <!--SECTION TEAM ENDS-->


<!--SECTION CERTIFICATES STARTS-->
<section id="certificates" class="section">
    <div class="container">
        <div class="subtitle">
           <hr>
           <h3><?php echo get_field('podnaslov_sekcije3') ?></h3>
        </div>
       
        <div class="columns">
            <?php $award_1 = get_field('certifikat_1'); ?>
            <div class="column is-4">
                <img src="<?php echo esc_url($award_1['url']); ?>" /> 
            </div>
            <?php $award_2 = get_field('certifikat_2'); ?>
            <div class="column is-4">
               <img src="<?php echo esc_url($award_2['url']); ?>" /> 
            </div>
            <?php $award_3 = get_field('certifikat_3'); ?>
            <div class="column is-4">    
               <img src="<?php echo esc_url($award_3['url']); ?>" /> 
            </div>
        </div>
    </div>
</section> <!--SECTION CERTIFICATES ENDS-->


<!--SECTION USLUGE STARTS -->
<section id="usluge" class="section hero is-fullheight default-title">
    <div class="layer2"></div>
    <div class="container">
        <h1>Usluge</h1>

<!-- COLUMNS FOR USLUGE START -->       
        <div class="columns services is-multiline">

<!-- SERVICE FIRST COLUMN STARTS -->   
            <div class="column is-4 service">
                <div class="inner-content">
                    <div class="overlay_smallbox">
                       <div class="blur_overlay"></div>
                    </div>

                    <div class="small_circle"><i class="icon_1"></i></div>

                    <div class="service_content">
                    <h3><?php echo get_field('naziv_usluge_1') ?></h3>
                        <hr>
                        <p><?php echo get_field('sadrzaj_usluge_1') ?></p>
                    </div>

                      </div>
            </div> <!-- SERVICE FIRST COLUMN ENDS -->  

<!-- SERVICE SECOND COLUMN STARTS -->  
            <div class="column is-4 service">
                <div class="inner-content orange_background">
                
                    <div class="small_circle"><i class="icon_2"></i></div>
                    <div class="service_content main_work">

                    <h3><?php echo get_field('naziv_usluge_2') ?></h3>
                        <hr>
                        <p><?php echo get_field('sadrzaj_usluge_2') ?></p>
                    </div>
                </div>
            </div> <!-- SERVICE SECOND COLUMN ENDS -->  

<!-- SERVICE THIRD COLUMN STARTS -->  
            <div class="column is-4 service">
                <div class="inner-content">
                <div class="overlay_smallbox"></div>
                
                    <div class="small_circle"><i class="icon_3"></i></div>
                    <div class="service_content">
                        <h3><?php echo get_field('naziv_usluge_3') ?></h3>
                        <hr>
                        <p><?php echo get_field('sadrzaj_usluge_3') ?></p>
                    </div>
                </div>
            </div> <!-- SERVICE THIRD COLUMN ENDS -->      

<!-- SERVICE FOURTH COLUMN STARTS -->  
            <div class="column is-4 is-offset-2 service">
                <div class="inner-content">
                <div class="overlay_smallbox"></div>
                    <div class="small_circle"><i class="icon_4"></i></div>
                    <div class="service_content">
                        <h3><?php echo get_field('naziv_usluge_4') ?></h3>
                        <hr>
                        <p><?php echo get_field('sadrzaj_usluge_4') ?></p>
                    </div>
                </div>
            </div> <!-- SERVICE FOURTH COLUMN STARTS -->  

<!-- SERVICE FIFTH COLUMN STARTS -->  
            <div class="column is-4 service">
                <div class="inner-content is-offset-1">
                <div class="overlay_smallbox"></div>
                    <div class="small_circle"><i class="icon_5"></i></div>
                    <div class="service_content">
                        <h3><?php echo get_field('naziv_usluge_5') ?></h3>
                        <hr>
                        <p><?php echo get_field('sadrzaj_usluge_5') ?></p>
                    </div>
                </div>
            </div> <!-- SERVICE FIFTH COLUMN STARTS -->  

    </div> <!-- COLUMNS FOR USLUGE END -->   

</div>
</section>

<!--SECTION USLUGE ENDS-->


<!-- SECTION REFEENCE STARTS -->
<section id="reference" class="section default-title reference">
    <div class="container">
        <h1>Reference</h1>

<?php $referenca_1 = get_field('referenca_1'); ?>
<?php $referenca_2 = get_field('referenca_2'); ?>
<?php $referenca_3 = get_field('referenca_3'); ?>
<?php $referenca_4 = get_field('referenca_4'); ?>
<?php $referenca_5 = get_field('referenca_5'); ?>
<?php $referenca_6 = get_field('referenca_6'); ?>
 <!-- TILE STARTS -->         
        <div class="tile is-ancestor">
            <div class="tile is_vertical is-12 all_references">              
                <div class="tile ">
                
                    <div class="tile is-8 is-vertical image">
                        <div class="tile">
                            <div class="tile is-parent single-reference-is-parent">  
                                <div class="inner">
                                <img src="<?php echo esc_url($referenca_1['url']); ?>" />
                                    <p class="image_descrition"><?php echo get_field('opis_reference_1') ?></p> 
                                </div>
                            </div>

                        <div class="tile is-parent">   
                            <div class="tile is-vertical image">
                                <div class="single-reference is-padding-bottom-75">
                                    <img src="<?php echo esc_url($referenca_2['url']); ?>" />
                                    <div class="over-image"></div>
                                    <p class="image_descrition"><?php echo get_field('opis_reference_2') ?></p>   
                                </div>
                                
                                <div class="single-reference">
                                    <img src="<?php echo esc_url($referenca_3['url']); ?>" />
                                    <p class="image_descrition"><?php echo get_field('opis_reference_3') ?></p>   
                                </div>     
                            </div>    
                        </div>     
                    </div>

                    <div class="tile is-parent image padding-custom single-reference-is-parent image">
                        <div class="inner">
                            <img src="<?php echo esc_url($referenca_4['url']); ?>" />
                            <p class="image_descrition"><?php echo get_field('opis_reference_4') ?></p> 
                        </div>                    
                    </div>
                </div>               
                    
                <div class="tile is-parent">
                    <div class="tile is-vertical image">
                        <div class="single-reference is-padding-bottom-95">
                            <img class="tile is-child custom-height-1" src="<?php echo esc_url($referenca_5['url']); ?>" />  
                            <p class="image_descrition"><?php echo get_field('opis_reference_5') ?></p>
                        </div>
                        <div class="single-reference ">
                            <img class="tile is-child" src="<?php echo esc_url($referenca_6['url']); ?>" />  
                            <p class="image_descrition"><?php echo get_field('opis_reference_6') ?></p>
                        </div>
                    </div>
                </div>
                      
                </div>  
            </div>
        </div> <!-- TILE ENDS -->     
    </div>
</section> <!-- SECTION REFEENCE ENDS -->

<!-- SECTION KONTAKT STARTS -->

<section id="kontakt" class="section default-title kontakt"> 
    <div class="contact_layer"></div>

    <div class="container">
        <h1>Kontakt</h1>
        <div class="columns">
                <!-- FIND US COLUMN START --> 
                <div class="column is-4 find"> 
                    <div class="contact-title">
                        <h3><?php echo get_field('naslov_za_formu') ?>Pronađite nas</h3>
                    </div>
                    <div class="single-line">
                        <i class="icon icon_street"></i>
                        <div class="adresa">
                           <p><?php echo get_field('adresa') ?> </p>
                        </div>
                    </div>

                    <div class="single-line">
                        <i class="icon icon_phone"></i>
                        <div class="kontakt-telefon">
                           <p><?php echo get_field('kontakt_telefon') ?></p>
                        </div>
                    </div>

                    <div class="single-line">
                        <i class="icon icon_info_mail"></i>
                        <p><?php echo get_field('email') ?></p>
                    </div>

                    <div class="soc_netw">
                        <a href="http://www.facebook.com" target="_blank" class="facebook"><i></i></a>
                        <a href="http://instagram.com/" target="_blank" class="instagram"><i></i></a>
                    </div>
                </div><!-- FIND US COLUMN ENDS -->

                <!-- FORM COLUMN STARTS -->
                <div class="column is-8 contact_form">
                    <div class="form_info">
                        <div class="text_box">
                        <div class="contact-title">
                            <h3><?php echo get_field('naslov_kontatk_forme') ?></h3>
                        </div>
                        <div class="contact-subtitle">
                            <p><?php echo get_field('podnaslov_kontatk_forme') ?></p>
                        </div>
                        </div>
                        <!-- FORM STARTS -->
                        <div class="field">
                            <div class="control">
                                <input class="input" type="name" placeholder="Ime i prezime" require>  
                            </div>
                            <div class="control">
                                <input class="input" type="email" placeholder="Email adresa">
                            </div>
                            <div class="control">
                                <textarea class="textarea" placeholder="Vaša poruka"></textarea>
                            </div>
                            <div class="buttons">
                                <a class="button"><span>POŠALJITE PORUKU</span></a>
                            </div>   
                        </div> 
                    </div><!-- FORM ENDS --> <!-- FIND US COLUMN ENDS -->
                </div>
            </div>
        </div>
    </div>
</section> <!-- SECTION KONTAKT ENDS -->

<?php get_footer(); ?>