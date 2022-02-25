<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*  
 *  @author   : Muhammadhasim Mustak Tanderjawala
 *  360 Education System
 *  http://www.sefion.com/our_work/360education
 */
class Home extends CI_Controller {

  protected $theme;

  // constructor
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->theme = $this->frontend_model->get_frontend_general_settings('theme');
  }

  // default function
  public function index() {
    $page_data['page_name']  = 'home';
    $page_data['page_title'] = get_phrase('home');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  // noticeboard
  function noticeboard() {
    $count_notice = $this->db->get_where('noticeboard', array('show_on_website' => 1))->num_rows();
    $config = array();
    $config = manager($count_notice, 9);
    $config['base_url']  = site_url('home/noticeboard/');
    $this->pagination->initialize($config);

    $page_data['per_page']    = $config['per_page'];
    $page_data['page_name']  = 'noticeboard';
    $page_data['page_title'] = get_phrase('noticeboard');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function notice_details($notice_id = '') {
    $page_data['notice_id'] = $notice_id;
    $page_data['page_name']  = 'notice_details';
    $page_data['page_title'] = get_phrase('notice_details');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function events() {
    $count_events = $this->db->get_where('frontend_events', array('status' => 1))->num_rows();
    $config = array();
    $config = manager($count_events, 8);
    $config['base_url']  = site_url('home/events/');
    $this->pagination->initialize($config);

    $page_data['per_page']    = $config['per_page'];
    $page_data['page_name']  = 'events';
    $page_data['page_title'] = get_phrase('event_list');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }
function hall_of_fame() {
    $count_fame = $this->db->get_where('hall_of_fame')->num_rows();
    $config = array();
    $config = manager($count_fame, 8);
    $config['base_url']  = site_url('home/hall_of_fame/');
    $this->pagination->initialize($config);

    $this->db->select('year');
    $this->db->distinct();
    $this->db->order_by('year','desc');
    $this->db->from('hall_of_fame');
    $page_data['years'] =$this->db->get()->result_array();
//var_dump($page_data)
    //$out=array_unique($query);
                 //var_dump($query);die;

    $this->db->select('*');
    $this->db->where('board','10ssc');
    $this->db->order_by('year','desc')->limit(1);
    $page_data['ssc'] = $this->db->get('hall_of_fame')->row();
    $this->db->select('*');
    $this->db->where('board','12general');
    $this->db->order_by('year','desc')->limit(1);
    $page_data['hsc_gen'] = $this->db->get('hall_of_fame')->row();

    $this->db->select('*');
    $this->db->where('board','12science');
    $this->db->order_by('year','desc')->limit(1);
    $page_data['hsc_sci'] = $this->db->get('hall_of_fame')->row();

//var_dump($page_data['hsc_sci']->student_name);die;


    $page_data['per_page']    = $config['per_page'];
    $page_data['page_name']  = 'hall_of_fame';
    $page_data['page_title'] = 'Hall of Fame';
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }
  function teachers() {
    $count_teachers = $this->db->get_where('teacher', array('show_on_website' => 1))->num_rows();
    $config = array();
    $config = manager($count_teachers, 9);
      $config['base_url']  = site_url('home/teachers/');
    $this->pagination->initialize($config);

    $page_data['per_page']    = $config['per_page'];
    $page_data['page_name']  = 'teacher';
    $page_data['page_title'] = get_phrase('teachers');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function get_hof_data()
  {

    $year = $this->input->post('year');
    $data = $this->db->get_where('hall_of_fame',array('year'=>$year))->result_array();
    $returnArray['status'] = true;
    $returnArray['data'] = $data;
    $returnArray['message'] = 'Data Fetched..';
    $returnArray['msg_type'] = 'success';

    echo json_encode($returnArray);
  }

  function gallery() {
    $count_gallery = $this->db->get_where('frontend_gallery', array('show_on_website' => 1))->num_rows();
    $config = array();
    $config = manager($count_gallery, 6);
    $config['base_url']  = site_url('home/gallery/');
    $this->pagination->initialize($config);

    $page_data['per_page']    = $config['per_page'];
    $page_data['page_name']  = 'gallery';
    $page_data['page_title'] = get_phrase('gallery');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function gallery_view($gallery_id = '') {
    $count_images = $this->db->get_where('frontend_gallery_image', array(
      'frontend_gallery_id' => $gallery_id
    ))->num_rows();
    $config = array();
    $config = manager($count_images, 9);
    $config['base_url']  = site_url('home/gallery_view/'.$gallery_id.'/');
    $this->pagination->initialize($config);

    $page_data['per_page']    = $config['per_page'];
    $page_data['gallery_id']  = $gallery_id;
    $page_data['page_name']  = 'gallery_view';
    $page_data['page_title'] = get_phrase('gallery');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function admission() {
    $page_data['page_name']  = 'admission';
    $page_data['page_title'] = get_phrase('admission');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

   function academic_calendar() {
    $page_data['page_name']  = 'academic_calendar';
    $page_data['page_title'] = get_phrase('academic_calendar');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

function hsc_general()

{
  $page_data['page_name'] = 'hsc_general';
  $page_data['page_title'] = 'Arts & Commerce Admission';
  $this->load->view('frontend/'.$this->theme.'/index', $page_data);
}

function hsc_science()

{
  $page_data['page_name'] = 'hsc_science';
  $page_data['page_title'] = 'Science Admission';
  $this->load->view('frontend/'.$this->theme.'/index', $page_data);
}

function hsc_preview($form_number='')

{
  $page_data['page_name'] = 'hsc_preview';
  $page_data['page_title'] = 'Preview';
  $page_data['data'] = $this->db->get_where('admission',array('form_number'=>$form_number))->result_array();

  $this->load->view('frontend/'.$this->theme.'/index', $page_data);
}


function hsc_admission($param1='',$param2='',$param3='')
{
  if($param1 == 'general')
  {
      $form_number = 'DHSG'.date('Y');
  }
   if($param1 == 'science')
  {
      $form_number = 'DHSS'.date('Y');
  }

   $data['full_name']=$this->input->post('full_name');
  $data['father_name']=$this->input->post('father_name');
  $data['mother_name']=$this->input->post('mother_name');
  $data['birthdate']=$this->input->post('birthdate');
  $data['stream'] = $this->input->post('stream');
  $data['caste']=$this->input->post('caste');
  $data['caste_certi']=$this->input->post('caste_certi');
  $data['religion']=$this->input->post('religion');
  $data['father_occupation']=$this->input->post('father_occupation');
  $data['address_line1']=$this->input->post('address_line1');
  $data['address_line2']=$this->input->post('address_line2');
  $data['address_line3']=$this->input->post('address_line3');
  $data['district']=$this->input->post('district');
  $data['mobile']=$this->input->post('mobile');
  $data['maths']=$this->input->post('maths');
  $data['science']=$this->input->post('science');
  $data['english']=$this->input->post('english');
  $data['bank_name']=$this->input->post('bank_name');
  $data['account_number']=$this->input->post('account_number');
  $data['ifsc_code']=$this->input->post('ifsc_code');
  $data['aadhar']=$this->input->post('aadhar');
  $data['form_number'] = $form_number;
  $data['bpl_card']=$this->input->post('bpl_card');
  $data['previous_school']=$this->input->post('previous_school');
  $data['created'] = date('Y-m-d');
  $date['updated'] = date('Y-m-d');
 
  //var_dump($data); die();  
$this->db->insert('admission',$data);

redirect(site_url('home/hsc_preview/').$form_number,'refresh');

}


 function print_form($form_number)
 {
  $query= $this->db->get_where('admission',array('form_number' =>$form_number))->result_array();
  $page_data['data']=$query;
  $this->load->view('frontend/'.$this->theme.'/print_form', $page_data);

 }



  function about() {
    $page_data['page_name']  = 'about';
    $page_data['page_title'] = get_phrase('about_us');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function post() {
    $page_data['page_name']  = 'post';
    $page_data['page_title'] = get_phrase('school_post');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function post_details($post_url = '') {
    $post_query = $this->db->get_where('post',array('post_url' => $post_url))->row();
    $page_data['page_name']  = 'post_details';
    $page_data['post_url'] = $post_url;
    $page_data['page_title'] = $post_query->post_title;
    $page_data['data'] = $post_query;
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function contact($param1 = '') {
    if ($param1 == 'send') {
      $this->frontend_model->send_contact_message();
      redirect(site_url('home/contact'), 'refresh');
    }
    $page_data['page_name']  = 'contact';
    $page_data['page_title'] = get_phrase('contact_us');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }

  function privacy_policy() {
    $page_data['page_name']  = 'privacy_policy';
    $page_data['page_title'] = get_phrase('privacy_policy');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }



  function terms_conditions() {
    $page_data['page_name']  = 'terms_conditions';
    $page_data['page_title'] = get_phrase('terms_&_conditions');
    $this->load->view('frontend/'.$this->theme.'/index', $page_data);
  }
}
