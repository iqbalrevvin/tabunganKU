<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">

	<div class="m-grid m-grid--hor m-grid--root m-page">
		<?php require_once('headBar.php'); ?>
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			<?php require_once('leftSide.php'); ?>
			<!--PAGE-->
			<?php# require_once('route/pageRoute.php'); ?>
			<!-- begin::Body -->
		    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
		        <div class="m-grid__item m-grid__item--fluid m-wrapper">
		            <!-- BEGIN: Subheader -->
		            <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <?php if (!isset($crumb)){ ?>
                                <h3 class="m-subheader__title m-subheader__title--separator"><?= $judul ?></h3>
                                 <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item m-nav__item--home">
                                        <a href="#" class="m-nav__link m-nav__link--icon">
                                            <i class="m-nav__link-icon la la-home"></i>
                                        </a>
                                    </li>
                                </ul>           
                            <?php }else{ ?>
                           
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item m-nav__item--home">
                                        <a href="<?= base_url(); ?>" class="m-nav__link m-nav__link--icon">
                                            <i class="m-nav__link-icon la la-home"></i>
                                        </a>
                                    </li>
                                
                                    <?php foreach ($crumb as $label => $link): ?>
                                        <?php if ($link == ''){ ?>
                                            <?php 
                                                $add_crumb = strpos(current_url(), '/add');
                                                $edit_crumb = strpos(current_url(), '/edit');
                                                $read_crumb = strpos(current_url(), '/read');
                                                if ($add_crumb || $edit_crumb || $read_crumb) {
                                            ?>
                                                <li class="m-nav__item">
                                                    <?php 
                                                        if ($add_crumb) {
                                                            $part_link = str_replace('/add', '', current_url());
                                                            $label_new = 'Add';
                                                        }
                                                        if ($edit_crumb) {
                                                            $part_link = strstr(current_url(), '/edit', true);
                                                            $label_new = 'Edit';
                                                        }
                                                        if ($read_crumb) {
                                                            $part_link = strstr(current_url(), '/read', true);
                                                            $label_new = 'Read';
                                                        }
                                                    ?>
                                                    <a href="<?php echo $part_link ?>" class="m-nav__link">
                                                        <span class="m-nav__link-text"><?php echo $label ?></span>
                                                    </a>
                                                </li>

                                                <li class="m-nav__separator">-</li>
                                                <li class="m-nav__item">
                                                    <a href="#" class="m-nav__link">
                                                        <span class="m-nav__link-text"><?php echo $label_new ?></span>
                                                    </a>
                                                </li>
                                            <?php }else{ ?>
                                                <li class="m-nav__separator">-</li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <span class="m-nav__link-text"><?php echo $label ?></span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        <?php }else{ ?>
                                            <li class="m-nav__separator">-</li>
                                            <li class="m-nav__item">
                                                <a href="<?php echo site_url($link) ?>" class="m-nav__link">
                                                    <span class="m-nav__link-text"><?php echo $label ?></span>
                                                </a>
                                            </li>
           
                                        <?php } ?>
                                    <?php endforeach ?>
                                </ul>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <!-- END: Subheader -->

                   <?= $page ?>
      
            </div>
        </div>

<!-- end:: Body -->
			<!--..PAGE-->
		</div>
		<?php require_once('footer.php'); ?>
	</div>
	<?php #require_once('rightSide.php'); ?>
</body>
