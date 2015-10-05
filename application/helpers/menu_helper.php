<?
//menu general
    function _menu($order = "asc"){
	$ci =& get_instance();
	
	$ci->db->order_by('position '.$order);
	$ci->db->where(array('publica' =>'0',
			       'level' => '1'));
	
	
	$secciones = $ci->db->get('categoria')->result_array();
	    
	    $menu = array();
	    foreach($secciones as $seccion) {
		    $opcion = $seccion;
		  
		    $opcion['items'] = $ci->db->get_where('categoria', array('parent_id' => $seccion['id']) )->result_array();
		    $menu[] = $opcion;
	    }
	    
	    return $menu;
    }
    function cat_activa($cat_activa=false, $cat_actual=false)
    {
	if($cat_actual == false or $cat_actual =="")
	{$cat_actual = "home";}
	if($cat_activa == mb_strtolower($cat_actual,'UTF-8'))
	{echo 'class="active"';}
	
    }
