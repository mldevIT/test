<?php

class CatController extends Controller{
	public function actionIndex(){

//        $cat = new Cat;
//        $cat->name = "mumu";
//        $cat->value = "mimi";
//        $cat->save(false);

        $cat = new Cat;
        $nname = $cat->findByPk("60");
        $name = $nname->name;

        $this->render("/site/index",array("nname" =>$name),false);
    }

}
?>