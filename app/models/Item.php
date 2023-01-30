<?php


class Item
{
    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    //INSERT QUERY:
    public function insert($name, $Price, $Image, $category)
    {
        $this->db->query("INSERT INTO `item`(`item_name`, `item_price`, `item_img`, `item_category`) VALUES (:name,:price,:image,:catg)");
        $this->db->bind(":name", $name);
        $this->db->bind(":price", $Price);
        $this->db->bind(":image", $Image);
        $this->db->bind(":catg", $category);
        $this->db->execute();
    }

    //EDITE QUERY:
    public function getProductInfos($id){
        $this->db->query('SELECT * FROM `item` WHERE id=:id');
        $this->db->bind(':id',$id);
        return $this->db->fetchAll();
    }


    public function edit($id, $name, $prc, $img, $catg)
    {
        $this->db->query('UPDATE item SET item_name= :name, item_price= :price, item_img= :image, item_category= :catg
        WHERE id=:id ');   
        $this->db->bind(":id", $id);
        $this->db->bind(":name", $name);
        $this->db->bind(":price", $prc);
        $this->db->bind(":image", $img);
        $this->db->bind(":catg", $catg);
        return $this->db->execute();

    }




    //DELETE QUERY:
    public function delete($id)
    {
            //delete query for row with id,  $id
            $this->db->query("DELETE FROM item WHERE id = :id");
            $this->db->bind(':id',$id);
            $this->db->execute();
        
    }

    public function trie( $by, $order ) // /amber/itemController/orderProduct/item_price/DESC
    {
        $sql = 'SELECT * FROM item ORDER BY item.' . $by . ' ' . $order;
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->fetchAll();
    }


    // fetch all columns in fetchColumn()
    public function maxPrice()
    {
        $this->db->query('SELECT MAX(item_price) FROM item');
        $this->db->execute();
        return $this->db->fetchColumn();
    }

    public function sumPrice()
    {
        $this->db->query('SELECT SUM(item_price) FROM item');
        $this->db->execute();
        return $this->db->fetchColumn();
    }

    public function totalItems(){
        $this->db->query('SELECT COUNT(item_price) FROM item');
        $this->db->execute();
        return $this->db->fetchColumn();
    }

    function search($libelle){
        $this->db->query(" SELECT 
                                * 
                            FROM 
                                item i
                            WHERE 
                                i.item_name LIKE '%$libelle%'
                        ");
        $this->db->execute();
        $data = $this->db->fetchAll();
        return $data;
    }
}
