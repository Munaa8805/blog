<?php


class Page extends Model
{
    public function getList($is_published = false)
    {
        $sql = "SELECT * FROM pages";
        if ($is_published) {
            $sql .= "  WHERE is_published = 1";
        }
        // var_dump($this->db->query($sql));
        return $this->db->query($sql);
    }

    public function getAlias($alias)
    {
        $alias = $this->db->escape($alias);
        $sql = "SELECT * FROM pages WHERE alias = '" . $alias . "'";
        return $this->db->query($sql) ?? null;
    }

    // public function getPage($id)
    // {
    //     $sql = "SELECT * FROM pages WHERE id = " . $id;
    //     return $this->db->query($sql);
    // }
    // public function addPage($data)
    // {
    //     $sql = "INSERT INTO pages (title, content) VALUES ('" . $data['title'] . "', '" . $data['content'] . "')";
    //     return $this->db->query($sql);
    // }
    // public function updatePage($data)
    // {
    //     $sql = "UPDATE pages SET title = '" . $data['title'] . "', content = '" . $data['content'] . "' WHERE id = " . $data['id'];
    //     return $this->db->query($sql);
    // }
    // public function deletePage($id)
    // {
    //     $sql = "DELETE FROM pages WHERE id = " . $id;
    //     return $this->db->query($sql);
    // }
}
