<?php /* Template Name: Contact Page Template */ get_header(); ?>

<div class="contact-section">
        <div class="container">
            <div class="section-grey">
            <div class="col-md-6">
                <p>
                    <br>
                    <h3><strong>Infos</strong></h3>
                    <span class="glyphicon glyphicon-envelope btn-lg"></span> contact@songazine.fr
                    <br>
                    <span class="glyphicon glyphicon-home btn-lg"></span> 12 avenue Leonard de Vinci
                    <br>
                    <span class="glyphicon glyphicon-phone btn-lg"></span> 06 00 00 00 00

                    <br>
                    <h3><strong>Réseaux sociaux </strong></h3>
                    <br>
                        <div class="reseauxsociaux">
                            <a href="songazine.fr"><img class="logoreseaux" src="<?php echo get_bloginfo('template_url') ?>/img/icons/facebook.png"/></a>&nbsp;
                            <a href="songazine.fr"><img class="logoreseaux" src="<?php echo get_bloginfo('template_url') ?>/img/icons/twitter.png"/></a>&nbsp;
                            <a href="songazine.fr"><img class="logoreseaux" src="<?php echo get_bloginfo('template_url') ?>/img/icons/spotify.png"/></a>&nbsp;
                            <a href="songazine.fr"><img class="logoreseaux" src="<?php echo get_bloginfo('template_url') ?>/img/icons/youtube.png"/></a>
                        </div>

                </p>
            </div>



            <div class="row">
                <div class="col-md-5">
                    <form class="form-horizontal">
                        <img class="logomoyen" src="<?php echo get_bloginfo('template_url') ?>/img/logonoir.png"/>
                        <h3><strong>Nous contacter</strong></h3>
                        <div class="form-group">
                            <label for="exampleInputName"></label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText"></label>
                            <input type="text" class="form-control" id="exampleInputText" placeholder="Sujet">
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputText"></label>
                            <textarea  class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary form-control">Envoyer</button>
                    </form>
                </div>
            </div>
                <br>
                <br>
        </div>
    </div>
</div>


<?php get_footer(); ?>
