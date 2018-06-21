<?php

  interface DataBase {
    public function execDB($strSQL);
    public function open();
    public function close();
  }

?>
