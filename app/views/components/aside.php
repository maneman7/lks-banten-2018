<aside style="border-top: none;">
		<div class="container">
			<div class="row">
				<div class="span-3">
					<?php $d= $this->db->query("SELECT * FROM category"); ?>
					<h4 style="color:#ddd;">Book Category</h4>
					<ul>
						<?php foreach($d as $c): ?>
							<li><a href="<?= url() ?>c?id=<?= $c->id ?>" style="color:#fff;"><?= $c->category ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>

				<div class="span-3">
					<h4 style="color:#ddd;">Social Media</h4>
					<ul>
						<li><a href="facebook.com"><img src="<?= url() ?>public/images/media/fb.png" style="width:30px; float: left;"></a></li>
						<li><a href="instagram.com"><img src="<?= url() ?>public/images/media/ig.png" style="width:30px;float: left; margin:0 5px;"></a></li>
						<li><a href="twitter.com"><img src="<?= url() ?>public/images/media/twitter.png" style="width:30px;"></a></li>
					</ul>
				</div>

				<div class="span-3">
					<h4 style="color:#ddd;">Forum</h4>
					<ul>
						<li><img src="<?= url() ?>public/images/media/fb.png" style="width:20px; float: left;margin-right: 5px;"><a href="facebook.com" style="color:#fff;">Banten Library</a></li>
					</ul>
				</div>
				<div class="span-3">
					<img src="<?= url() ?>public/images/banten.png" style="float: left; width: 100px;margin-top:15px;">
				</div>
			</div>
		</div>
	</aside>