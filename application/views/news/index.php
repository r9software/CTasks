<?php
$this->load->helper('text');
?>
<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">About</a></li>
                <li role="presentation"><a href="#">Contact</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
    </div>

    <div class="jumbotron">
        <h1><?php echo $title; ?></h1>
        <p class="lead">A blog is your best bet for a voice among the online crowd. It's a personal website, packed with features, as easy to use as your e-mail.</p>
        <p><a class="btn btn-lg btn-success" href="<?php echo base_url("signup");?>" role="button">Sign up today</a></p>
    </div>

    <div class="row marketing">

        <?php foreach ($news as $news_item): ?>
            <div class="col-lg-6">
                <h2><?php echo $news_item['title']; ?></h2>
                <p>        
                    <?php echo word_limiter($news_item['text'], 80); ?>
                    
                </p>
                <img width="150" height="150" src="<?php echo base_url("assets/" . $news_item['image']); ?>">
                <p><strong><?php echo $news_item['codeuser']; ?></strong></p>
                 <a href="<?php echo base_url("news/view/".$news_item['ID']); ?>">Continue Reading</a>   
            </div>
        <?php endforeach; ?> 
    </div>


</div> <!-- /container -->
