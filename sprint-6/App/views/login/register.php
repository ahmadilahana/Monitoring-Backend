<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 600px;">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Register</h5>
                <?php
                    Flasher::flashLogin();
                ?>
                <form action="<?= BASEURL?>/Login/daftar" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="form-group">
                        <label>Sudah punya akun?</label>
                        <a href="<?= BASEURL ?>/Login">Login</a>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>