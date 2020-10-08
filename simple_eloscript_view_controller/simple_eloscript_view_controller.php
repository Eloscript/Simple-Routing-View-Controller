<?php
error_reporting(0);
class simple_eloscript_view_controller{

private $ex = '.php';
 private  $index = 'index.php?page=';   
//private $path = '';
    //
    
    public function loader(){
		
         $view=$_GET['page'] ?? 'default';
		 
        if(!file_exists($view.$this->ex)){
            $this->show_404();
        }
		
		
		//
       include($view.'.php');
		
        
    }
    
    public function show_404(){
        echo 'The file is not exist...';
    } 
    
    
  public function site_view($path,$file){
    
        if(empty($path)){
            $path='defeault_path_name/';
        }
        if(!is_dir($path)) exit('This is not a direcotry');
        return $this->index.$path.$file ; 
    }
   
}


 
?>
