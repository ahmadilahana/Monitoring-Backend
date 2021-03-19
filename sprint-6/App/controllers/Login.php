<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = "Login";
        $this->view('template/header', $data);
        $this->view('login/index');
        $this->view('template/footer');
    }
    public function register()
    {
        $data['judul'] = "Register";
        $this->view('template/header', $data);
        $this->view('login/register');
        $this->view('template/footer');
    }
    public function daftar()
    {
        if (empty($_POST['nama']) || empty($_POST['username']) || empty($_POST['pass']) || empty($_POST['email'])) {
            // var_dump($_POST);
            Flasher::setFlash('Gagal', 'Didaftarkan, karena terdapat <strong>Data Kosong!</strong>', 'danger');
            header('Location: ' . BASEURL . '/Login/register');
            exit;
        }else{
            if ($this->model('Login_model')->daftarAkun($_POST) > 0) {
                header('Location: ' . BASEURL);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Didaftarkan', 'danger');
                header('Location: ' . BASEURL . '/Login/register');
                exit;
            }
        }

    }
    public function cekLogin()
    {
        // var_dump($_POST);
        if (empty($_POST['username']) || empty($_POST['pass'])) {
            // var_dump($_POST);
            Flasher::setFlash('Gagal', 'Login, karena terdapat <strong>Data Kosong!</strong>', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        } else {
            $data = $this->model('Login_model')->cekAkun($_POST);
            var_dump($data);
            if ($data[0] === true) {
                $_SESSION['user'] = $data[1];
                header('Location: ' . BASEURL);
                exit;
            }elseif ($data[0] === "null") {
                Flasher::setFlash('Gagal', 'Login, Username <strong>Tidak ditemukan!</strong>', 'danger');
                header('Location: ' . BASEURL . '/Login');
                exit;
            }else {
                Flasher::setFlash('Gagal', 'Login, Cek <strong>Username</strong> & <strong>Password!</strong>', 'danger');
                header('Location: ' . BASEURL . '/Login');
                exit;
            }
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL);
    }
}


?>