<?php
class DrinkMarkdownPrefilter {
	function filter($raw){
		$out = array();
		$GLOBALS["wiki_replaces"] = array();

		$raw = "\n$raw\n";
		
		$replaces = array();

		$uniqid = uniqid();

		preg_match_all('/\n<table\b[^>]*>.*?<\/table>\s*?\n/si',$raw,$matches);
		for($i=0;$i<sizeof($matches[0]);$i++){
			$snippet = $matches[0][$i];
			$table = trim($snippet);
			$replacement = "table.$i.$uniqid";
			$replaces[$snippet] = "\n\n$replacement\n\n";
			
			$GLOBALS["wiki_replaces"]["<p>$replacement</p>"] = $table;
		}

		//var_dump($GLOBALS["wiki_replaces"]); exit;

		$raw = strtr($raw,$replaces);

		//echo $raw; exit;

		return $raw;
	}
}
