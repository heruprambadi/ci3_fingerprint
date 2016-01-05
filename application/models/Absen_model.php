<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('parse');
        
    }

	public function get_setting(){
    	$data = $this->db->get('pengaturan')->row();
    	return $data;
    }

    public function if_exist_check($PIN, $DateTime){
        $data = $this->db->get_where('data_absen', array('pin' => $PIN, 'date_time' => $DateTime))->row();
        return $data;
    }

	public function get_data_absen(){
		error_reporting(0);
        $IP = $this->get_setting()->ip;
        $Key = $this->get_setting()->password;
        if($IP!=""){
        $Connect = fsockopen($IP, "80", $errno, $errstr, 1);
            if($Connect){
                $soap_request="<GetAttLog><ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg></GetAttLog>";
                $newLine="\r\n";
                fputs($Connect, "POST /iWsService HTTP/1.0".$newLine);
                fputs($Connect, "Content-Type: text/xml".$newLine);
                fputs($Connect, "Content-Length: ".strlen($soap_request).$newLine.$newLine);
                fputs($Connect, $soap_request.$newLine);
                $buffer="";
                while($Response=fgets($Connect, 1024)){
                    $buffer=$buffer.$Response;
                }
                $buffer = Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
                $buffer = explode("\r\n",$buffer);
                for($a=0;$a<count($buffer);$a++){
                    $data = Parse_Data($buffer[$a],"<Row>","</Row>");
                    $PIN = Parse_Data($data,"<PIN>","</PIN>");
                    $DateTime = Parse_Data($data,"<DateTime>","</DateTime>");
                    $Verified = Parse_Data($data,"<Verified>","</Verified>");
                    $Status = Parse_Data($data,"<Status>","</Status>");
                    $ins = array(
                            "pin"       =>  $PIN,
                            "date_time" =>  $DateTime,
                            "ver"		=>  $Verified,
                            "status"    =>  $Status
                            );
                    if (!$this->if_exist_check($PIN, $DateTime) && $PIN && $DateTime) {
                    	$this->db->insert('data_absen', $ins);
                    }
                }
                if($buffer){
                	return '<div class="alert alert-success alert-dismissable">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        				<h4><i class="icon fa fa-check"></i> Success !</h4>
        				Anda terhubung dengan mesin.
        			</div>';
                } else {
                	return '<div class="alert alert-danger alert-dismissable">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        				<h4><i class="icon fa fa-ban"></i> Alert!</h4>
        				Anda tidak terhubung dengan mesin !
        			</div>';
                }
            }
        } 
    }

}

/* End of file Absen_model.php */
/* Location: ./application/models/Absen_model.php */