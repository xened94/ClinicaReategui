<?php



class Widget {

public static function hola_mundo(){
	return "<h2>Hola Mundo!</h2>";
}

public static function custom_text($val){
	$ret = "";
	if($val!=""){
		$ret.= $val;
	}
	return $ret;
}



public static function recent_posts($val){
	$ret = "";
	$values = explode(",", $val);
	if(count($values)>0){
	$posts = PostData::getLast($values[0]);
	if(count($posts)>0){
	$ret = "<ul type='none'>";
	foreach($posts as $p){
	$ret .="<li><i class='fa fa-file-text-o'></i> <a href='./?view=post&id=".$p->id."'>".$p->title."</a></li>";
	}
	$ret .= "</ul>";
	}
	}
	return $ret;
}


public static function recent_comments($val){
	$ret = "";
	$values = explode(",", $val);
	if(count($values)>0){
	$posts = CommentData::getApproveds($values[0]);
	if(count($posts)>0){
	$ret = "<ul type='none'>";
	foreach($posts as $p){
		$px = $p->getPost();
	$ret .="<li><i class='fa fa-comment'></i> $p->content por <b>$p->name</b> en <a href='./?view=post&id=".$p->id."'>".$px->title."</a></li>";
	}
	$ret .= "</ul>";
	}
	}
	return $ret;
}


}

?>