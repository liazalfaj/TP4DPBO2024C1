<?php
include_once("connection.php");
include_once("models/Loyalty.class.php");
// include_once("models/Author.class.php");
include_once("views/CreateLoyalty.view.php");
include_once("views/EditLoyalty.view.php");
include_once("views/Loyalty.view.php");

class LoyaltyController {
  private $loyalty;
//   private $author;

  function __construct(){
    $this->loyalty = new Loyalty(Conf::$servername, Conf::$user, Conf::$password, Conf::$name);
  }

  public function index() {
    $this->loyalty->open();
    // $this->author->open();
    $this->loyalty->getLoyalty();
    // $this->author->getAuthor();
    
    $data = array(
      'loyalty' => array()
    );
    while($row = $this->loyalty->getResult()){
      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
      array_push($data['loyalty'], $row);
    }
    $this->loyalty->close();

    $view = new LoyaltyView();
    $view->render($data);
  }

  
  function add($data){
    $this->loyalty->open();
    $this->loyalty->add($data);
    $this->loyalty->close();
    
    header("location:loyalty.php");
  }

	function addLoyaltyView(){
		$view = new AddLoyaltyView();
		$view->render();
	}

	function editLoyaltyView($id){
		$this->loyalty->open();
		$this->loyalty->getLoyaltyById($id);
		$data = $this->loyalty->getResult();
    	$this->loyalty->close();

		$view = new EditLoyaltyView();
		$view->render($data);
	}

  function edit($id){
    $this->loyalty->open();
	$this->loyalty->edit($id);
    $this->loyalty->close();

    header("location:loyalty.php");
  }

  function delete($id){
    $this->loyalty->open();
    $this->loyalty->delete($id);
    $this->loyalty->close();

    header("location:loyalty.php");
  }

}
