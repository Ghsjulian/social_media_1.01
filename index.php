<?php
include('top.php');

function getUser($id) {
  include('database/conn.php');
  $sql = "SELECT * FROM users WHERE user_id = '$id'";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    $result = mysqli_fetch_array($query);
    return $result;
  }
}
function request($u_id, $session_id) {
  include('database/conn.php');
  $sql = "SELECT sender_id,reciver_id FROM request WHERE sender_id = '$u_id' AND reciver_id = '$session_id' OR sender_id = '$session_id' AND reciver_id = '$u_id'";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    $result = mysqli_fetch_array($query);
    return $result;
  }
}
function connected($u_id, $session_id) {
  include('database/conn.php');
  $sql = "SELECT requester, accepter FROM connected WHERE requester = '$u_id' AND accepter = '$session_id' OR requester = '$session_id' AND accepter = '$u_id'";
  $query = mysqli_query($conn, $sql);

  if ($query) {
    $result = mysqli_fetch_array($query);
    return $result;
  }
}
?>
<!---
<br><br><br>
<a href="http://localhost:8000/Admin/index111.php">Goooooo</a>
<div id="Home" class="tab home w3-animate-zoom">-->
<?php
include('database/conn.php');
?>

<!---------------->
<div class="chatbox_area">
  <div id="__header" class="fixed-top msg_header">
    <img id="msg_user" src="images/ghs.png">
    <strong>Ghs Julian </strong>
    <img id="cancle" src="images/cross.png">
  </div>
  <div class="chat_page">
    <div class="msg-inbox">
      <div class="chats">
        <div class="msg-page">

          <!----LEFT SIDE ---->
          <div class="received-chats">
            <div class="received-chats-images">
              <img id="left_user" src="images/ghs.png" />
          </div>
          <div class="received-msg">
            <p>
              Hello sir I'm Juliee . I'm a web developer.
            </p>
          </div>
        </div>
        <!----LEFT SIDE ---->

        <!--- RIGHT SIDE---->
        <div class="sender-chats">
          <div class="sender-chats-images">
            <img id="left_user" src="images/ghs.png" />
        </div>
        <div class="sender-msg">
          <p>
            Hii , nice to meet you !
          </p>
        </div>
      </div>
      <!---RIGHT SIDE ---->


    </div>
  </div>
</div>
</div>
<div id="__header" class="fixed-bottom msg_footer">
<img style="display: block" id="msg_user" src="images/user.svg">
<textarea id="text_message" placeholder="Write A Message..."></textarea>
<button id="send_btn"><img id="cancle" src="images/send.svg"></button>
</div>

</div>
<!---------------->

<!---
<div id="Home" class="tab home w3-animate-zoom">
  <div class="news-feed">
    <div class="poster">
      <img src="images/user2.png" /><strong
      ><a href="#">Ghs Julian</a></strong
    >
  </div>
  <div align="left" class="post_area">
    <content>
      Hello , User I'm Julian . I Am A Web Developer And Designer .
      Welcome To My Site . This Is My Social Media Web Site... < /content > < /div > < div align = "center" class = "actions" > < button name = "request_btn" type = "button" class = "action_btn" id = "like" > < img id = "like_btn" class = "like_btn" src = "images/like.svg" post_id = "10" / > < /button > < button name = "request_btn" type = "button" class = "action_btn" id = "love" > < img id = "love" src = "images/love.svg" post_id = "10" / > < /button > < button
        name = "request_btn"
        type = "button"
        class = "action_btn"
        id = "comment" > < img src = "images/comment.svg" / > < /button > < /div > < div class = "comment_area" > < div class = "commenter" > < img src = "images/user2.png" / > < input
          class = "comment_btn value"
          type = "text"
          name = "comment"
          placeholder = "Write A Comment..."
          / > < button type = "submit" class = "comment_btn" name = "comment_btn" > < img src = "images/send.svg" / > < /button > < /div > < /div > < /div>---->
<script>
/*
var like = document.querySelectorAll("#like_btn");
for (var i = 0; i < like_btn.length; i++) {
like[i].addEventListener("load", function () {
var image = this.getAttribute("like");
if (image == "Liked") {
this.src = "images/liked.png";
}
});
*/



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
/*
var love_btn = document.querySelectorAll("#love")
for (var i = 0; i < love_btn.length; i++) {
love_btn[i].addEventListener("click", function (e) {
e.preventDefault();
var post_id = this.getAttribute("post_id");
var img = this.getAttribute("src");


var form_data = new FormData();
form_data.append("love", post_id);
form_data.append("post_id", post_id);

fetch ("server/reaction.php", {
method: "POST",
body: form_data
}).then((res) => {
return res.json();
}).then((data) => {
if (data.Loved) {
this.src = "images/loved.png";
} else {
this.src = "images/like.svg";
}
});
});
}
*/
</script>
<div style="display:none" id="log_pop" class="w3-modal">

</div>


<?php
include('footer.php');
?>