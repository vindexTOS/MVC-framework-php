<?php

#using traits Database is trait instad of extention
#trait cannot be run by its own it should be used with another class
trait Database
{
    private function connect()
    {
        $string = 'mysql:hostname=' . DBHOST . ';dbname=' . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        return $con;
    }
    public function query($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);

        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }
}
