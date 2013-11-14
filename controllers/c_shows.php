<?php

class shows_controller extends base_controller{
  public function __construct(){
	parent::__construct();
	if(!$this->user){
	  die("Members only. <a href='/users/login'>Log in.</a>");
	}
  }


  public function add(){
	if(!$this->user){
	  die("Members only. <a href='/users/login'>Log in.</a>");
	  }
	$this->template->content = View::instance('v_shows_add');
	$this->template->title = "Add a new show";
	echo $this->template;
  }

  public function p_add(){
	// Associate this post with this user
	$_POST['user_id'] = $this->user->user_id;

	// Timestamp for creation and mod
	$_POST['created'] = Time::now();
	$_POST['modified'] = Time::now();

	// Insert post content -- insert function sanitizes data
	DB::instance(DB_NAME)->insert('shows', $_POST);
	Router::redirect("/shows");
  }

  public function index(){
	// the View
	$this->template->content = View::instance('v_shows_index');
	$this->template->title = "Show Archive";
	// query shows
	$q = 'SELECT
				show_id,
				show_date,
				host_dj_name,
				guest_dj_name,
				station_id
	        FROM shows
				ORDER BY show_date DESC';
	// run query
	$shows = DB::instance(DB_NAME)->select_rows($q);
	// pass data to view
	$this->template->content->shows = $shows;
	echo $this->template;
  }

}
