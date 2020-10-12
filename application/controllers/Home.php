<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        redirect(site_url("home/dashboard"));
    }
    
    public function error403() {
        $this->layout->display('page/403');
    }
    
    public function error404() {
        $this->layout->display('page/404');
    }
    
    public function error500() {
        $this->layout->display('page/500');
    }
    
    public function accordion() {
        $this->layout->display('page/accordion');
    }
    
    public function alert() {
        $this->layout->display('page/alert');
    }
    
    public function badge() {
        $this->layout->display('page/badge');
    }
    
    public function barchart() {
        $this->layout->display('page/barchart');
    }
    
    public function button() {
        $this->layout->display('page/button');
    }
    
    public function button_group() {
        $this->layout->display('page/button_group');
    }
    
    public function cards() {
        $this->layout->display('page/cards');
    }
    
    public function datatable() {
        $this->layout->display('page/cards');
    }
    
    public function dropdown() {
        $this->layout->display('page/dropdown');
    }
    
    public function fontawesome() {
        $this->layout->display('page/fontawesome');
    }
    
    public function forgot_password() {
        $this->layout->display('page/forgot_password');
    }
    
    public function form() {
        $this->layout->display('page/form');
    }
    
    public function grid() {
        $this->layout->display('page/grid');
    }
    
    public function dashboard() {
        $this->layout->display('page/index');
    }
    
    public function dashboard2() {
        $this->layout->display('page/index2');
    }
    
    public function dashboard3() {
        $this->layout->display('page/index3');
    }
    
    public function dashboard3_horizontalmenu() {
        $this->layout->display('page/index3_horizontalmenu');
    }
    
    public function invoice() {
        $this->layout->display('page/invoice');
    }
    
    public function linechart() {
        $this->layout->display('page/linechart');
    }
    
    public function list_group() {
        $this->layout->display('page/list_group');
    }
    
    public function login() {
        $this->layout->display('page/login');
    }
    
    public function login2() {
        $this->layout->display('page/login2');
    }
    
    public function login3() {
        $this->layout->display('page/login3');
    }
    
    public function maps() {
        $this->layout->display('page/maps');
    }
    
    public function media_object() {
        $this->layout->display('page/media_object');
    }
    
    public function modal() {
        $this->layout->display('page/modal');
    }
    
    public function pagination() {
        $this->layout->display('page/pagination');
    }
    
    public function piechart() {
        $this->layout->display('page/piechart');
    }
    
    public function popovers() {
        $this->layout->display('page/popovers');
    }
    
    public function pricing() {
        $this->layout->display('page/pricing');
    }
    
    public function progressbar() {
        $this->layout->display('page/progressbar');
    }
    
    public function register() {
        $this->layout->display('page/register');
    }
    
    public function register2() {
        $this->layout->display('page/register2');
    }
    
    public function register3() {
        $this->layout->display('page/register3');
    }
    
    public function register4() {
        $this->layout->display('page/register4');
    }
    
    public function reset_pass() {
        $this->layout->display('page/reset_pass');
    }
    
    public function screenlock() {
        $this->layout->display('page/screenlock');
    }
    
    public function screenlock2() {
        $this->layout->display('page/screenlock2');
    }
    
    public function starter() {
        $this->layout->display('page/starter');
    }
    
    public function tab() {
        $this->layout->display('page/starter');
    }
    
    public function table_basic() {
        $this->layout->display('page/starter');
    }
    
    public function table_layout() {
        $this->layout->display('page/starter');
    }
    
    public function themify() {
        $this->layout->display('page/themify');
    }
    
    public function typography() {
        $this->layout->display('page/typography');
    }
       public function add_charterer() {
        $this->layout->display('page/add_charterer');
    }
         public function add_vessels() {
        $this->layout->display('page/add_vessels');
    }
         public function transport_dashboard() {
        $this->layout->display('page/transport_dashboard');
    }
          public function create_fixture_tr() {
        $this->layout->display('page/create_fixture_tr');
    }
            public function clean_recap() {
        $this->layout->display('page/clean_recap');
    }
 
}	