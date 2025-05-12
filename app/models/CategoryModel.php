<?php
// include './includes/connect_db.php';
class CategoryModel
{
    public function getAll() 
    {
        $sql = "SELECT * FROM categories";
        return pdo_query($sql);
    }
}