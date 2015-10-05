<?php

class Institucional_m extends CI_Model {

    public function __construct() {

        parent::__construct();


    }

    public function get_all($categoria_id) {
	    $cant = $this->db->get_where('categoria', array('default_controller' => $categoria_id) );
	    $menu = $cant->row_array();
	    
	    $this->db->where(array('parent_id' => $menu['id']));
	    $categorias = $this->db->get('categoria');
	    
	     $this->db->join('noticia_categoria', 'noticia_categoria.noticia_id = noticia.id');
	     $this->db->or_where(array('noticia_categoria.categoria_id' => $menu['id']));
	     if ($categorias->num_rows() != 0)
	    {
		foreach ($categorias->result_array() as $parent_id)
		{
		    $this->db->or_where(array('noticia_categoria.categoria_id' => $parent_id['id']));
		}
            }
           
            

        $this->db->order_by('id asc'); 
        $noticias = $this->db->get_where('noticia')->result_array();

        $noticias_array = array();

        foreach ($noticias as $noticia) {
            $noticias_array[] = $this->get_by_id($noticia['id'], false, $menu['id']);
        }

        return $noticias_array;
    }
    public function get_by_id($noticia_id = '', $cant_caracteres = '', $modulo_id) {

        if ($noticia_id == '' || $noticia_id == 0)
            return;

        //'noticia.publica' => 'si',
        $where = array(
            'noticia.id' => $noticia_id,
        );
        
        
        $noticia = $this->db->get_where('noticia', $where)->row_array();

        if (empty($noticia))
            throw new Exception("No hay noticias con id:$noticia_id");

        if ($cant_caracteres != '') {
            $this->db->select('SUBSTRING(noticia_traduccion.resumen,1,' . $cant_caracteres . ') as resumen', false);
        } else {
            $this->db->select('noticia_traduccion.resumen');
        }

       $this->db->select('idioma.simbolo, noticia_traduccion.titulo, noticia_traduccion.desarrollo,
						noticia.home, noticia.home2, noticia.publica');
        $where = array('noticia.id' => $noticia_id);

        $traducciones = $this->db->join('noticia_traduccion', 'noticia_traduccion.noticia_id = noticia.id', 'left')
				 ->join('idioma', 'idioma.id = noticia_traduccion.idioma_id')
				 ->get_where('noticia', $where)->result_array();

        foreach ($traducciones as $traduccion) {
            $noticia[$traduccion['simbolo']] = $traduccion;
        }

        $imagenes = $this->db->get_where('archivo', array('modulo_id'=>33,'tipo_id' => 0, 'propietario_id' => $noticia_id) )->result_array();

        foreach($imagenes as $imagen) {
            $noticia['imagenes'][$imagen['campo']] = array('archivo' => $this->_add_file_marker($imagen['archivo'],'_thumb'));
        }


        return $noticia;
    }


    private function _add_file_marker($filename, $marker) {
        if ($filename == '')
            return;
        $filename = explode('.', $filename);
        //print_r($filename);
        return $filename[0] . $marker . '.' . $filename[1];
    }

}
