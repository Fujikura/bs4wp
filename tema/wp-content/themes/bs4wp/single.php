<?= get_header() ?>
    

        <div class="row">
            <div class="col-md-8 col-sm-12">

                <?php
                if (have_posts()): while(have_posts()): the_post();
                ?>
                    <p class="text-muted">Publicado em: 
                        <span class="badge badge-cor-3">
                            <?=  get_the_date('d/m/y')  ?>
                        </span>
                    </p>

                    <?=  the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid rounded' )) ?>

                    <h3 class="mb-3 mt-4 pb-2 border-top"><?= the_title(); ?></h3>

                    <?=  the_content()  ?>
                    <hr>
                    <?= comments_template()  ?>
                    
                    
            <?php endwhile; ?>
                <?php else: get_404_template(); endif; ?>

            </div>
            
            <?= get_sidebar() ?>

        </div>
    </div>

    <?= get_footer() ?>