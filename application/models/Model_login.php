<?php

class Model_login extends CI_model
{
    public function logout(){
        $this->session->unset_userdata('id_pegawai');
        $this->session->unset_userdata('ktp');
        $this->session->unset_userdata('email');
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

    public function LoginCust(){
        // PHP NATIVE
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "indische1931";

        $conn = mysqli_connect($host, $user, $pass);
        mysqli_select_db($conn, $db);
        $username = $_POST['email'];
        $pass = $_POST['password'];

        $login = mysqli_query($conn, "SELECT * FROM CUSTOMER WHERE email = '{$username}' AND password='{$pass}'");
        if(mysqli_num_rows($login)==0){
            redirect('landing');

        } else {
            $data=[
                'ktp' => $username,
            ];
            $this->session->set_userdata($data);//khusus baris ini versi CI ntar di ganti nativ
            redirect('landing');
        }
        
        // CODEIGNITER
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');
        // $user = $this->db->get_where('customer', ['email'=> $email])->row_array();
        // if($user){
        //     //ada
        //     if($password == $user['password']){
        //         $data=[
        //             'ktp' => $user['no_ktp'],
        //             'email' => $user['email'],
        //         ];
        //         $this->session->set_userdata($data);
        //         redirect('landing');
        //     }
        //     else{
        //         redirect('login');
        //     }
        // }
        // else{
        //     redirect('login');
        // }
    }

    public function RegistrasiCust(){
        $data = array(
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('pass', true),
            "nama_customer" => $this->input->post('namacust', true),
            "alamat_customer" => $this->input->post('alamatcust', true),
            "no_ktp" => $this->input->post('ktp', true),
            "tanggal_lahir" => $this->input->post('ttlcust', true),
            "no_telp_customer" => $this->input->post('telpcust', true),
            "jenis_kelamin" => $this->input->post('jkcust', true),
        );
        $this->db->insert('customer', $data);
        redirect('login');
    }
}
