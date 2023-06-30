<?php

# main model class

class Model
{
    #using traits Database is trait instad of extention
    #trait cannot be run by its own it should be used with another class
    use Database;
    protected $table = 'users';
    protected $limit = 10;
    protected $offset = 0;
    public function where($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";
        foreach ($keys as $key) {
            $query .= $key . '= :' . $key . ' && ';
        }
        foreach ($keys_not as $key) {
            $query .= $key . '!= :' . $key;
        }
        $query = trim($query, ' && ');
        $query .= " limit $this->limit offset $this->offset";
        // $this->query($query, ['id' => 23]);
        echo $query;
    }
    public function first($data, $data_not)
    {
    }
    public function insert($data)
    {
    }
    public function update($id, $data, $id_colum = 'id')
    {
    }
    public function delete($id, $id_colum = 'id')
    {
    }
}
