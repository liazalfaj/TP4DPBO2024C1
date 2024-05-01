<?php
  class LoyaltyView{
    public function render($data){
      $dataLoyalty = null;
      foreach($data['loyalty'] as $val){
        list($id, $name) = $val;
            $dataLoyalty .= "<tr>
						<td>$id</td>
						<td>$name</td>
						<td>
											<a class='btn btn-success' href='editloyalty.php?id=$id'>Edit</a>
											<a class='btn btn-danger' href='deleteloyalty.php?id=$id'>Delete</a>
										</td>
					</tr>
					";
        
      }

      $tpl = new Template("templates/loyalty.html");
      $tpl->replace("DATA_TABEL", $dataLoyalty);
      $tpl->write();
    }
  }
