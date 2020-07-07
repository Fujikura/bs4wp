<?= get_header() ?>
    

        <div class="row">
            <div class="col-md-8 col-sm-12">

                <?php
                if (have_posts()): while(have_posts()): the_post();
                ?>
               
                    <div class="blog-post mb-5">

                        <h3 class="mb-3 pb-2 border-bottom"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h3>
                        
                        <div class="row">
                            <div class="col-md-12 col-lg-6 mb-3">
                                <a href="<?= the_permalink() ?>">
                                    <?=  the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid' )) ?>
                                </a>
                            </div>
                            <div class="col-md-12 col-lg-6 mb-3">
                                <?= the_excerpt() ?>
                            </div>
                        </div>                        
                            <p class="text-muted">Publicado em: <span class="badge badge-cor-3"><?=  get_the_date('d/m/y')  ?></span></p>
                    </div>

                <?php endwhile; ?>
                <?php else: get_404_template(); endif; ?>

                               
                <div class="blog-pagination mt-5 mb-5">
                        <?= next_posts_link('Mais antigos') ?>
                        <?= previous_posts_link('Mais novos') ?>
                </div>                
            </div>
            
            <?=  get_sidebar() ?>

        </div>

    <?= get_footer() ?>