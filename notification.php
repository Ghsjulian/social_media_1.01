<?php
session_start();
$info = $_SESSION['user_info'];
$user_id = $info['user_id'];
$message = array();
include('header.php');
$sql = "SELECT * FROM request WHERE reciver_id = '$user_id'";

$query = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($query)) {
  $sender_id = $data['sender_id'];
  $sender_name = $data['sender_name'];
  $sender_avtar = $data['sender_image'];
  ?>



  <div id="noti_btn" class="area notification" img="<?php echo $sender_avtar; ?>" name="<?php echo $sender_name; ?>"
    uid="<?php echo $sender_id; ?>">
    <div>
      <img src="upload/<?php echo $sender_avtar; ?>" />
    <strong
      ><b style="color: #00abd5"><?php echo $sender_name; ?></b> followed you ! Will you
      accept it ?</strong
    >
  </div>
</div>

<?php
}
?>


<div id="pop_page" class="w3-modal">
<div id="modal_page" class="w3-container">

</div>
</div>

<?php

include('footer.php');
?>