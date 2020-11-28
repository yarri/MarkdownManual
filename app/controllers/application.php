<?php
class ApplicationController extends Atk14Controller{

	/**
	 * @var Menu14
	 */
	var $breadcrumbs;

	function index(){
		$this->_execute_action("error404");
	}

	function error404(){
		$this->page_title = $this->breadcrumbs[] = "Page not found";
		$this->response->setStatusCode(404);
		$this->template_name = "application/error404";
	}

	function _initialize(){
		$this->_prepend_before_filter("application_before_filter");
		$this->_append_after_filter("application_after_filter");

		if(!$this->rendering_component){
			// Definujme toto jako posledni krok v _initialize()!
			// Docilime toho, ze filtr _begin_database_transaction() bude zavolan uplne jako prvni before filter
			// a _end_database_transaction() zase jako posledni after filtr.
			$this->_prepend_before_filter("begin_database_transaction");
			$this->_append_after_filter("end_database_transaction");
		}
	}

	function _application_before_filter(){
		if(PRODUCTION && (!$this->request->ssl() || $this->request->getHttpHost()!==ATK14_HTTP_HOST)){
			$params = $this->params->toArray();
			$this->_redirect_to($params,[
				"with_hostname" => ATK14_HTTP_HOST,
				"ssl" => true,
        "moved_permanently" => true,
			]);
			return;
		}

		$this->response->setContentType("text/html");
		$this->response->setContentCharset("UTF-8");
		$this->tpl_data["current_year"] = date("Y");

		$this->tpl_data["search_form"] = Atk14Form::GetInstanceByFilename("searches/search_form.php",$this);

		$this->breadcrumbs = new Menu14();
		//$this->breadcrumbs[] = array(_("Home"),$this->_link_to(array("namespace" => "", "action" => "main/index")));
	}

	function _application_after_filter(){
    if(DEVELOPMENT){
      $bar = Tracy\Debugger::getBar();
      $bar->addPanel(new DbMolePanel($this->dbmole));
			$bar->addPanel(new TemplatesPanel());
    }
	}

	function _before_render(){
		if(!isset($this->tpl_data["breadcrumbs"]) && isset($this->breadcrumbs)){
			$this->tpl_data["breadcrumbs"] = $this->breadcrumbs;
		}
	}

	function _begin_database_transaction(){
		$this->dbmole->begin(array(
			"execute_after_connecting" => true
		));
	}

	function _end_database_transaction(){
		$this->dbmole->commit();
	}
}
