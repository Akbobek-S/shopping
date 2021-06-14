<?php

class Cart{
    public $db=null;

    public function __construct(DB $db)
    {
        if(!isset($db->conn)) return null;
        $this->db=$db;
    }

    public function insert($params=null, $table="cart"){
        if ($this->db->con!=null){
            if($params!=null){
                $columns = implode(',', array_keys($params));
                $values = implode(',' , array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }
    public  function addToCart($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insert($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }


}