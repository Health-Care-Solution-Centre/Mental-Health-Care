<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: black;
}
</style>

<?php
$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DB="mentalhealth";
$conn= mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DB);
if(!$conn)
{
echo 'Not connected';
}
if(!mysqli_select_db($conn,$DB))
{
echo 'Database not selected';
}
?>
<html>
<body>
  <?php include "navibar.php"; ?>
  <li style="float:right"><a class="active" href="home.php">Logout</a></li>
</ul>
<br></br>
<br></br>
  
    <form action="update_mainpage_admin.php?pid=<?php echo $p_id; ?>" method="post">
    <table class="table" border="0" width="10%" align="center">
       <tr>
        <td colspan="2" align="center"><h1>MENTAL HEALTH CARE STORY</h1></td>
      </tr>
      <tr>
      <td >Title: </td>
      <td >
      <input type="text" name="title" class="single-input-primary" required />
      </td>
      </tr>
    
      <tr>
      <td >Story: </td>
      <td >
      <textarea type="text" rows="15" class="single-input-primary" cols="60" name="story" required /></textarea>
      </td>
      </tr>
      <tr>
      <td colspan="2" align="center">
      <input type="submit" value="Update" class="genric-btn primary" name="submit" />
      <input type="reset" value="Clear" class="genric-btn primary" name="reset" />
      </td>
      </tr>

            </table>
            </form>
          </body>
          </html>
          </div>
        </div>

      </div>
    </div>
  </div>
