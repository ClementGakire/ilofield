<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS' ,'');
    define('DB_NAME', 'fieldtrip');

    class DB_con
    {
        function __construct()
        {
            $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
            $this->dbh = $con;
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }
        public function insert($trip, $name, $email, $phone_number, $hotel, $profession)
        {
            $stmt = $this->dbh->prepare("INSERT INTO trips (trip, name, email, phone_number, hotel, profession) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $trip, $name, $email, $phone_number, $hotel, $profession);
            $ret = $stmt->execute();
            $stmt->close();
            return $ret;
        }
        public function event($name, $email, $nationality, $event)
        {
            $stmt = $this->dbh->prepare("INSERT INTO sideevent (name, email, nationality, event) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $nationality, $event);
            $ret = $stmt->execute();
            $stmt->close();
            return $ret;
        }
        public function getDelegates($name, $email, $nationality, $event)
        {
            $stmt = $this->dbh->prepare("SELECT * FROM sideevent");
            $ret = $stmt->execute();
            $stmt->close();
            return $ret;
        }
        
    }
?>
