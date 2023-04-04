"use strict";

function check(value) {
  var post = value.trim().toLowerCase();
  if (
    post.includes("</>") ||
    post.includes("<") ||
    post.includes(">") ||
    post.includes("/") ||
    post.includes("alert") ||
    post.includes("=") ||
    post.includes("|") ||
    post.includes("&") ||
    post.includes("?") ||
    post.includes(";") ||
    post.includes("*") ||
    post.includes("@") ||
    post.includes("(") ||
    post.includes(")") ||
    post.includes("[") ||
    post.includes("]") ||
    post.includes("{") ||
    post.includes("}") ||
    post.includes("_") ||
    post.includes("hot") ||
    post.includes("sex") ||
    post.includes("sexy") ||
    post.includes("fucking") ||
    post.includes("fuck") ||
    post.includes("pussy") ||
    post.includes("bobs") ||
    post.includes("sucking") ||
    post.includes("hot girl") ||
    post.includes("nonsense")
  ) {
    return false;
  } else {
    return true;
  }
}

var flw_btn = document.querySelectorAll("#follow_btn");

for (var i = 0; i < flw_btn.length; i++) {
  flw_btn[i].addEventListener("click", function (e) {
    e.preventDefault();
    var user_id = this.getAttribute("data");
    this.textContent = "Following";
    this.classList.add("followed");
    var form_data = new FormData();

    form_data.append("data", user_id);
    fetch("server/follow.php", {
      method: "POST",
      body: form_data,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        setTimeout(function () {
          document.getElementById(user_id).innerHTML = "";
          this.innerHTML = "";
          fetch_user();
        }, 1000);
      });
  });
}

/*_________________________________
      ACCEPT FOLLOWING 
_________________________________*/

var noti_btn = document.querySelectorAll("#noti_btn");

for (var i = 0; i < noti_btn.length; i++) {
  noti_btn[i].addEventListener("click", function (e) {
    e.preventDefault();
    var sender_id = this.getAttribute("uid");
    var sender_name = this.getAttribute("name");
    var sender_img = this.getAttribute("img");
    var tag = this;
    tag.innerHTML = "";
    pop(sender_name, sender_img, sender_id, noti_btn);
  });
}

function hide(id) {
  document.getElementById(id).innerHTML = "";
}

function pop(name, img, uid, div) {
  document.getElementById("pop_page").style.display = "block";

  document.getElementById("pop_page").innerHTML = `
<div id="" class="popup w3-animate-top" align="center">
      <img src="upload/${img}" />
    <br />
  <h3>${name}</h3>
  <br />
<strong> Do you want to Accept ? </strong><br>
<button onclick="accept()" type="submit" id="__submit_btn" sender_id="${uid}" sender_div="${div}">Accept</button>
<button onclick="CanclePopup()" id="__cancle_btn">Cancel</button>
</div>
`;
}

function CanclePopup() {
  document.getElementById("pop_page").style.display = "none";
}

function accept() {
  var sender_id = document
    .getElementById("__submit_btn")
    .getAttribute("sender_id");

  document.getElementById("__submit_btn").textContent = "Accepted";

  var form_data = new FormData();

  form_data.append("accept", sender_id);
  fetch("server/follow.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      CanclePopup();
    });
}

function popWindow() {
  document.getElementById("pop_page").style.display = "block";
}

function logout() {
  var form_data = new FormData();
  form_data.append("Action", "Logout");
  fetch("database/logout.php")
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      if (data == "Logout") {
        window.location.href = "login.php";
      }
    });
}

function more() {
  alert("I'll add here share button");
}

function cancel_comment() {
  document.getElementById("comment_page").style.display = "none";
}

function error(msg) {
  document.body.style.backgroundColor = "#0101011a";
  document.getElementById("log_pop").style.display = "block";
  document.getElementById("log_pop").innerHTML = `
  <div id="modal_page" class="w3-container">
<div id="" class="log_pop" align="center">
<img src="images/warning.png" />
<br>
<strong id="err"> ${msg}</strong>
<center>
<button onclick="ClosError()" type="submit" id="okBtn" sender_id="06">OK</button>
</center>
</div>
</div>
  `;
}
function ClosError() {
  document.getElementById("log_pop").style.display = "none";
}

var comment = document.querySelectorAll("#comment");
for (var i = 0; i < comment.length; i++) {
  comment[i].addEventListener("click", function (e) {
    e.preventDefault();
    var post_id = this.getAttribute("post_id");
    var poster_id = this.getAttribute("poster_id");
    var poster_name = this.getAttribute("poster_name");
    var poster_img = this.getAttribute("poster_img");

    document.getElementById("comment_page").style.display = "block";

    var form_data = new FormData();
    form_data.append("fetch_comment", "comment");
    form_data.append("post-id", post_id);
    fetch("server/reaction.php", {
      method: "POST",
      body: form_data,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        document.getElementById("show_comments").innerHTML = data;
      });
  });
}

function getComments(id) {
  var form_data = new FormData();
  form_data.append("count_comment", "comment");
  form_data.append("postid", id);
  fetch("server/reaction.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      var newdata = data;
    });
}

function sendComment(id) {
  var comment = document.getElementById("ghs_" + id).value;

  var form_data = new FormData();
  form_data.append("comment", comment);

  form_data.append("post-id", id);
  if (comment == "") {
    error("Please Write A Comment");
  } else if (check(comment)) {
    document.getElementById("ghs_" + id).value = "";
    fetch("server/reaction.php", {
      method: "POST",
      body: form_data,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        getComments(id);
        document.getElementById("comment_page").style.display = "block";
        document.getElementById("show_comments").innerHTML = data;
      });
  } else {
    document.getElementById("ghs_" + id).value = "";
    error("Don't Use Bad Words !");
  }
}

function loadConnected() {
  var form_data = new FormData();
  form_data.append("connected_people", "Connect");

  fetch("server/function.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      document.getElementById("connected_people").innerHTML = data;
    });
}
loadConnected();
//loadConnected();

function Chatbox(toId) {
  var u_id = toId;
  document.getElementById("chatbox").style.display = "block";
  document.getElementById("Messages").style.display = "none";
  var form_data = new FormData();
  form_data.append("_people", "Connect");
  form_data.append("chat_id", u_id);

  setInterval(function () {
    //loadConnected();
    var u_id = document.getElementById("hidden_chat_id").value;
    fetchMessage(u_id);
  }, 1000);

  fetch("server/function.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      document.getElementById("chatbox").innerHTML = data;
      fetchMessage(toId);
    });
}

function closeChat() {
  document.getElementById("Messages").style.display = "block";
  document.getElementById("chatbox").style.display = "none";
}

function SendMessage() {
  var message = document.getElementById("text_message").value;
  var u_id = document.getElementById("hidden_chat_id").value;

  var form_data = new FormData();
  form_data.append("sendText", message);
  form_data.append("Toid", u_id);
  form_data.append("send_message", "Sending Messages");
  if (message == "") {
    document.getElementById("text_message").value = "";
    alert("Please Write A Message");
  } else if (check(message)) {
    fetch("server/function.php", {
      method: "POST",
      body: form_data,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        document.getElementById("text_message").focus();
        document.getElementById("text_message").value = "";
        var div = document.getElementById("msg-page");
        fetchMessage(u_id);
      });
  } else {
    document.getElementById("text_message").value = "";
    alert("Don't Use Bad Words !");
  }
}

function fetchMessage(u_id) {
  var form_data = new FormData();
  form_data.append("fetchMessage", " Message");
  form_data.append("toid", u_id);

  fetch("server/function.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      document.getElementById("msg-page").innerHTML = data;
    });
}

function fetchUser() {
  var form_data = new FormData();
  form_data.append("Message_Count", "Message_Count");

  fetch("server/function.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      alert(data);
    });
}

function scrolling() {
  var div = document.getElementsByClassName("sender-chats");
  div.scrollTo(0, div.scrollHeight);
}

function errorMessage(msg) {
  document.body.style.backgroundColor = "#0101011a";
  document.getElementById("pop_page").style.display = "block";
  document.getElementById("pop_page").innerHTML = msg;
}

function Allmsg(id) {}

setInterval(function () {
  //loadConnected();
}, 1000);
