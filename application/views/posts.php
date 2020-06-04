<?php
    foreach ($articles as $value) {
?>
    <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $value["title"]?></h2>
            
            <img class="img-thumbnail" src="<?php echo $value["urlToImage"]?>" />

            <p class="blog-post-meta justify"><?php echo $value["publishedAt"]?> por <a href="#" class="autor"></a></p>
            <p>
                <?php echo $value["content"]?>
            </p>
            <a href="<?php echo $value["url"]?>">Leer noticia</a>
    </div><!-- /.blog-post -->
<?php
    }
?>
