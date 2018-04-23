<?php

class users {
  public function fetch_all() {
    global $pdo;

    $query = $pdo->prepare("SELECT * from users");
    $query->execute();

    return $query->fetchALL();

  }

  public function fetch_data($id) {
    global $pdo;

    $query = $pdo->prepare("SELECT * from users WHERE id=?");
    $query->bindValue(1, $id);
    $query->execute();

    return $query->fetch();
  }

}

?>
