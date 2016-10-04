<?php


class html {
	protected $html;

	public function getHTML(){
		return $this->html;
	}
}

class htmlLink extends html {
	public function getLink ($url, $name){
	$this->html = '<a href="' . $url . '">' . $linkName . '</a>'; 
	return $this->html;

}

}

$obj = new HTMLLINK;

echo $obj->getLink('www.google.com', 'Google');
print_r($obj);
?>


