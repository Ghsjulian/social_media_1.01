<center>
  <div class="search">
    <input id="search" type="text" placeholder="Search...">
    <button type="search">🔎</button>
  </div>
  <div id="search_area"></div>
</center>

<div id="frnd_list"></div>




<?php
/*________________________________
    SELECT FROM REQUEST TABLE
________________________________*/


/*
$sql = "SELECT sender_id FROM request";

$query = mysqli_query($conn, $sql);
while ($req = mysqli_fetch_array($query)) {
$all_user = "SELECT * FROM users WHERE user_id != '$req_id'";

$query_all = mysqli_query($conn, $all_user);
while ($data = mysqli_fetch_array($query_all)) {


  $sndr_id = $req['sender_id'];
  $rcv_id = $req['reciver_id'];
*/
// echo $rcv_id."<br>";
/*_______________________________
     SELECT FROM USERS TABLE
________________________________*/

$all_user = "SELECT * FROM users WHERE user_id != '$user_id'";

$query2 = mysqli_query($conn, $all_user);

while ($data = mysqli_fetch_array($query2)) {

  $user_id = $data['user_id'];
  $user_name = $data['user_name'];
  $avtar = $data['user_image'];

  ?>

  <!---------------->
  <div id="<?php echo $user_id; ?>" class="area">
    <div class="find_friend">
      <img src="upload/<?php echo $avtar; ?>" />
    <strong><a href="#"><?php echo $user_name." ".$user_id; ?></a></strong>
    <button data="<?php echo $user_id; ?>" id="follow_btn" class="flw_btn">Follow</button>
  </div>
</div>

<?php
}

?>