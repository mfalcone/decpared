<?
//menu general
    function _menu(){
	$this->db->order_by('position desc');
	$this->db->where(array('publica' =>'0',
			       'level' => '1'));
	
	
	$secciones = $this->db->get('categoria')->result_array();
	    
	    $menu = array();
	    foreach($secciones as $seccion) {
		    $opcion = $seccion;
		  
		    $opcion['items'] = $this->db->get_where('categoria', array('parent_id' => $seccion['id']) )->result_array();
		    $menu[] = $opcion;
	    }
	    
	    return $menu;
    }