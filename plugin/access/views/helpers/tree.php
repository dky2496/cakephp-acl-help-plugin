<?php 
class TreeHelper extends AppHelper {
/**
 * name property
 *
 * @var string 'Tree'
 * @access public
 */
 	var $helpers = array('Form');
	var $name = 'Tree';
	function view($data){
		$buffer= '<table>';
		$buffer.= '<tr><th>Id</th><th>name</th><th>ARO[create/read/update/delete]</th><th>action</th></tr>';
		$buffer.= $this->_generate(&$data);
		$buffer.= '</table>';
		return $buffer;
	}
	
	
	function _generate($data,$indent = -1,$buf = null){
		$indent ++;
		foreach($data as $each){
			$buf.= '<tr>';
			$buf.= '<td>'.$each['Aco']['id'].'</td>';
			$buf.=  '<td>';
			for($i=0; $i<$indent; $i++){
				$buf.= '- ';
			}
			$buf.= $each['Aco']['alias'].'</td>';
			
			
			$buf.= '<td>';
			if(!empty($each['Aro'])){
				foreach($each['Aro'] as $aro){
					if($aro['Permission']['_read'] == 1){
						$style = 'color: black';
					}else{
						$style = 'color: gray';
					}
					$buf.= '<p style="'.$style.'">';
					$buf.= $aro['model'].'.'.$aro['id'].'['.$aro['Permission']['_create'].$aro['Permission']['_read'].$aro['Permission']['_update'].$aro['Permission']['_delete'].']';
					$buf.= '</p>';
				}
				
			}
			$buf.= '</td>';
			
			$buf.= '<td>';
			$buf.= $this->Form->input('actions',array('empty'=>true,'name'=>'data[action]['.$each['Aco']['id'].']','label'=>false));
			$buf.= '</td>';
			
			if(!empty($each['children'])){
				$buf.= $this->_generate($each['children'],$indent);
				
			}else{
				
			}
			$buf.= '</tr>';
		}
		
		
		return $buf;
	}

}
?>