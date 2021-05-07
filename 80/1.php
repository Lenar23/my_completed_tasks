<?php
$attrsOpt = [
			['text' => 'item1', 'attrs' => ['value' => '1']],
			['text' => 'item2', 'attrs' => ['value' => '1', 'selected' => true]],
		 	['text' => 'item1', 'attrs' => ['value' => '1', 'class' => 'last']],
		 ];
		 
		 for ($i = 0; $i < count($attrsOpt); $i++) {
             //for($j = 0; $j < count($attrsOpt[$i]); $j++)
				 //for($k = 0; $k < count($attrsOpt[$j]); $k++)
             echo $attrsOpt[$i]. '<br>';				 
		}	
?>