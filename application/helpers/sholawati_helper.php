<?php
function is_logged_in() // batasi akses ke halaman admin
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role == "Admin" || $role == 'Pegawai') {
            redirect('dashboard');
        } else {
            redirect('profil');
        }
    }
}
function is_logged_in2()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "User") {
            redirect('obat');
        }
    }
}
function is_logged_in3()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "User") {
            redirect('dashboard');
        }
    }
}