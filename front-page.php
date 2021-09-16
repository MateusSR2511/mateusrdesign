<?php get_header();?>

<div id="inicio">

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Design <br>Inteligente.</h1>
                <div id="fancytext">
                    <h2>Logotipos e Identidades Visuais</h2>
                    <h3>desenhados estratégicamente.</h3>
                </div>
                <button class="btn btn-orcamento">Fazer orçamento</button>
                
            </div>
            <div id="heroimage" class="col-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/hero.png" alt="Hero image">
            </div>
        </div>
    </div>  

</div>

<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Veja alguns dos meus trabalhos</h2>
                <p>Clique na imagem para ver o projeto completo.</p>
            </div>
        </div>
        <div class="row" id="thumbnails"> 
            <?php get_template_part('includes/section-portfolio');?>
        </div>
    <div>
</div>

<div id="inteligente">
    
    <div class="container">
        <div class="row">
            <div id="left" class="col-3">
                <p>Place holder</p>
            </div>
            <div id="right" class="col-9">
                <p>Place holder</p>
            </div>
        </div>
    </div>

</div>


<?php get_footer();?>