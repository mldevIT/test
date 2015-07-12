<?

class UserController extends Controller{
    public function ActionIndex(){
        $a=2;
        $this->render("index",array("a"=>$a),false);
    }
}
?>