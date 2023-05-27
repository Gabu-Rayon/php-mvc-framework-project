<?php 

namespace app\core;


abstract class DbModel extends Model{

    abstract public function tableName(): string;
    
}