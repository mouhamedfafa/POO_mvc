<?php
namespace App\Model;
use App\Model\Personne;
abstract class  User extends Personne{
protected string  $login;
protected string  $password;



    public function affiche(){
  echo $this->id;

    }


/**
 * Get the value of login
 */ 
public function getLogin()
{
return $this->login;
}

/**
 * Set the value of login
 *
 * @return  self
 */ 
public function setLogin($login)
{
$this->login = $login;

return $this;
}

/**
 * Get the value of password
 */ 
public function getPassword()
{
return $this->password;
}

/**
 * Set the value of password
 *
 * @return  self
 */ 
public function setPassword($password)
{
$this->password = $password;

return $this;
}
public static function findUserByLoginAndPassword(string $login,string $password): object|null|array{
   return self::findBy("select * from personne where login=? and password=?",[$login,$password],true);

}

public static function findAll():array{
    $db=parent::database();
    $db->connexionBD();
    $sql ="select * from".parent::table()."where role not like 'ROLE_PROFESSEUR'";
    $results=$db->executeSelect($sql);
    $db->closeConnexion();
    // $sql ="select * from".parent::table()."where role not like '".self::$role."'";
    return $results;
}
} 