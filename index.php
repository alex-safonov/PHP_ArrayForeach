<?php
        
$data =  ['a', 'b',[ 'c', 'd'],[ 'e', 'f',['g'],'h'],'i'];
     
$minus = '-';
$i = 1;

function FunctionName($data, $minus, $i)
{
	foreach ($data as $data_new) {
		if (!is_array($data_new)) {
				echo str_repeat($minus, $i).$data_new;	
				echo "\n";
		} else {
			FunctionName($data_new, $minus, ($i+1));
		}
	}
}

FunctionName($data, $minus, $i);  
