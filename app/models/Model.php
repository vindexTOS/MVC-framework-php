<?php

# main model class

class Model extends Database
{
    function test()
    {
        $query = 'select * from users';
        $result = $this->query($query);
        show($result);
    }
}
