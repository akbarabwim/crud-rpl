<?php
include "connect.php";

mysqli_query($kon,"DELETE FROM t_member WHERE ID = '".$_GET['id']."'");
echo "<script language=javascript>parent.location.href='rekap.php';</script>";
?>