<?php

get_header();
pageBanner(array(
  'title' => 'All programs',
  'subtitle' => 'Theres is somethig for everyone. Have a look around.'
));
?>

  <div class="container container--narrow page-section">
    <ul class="link-list min-list">       
        <?php
        while(have_posts()){
            the_post();?>
            <li>
                <a href="<?php the_permalink(); ?>">
                <?php
                    the_title();
                    ?>
                </a>
            </li>
        <?php }
    echo paginate_links();
    ?>
    
</div>  

</ul>
<?php

get_footer();
?>

