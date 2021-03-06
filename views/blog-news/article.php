
<?php
	use yii\helpers\Html;
    use yii\helpers\Url;
    $image = $article->getImage();
?>
 	<div class="top_nav">
 		<div class="container">
 			<div class="row">
 				<div class="top_search .col-md-12">

 					<div class="left">
 						<p>статьи</p>
 					</div>

 					<div class="right">
                                            <form action="<?= Url::to(['blog-news/search'])?>">
                                                <input type="text" name="str" placeholder="Поиск...">
                                            </form>
 						
 					</div>

 				</div>
 			</div>
 		</div>
 	</div>

 	<section class="article">
 		<div class="container art_bg">

 			<div class="row">
 				<h2><?= $article->name; ?></h2>
 			</div>
 			<div class="row">
 				<img src="<?= $image->getUrl(); ?>" class="bg col-md-12">
 			</div>

 			<div class="top_line"></div>
 				<div class="row">
 					<div class="post col-md-12 ">
 						<?= $article->text; ?>
 					</div>
 				</div>
 			</div>
 	</section>


 						<section class="s_bot">
 							<div class="container">
 								<div class="row">
 									<div class="art_bot">
 										<div class="left">
 											<p>Источник: <a href="<?= $article->article_url; ?>"><?= $article->article_url; ?></a></p>
 										</div>
 										<div class="right">	

 										</div>
 									</div>
 								</div>
 							</div>
 						</section>
<?php 
