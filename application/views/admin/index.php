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


    </div>
</div>
<!-- /page content -->