<?php
  class MembersView{
    public function render($data){
			// var_dump($data);
			// die();
      $dataMembers = null;
      foreach($data as $val){
        // list($id, $name, $phone, $email, $join_date, $name_loyalty) = $val;
            $dataMembers .= "<tr>
						<td>".$val['id']."</td>
						<td>".$val['name']."</td>
						<td>".$val['phone']."</td>
						<td>".$val['email']."</td>
						<td>".$val['join_date']."</td>
						<td>".$val['name_loyalty']."</td>
						<td>
											<a class='btn btn-success' href='edit.php?id=".$val['id']."'>Edit</a>
											<a class='btn btn-danger' href='delete.php?id=".$val['id']."'>Delete</a>
										</td>
					</tr>
					";
        
      }

      $tpl = new Template("templates/index.html");
      $tpl->replace("DATA_TABEL", $dataMembers);
      $tpl->write();
    }
  }
