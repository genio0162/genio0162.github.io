<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="<?= base_url('auth'); ?>">
                    <h1>Login Page</h1>
                    <?= $this->session->flashdata('message'); ?>
                    <div>
                        <input name="email" type="text" class="form-control" placeholder="Email" id="email" required="" value="<?= set_value('email') ?>" />
                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="" />
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Log in</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="<?= base_url('auth/register') ?>" class="to_register"> Create Account </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1> <i class="fa fa-hospital"></i>
                                &nbsp Sistem Informasi RSUD. Kab. Jember
                            </h1>
                            <br />
                            <p>©2022 All Rights Reserved. RIS.Studio! Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>