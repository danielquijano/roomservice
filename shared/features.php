<div class="nht-features py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h5 class="text-primary text-md-center text-patua-one mb-0 h1">Astonishing Features</h5>
				<p class="text-justify text-md-center mt-4 mb-5 lead">By being a member you will have access to an extraordinary amount of HQ images, Full High-Def movies featuring fresh faces (nonprofessional performers going uncontrollably crazy), a clean viewing without distractions, and of course, every file can be streamed and downloaded to your preferred device.</p>
			</div>
			<div class="col-lg-1"></div>
		</div>
		<div class="row nht-gutters">
			<?php
				foreach ($features_attrs as $key => $value) {
					echo '
						<div class="' . $value['col'] . '">
							<div class="border py-3 px-1">
								<p class="text-center mb-0"><i class="material-icons md-66">' . $value['icon'] . '</i></p>
								<p class="text-center mb-0 small text-uppercase">' . $value['description'] . '</p>
							</div>
						</div>
					';
				}
			?>
		</div>
	</div>
</div>