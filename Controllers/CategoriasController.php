<?php 
    namespace Controllers;
    class CategoriasController{
        public function __construct()
        {
            $this->view = new \Views\MainView('categorias',array(
                'titulo'=>'Deadbear | Categorias',
                'desc'=>'Nosso site oferece uma variedade de contas steam por um preço que você não verá em outro lugar, venha e converse com um de nossos atendentes!',
                'tags'=>'steam, steam market, steam accounts, steam accounts for sale, contas steam, contas steam comprar, comprar contas steam, contas steam, comprar'
            ));
                

        }
        public function index(){
            $this->view->renderTemplate();
        }
    }
?>