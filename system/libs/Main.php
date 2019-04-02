<!-- <!-- <?php


// Cilj ove klase je da nam javi neku gresku ako pogresno ukucamo neki url

  class Main {    
    
    
    public $url;
    public $controllerName = "Index";
    public $methodName = "Index";
    public $controllerPath = "app/controllers/";
    public $controller;

    

    public function __construct() {
        $this->getUrl();
        $this->loadController();
        $this->callMethod();
    }

    // Ovo je sve bilo u index.php samo ga sad rasparcavamo. Ovo this se odnosi na public
    public function getUrl() { 
        
      
        $this->url = isset($_GET['url']) ? $_GET['url'] : NULL; // ( ?url )

        if ($this->url != NULL) {                
            $this->url = rtrim($this->url, '/');
            $this->url = explode("/", filter_var($this->url, FILTER_SANITIZE_URL));

        } else {
            unset($this->url);
        }   
    } 
     
    
    
     public function loadController(){          

            if(!isset($this->url[0])){
                include $this->controllerPath.$this->controllerName.".php";
                $this->controller = new $this->controllerName();
                
            } else {
                $this->controllerName = $url[0];
                $fileName = $this->controllerPath.$this->controllerName.".php"; // putanja
                
                if (file_exists($fileName)) {
                    include $fileName;
                 if(class_exists($this->controllerName)) {
                    $this->controller = new $this->controllerName();
                } else {header("Location:" .BASE_URL."/Index");}
                
               } else {header("Location:" .BASE_URL."/Index");}    

        }
    }
    
    
        

        public function callMethod() {             
            $functionName = $this->url[1];
            
            if (isset($this->url[2])) {
                $this->methodName = $functionName;
                if (method_exists($this->controller, $this->methodName)) {
                    $this->controller->{$this->methodName}($this->url[2]);
                } else {
                    header("Location:" .BASE_URL."/Index");
                }
                
            }  else {
                if (isset($functionName)) {
                    $this->methodName = $functionName;
                    if (method_exists($this->controller, $this->methodName)) {
                        $this->controller->{$this->methodName}();
                    } else {
                        header("Location:" .BASE_URL."/Index");
                     }

                    } else {

                        if (method_exists($this->controller, $this->methodName)) {
                            $this->controller->{$this->methodName}();
                        } else {
                            header("Location:" .BASE_URL."/Index");
                        
                        } 
                    
                }
            }
        }


  }

 
   -->
