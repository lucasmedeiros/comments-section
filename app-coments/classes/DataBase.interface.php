<?php
/**
* Interface que representa a abstração de um banco de dados SQL, mas pode
* também ser ajustado para representar outro tipo de BD.
*/
  interface DataBase {
    /**
    * Prepara uma requisição SQL a partir de uma String.
    *
    * @param string $strSQL
    * @return PDOStatement se a requisição foi feita com sucesso, senão,
    * retorna <<i>>false<<i>> ou uma <<i>>PDOException<<i>>.
    */
    public function execDB($strSQL);

    /**
    * Abre a conexão com o banco de dados.
    *
    */
    public function open();

    /**
    * Fecha a conexão com o banco de dados.
    *
    */
    public function close();
  }

?>
