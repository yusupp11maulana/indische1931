<?php

class Model_login extends CI_model
{
    public function logout(){
        $this->session->unset_userdata('id_pegawai');
        redirect(base_url());
    }

    public function LoginAdmin(){
        $username = $this->input->post('unameadm');
        $pin = $this->input->post('passadm');
        $user = $this->db->get_where('pegawai', ['id_pegawai'=> $username])->row_array();
        if($user){
            //ada
            if($pin == $user['no_telp_pegawai']){
                $data=[
                    'id_pegawai' => $user['id_pegawai'],
                ];

                if($user['id_role'] == 1){
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else if($user['id_role'] == 2){
                    $this->session->set_userdata($data);
                    redirect('kasir');
                } else if($user['id_role']==3){
                    $this->session->set_userdata($data);
                    redirect('bar');
                } else if($user['id_role']==4){
                    $this->session->set_userdata($data);
                    redirect('kitchen');
                }
            }
            else{
                redirect('login');
            }
        }
        else{
            redirect('login');
        }
    }
}
