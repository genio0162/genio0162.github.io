<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/logout') ?>">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>
<style>
    .warning {
        width: 1080px;
    }
</style>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dashboard</h3>
                <div>
                    <?php if ($user['is_complete'] == 0) : ?>
                        <div class="alert alert-danger warning" width="3000px" role="alert"><i class="fa-solid fa-circle-exclamation"></i>&nbspPlease Complete Personal Data !&nbsp<a href="#">click here..</a></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="title_right">
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Profile</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/profile/') . $user['image'] ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $user['name'] ?></h5>
                                        <p class="card-text"><?= $user['email'] ?></p>
                                        <p class="card-text"><small class="text-muted">Nurse since <?= date('d F Y', $user['date_created']) ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->