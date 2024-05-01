<?php
  class AddLoyaltyView{
    public function render(){
      $tpl = new Template("templates/createloyalty.html");
      $tpl->write();
    }
  }
