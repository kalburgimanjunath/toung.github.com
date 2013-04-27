<?php
class Messages extends CM_Controller {
	
	function Messages()
	{
		parent::Controller();	
	}
	
	function index(){
		log_message("debug", "Message->index: Entered");
		session_start();
		
		if ($this->_checkAuth() == false) {
			return;
		}
		
		$sess = new CMSession();
		$username = $sess->getCurrentUserid($this);
		
		$this->load->model('message_model');
		
		$response = new CMResponse();
		$msgrec = $this->message_model->message_model();
		
		$data = array();
		if ($query = $this->message_model->getAllMessage()) {
			//echo "Got all messages for $userid";
			$data['messages'] = $query;
		}	
		echo $data['messages'];
		//$data['inbox'] = $this->load->view('messages/inbox');
		//$data['sent'] = $this->load->view('messages/sent');
		//$data['outbox'] = $this->load->view('messages/outbox');
		
		$response->setData($data);
		
		
		log_message('debug', 'Message->index: prepared response');
		$this->load->view('messages/messages',$data);
	}
	
	function inbox() {
		log_message("debug", "Message->inbox: Entered");
		session_start();
		
		if ($this->_checkAuth() == false) {
			return;
		}
		
		$sess = new CMSession();
		$username = $sess->getCurrentUserid($this);
		
		$this->load->model('message_model');
		
		$response = new CMResponse();
		$msgrec = $this->message_model->message_model();
		
		
		if ($query = $this->message_model->getAllMessage()) {
			//echo "Got all messages for $userid";
			$data['messages'] = $query;
		}	
		//return $data;
		$response->setData($data);
		log_message('debug', 'Message->index: prepared response');
		//$this->_checkAndLoad('messages/inbox', true);	
		$this->load->view('includes/authheader',$data);		
		$this->load->view('messages/messages',$data);
	}
	
	function outbox() {
		$this->load->view('messages/outbox');
	}
	
	function sent() {
		$this->load->view('messages/sent');
	}
	
	function compose() {
		$this->load->view('messages/compose');
	}
	function composesave() {
		//$this->load->view('messages/compose');
		if ($this->_checkAuth() == false) {
			return;
		}
		
		$sess = new CMSession();
		$userId = $this->_getCurrentUserid();
		
		$this->load->model('message_model');
		
		$response = new CMResponse();
		$request = $this->input->post ('request') ;
		
		$msgrecord = json_decode($request);	
		print_r($msgrecord);
		$msgrec = $this->message_model->message_model();
		$msgrec->sender_id = $msgrecord->sendmessage->to;
		$msgrec->subject = $msgrecord->sendmessage->subject;
		$msgrec->message = $msgrecord->sendmessage->message;
		$msgrec->sender_status = 1;
		$msgrec->label_id = 1;
		$myprefsrec = $this->message_model->addMessage($msgrec);
	}
}

?>