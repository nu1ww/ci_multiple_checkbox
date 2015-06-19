###################
Release Information
###################

This helper function takes four parameters: (name, array of data, the array what we need to select, ’ you can post any attribute of check box’  )

###################
Step 1
###################
 Please copy all the code of ci_multiple_checkbox_check.php  in to the system/helpers/form_helper.php 
################### 
Step 2
###################
You can load the helper like you would normally load a helper in a controlle
$this->load->helper('form');
###################
Step 3
###################
and call the function in a view
echo  form_multiple_checkbox();

###################
Example usage:
###################

$all =array( 0 => 'Nuwan', 1 => 'Ruby', 2 => 'Safi',  3 => 'Nima' ); 
$selected = array( 1 => 'Ruby', 2 => 'Safi') ;
$name='name_of_checkbox';
echo  form_multiple_checkbox($name, $all, $selected, $extra = ''); 
