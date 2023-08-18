<?php
session_start();
include "header.php";
include "connection.php";
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
?>

        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
            <center><h2>Old Exam Results</h2></center>

            <?php
            $count=0;
            $res=mysqli_query($link,"select * from exam_results where username='$_SESSION[username]' order by id desc");
            $count=mysqli_num_rows($res);
            if($count==0)
            {
                ?>
                 <center><h2>No Results Found</h2></center>   
                <?php
            }
            else
            {

                echo "<table class='table table-bordered'>";
                echo "<tr style='background-color:#006d; color: white'>";
                echo "<th>"; echo "username"; echo "</th>";
                echo "<th>"; echo "exam_type"; echo "</th>";
                echo "<th>"; echo "total questions"; echo "</th>";
                echo "<th>"; echo "correct answers"; echo "</th>";
                echo "<th>"; echo "wrong answers"; echo "</th>";
                echo "<th>"; echo "exam time"; echo "</th>";
                echo "</tr>";

                while($row=mysqli_fetch_array($res))
                {
                echo "<tr>";
                echo "<td>"; echo $row["username"]; echo "</td>";
                echo "<td>"; echo $row["exam_type"]; echo "</td>";
                echo "<td>"; echo $row["total_question"]; echo "</td>";
                echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                echo "<td>"; echo $row["exam_time"]; echo "</td>";
                echo "</tr>";

                }
                echo "</table>";

            }
            ?> 
            </div>
            
        </div>


<?php
include "footer.php";
?>