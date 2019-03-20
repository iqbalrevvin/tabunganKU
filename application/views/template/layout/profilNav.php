<?php $session = $this->ion_auth->user()->row(); ?>

<li class="m-nav__item m-topbar__user-profile  
            m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
    <a href="#" class="m-nav__link m-dropdown__toggle">
        <span class="m-topbar__userpic m--hide">
            <img src="<?= base_url('assets/image/admin/admin-L.png') ?>" class="m--img-rounded m--marginless m--img-centered" alt="" />
        </span>
        <span class="m-nav__link-icon m-topbar__usericon">
            <span class="m-nav__link-icon-wrapper">
                <i class="flaticon-user-ok"></i>
            </span>
        </span>
        <span class="m-topbar__username m--hide">
            Nick
        </span>
    </a>
    <div class="m-dropdown__wrapper">
        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
        <div class="m-dropdown__inner">
            <div class="m-dropdown__header m--align-center">
                <div class="m-card-user m-card-user--skin-light">
                    <div class="m-card-user__pic">
                        <img src="<?= base_url('assets/image/admin/admin-L.png') ?>" class="m--img-rounded m--marginless" alt="" width="75px" />
                    </div>
                    <div class="m-card-user__details">
                        <span class="m-card-user__name m--font-weight-500">
                            <?= $session->first_name ?>
                        </span>
                        <a href="" class="m-card-user__email m--font-weight-300 m-link">
                            <?= $session->email ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="m-dropdown__body">
                <div class="m-dropdown__content">
                    <ul class="m-nav m-nav--skin-light">
                        <li class="m-nav__section m--hide">
                            <span class="m-nav__section-text">
                                Section
                            </span>
                        </li>
                        <li class="m-nav__item">
                            <a href="profile.html" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                <span class="m-nav__link-title">
                                    <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text">
                                            Profil
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="profile.html" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-share"></i>
                                <span class="m-nav__link-text">
                                    Log Aktivitas
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="<?= base_url('config/users/edit/'.$session->id) ?>" class="m-nav__link">
                                <i class="m-nav__link-icon flaticon-cogwheel"></i>
                                <span class="m-nav__link-title">
                                    <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text">
                                            Pengaturan
                                        </span>
                                        <!--<span class="m-nav__link-badge">
                                            <span class="m-badge m-badge--success">
                                                2
                                            </span>
                                        </span>-->
                                    </span>
                                </span>
                            </a>
                        </li>


                        <li class="m-nav__separator m-nav__separator--fit"></li>
                        <li class="m-nav__item">
                            <a href="<?= site_url('auth/logout')?>" class="btn m-btn--pill  btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>