<div class="off-canvas-overlay" data-toggle="sidebar"></div>
<div class="sidebar-panel">
    <div class="brand">
        <!-- toggle offscreen menu -->
        <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
            <i class="material-icons">menu</i>
        </a>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
            <img class="expanding-hidden" src="<?= env('APP_SIDEBAR_LOGO', asset('theme/assets/img/avatars/1.png"')) ?>" alt="logo" width="100">
        </a>
        <!-- /logo -->
    </div>
    <div class="nav-profile dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <div class="user-image">
                <img src="<?= asset('theme/assets/images/user.png') ?>" class="avatar img-circle" alt="user" title="user" />
            </div>
            <div class="user-info expanding-hidden">
                <?= auth()->name; ?>
                <small class="bold">Administrator</small>
            </div>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:;">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= routeTo('auth/logout') ?>">Logout</a>
        </div>
    </div>
    <!-- main navigation -->
    <nav>
        <?php foreach (get_menu() as $key => $module) : ?>
            <p class="nav-title"><?= __($module['moduleName'] . '.menu.module_name') ?></p>
            <ul class="nav">
                <?php foreach ($module['menu'] as $k => $menu) : ?>

                    <li>
                        <?php if (isset($menu['items'])) : ?>
                            <a href="javascript:;">
                            <?php else : ?>
                                <a href="<?= $menu['route'] ?>">
                                <?php endif ?>
                                <?php if (isset($menu['items'])) : ?>
                                    <span class="menu-caret">
                                        <i class="material-icons">arrow_drop_down</i>
                                    </span>
                                <?php endif ?>
                                <i class="material-icons"><?= $menu['icon']; ?></i>
                                <span><?= __($menu['label']) ?></span>
                                </a>


                                <?php if (isset($menu['items'])) : ?>
                                    <?php foreach ($menu['items'] as $item) : ?>

                                        <ul class="sub-menu">
                                            <li>
                                                <a href="<?= $item['route'] ?>">
                                                    <span><?= __($item['label']) ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    <?php endforeach ?>

                                    <?php endif ?>
                                </li>

                <!-- /charts -->
            <?php endforeach ?>
            </ul>
        <?php endforeach ?>
    </nav>
    <!-- /main navigation -->
</div>