<?php
	// Jquery
	$this->set_js_lib($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);	
	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');
	$this->set_js_lib($this->default_javascript_path.'/common/lazyload-min.js');

	if (!$this->is_IE7()) {
		$this->set_js_lib($this->default_javascript_path.'/common/list.js');
	}

	//$this->set_js($this->default_theme_path.'/flexigrid/js/cookies.js');
	$this->set_js($this->default_theme_path.'/flexigrid/js/flexigrid.js');

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
<div id='list-report-error' class='report-div error'></div>

<!--alert-->
<div id='list-report-success' class='report-div success report-list'></div>

<!--panel-->



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
		    

		<div id='ajax_list' class="ajax_list m-portlet__body table-responsive">
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
		<br>
		<div class="col-md-12">
			<div class="form-group m-form__group row">
				<div class="col-lg-4">
					<div class="form-group m-form__group">
						<div class="input-group">	
							<input type="text" class="qsbsearch_fieldox search_text form-control" 
								placeholder="<?php echo $this->l('list_search');?>. . ." name="search_text" 
								size="30" id='search_text'>
							<div class="input-group-append">
								<button class="crud_search btn btn-primary btn-sm" type="button" 
									value="<?php echo $this->l('list_search');?>" id='crud_search'>
									<i class="fa fa-search"></i>
								</button>
							</div>
							<div class="input-group-prepend">
								<button class="search_clear btn btn-primary btn-sm" type="button" 
									value="<?php echo $this->l('list_clear_filtering');?>" id='search_clear'>
									Reset
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="search_field" id="search_field">
						<option value=""><?php echo $this->l('list_search_all');?></option>
						<?php foreach($columns as $column){?>
						<option value="<?php echo $column->field_name?>">
							<?php echo $column->display_as?>&nbsp;&nbsp;
						</option>
						<?php }?>
					</select>
				</div>
				<div class="col-lg-2">
					<?php list($show_lang_string, $entries_lang_string) = explode('{paging}', $this->l('list_show_entries')); ?>
					<div class="form-group m-form__group">
						<div class="input-group">	
							<input type="text" name="per_page" id='per_page' 
							class="per_page search_text form-control" 
							placeholder="Tampilkan Data" value="<?php echo $paging_options[0] ?>">
							<div class="input-group-append">
								<button class="btn btn-primary btn-sm" type="submit">
									<?php list($show_lang_string, $entries_lang_string) = explode('{paging}', $this->l('list_show_entries')); ?>
									Tampil
								</button>
							</div>
							<input type='hidden' name='order_by[0]' id='hidden-sorting' class='hidden-sorting' 
								value='<?php if(!empty($order_by[0])){?><?php echo $order_by[0]?><?php }?>'/>
							<input type='hidden' name='order_by[1]' id='hidden-ordering' 
									class='hidden-ordering'  
									value='<?php if(!empty($order_by[1])){?><?php echo $order_by[1]?><?php }?>'/>

						</div>
					</div>		
				</div>
				<div class="col-lg-3">
					<div class="form-group m-form__group">
						<div class="input-group">	
							<div class="input-group-prepend">
								<button class="pPrev pButton prev-button btn btn-primary btn-sm" 
									type="button"> 
									<?php echo $this->l('list_paging_previous');?>
								</button>
							</div>
							<?php $paging_starts_from = "<span id='page-starts-from' class='page-starts-from'>
								1</span>"; ?>
							<?php $paging_ends_to = "<span id='page-ends-to' class='page-ends-to'>". ($total_results < $default_per_page ? $total_results : $default_per_page) ."</span>"; ?>
							<?php $paging_total_results = "<span id='total_items' class='total_items'>$total_results</span>"?>
							<input name='page' type="text" value="1" size="4" id='crud_page' 
								class="crud_page search_text form-control text-center">
							<div class="input-group-append">
								<button class="pNext pButton next-button btn btn-primary btn-sm" type="button" 
									value="<?php echo $this->l('list_search');?>" id='crud_search'>
									<?php echo $this->l('list_paging_next');?>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pReload pButton ajax_refresh_and_loading" id='ajax_refresh_and_loading'>
				<span id="btn-refresh"></span>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<?php echo str_replace( array('{start}','{end}','{results}'),
											array($paging_starts_from, $paging_ends_to, $paging_total_results),
											$this->l('list_displaying')
										   ); ?>				
				</div>
			</div>
			<?php echo form_close(); ?>	
		</div>
		
	</div>
	<!-- END EXAMPLE TABLE PORTLET-->
</div>
<script type='text/javascript'>
	var base_url="<?php echo base_url();?>",subject="<?php echo $subject?>",ajax_list_info_url="<?php echo $ajax_list_info_url; ?>",unique_hash="<?php echo $unique_hash; ?>",message_alert_delete="<?php echo $this->l('alert_delete'); ?>";
	var successMesage = "<?php echo $success_message; ?>";
</script>