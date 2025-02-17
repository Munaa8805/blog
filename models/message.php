<?php

class Message extends Model
{


    public function getList()
    {
        $sql = "SELECT * FROM messages";
        return $this->db->query($sql);
    }
    public function addNewMessage($data)
    {
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']);
        $sql = "INSERT INTO messages set name ='$name', email='$email', message='$message'";

        return $this->db->query($sql);
    }
}
