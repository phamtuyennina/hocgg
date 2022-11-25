<?php if(count($brand)) { ?>
	<div class="wrap-brand">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="control-carousel prev-carousel prev-brand transition"><i class="fas fa-chevron-left"></i></p>
			<div class="owl-carousel owl-theme owl-brand">
				<?php foreach($brand as $v) { ?>
					<div>
						<a class="brand text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
							<img onerror="this.src='<?=THUMBS?>/150x150x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x150x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/>
						</a>
					</div>
				<?php } ?>
			</div>
			<p class="control-carousel next-carousel next-brand transition"><i class="fas fa-chevron-right"></i></p>
		</div>
	</div>
<?php } ?>

<?php if(count($pronb)) { ?>
	<div class="wrap-product wrap-content">
		<div class="title-main"><span>Sản phẩm nổi bật</span></div>
		<div class="paging-product"></div>
	</div>
<?php } ?>

<?php if(count($splistnb)) { foreach($splistnb as $vlist) { ?>
	<div class="wrap-product wrap-content">
		<div class="title-main"><span><?=$vlist['ten'.$lang]?></span></div>
		<div class="paging-product-category paging-product-category-<?=$vlist['id']?>" data-list="<?=$vlist['id']?>"></div>
	</div>
<?php } } ?>

<?php if(count($newsnb) || count($videonb)) { ?>
	<div class="wrap-intro wrap-content d-flex align-items-start justify-content-between">
		<div class="left-intro">
			<p class="title-intro"><span>Tin tức mới</span></p>
			<div class="newshome-intro w-clear">
				<a class="newshome-best text-decoration-none" href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['ten'.$lang]?>">
					<p class="pic-newshome-best scale-img"><img onerror="this.src='<?=THUMBS?>/360x200x2/assets/images/noimage.png';" src="<?=WATERMARK?>/news/360x200x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['ten'.$lang]?>"></p>
					<h3 class="name-newshome text-split"><?=$newsnb[0]['ten'.$lang]?></h3>
					<p class="time-newshome">Ngày đăng: <?=date("d/m/Y",$newsnb[0]['ngaytao'])?></p>
					<p class="desc-newshome text-split"><?=$newsnb[0]['mota'.$lang]?></p>
					<span class="view-newshome transition"><?=xemthem?></span>
				</a>
				<div class="newshome-scroll">
					<ul>
						<?php foreach($newsnb as $v) { ?>
							<li>
								<a class="newshome-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
									<p class="pic-newshome-normal scale-img"><img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"></p>
									<div class="info-newshome-normal">
										<h3 class="name-newshome text-split"><?=$v['ten'.$lang]?></h3>
										<p class="time-newshome"><?=ngaydang?>: <?=date("d/m/Y",$v['ngaytao'])?></p>
										<p class="desc-newshome text-split"><?=$v['mota'.$lang]?></p>
									</div>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="right-intro">
			<p class="title-intro"><span>Video clip</span></p>
			<div class="videohome-intro">
				<?=$addons->setAddons('video-fotorama', 'video-fotorama', 10);?>
	            <?php /* $addons->setAddons('video-select', 'video-select', 10); */ ?>
			</div>
		</div>
	</div>
<?php } ?>

<?php if(count($partner)) { ?>
	<div class="wrap-partner">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="control-carousel prev-carousel prev-partner transition"><i class="fas fa-chevron-left"></i></p>
			<div class="owl-carousel owl-theme owl-partner">
				<?php foreach($partner as $v) { ?>
					<div>
						<a class="partner text-decoration-none" href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>">
							<img onerror="this.src='<?=THUMBS?>/175x95x2/assets/images/noimage.png';" src="<?=THUMBS?>/150x120x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/>
						</a>
					</div>
				<?php } ?>
			</div>
			<p class="control-carousel next-carousel next-partner transition"><i class="fas fa-chevron-right"></i></p>
		</div>
	</div>
<?php } ?>