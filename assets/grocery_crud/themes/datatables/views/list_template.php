<?php
	$this->set_css('assets/vendors/datatables-metronic/datatables.bundle.css');
	$this->set_js('assets/js/components/tabel-metronic2.js');
	// Jquery
	$this->set_js_lib($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);	
	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');
	$this->set_js_lib($this->default_javascript_path.'/common/lazyload-min.js');

	if (!$this->is_IE7()) {
		$this->set_js_lib($this->default_javascript_path.'/common/list.js');
	}

	#$this->set_js('assets/js/plugins/datatables/jquery.dataTables.min.js');
	#$this->set_js('assets/js/plugins/datatables/dataTables.bootstrap.min.js');
	
	$this->set_js('assets/vendors/datatables-metronic/datatables.bundle.js');
	#$this->set_js('assets/js/components/tabel-metronic.js');


	//$this->set_js($this->default_theme_path.'/datatables/js/cookies.js');
	$this->set_js($this->default_theme_path.'/datatables/js/flexigrid.js');

    $this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.form.min.js');
	$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.numeric.min.js');
	$this->set_js($this->default_theme_path.'/flexigrid/js/jquery.printElement.min.js');

	/** Fancybox */
	$this->set_css('assets/vendors/fancybox/jquery.fancybox.css');
	$this->set_js('assets/vendors/fancybox/jquery.fancybox.js');
	$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.easing-1.3.pack.js');


	/** Jquery UI */
	$this->load_js_jqueryui();
?>
<script type='text/javascript'>
	var base_url = '<?php echo base_url();?>';

	var subject = '<?php echo $subject?>';
	var ajax_list_info_url = '<?php echo $ajax_list_info_url; ?>';
	var unique_hash = '<?php echo $unique_hash; ?>';

	var message_alert_delete = "<?php echo $this->l('alert_delete'); ?>";
</script>
<!--ga faham-->
<div id='list-report-error' class='report-div error ' ></div>

<!--alert-->
<div id='list-report-success' class='report-div success report-list' ></div>

<!--TABEL METRONIC-->
<div class="m-content box-body flexigrid"  data-unique-hash="<?php echo $unique_hash; ?>">	
	<div class="m-portlet m-portlet--mobile">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						<?php echo $subject ?>
					</h3>
				</div>
			</div>
			<?php if(!$unset_add || !$unset_export || !$unset_print){ ?>
				<div id="hidden-operations" class="hidden-operations"></div>
				<div class="tDiv m-portlet__head-tools">
				<button class="btn btn-sm m-btn--pill btn-box-tool" id="mini-refresh"><i class='la la-refresh'></i></button>
					<ul class="m-portlet__nav">
						<?php if(!$unset_add){ ?>
							<li class="m-portlet__nav-item">
								<a href='<?php echo $add_url?>' 
									title='<?php echo $this->l('list_add'); ?> <?php echo $subject?>'
									class="add-anchor btn btn-sm m-btn m-btn--gradient-from-primary m-btn--gradient-to-accent">
									<span>
										<i class="la la-plus"></i>
										<span class="add"><?php echo $this->l('list_add'); ?> <?php echo $subject?></span>
									</span>
								</a>
							</li>
						<?php } ?>
						<?php if(!$unset_export){ ?>
						<!-- Button Export  -->
							<li class="m-portlet__nav-item">
								<a data-url="<?php echo $export_url; ?>" target="_blank" 
									class="export-anchor btn btn-sm m-btn m-btn--gradient-from-success m-btn--gradient-to-accent">
									<span class="export">
										<i class="la la-exchange"></i> <?php echo $this->l('list_export');?>
									</span>
								</a>
							</li>
				         <!-- Akhir Button Export  -->
						<?php } ?>
						<?php if(!$unset_print) { ?>
				            <li class="m-portlet__nav-item">
								<a data-url="<?php echo $print_url; ?>" 
									class="print-anchor btn m-btn btn-sm m-btn--gradient-from-warning m-btn--gradient-to-danger">
									<span class="export">
										<i class="la la-print"></i> <?= $this->l('list_print');?>
									</span>
								</a>
							</li>
						<?php }?>

					</ul>
				</div>
			<?php } ?>
		</div>
		<?php echo form_open( $ajax_list_url, 'method="post" id="filtering_form" class="filtering_form" 
			autocomplete = "off" data-ajax-list-info-url="'.$ajax_list_info_url.'"'); ?>
		    <!--iki tampil table'e-->
		    

		<div id='ajax_list' class="ajax_list m-portlet__body">
			<?php echo $list_view ?>
		</div>
		<div class="overlay" id="overlayTable" style="display:none;">
			<div id="preloader" class="m-page--loading-enabled m-page--loading">
			    <div class="m-page-loader m-page-loader--base">
			        <div class="m-blockui">
			            <span>Memuat Data Tabel. . .</span>
			            <span>
			                <div class="m-loader m-loader--brand"></div>
			            </span>
			        </div>
			    </div>
			</div>
		</div>

		<div class="col-md-12">
	
			<div class="pReload pButton ajax_refresh_and_loading" id='ajax_refresh_and_loading'>
				<span id="btn-refresh"></span>
			</div>
			<?php echo form_close(); ?>	
		</div>
		
	</div>
	<!-- END EXAMPLE TABLE PORTLET-->
</div>
<script>
	var successMesage = "<?php echo $success_message; ?>";
</script>
