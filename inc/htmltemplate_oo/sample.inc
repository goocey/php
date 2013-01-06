<?php
// an example to add the original definition of tags.

include_once("htmltemplate.inc");
class FormSelect{
	var $name;
	var $hash;
	var $default;
	
	function FormSelect($name,$hash,$default=""){
		$this->name=$name;
		$this->hash=$hash;
		$this->default=$default;
	}
	
	function toString(){
		reset($this->hash);
		print "<select name='".($this->name)."'>\n";
		foreach($this->hash as $k=>$v){
			if($this->hash[$k]==$this->default) $sel=" selected";
			else $sel="";
			print "<option value='$k'$sel>$v\n";
		}
		print "</select>";
	}
}

class tag_select extends DataTag{
	// a regexp to find the tag and extract its label.
	// the first extracted word is regarded and interpleted
	// as an index label of $val.
	var $matchregexp='/<form:select ([^>]+)>/i';
	
	// a string to replace from.
	// each of %1\$s , %2\$s , %3\$s ... corresponds to 
	// the word matched by $matchregexp
	var $fromstring="<form:select %s>";
	
	// a string to replace into.
	// %1\$s is replaced by the index of the valuable $val.
	// each of %2\$s , %3\$s , %3\$s  ... corresponds to 
	// the word matched by $matchregexp
	var $tostring="<?php \$val%1\$s->toString(); ?>";
}

htmltemplate::add(new tag_select());
?>