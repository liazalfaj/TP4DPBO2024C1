<?php
include_once("connection.php");
include_once("models/Members.class.php");
// include_once("models/Author.class.php");
include_once("views/Create.view.php");
include_once("views/Edit.view.php");
include_once("views/Members.view.php");
include_once("models/Loyalty.class.php");

class MembersController {
  private $members;
	private $loyalty;
//   private $author;

  function __construct(){
    $this->members = new Members(Conf::$servername, Conf::$user, Conf::$password, Conf::$name);
		$this->loyalty = new Loyalty(Conf::$servername, Conf::$user, Conf::$password, Conf::$name);
  }

  public function index() {
    $this->members->open();
    // $this->author->open();
    $this->members->getMembers();
    // $this->author->getAuthor();
    
    $data = array();
    while($row = $this->members->getResult()){
      // echo "<pre>";
      // print_r($row);
      // echo "</pre>";
      array_push($data, $row);
    }
    $this->members->close();

    $view = new MembersView();
    $view->render($data);
  }

  
  function add($data){
    $this->members->open();
    $this->members->add($data);
    $this->members->close();
    
    header("location:index.php");
  }

	function addMemberView(){
		$this->loyalty->open();
    $this->loyalty->getLoyalty();
		$data = array();
		while($row = $this->loyalty->getResult()){
			array_push($data, $row);
		}
    $this->loyalty->close();
		$view = new AddMembersView();
		$view->render($data);
	}

	function editMemberView($id){
		$this->loyalty->open();
    $this->loyalty->getLoyalty();
		$dataloyalty = array();
		while($row = $this->loyalty->getResult()){
			array_push($dataloyalty, $row);
		}
    $this->loyalty->close();

		$this->members->open();
		$this->members->getMemberById($id);
		$data = $this->members->getResult();
    $this->members->close();

		$view = new EditMembersView();
		$view->render($data, $dataloyalty);
	}

  function edit($id){
    $this->members->open();
		$this->members->edit($id);
    $this->members->close();

    header("location:index.php");
  }

  function delete($id){
    $this->members->open();
    $this->members->delete($id);
    $this->members->close();

    header("location:index.php");
  }

}
