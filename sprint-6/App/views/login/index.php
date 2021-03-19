<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 600px;">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <?php
                Flasher::flashLogin();
                ?>
                <form action="<?= BASEURL ?>/Login/cekLogin" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="form-group">
                        <label>Belum punya akun?</label>
                        <a href="<?= BASEURL ?>/Login/register">Daftar</a>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>