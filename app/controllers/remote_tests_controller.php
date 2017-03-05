<?php
/**
 * Here are actions for remote testing the application (for example) using Nagios
 *
 * Every action returns HTTP status 200 when the test passed, otherwise it returns HTTP status 500.
 */
class RemoteTestsController extends ApplicationController{

	/**
	 * Displays list of all tests
	 */
	function index(){
		$source = Files::GetFileContent(__FILE__);
		preg_match_all('/function\s+([a-z][a-z0-9_]*)\s*\(/',$source,$matches);
		$this->tpl_data["tests"] = array_diff($matches[1],array("index","fail")); // we don't want to actions "index" and "fail" to be listed
		$this->render_layout = false;
	}
	
	/**
	 * Sample positive test
	 */
	function success(){
		$this->_assert_true(true);
		$this->_assert_equals(123,123);
	}

	/**
	 * Sample negative test
	 */
	function fail(){
		$this->_fail();
		$this->_assert_equals(123,456);
		$this->_assert_true(false);
	}

	/**
	 * Checks for existence of stale locks from robots
	 */
	function stale_locks(){
		$cmd = "cd ".LOCK_DIR."; find . -type f -mmin +20 | grep -v README.md";
		$out = `$cmd`;
		if($out){
			$this->_fail($out);
		}
	}

	/**
	 * Filters out Tracy's log files which are no older than 30 minutes
	 */
	function php_errors(){
		$cmd = "cd ".ATK14_DOCUMENT_ROOT."log/ && find . -type f -mmin -30 | egrep '(php_error.log|exception|error.log)'";
		$out = `$cmd`;
		if($out){
			$this->_fail($out);
		}
	}
	
	function _before_filter(){
		/*
		// Here you can restrict access to the controller's actions for listed IP addresses
		if(!in_array($this->request->getRemoteAddr(),array("10.20.30.40"))){
			return $this->_execute_action("error403");
		} // */

		$this->test_ok = true;
		$this->test_messages = array();
	}

	function _assert_equals($expected,$value,$message = ""){
		if($expected!==$value){
			$this->test_ok = false;
			$this->test_messages[] = $message ? $message : "fail";
		}
	}

	function _assert_true($expression,$message = ""){
		return $this->_assert_equals(true,$expression,$message);
	}

	function _fail($messages = ""){
		$this->test_ok = false;
		if($messages){
			if(!is_array($messages)){ $messages = array($messages); }
			$this->test_messages = array_merge($messages,$this->test_messages);
		}
	}

	function _before_render(){
		parent::_before_render();

		if($this->action=="index"){ return; }

		if(!isset($this->test_ok)){
			return;
		}

		if($this->test_ok && !$this->test_messages){ $this->test_messages[] = "ok"; }
		if(!$this->test_ok && !$this->test_messages){ $this->test_messages[] = "fail"; }
	
		$this->render_template = false;
		$this->response->setContentType("text/plain");

		if(!$this->test_ok){
			$this->response->setStatusCode(500);
		}

		$this->response->write(join("\n",$this->test_messages));
	}
}
