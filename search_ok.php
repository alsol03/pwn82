<?php
  require_once("./connect.php");
?>
<head>
<title>Board</title>
</head>
<body>
<div id="board_area">
<?php
  $catagory = $_GET['catgo'];
  $search_con = $_GET['search'];
?>
  <h1> '<?php echo $search_con; ?>' Search Result</h1>
  <h4 style="margin-top:30px;"><a href="./list.php">Go Board</a></h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">No</th>
                <th width="500">Title</th>
                <th width="120">Writer</th>
                <th width="100">Date</th>
                <th width="100">Hit</th>
            </tr>
        </thead>
        <?php
          $sql = "select * from board where $catagory like '%$search_con%' order by no desc";
          $res=mysqli_query($connect,$sql) or die("Select Query Error");

          while($row = mysqli_fetch_assoc($res)){
          $title=$board["title"];
          $tt=$row['title'];
          $str=substr($tt,0,42);
          $row['date']=explode(' ',$row['date'])[0];
          echo "<tr>";
          echo "<td>{$row['no']}</td>";
          echo "<td><a href=\"./view.php?no={$row['no']}\">$str</a></td>";
          echo "<td>{$row['date']}</td>";
          echo "<td>{$row['hit']}</td>";
          echo "<td>{$row['name']}</td>";
          echo "</tr>";
        ?>

      <tbody>
        <tr>
          <td width="70"><?php echo $board['no']; ?></td>
          <td width="500">
          <a href='/view.php?no=<?php echo $board["no"]; ?>'>
          <span style="background:yellow;"><?php echo $title;
        }?>
          </span><span class="re_ct"></span></a></td>
          <td width="120"><?php echo $board['name']?></td>
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>

        </tr>
      </tbody>
    </table>
</div>
</body>
</html>
