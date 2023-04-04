$(".page").click(function (e) {
  e.preventDefault();
  $(".page").addClass("active");
  $(".page").removeClass("active");
  $(this).removeClass("active").addClass("active");
});

function getUser(id) {
  var form_data = new FormData();
  form_data.append("data", id);
  fetch("server/getUser.php", {
    method: "POST",
    body: form_data,
  })
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      var div = document.getElementById("User");

      div.innerHTML = `
<center><br/>
  <div class="ghs_profile">
    <img src="upload/${data[0].avtar}" /><br />
<strong>${data[0].user_name}</strong>
<h3>${data[0].profession}</h3>

<div class="social-links mt-3 text-center">
  <center>
    <a href="#" class="twitter"
      ><i class="bx bxl-twitter">t</i></a
    >
    <a href="#" class="facebook"
      ><i class="bx bxl-facebook">f</i></a
    >
    <a href="#" class="instagram"
      ><i class="bx bxl-instagram">i</i></a
    >
    <a href="#" class="google-plus"
      ><i class="bx bxl-skype">s</i></a
    >
    <a href="#" class="linkedin"
      ><i class="bx bxl-linkedin">l</i></a
    >
  </center>
</div>
<hr />
<button class="${data[0].user_status}" onclick="fetch_user()" id="action_btn " to="/profile" data="<?php echo $info['user_id'];
?>">${data[0].user_s}</button>
<button id="action_btn" data="<?php echo $info['user_id']; ?>">Message</button>
<button onclick="alert('Nothing')" id="action_btn">More</button>

<h5>About Info : </h5>

<ul>
<li>Profession : ${data[0].profession}</li>
<li>School/College : ${data[0].school}</li>
<li>City : ${data[0].city}</li>
<li>Country : ${data[0].country}</li>
<!---<li>Birthday : 04 January 2003</li>--->
</ul>
</div>
</center>
`;
    });
}

function userProfile(id) {
  //openNav("User");
  getUser(id);
  document.getElementById("People").style.display = "none";
  document.getElementById("Home").style.display = "none";
  document.getElementById("User").style.display = "block";
  document.getElementById("chatbox").style.display = "none";
}
openNav("Home");
function openNav(nav) {
  if (nav == "User") {
    var link = document.getElementById("f_link");
    for (let i = 0; i < link.length; i++) {
      link[i].addEventListener("click", function (e) {
        e.preventDefault();
      });
    }
    // user();
  }
  var i;
  var x = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(nav).style.display = "block";
}
