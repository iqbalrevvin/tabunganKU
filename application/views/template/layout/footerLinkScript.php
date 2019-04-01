<!--begin::Base Scripts -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/vendors/jquery-ui/jquery-ui.min.css') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/vendors/highchart/highcharts.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/vendors/pace-preload/pace.js') ?>" type="text/javascript"></script>
<!--BOOTSRAP FILE UPLOAD-->
<script src="<?= base_url('assets/vendors/bootstrap-fileupload/bootstrap-fileupload.js') ?>"></script>
<!---///////////////////////////////////////////////////-->

<!--Alertify JS-->
<script src="<?= base_url('assets/js/alertify.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dashboard.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/vendors.bundle.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/scripts.bundle.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/vendors/datatables-metronic/datatables.bundle.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/components/blockui.js') ?>"></script>
<script src="<?= base_url('assets/js/demo/bootstrap-maxlength.js') ?>"></script>
<script src="<?= base_url('assets/js/demo/bootstrap-select.js') ?>"></script>


<!-- GroceryCRUD JS -->
<?php if (isset($js_files)) { foreach($js_files as $file): ?> 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; } ?>

<!--JS Plugins-->
<?php #if (isset($js_plugins)): ?>
    <?php #foreach ($js_plugins as $url_plugin): ?>
        <!--<script src="<?= base_url($url_plugin) ?>"></script>-->                
    <?php #endforeach ?>
<?php #endif ?>

<script>
    site         = '<?php echo site_url(); ?>';
    ur_class     = '<?php echo $this->uri->segment(1); ?>';
    url_function = '<?php echo $this->uri->segment(2); ?>';
    <?php echo isset($script) ? $script : '' ?>
    function datatablesOptions() { var option = { "orderClasses": false, <?php echo isset($data['script_datatables']) ? $data['script_datatables'] : ''  ?> }; return option; }
    function afterDatatables() { <?php echo isset($data['script_grocery']) ? $data['script_grocery']: '' ?> }
</script>
<script src="<?php echo base_url('assets/js/list.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/iCheck/icheck.min.js') ?>"></script>
<?php echo isset($scriptView) ? $scriptView : ''; ?>
<!--Custom JS-->
<script src="<?php echo base_url('assets/js/a-design.js') ?>"></script>


<script type="text/javascript">

    jQuery(document).ready(function() {
      BootstrapDatepicker.init()
    });
     paceOptions = {
        ajax: false,
        document: false,
        eventLag: false
      };

      Pace.on('done', function() {
        $('#preloader').delay(100).fadeOut(300);
      });

      // FUNGSI DATE PICKER
      var BootstrapDatepicker = function() {
          var t;
          t = mUtil.isRTL() ? {
              leftArrow: '<i class="la la-angle-right"></i>',
              rightArrow: '<i class="la la-angle-left"></i>'
          } : {
              leftArrow: '<i class="la la-angle-left"></i>',
              rightArrow: '<i class="la la-angle-right"></i>'
          };
          return {
              init: function() {
              $(".m_datepicker_nonModal, .m_datepicker_3_validate_nonModal").datepicker({
                      rtl: mUtil.isRTL(),
                      format: 'yyyy-mm-dd',
                      todayBtn: "linked",
                      clearBtn: !0,
                      todayHighlight: !0,
                      templates: t
                  }), $(".m_datepicker_modal").datepicker({
                      rtl: mUtil.isRTL(),
                      format: 'yyyy-mm-dd',
                      orientation: "top left",
                      todayBtn: "linked",
                      clearBtn: !0,
                      todayHighlight: !0,
                      templates: t
                  })
              }
          }
      }();

</script>


<!--end::Base Scripts -->
