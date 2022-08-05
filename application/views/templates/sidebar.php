<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-hospital-user"></i> <span>&nbspSI-RS JEMBER</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $user['name'] ?></h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <?php
                            $role_id = $this->session->userdata('role_id');
                            $queryMenu = " SELECT `user_menu`.`id` , `menu`
                                FROM `user_menu`
                                JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                WHERE `user_access_menu`.`role_id` = $role_id
                                ORDER BY `user_access_menu`.`menu_id` ASC ";
                            $menu = $this->db->query($queryMenu)->result_array();
                            ?>
                            <?php foreach ($menu as $m) : ?>
                                <h3><?= $m['menu'] ?></h3>
                                <!-- SUB 4 menu -->
                                <?php
                                $menuId = $m['id'];
                                $querySub4Menu = "SELECT * FROM `user_sub_4_menu` WHERE `menu_id` = $menuId AND `is_active` = 1";
                                $sub4Menu = $this->db->query($querySub4Menu)->result_array();
                                ?>
                                <ul class="nav side-menu">
                                    <?php foreach ($sub4Menu as $s4m) : ?>
                                        <li><a href="<?= base_url($s4m['url']); ?>"><i class="<?= $s4m['icon']; ?>"></i><span><?= $s4m['title']; ?></span></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php
                                $menuId = $m['id'];
                                $querySub3Menu = "SELECT * FROM `user_sub_3_menu` WHERE `menu_id` = $menuId AND `is_active` = 1";
                                $querySubMenu = "SELECT * FROM `user_sub_menu` WHERE `menu_id` = $menuId AND `is_active` = 1";
                                $sub3Menu = $this->db->query($querySub3Menu)->result_array();
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>
                                <ul class="nav side-menu">
                                    <?php foreach ($sub3Menu as $s3m) : ?>
                                        <li><a><i class="<?= $s3m['icon']; ?>"></i> <?= $s3m['title']; ?> <span class="fa fa-chevron-down"></span></a>
                                            <?php
                                            $menuId = $m['id'];
                                            $querySub2Menu = "SELECT * FROM `user_sub_2_menu` WHERE `menu_id` = $menuId AND `is_active` = 1";
                                            $sub2Menu = $this->db->query($querySub2Menu)->result_array();
                                            ?>
                                            <ul class="nav child_menu">
                                                <?php foreach ($sub2Menu as $s2m) : ?>
                                                    <li><a><i class="<?= $s2m['icon']; ?>"></i> <?= $s2m['title']; ?> <span class="fa fa-chevron-down"></span></a>
                                                        <?php
                                                        $menuId = $m['id'];
                                                        $submenuId = $s2m['id'];
                                                        $querySubMenu = "SELECT *
                                                        FROM `user_sub_menu`
                                                        JOIN `user_sub_2_menu` ON `user_sub_menu`.`sub_menu_id` = `user_sub_2_menu`.`id`
                                                        WHERE `user_sub_menu`.`sub_menu_id` = $submenuId
                                                        ";
                                                        $subMenu = $this->db->query($querySubMenu)->result_array();
                                                        ?>
                                                        <ul class="nav child_menu">
                                                            <?php foreach ($subMenu as $sm) : ?>
                                                                <li><a href="<?= $sm['url'] ?>"><?= $sm['titlesub'] ?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                <?php endforeach; ?>
                                                <?php foreach ($subMenu as $sm) : ?>
                                                    <?php if ($sm['menu_id'] == 1) : ?>
                                                        <?= ""; ?>
                                                    <?php else : ?>
                                                        <li><a href="<?= $sm['url'] ?>"><?= $sm['titlesub'] ?></a></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>