<?= get_header() ?>
    

        <div class="row">
            <div class="col-md-8 col-sm-12">

                <?php
                if (have_posts()): while(have_posts()): the_post();
                ?>

                    <h3 class="mb-3 pb-2 "><?= the_title(); ?></h3>

                    <?=  the_content()  ?>

                <?php endwhile; ?>

                <?php else: get_404_template(); endif; ?>

            </div>
            
            <?= get_sidebar() ?>

        </div>
    </div>

    <?= get_footer() ?>