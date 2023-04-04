function index() {
  var form_data = new FormData();
  form_data.append("noti", "Notification");
  fetch("server/function.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      document.getElementById("noti").innerHTML =
        "<img src='images/bell-ring.png'/>" + data;
    });
}

function msg() {
  var form_data = new FormData();
  form_data.append("noti", "Notification");
  fetch("server/function.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      document.getElementById("noti").innerHTML =
        "<img src='images/bell-ring.png'/>" + data;
    });
}
setInterval(function() {
  index();
}, 1000);

