<?php 

/**
 * @author	Nuwan Wijethilaka
 * @link	http://www.linkedin.com/in/nuwanlinkedin
 * @email	nu1.rock@gmail.com
 * @file	ci_multiple_checkbox_check.php
 */
 
/**
 * checkbox value fixer. If a checkbox is not checked, sets it's value
 * to zero.
 * @param mixed $name the checkbox form field name. Can be passed as a
 * string or as an array.
 * @return void
 */
 
if ( ! function_exists('multiple_checkbox_check'))
{
	function multiple_checkbox_check($id, $selected, $extra)
	{
		if(is_array($selected)){
			if(array_key_exists ($id ,$selected))
			{
				return 'checked="checked"';
				
			}
		}
	}
}


if ( ! function_exists('form_multiple_checkbox'))
{
	function form_multiple_checkbox($name = '', $all = array(), $selected = array(), $extra = '')
	{
		foreach ($all as $optgroup_key => $optgroup_val)
		{ 
		 		
			echo '<input type="checkbox" name="'.$name.'" value="'.$optgroup_key.'" '.multiple_checkbox_check($optgroup_key,$selected,$extra).' >'; 
			echo '&nbsp;&nbsp';
			echo (string) $optgroup_val."<br>";	 	
				 
						
		}
		 
	}
}
