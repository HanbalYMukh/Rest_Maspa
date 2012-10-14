<?
class Data_sarana_kelas extends MY_Controller {
	function Data_sarana_kelas(){
	    parent::__construct();
		$this->load->model('sarana_kelas_model');
		$this->load->library('mypagination');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('text');
	}
	
	function index()
	{
		$kelas=$this->input->post('id_kelas');
		if(empty($kelas))
		{
		$row =$this->sarana_kelas_model->getDefault();
		$kode=$row['id_kelas'];		
		}
		else
		{
		$kode = $this->input->post('id_kelas');
		}
		$kd=$kode;
		$offset = $this->uri->segment(3,0); //ambil nilai offset, jika tidak ada, akan diberi nilai 0
		$total=$this->sarana_kelas_model->getTotal($kd); //hitung di model, berapa banyak data berdasar keyword
		$perpage=10; // tetapkan berapa banyak  data yang ditampilkan per halaman
		$data2=$this->mypagination->getPagination($total,$perpage,'data_sarana_kelas/index/',3); //jelas
		$data['link'] = $data2['link']; //ambil data dari getPagination
		//$data['content1']=$this->m_sarana_kelas->getNo($perpage,$offset,$kd);
		$data['content']=$this->sarana_kelas_model->getData($perpage,$offset,$kd); //ambil data dari database (query sama dengan getNumSearch, hanya diberi parameter tambahan)
		$data['id_kelas']=$kode;
		//$data['main'] = 'v_unit_kerja';			 
		//$this->load->vars($data);
		$this->template->build('data/sarana_kelas_view',$data); 
		
	}
	
	function tambah()
	{
		$this->template->build('inc/sarana_kelas_add');	
	}
	
	function create()
	{
		$data=array(
		'id_kelas'=>$this->input->post('txtIdKelas'),
		'jns_sarana'=>$this->input->post('txtJnsSarana'),
		'jml_sarana'=>$this->input->post('txtJmlSarana')
		);
		$this->sarana_kelas_model->addSaranaKelas($data);
  		
  		redirect('data_sarana_kelas/index','refresh');
		
	}
	
	function edit(){
  	
		$id = $this->uri->segment(3);
		$data['content']=$this->sarana_kelas_model->getDataSaranaKelas('tsarana_kelas',$id);
		$this->template->build('inc/sarana_kelas_edit',$data);   	
    }  
  
	function proc_edit()
	{
		$id=$this->input->post('id');
		$data=array('id_kelas'=>$this->input->post('txtIdKelas'),'jns_sarana'=>$this->input->post('txtJnsSarana'),'jml_sarana'=>$this->input->post('txtJmlSarana'));
		$this->sarana_kelas_model->Edit('tsarana_kelas',$id,$data);
  		
  		redirect('data_sarana_kelas/index','refresh');
		
	}
  
  /*function delete(){
	
	$ck=$_POST["chkList"];
	$this->m_sarana_kelas->Delete('tsarana_kelas',$ck);
	$this->session->set_flashdata('message','Data Deleted');
	redirect('c_sarana_kelas/index','refresh');	
  }	*/
  
  function deleteData($id)
	{
		$this->sarana_kelas_model->delete($id);
		redirect('data_sarana_kelas/index');
	}
  
}

?>