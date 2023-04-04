var input = document.getElementById("search");

input.addEventListener("keyup", function (e) {
  e.preventDefault();
  var query = this.value;
  if (query.length > 0) {
    var form_data = new FormData();
    form_data.append("data", query);
    fetch("server/search.php", {
      method: "POST",
      body: form_data,
    })
      .then((res) => {
        return res.text();
      })
      .then((data) => {
        var div = document.getElementById("search_area");

        div.innerHTML = data;

        /*
        if (data.length > 0) {
          for (var i = 0; i < data.length; i++) {
            div.style.display = "block";
            avtar.src = `./upload/${data[i].user_image}`;
            f_name.innerHTML = data[i].user_name;
            btn_id = data[i].user_id;
            alert(btn_id);
          }
        }
*/
      });
  }
});
