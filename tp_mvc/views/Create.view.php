<?php
  class AddMembersView{
    public function render($data){
			$dataLoyalty = "";
			foreach($data as $val){
				$dataLoyalty .= "<option value='".$val['id']."'>".$val['name_loyalty']."</option>";
			}
      $tpl = new Template("templates/create.html");
			$tpl->replace("DATA_LOYALTY", $dataLoyalty);
      $tpl->write();
    }
  }
