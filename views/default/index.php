<?php foreach ($sections as $key => $section): ?>
    <section id="section_<?= $key ?>" class="<?= $background_class ?>background-specifications" data-ratio="<?= $section['ratio']?>" style="<?= isset($section['style']) ? $section['style'] : '' ?>">
        <section class="section-full-width">
            <?= $this->renderFile($path_to_views."_section_$key.php") ?>
        </section>
    </section>
    <?php if ($key != count($sections)-1): // no background images on the last section (it's ugly) ?>
        <?php if ($i_phone_pad): ?>
            <img src="<?= $url_to_imgs_reduced.$section['reduced background image']?>" class="background-simulation">
        <?php else: ?>
            <style>
                #section_<?= $key ?> { background-image: url(<?= $url_to_imgs.$section['full background image']?>);  }
            </style>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
<header class="fixed">
    <?php   
        echo $this->renderFile($path_to_views."_header.php", array(
            'class' => 'page-width',
            'anchors_with_url' => false,
            'show_menu' => true,
            'menu' => '/_menu'
        ));
    ?>
</header>
<script>
$(document).ready(function(){ 
    $.fn.front('init', {});
});
</script>
    
