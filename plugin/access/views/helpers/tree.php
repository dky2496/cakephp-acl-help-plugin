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
		echo '<table>';
		echo '<tr><th>Id</th><th>name</th><th>ARO[create/read/update/delete]</th><th>action</th></tr>';
		$this->_generate(&$data);
		echo '</table>';
		return;
	}
	
	
	function _generate($data,$indent = -1){
		$indent ++;
		foreach($data as $each){
			echo '<tr>';
			echo '<td>'.$each['Aco']['id'].'</td>';
			echo  '<td>';
			for($i=0; $i<$indent; $i++){
				echo '- ';
			}
			echo $each['Aco']['alias'].'</td>';
			
			
			echo '<td>';
			if(!empty($each['Aro'])){
				foreach($each['Aro'] as $aro){
					if($aro['Permission']['_read'] == 1){
						$style = 'color: black';
					}else{
						$style = 'color: gray';
					}
					echo '<p style="'.$style.'">';
					echo $aro['model'].'.'.$aro['id'].'['.$aro['Permission']['_create'].$aro['Permission']['_read'].$aro['Permission']['_update'].$aro['Permission']['_delete'].']';
					echo '</p>';
				}
				
			}
			echo '</td>';
			
			echo '<td>';
			echo $this->Form->input('actions',array('empty'=>true,'name'=>'data[action]['.$each['Aco']['id'].']','label'=>false));
			echo '</td>';
			
			if(!empty($each['children'])){
				$this->_generate($each['children'],$indent);
				
			}else{
				
			}
			echo '</tr>';
		}
		
		
		return;
	}

}
?>