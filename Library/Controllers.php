<?php

class Controllers {
    public function __construct() {
        echo "Sistema PHP";
    }

    function loadClassModel(){
        $model = get_class($this).'_model';
        $path = 'Models/'.$model.'.php';
        if(file_exists($path)){
            require $path;
            $this->model = new $model();
        }
    }
}

?>