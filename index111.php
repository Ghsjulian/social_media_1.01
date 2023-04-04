<?php
include('top.php');
?>

<div id="Home" class="tab home w3-animate">
  <?php
  include('database/conn.php');

  function getUser($id) {
    include('database/conn.php');
    $sql = "SELECT * FROM users WHERE user_id = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
      $result = mysqli_fetch_array($query);
      return $result;
    }
  }



  $sql = "SELECT post_id,poster_id,post_content,count,comment FROM posts";

  $query2 = mysqli_query($conn, $sql);

  while ($data = mysqli_fetch_array($query2)) {


    $poster_id = $data['poster_id'];
    $post_id = $data['post_id'];
    $count = $data['count'];
    $comment_ = $data['comment'];
    $post_content = $data['post_content'];
    $post_time = $data['post_time'];
    $poster_avtar = getUser($poster_id)['user_image'];
    $poster_name = getUser($poster_id)['user_name'];
    $loved = $data['love'];
    ?>

    <div class="news-feed">
      <div class="poster">
        <img src="upload/<?php echo $poster_avtar; ?>" /><strong
       onclick="userProfile(<?php echo $poster_id; ?>)" ><a href="#"><?php echo $poster_name; ?></a></strong
      >
    </div>
    <div align="left" class="post_area">
      <content>
        <?php echo $post_content; ?>
      </content>
    </div>
    <!-- USERS ALL COMMENTS ---->
    <div id="comment_page" style="display:none" id="log_pop" class="w3-modal">
      <img style="float: right" src="images/cross.png" onclick="cancel_comment()" />
    <div id="modal_page" class="w3-container">
      <div id="show_comments" class="comment_page w3-animate" align="center">

      </div>
    </div>
  </div>
  <!-- USERS ALL COMMENTS ---->
  <div align="center" class="actions">
    <button name="request_btn" type="button" class="action_btn" id="<?php echo $post_id; ?>" post_id="<?php echo $post_id; ?>" poster_id="<?php echo
      $poster_id; ?>" /><b id="<?php echo $post_id; ?>">
      <?php
      $like = "SELECT liker,post_id FROM reaction WHERE liker = '$user_id' AND post_id = '$post_id'";
      $like_query = mysqli_query($conn, $like);
      if (mysqli_num_rows($like_query) == 1) {
        ?>
        <!--IF ALREADY LIKED THE POST--->
        <!----LIKE IMAGES------->
        <img id="like_btn" class="like_btn" src="images/liked.png" post_id="<?php echo $post_id; ?>" poster_id="<?php echo $poster_id; ?>" />
      <b id="<?php echo $poster_id; ?>"><?php echo $count; ?></b>
      <!-------FINISHED LIKE------>
      <?php
    } else {
      ?>
      <!--IF NOT LIKED THE POST--->
      <!----LIKE IMAGES------->
      <img id="like_btn" class="like_btn" src="images/like.svg" post_id="<?php echo $post_id; ?>" poster_id="<?php echo $poster_id; ?>" like="<?php echo $type; ?>" />
    <b id="<?php echo $poster_id; ?>"><?php echo $count; ?></b>
    <!-------FINISHED LIKE------>
    <?php
  }
  ?>
</button>

<button
  name="request_btn"
  type="button"
  class="action_btn"
  id="comment" post_id="<?php echo $post_id; ?>" poster_id="<?php echo $poster_id; ?>" poster_img="<?php echo
  $poster_avtar; ?>" poster_name="<?php echo $poster_name; ?>">
  <img src="images/comment.svg" />
<?php echo $comment_; ?>
</button>


<button type="button" class="action_btn" onclick="more()">
<img src="images/more.svg" />
</button>

</div>

<div class="comment_area">
<div class="commenter">
<img src="upload/<?php echo $info['user_image']; ?>" />
<input
class="comment_btn value"
type="text"
id="ghs_<?php echo$post_id; ?>"
name="comment"
placeholder="Write A Comment..."
/>
<button type="submit" class="comment_btn" name="comment_btn">
<img src="images/send.svg" onclick="sendComment(<?php echo $post_id; ?>)" />
</button>
</div>
</div>
</div>
<?php
}
?>

<div style="display:none" id="log_pop" class="w3-modal">

</div>
</div>
<script>



var like_btn = document.querySelectorAll("#like_btn");
for (var i = 0; i < like_btn.length; i++) {
like_btn[i].addEventListener("click", function (e) {
e.preventDefault();
var img = this.getAttribute("src");
var post_id = this.getAttribute("post_id");
var poster_id = this.getAttribute("poster_id");
var div = document.getElementById(poster_id);

var form_data = new FormData();
form_data.append("post_id", post_id);

fetch ("server/reaction.php", {
method: "POST",
body: form_data
}).then((res) => {
return res.json();
}).then((data) => {
if (data.Liked) {
this.src = "images/liked.png";
div.textContent = data.count;
} else if (!data.Unliked) {
this.src = "images/like.svg";
div.textContent = data.count;
}
});
});
}

/*________________________________
      LOVE REACTION CODES
_________________________-______*/

var love_btn = document.querySelectorAll("#love")
for (var i = 0; i < love_btn.length; i++) {
love_btn[i].addEventListener("click", function (e) {
e.preventDefault();
var post_id = this.getAttribute("post_id");
var img = this.getAttribute("src");
this.src = "images/loved.png";
});
}


</script>



</div>

<div style="display:none" id="Profile" class="tab profile w3-animate">
<!---STARTED PROFILE--->
<?php

include('pages/profile.php');

?>
</div>
<!----ENDED PROFILE--->

<div style="display:none" id="Messages" class="tab message w3-animate">
<?php include('pages/friend_list.php'); ?>
</div>

<div style="display:none" id="Notification" class="tab notification w3-animate">

<?php

include('pages/notification.php');
?>

</div>

<!--============MODAL PAGE==============--->


<!---STARTED FIND PEOPLE--->
<div style="display:none" id="People" class="tab people w3-animate">
<?php
include('pages/find_people.php');
?>
</div>
<!---ENDED FIND PEOPLE--->
<!---STARTED PROFILE--->
<div style="display:none" id="About" class="tab About w3-animate">
<?php
include('pages/about.php');
?>
</div>
<!---ENDED FIND PEOPLE--->

<!---STARTED LOGOUT--->
<div style="display:none" id="Logout" class="tab Logout w3-animate">
<?php
include('pages/logout.php');
?>
</div>
<!---ENDED LOGOUT--->

<!---STARTED EDIT PROFILE--->
<div style="display:none" id="Edit" class="tab Edit w3-animate">
<?php
include('pages/edit_profile.php');
?>
</div>
<!---ENDED EDIT PROFILE--->


<!---STARTED EDIT PROFILE--->
<div style="display:none" id="Post" class="tab Post w3-animate">
<?php
include('pages/write_post.php');
?>
</div>
<!---ENDED EDIT PROFILE--->


<!---STARTED EDIT PROFILE--->
<div style="display:none" id="User" class="tab User w3-animate">
<?php
//include('pages/users_profile.php');
?>
</div>
<!---ENDED EDIT PROFILE--->
<br />
<!--
<div style="display:none" id="chatbox" class="tab chatbox w3-animate">
    </div>-->

<!---------------->
<div style="display:none" id="chatbox" class="chatbox_area tab chatbox ">
<!--
<div class="chat_page">
<div class="msg-inbox">
<div class="chats">
<div id="msg-page" class="msg-page">-->

<!---CHATING AREA WILL BE HERE --->
<!--------><!-------->
<!---CHATING AREA WILL BE HERE --->
<!--</div>
</div>
</div>
</div>--->
<!--
<div id="__header" class="fixed-bottom msg_footer">
<img style="display: block" id="msg_user" src="images/user.svg">
<textarea id="text_message" placeholder="Write A Message..."></textarea>
<button id="send_btn"><img id="cancle" src="images/send.svg"></button>
</div>--->
</div>
<!---------------->
<?php
include('footer.php');
?>