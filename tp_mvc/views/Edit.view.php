<?php
  class EditMembersView{
    public function render($data, $dataloyalty){
			// var_dump($data);
			// die();
			$dataL = "";
			foreach($dataloyalty as $val){
				$dataL .= "<option value='".$val['id']."'>".$val['name_loyalty']."</option>";
			}
			$id = $data['id'];
			$name = $data['name'];
			$email = $data['email'];
			$phone = $data['phone'];
			$id_loyalty = $data['id_loyalty'];
			$formedit =' <form method="post" action = "edit.php">
 
			<br><br><div class="card">
			
			<div class="card-header bg-warning">
			<h1 class="text-white text-center">  Update Member </h1>
			</div><br>
	
			<input type="hidden" name="id" value="'. $id.' " class="form-control"> <br>
		 
			<label> NAME: </label>
			<input type="text" name="name" value="'.$name.'" class="form-control"> <br>
		 
			<label> EMAIL: </label>
			<input type="text" name="email" value="'.$email.'" class="form-control"> <br>
		 
			<label> PHONE: </label>
			<input type="text" name="phone" value="'.$phone.'" class="form-control"> <br>
			<label> Loyalty: </label>
			<select class="form-select my-2" id="id_loyalty" name="id_loyalty">
				DATA_LOYALTY
			</select>
			<button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
			<a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
		 
			</div>
			</form>';
      $tpl = new Template("templates/edit.html");
			$tpl->replace("FORM_EDIT", $formedit);
			$tpl->replace("DATA_LOYALTY", $dataL);
      $tpl->write();
    }
  }
