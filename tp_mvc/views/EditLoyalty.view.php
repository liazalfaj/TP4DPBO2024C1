<?php
  class EditLoyaltyView{
    public function render($data){
			$id = $data['id'];
			$name_loyalty = $data['name_loyalty'];
			$formedit =' <form method="post" action = "editloyalty.php">
 
			<br><br><div class="card">
			
			<div class="card-header bg-warning">
			<h1 class="text-white text-center">  Update Loyalty </h1>
			</div><br>
	
			<input type="hidden" name="id" value="'. $id.' " class="form-control"> <br>
		 
			<label> NAME: </label>
			<input type="text" name="name_loyalty" value="'.$name_loyalty.'" class="form-control"> <br>
		 
			<button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
			<a class="btn btn-info" type="submit" name="cancel" href="loyalty.php"> Cancel </a><br>
		 
			</div>
			</form>';
      $tpl = new Template("templates/editloyalty.html");
			$tpl->replace("FORM_EDIT", $formedit);
      $tpl->write();
    }
  }
