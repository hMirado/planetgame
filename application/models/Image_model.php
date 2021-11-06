<?php


class Image_model extends MY_Model
{
    protected $table = 'image';

    public function __construct()
    {
        parent::__construct();
    }

    public function getSlides()
    {
        $this->setTable("v_image");
        $res =  $this->readAll(null, "status = 1 AND type_id = 1");
        $this->resetTable();
        return $res;
    }

    public function getCategoriesImg()
    {
        $this->setTable("v_image");
        $res =  $this->readAll(null, "status = 1 AND type_id = 6");
        $this->resetTable();
        return $res;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    public function resetTable()
    {
        $this->table = 'image';
    }
}