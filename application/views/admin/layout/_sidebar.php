<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#"><img src="<?= base_url('assets/mazer/dist/') ?>assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <?php $menu = $this->uri->segment(2) ?>
                        <li class="sidebar-item <?php if($menu=='dashboard'){echo 'active';} ?>">
                            <a href="<?= base_url('admin/dashboard') ?>" class='sidebar-link'>
                                <i class="bi bi-house-door"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($menu=='kategori'){echo 'active';}?>">
                            <a href="<?= base_url('admin/kategori') ?>" class='sidebar-link'>
                                <i class="bi bi-tags-fill"></i>
                                <span>Kategori Konten</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($menu=='konten'){echo 'active';}?>">
                            <a href="<?= base_url('admin/konten') ?>" class='sidebar-link'>
                                <i class="bi bi-card-image"></i>
                                <span>Konten</span>
                            </a>
                        </li>

						<li class="sidebar-item <?php if($menu=='ppdb'){echo 'active';}?>">
                            <a href="<?= base_url('admin/ppdb') ?>" class='sidebar-link'>
                                <i class="bi bi-card-image"></i>
                                <span>Konten PPDB</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($menu=='user'){echo 'active';} ?>">
                            <a href="<?= base_url('admin/user') ?>" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>User</span>
                            </a>
                        </li>

						<li class="sidebar-item <?php if($menu=='profile'){echo 'active';} ?>">
                            <a href="<?= base_url('admin/profile') ?>" class='sidebar-link'>
                                <i class="bi bi-building-gear"></i>
                                <span>Profile Sekolah</span>
                            </a>
                        </li>

						<li class="sidebar-item <?php if($menu=='guru'){echo 'active';} ?>">
                            <a href="<?= base_url('admin/guru') ?>" class='sidebar-link'>
                                <i class="bi bi-mortarboard"></i>
                                <span>Guru</span>
                            </a>
                        </li>

						<li class="sidebar-title">User</li>
						<li class="sidebar-item <?php if($menu=='logout'){echo 'active';} ?>">
                            <a href="<?= base_url('auth/logout') ?>" onclick="return confirm('yakin untuk logout')" class='sidebar-link'>
                                <i class="bi bi-box-arrow-left"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
