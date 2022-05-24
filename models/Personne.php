<?php

namespace App\Model;

use App\Core\Model;

abstract class Personne extends Model
{

    protected int $id;
    protected string $nomCoplet;
    protected static int $nombrePersonne;
    protected static string  $role;


    public function __construct()
    {
    }


    //getters 
    public function getId(): int
    {

        return $this->id;
    }
    public static function getNombrePersonne(): int
    {

        return self::$nombrePersonne;
    }


    public static function setNombrePersonne(): int
    {

        return self::$nombrePersonne;
    }

    public function getNomComplet(): string
    {

        return $this->nomComplet;
    }
    // setters

    public function setId(): int
    {

        return $this->id;
    }
    public static function getRole()
    {
        return self::$role='';
    }
    public function setNomComplet(string $nomComplet): void
    {
        $this->nomComplet = $nomComplet;
    }
    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }
}
