<?php ?>
 <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php echo $title; ?></h1>
        <p class="lead blog-description">by <?php echo $news_item['codeuser']; ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $news_item['title']; ?></h2>
            <p class="blog-post-meta"><?php echo date('M j Y g:i A', strtotime($news_item['datetime'])); ?></p>

            <p><?php echo $news_item['text']; ?></p>
            <img width="500" height="500" src="<?php echo base_url("assets/" . $news_item['image']); ?>">
               
          </div><!-- /.blog-post -->

      
      </div><!-- /.row -->

    </div><!-- /.container -->

