<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db ="penggajian";

    $con = mysqli_connect($host,$username,$password,$db);

    // Check connection
    if (mysqli_connect_errno()){
            die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
    function insert($query) {
        global $con;
        mysqli_query($con, $query); 
        // die( mysqli_error($con));
        return mysqli_affected_rows($con);
    }
    function read($query){
        global $con;
        $rows=[];
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0 ){
            while($row = mysqli_fetch_row($result)){
                $rows[]=$row;
            }
        }
        return $rows;
        mysqli_close($con);
    }
    function cek_id($value){
    global $con;
    $query= "SELECT * FROM gajih WHERE pegawai_id='$value'";
    if($result = mysqli_query($con,$query)){
        if(mysqli_num_rows($result)!= 0 ) return true;
        else return false;
    }   
}
?>