<?php

class index_controller extends base_controller {
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*-------------------------------------------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-------------------------------------------------------------------------------------------------*/
	public function index() {
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
		// if no user is logged in, go tolanding page
		if(!$this->user):
			$this->template->content = View::instance('v_index_landing');
		else:
			// if there's a logged in user, go to home page
			$this->template->content = View::instance('v_index_index');
	   	endif;
			
		# Now set the <title> tag
			$this->template->title = "Boudoir Muses";

		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/
	    // query the db for latest show	      					     		

		$q = 'SELECT
				show_id,
				show_date,
				host_dj_name,
				guest_dj_name,
				station_id
	        FROM shows
				WHERE show_id = 11';
		// run query
		$show = DB::instance(DB_NAME)->select_row($q);
		// pass data to view
		$this->template->content->show = $show;
		// pass data to view
		$this->template->content->user = $this->user->dj_name;


		# Render the view
			echo $this->template;

	} # End of method
	
	
} # End of class
