<?php
function belumlogin()
{
    $check = get_instance();
    if (!$check->session->userdata('idPengguna')) {
        redirect("admin/Login");
    }
}
