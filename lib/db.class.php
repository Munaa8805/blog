<?php


class Db
{

    protected $connection;
    protected $error;

    public function __construct()
    {
        $this->connection = new mysqli(Config::get('database.host'), Config::get('database.user'), Config::get('database.password'), Config::get('database.name'));

        if ($this->connection->connect_error) {
            $this->error = $this->connection->connect_error;
            throw new Exception('Could not connect to DB' . $this->error);
        }
    }

    public function query($sql)
    {
        if (!$this->connection) {
            return false;
        }

        $result = $this->connection->query($sql);

        if (mysqli_error($this->connection)) {
            throw new Exception(mysqli_error($this->connection));
        }

        if (is_bool($result)) {
            return $result;
        }

        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

    public function escape($str)
    {
        // return mysqli_escape_string($this->connection, $str);
        return mysqli_real_escape_string($this->connection, $str);
    }

    public function __destruct()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}