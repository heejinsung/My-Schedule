<?php
   $update_num = $_GET['num'];


   $update_Tit = nl2br($_POST['updateTit']);
   $update_Con = nl2br($_POST['updateCon']);

   $update_Tit = addslashes($update_Tit);
   $update_Con = addslashes($update_Con);

   include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
   $sql = "update sch_txt set sch_txt_tit='$update_Tit', sch_txt_con='$update_Con' where sch_txt_num='$update_num' ";

   mysqli_query($dbConn, $sql);

   echo "
      <script>
         alert('수정이 완료되었습니다');
         location.href='/myschedule/pages/detail_view.php?num=$update_num';
      </script>
   ";

?>