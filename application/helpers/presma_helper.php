<?php

function is_logged_in()
{

    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $id_role = $ci->session->userdata('id_role');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $id_menu = $queryMenu['id_menu'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'id_role' => $id_role,
            'id_menu' => $id_menu
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('Auth/blocked');
        }
    }
}

function check_access($id_role, $id_menu)
{
    $ci = get_instance();


    $ci->db->where('id_role', $id_role);
    $ci->db->where('id_menu', $id_menu);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
