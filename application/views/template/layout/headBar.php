<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
	<div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">

        <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-light ">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="<?= base_url() ?>" class="m-brand__logo-wrapper">
                            <img alt="" src="<?= base_url('assets/image/'.$settings->logo.'') ?>" />
                        </a>
                        <h4 class="m-header__title">
                        	<small><?= $settings->judul ?></small>
                        </h4>

                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">

                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Responsive Header Menu Toggler -->
                        <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>

                        <!-- END -->

                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>

                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>
            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
            	<div class="m-header__title">
                    <h3 class="m-header__title-text"><b><?= $settings->judul ?> <small>Versi <?= $settings->versi ?></small></b></h3>
                </div>
                <!-- BEGIN: Horizontal Menu -->
				<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
				<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
					<?php require('menuNavigator.php'); ?>
				</div>
				<!-- END: Horizontal Menu -->
				<!-- BEGIN: Topbar -->
				<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
					<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light"
					 id="m_quicksearch" m-quicksearch-mode="default">

						<!--BEGIN: Search Form -->
						<form class="m-header-search__form">
							<div class="m-header-search__wrapper">
								<span class="m-header-search__icon-search" id="m_quicksearch_search">
									<i class="flaticon-search"></i>
								</span>
								<span class="m-header-search__input-wrapper">
									<input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Pencarian..." id="m_quicksearch_input">
								</span>
								<span class="m-header-search__icon-close" id="m_quicksearch_close">
									<i class="la la-remove"></i>
								</span>
								<span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
									<i class="la la-remove"></i>
								</span>
							</div>
						</form>
						<!--END: Search Form -->
						<!--BEGIN: Search Results -->
						<div class="m-dropdown__wrapper">
							<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
							<div class="m-dropdown__inner">
								<div class="m-dropdown__body">
									<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
										<div class="m-dropdown__content m-list-search m-list-search--skin-light">
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--BEGIN: END Results -->
					</div>
					<div class="m-stack__item m-topbar__nav-wrapper">
						<ul class="m-topbar__nav m-nav m-nav--inline">
							<!--PROFIL-->
                            <?php require_once('profilNav.php'); ?>
                            <!--//PROFIL-->
							<li id="m_quick_sidebar_toggle" class="m-nav__item">
								<a href="#" class="m-nav__link m-dropdown__toggle">
									<span class="m-nav__link-icon m-nav__link-icon-alt"><span class="m-nav__link-icon-wrapper"><i class="flaticon-grid-menu"></i></span></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END: Topbar -->
			</div>
		</div>
	</div>
</header>