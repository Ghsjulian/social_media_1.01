function fetch_user() {
  var div = document.getElementById("list");
  var form_data = new FormData();
  form_data.append("Action", "Logout");
  fetch("server/fetch.php")
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      for (var i = 0; i < data.length; i++) {
        var html =
          '<div id="' +
          data[i].user_id +
          '" class="area"> <div class="find_friend"><img src="upload/' +
          data[i].avtar +
          '" /><strong><a href="#">' +
          data[i].user_name +
          '</a></strong><button onclick="alert("")" data="' +
          data[i].user_id +
          '" id="follow_btn" class="flw_btn">Follow</button></div></div>';
        div.innerHTML = html;
      }
    });
}

function fetchUser() {
  var form_data = new FormData();
  form_data.append("connected_people", "Fetch_User");
  fetch("server/function.php")
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      document.getElementById("connected_people").innerHTML = data;
    });
}
