<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Sepeda_Model_Test extends TestCase{
    
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('admin/Sepeda_model');
        $this->Sepeda = $this->CI->Sepeda_model;
    }
    
    public function test_tambah_hapus_sepeda(){
        
        $input = [
            'sepeda' => 5
        ];
        $actual = $this->sepeda->tambah($input['penghuni'], $input['kos']);
        $affected_row = 1;
        $this->assertEquals($affected_row, $actual);
        $actualdel = $this->kos->hapus_penghuni($input['penghuni'], $input['kos']);
        $this->assertEquals($affected_row, $actualdel);
    }
}



    