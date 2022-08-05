<div class="login_wrapper">
    <div class="animate form login_form">
        <div id="register">
            <section class="login_content">
                <form method="post" action="<?= base_url('auth/register'); ?>">
                    <h1>Create Account</h1>
                    <div>
                        <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" required="" value="<?= set_value('name') ?>" />
                        <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div>
                        <input name="email" id="email " type="email" class="form-control" placeholder="Email" required="" value="<?= set_value('email') ?>" />
                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name='password1' id="password1" type="password" class="form-control" placeholder="Password" required="" />
                            <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="col-sm-6">
                            <input name='password2' id="password2" type="password" class="form-control" placeholder="Repeat Password" required="" />
                            <?= form_error('password2', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="radio" id="perawat" name="subject" value="2" onclick="EnableDisableTB()"></br> Perawat
                            <input name='id_perawat' id="id_perawat" type="text" class="form-control" placeholder="Masukkan NIK" required="" disabled />
                            <?= form_error('perawat', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="radio" id="dokter" name="subject" value="3" onclick="EnableDisableTB()"> </br>Dokter
                            <input name='id_dokter' id="id_dokter" type="text" class="form-control" placeholder="Masukkan NIK" required="" disabled />
                            <?= form_error('dokter', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div>
                        <button name="submit" class="btn btn-default submit" type="submit">Register now</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="<?= base_url('auth'); ?>"> Log in </a>
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
<script type="text/javascript">
    function EnableDisableTB() {
        var perawat = document.getElementById("perawat");
        var id_perawat = document.getElementById("id_perawat");
        var dokter = document.getElementById("dokter");
        var id_dokter = document.getElementById("id_dokter");
        id_perawat.disabled = perawat.checked ? false : true;
        id_perawat.value = "";
        id_dokter.disabled = dokter.checked ? false : true;
        id_dokter.value = "";
        if (!id_perawat.disabled) {
            id_perawat.focus();
        }
        if (!id_dokter.disabled) {
            id_dokter.focus();
        }
    }
</script>