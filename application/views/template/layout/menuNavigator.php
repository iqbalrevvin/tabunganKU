<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
     <li class="m-menu__item m-menu__item--rel " m-menu-submenu-toggle="click" aria-haspopup="true">
        <a href="<?= base_url(); ?>" class="m-menu__link ">
            <i class="m-menu__link-icon fa fa-home"></i>
            <span class="m-menu__item-here"></span>
            <span class="m-menu__link-text">
                Beranda
            </span>
        </a>
    </li>

    <?php foreach ($header_menu->result() as $header): ?>
        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-menu-button"></i>
                <span class="m-menu__item-here"></span>
                <span class="m-menu__link-text">
                    <?= $header->header ?>
                </span>
                <i class="m-menu__hor-arrow la la-angle-down"></i>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                <ul class="m-menu__subnav">
                    <?php foreach ($menu->result() as $key => $menu_item): ?>
                        <?php if ($header->id_header_menu == $menu_item->id_header_menu): ?>
                            <?php if ($menu_item->url == "#" && $menu_item->level_one == "0") { ?>
                                <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" 
                                    m-menu-link-redirect="1" aria-haspopup="true">
                                    <a href="#" href="javascript:;" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-<?= $menu_item->icon ?>"></i>
                                        <span class="m-menu__link-text"><?= $menu_item->label ?></span>
                                        <i class="m-menu__hor-arrow la la-angle-right"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                        <span class="m-menu__arrow "></span>
                                        <ul class="m-menu__subnav treeview">
                                            <?php foreach ($menu_lvlOne->result() as $lvlOne): ?>
                                                <?php if ($menu_item->id_menu == $lvlOne->level_one): ?>                
                                                    <?php if ($lvlOne->url == "#"){ ?>
                                                        <li class="m-menu__item m-menu__item--submenu" 
                                                            m-menu-submenu-toggle="hover" 
                                                            m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="#" class="m-menu__link m-menu__toggle">
                                                                <i class="m-menu__link-icon flaticon-<?= $lvlOne->icon ?>"></i>
                                                                <span class="m-menu__link-text">
                                                                    <?= $lvlOne->label ?>
                                                                </span>
                                                                <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                            </a>
                                                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                                <span class="m-menu__arrow"></span>
                                                                <ul class="m-menu__subnav treeview-menu">
                                                                <?php foreach ($menu_lvlTwo->result() as $lvlTwo): ?>
                                                                    <?php if ($lvlOne->id_menu == $lvlTwo->level_two): ?>
                                                                        <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true"
                                                                            id="<?= $lvlTwo->menu_id ?>">
                                                                            <a href="<?= site_url($lvlTwo->url) ?>" class="m-menu__link">
                                                                            <i class="m-menu__link-icon flaticon-<?= $lvlTwo->icon ?>">
                                                                            </i>
                                                                            <span class="m-menu__link-text">
                                                                                <?= $lvlTwo->label ?>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <?php endif ?>                                    
                                                                <?php endforeach ?>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    <?php }else{ ?>
                                                        <li id="<?php echo $lvlOne->menu_id ?>" class="m-menu__item" 
                                                            m-menu-link-redirect="1" aria-haspopup="true">
                                                            <a href="<?php echo site_url($lvlOne->url) ?>" 
                                                                class="m-menu__link" class="name">
                                                                <i class="m-menu__link-icon flaticon-<?= $lvlOne->icon ?>" class="name"></i>
                                                                <span class="m-menu__link-text">
                                                                    <?php echo $lvlOne->label ?>
                                                                </span>
                                                                
                                                            </a>
                                                        </li>       
                                                    <?php } ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php }else{ ?>
                                <li class="m-menu__item" id="<?= $menu_item->menu_id ?>" >
                                    <a href="<?= site_url($menu_item->url) ?>" class="m-menu__link name" 
                                        title="<?= $menu_item->label ?>">
                                        <i class="m-menu__link-icon flaticon-<?= $menu_item->icon ?>"></i>
                                        <span class="m-menu__link-text"><?= $menu_item->label ?></span>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </li>
    <?php endforeach; ?>
</ul>