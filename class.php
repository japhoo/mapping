<?php
// Include connection file
include 'conn.php';
//	 check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
class Auth
{

    function select14($val, $table, $col, $val2)
    {
        global $conn;
        $sqlstr = "SELECT $val FROM $table WHERE $col = ? ORDER BY id DESC LIMIT 1";
        $stmt = $conn->prepare($sqlstr);
        $stmt->bind_param("s", $val2);
        $stmt->execute();
        $result = $stmt->get_result();
        $x = $result->num_rows;
        if ($x > 0) {
            while ($row = $result->fetch_assoc()) {
                $res = $row[$val];
            }
        } else {
            $res = 0;
        }
        return $res;
    }
    function Web($val)
    {
        global $conn;
        $sqlstr = "SELECT $val FROM website_details";
        $stmt = $conn->prepare($sqlstr);
        $stmt->execute();
        $result = $stmt->get_result();
        $x = $result->num_rows;
        if ($x > 0) {
            while ($row = $result->fetch_assoc()) {
                $res = $row[$val];
            }
        } else {
            $res = 0;
        }
        return $res;
    }
}
$auth = new Auth;
$wn = $auth->Web('name');
