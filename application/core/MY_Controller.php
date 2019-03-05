<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . "third_party/MX/Controller.php";


class MY_Controller extends MX_Controller {

  public $response = [];

  function __construct() {
    parent::__construct();
    if (version_compare(CI_VERSION, '2.1.0', '<')) {
        $this->load->library('security');
    }
  }

  /**
   * response function
   *
   * @return void
   */
  public function response()
  {
    return $this;
  }

  /**
   * json function
   *
   * @param [type] $data
   * @return void
   */
  public function json($data)
  {
    $this->output
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT))
        ->_display();
      exit;
  }

}
