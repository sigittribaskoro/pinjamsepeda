<?php


class Controller_test extends TestCase{
    
    public function setUp (){
    
    $this->resetInstance();
   
    }
    
    public function test_login_benar (){
        $output = $this->request(
                'POST' ,'admin/login/validasi',[
                    'username'=>'admin',
                    'password'=>'admin'
                ]
                );
    $this->assertRedirect('admin/dashboard');      
    }
    
    public function test_login_salah (){
        $output = $this->request(
                'POST' ,'admin/login/validasi',[
                    'username'=>'asdf',
                    'password'=>'admin'
                ]
                );
    $this->assertContains('<title>Halaman Login</title>', $output);       
    }
    
    public function test_index_login()
    {
        $_SESSION['username'] = "admin";
        
        $output = $this->request('GET', 'home');
        $this->assertRedirect('admin/dashboard');
    }
    
    public function test_index_login2()
    {
        $_SESSION['username'] = "admin2";
        
        $output = $this->request('GET', 'home');
        $this->assertRedirect('admin/dashboard');
    }
    
    public function test_index_login_no_session()
    {
        $_SESSION['username'] = NULL;
        
        $output = $this->request('GET', 'home');
        $this->assertContains('<h3>Login Administrator</h3>',$output);
    }
    
    public function test_index_login3()
    {
        $output = $this->request('GET', 'admin/login');
        $this->assertContains('<h1>Halaman Login</h1>', $output);
    }
    
    public function test_logout(){
        $_SESSION['username'] = "admin";
        
        $this->assertTrue( isset($_SESSION['username']) );
        $this->request('GET', 'admin/login/logout');
        $this->assertRedirect('');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_index_about()
    {
        $output = $this->request('GET', 'admin/About');
        $this->assertContains('<p>Peminjaman Sepeda</p>', $output);
    }
    
    public function test_index_dashboard()
    {
        $_SESSION['username'] = "admin";
        $output = $this->request('GET', 'admin/dashboard');
        $this->assertContains('<ul id="MenuBar1" class="MenuBarHorizontal">', $output);
    }
    
    public function test_index_dashboard_no_session()
    {
        $_SESSION['username'] = null;
        $output = $this->request('GET', 'admin/dashboard');
        $this->assertRedirect('admin/login');
    }
    
     public function test_index_kontak()
    {
        $output = $this->request('GET', 'admin/kontak');
        $this->assertContains('<div class="ringkasan">', $output);
    }
    
    /*public function test_index_sepeda()
    {
        $_SESSION['username'] = "admin";
        
        $output = $this->request('GET', 'admin/sepeda');
        $this->assertContains('<li><a href="http://localhost/pinjamsepeda/admin/sepeda" class="MenuBarItemSubmenu">Sepeda</a>
', $output);
    }*/
    
    public function test_index_sepeda_no_session()
    {
        $_SESSION['username'] = null;
        $output = $this->request('GET', 'admin/sepeda');
        $this->assertRedirect('admin/login');
    }
    
    public function test_index_sepeda_tambah()
    {
        $_SESSION['username'] = "admin";
        
        $output = $this->request('GET', 'admin/sepeda/tambah');
        $this->assertRedirect('admin/sepeda');
    }
    
    public function test_tambah_sepeda_no_session()
    {
        $_SESSION['username'] = null;
        $output = $this->request('GET', 'admin/sepeda/tambah');
        $this->assertRedirect('admin/login');
    }
    
    public function test_edit_sepeda_no_session()
    {
        $_SESSION['username'] = null;
        $output = $this->request('GET', 'admin/sepeda/edit');
        $this->assertRedirect('admin/login');
    }
}

