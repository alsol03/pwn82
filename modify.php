<?php
               require_once("./connect.php");
               $no = $_GET['no'];
               $sql = "select * from board where no=$no";
               $res=mysqli_query($connect,$sql) or die("Select Query Error");
               $rows = mysqli_fetch_assoc($res);

               session_start();

               $URL = "./list.php";

               if(!isset($_SESSION['id'])) {
       ?>              <script>
                               alert("권한이 없습니다.");
                               location.replace("<?php echo $URL?>");
                       </script>
       <?php   }
               else if($_SESSION['id']==$rows['name']) {
       ?>
       <form enctype="multipart/form-data" method="post" action="./modify_ok.php">
       <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
               <tr>
               <td height=20 align= center bgcolor=#ccc><font color=white>Modify Board</font></td>
               </tr>
               <tr>
               <td bgcolor=white>
               <table class="table2">
                     <tr>
                     <td>No</td>
                     <td><input type="hidden" name="no" value=<?php echo $rows['no'];?>><?php echo $rows['no'];?></td>
                     </tr>

                     <tr>
                     <td>Title</td>
                     <td><input type="text" name="title" size=60 value=<?php echo $rows['title'];?>></td>
                     </tr>

                     <tr>
                     <td>Content</td>
                     <td><textarea type="textarea" name="content" cols=85 rows=15 value=<?php echo $rows['content'];?>><?php echo $rows['content']?></textarea></td>
                     </tr>

                     </table>
                     <center>
                     <button type="submit" value="form" >submit</button>
                     </center>
                     </td>
                     </tr>
       </table>
       </form>

       <?php   }
               else {
       ?>              <script>
                               alert("권한이 없습니다.");
                               location.replace("<?php echo $URL?>");
                       </script>
       <?php   }
       ?>
