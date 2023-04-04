<?php
include("top.php");
?>
      <!---------------->

      <center>
        <form name="myfrm" id="myfrm">
          <strong align="center" class="up_profile"> Update Profile </strong>

          <div align="center" class="info_area">
            <div class="profile_avtar">
              <img
                align="center"
                class="preview"
                id="preview"
                src="images/cmr2.png"
              />
              <input
                id="photo"
                type="file"
                name="photo"
                onchange="previewFile(this);"
                accept="image/*"
              />
            </div>
            <span id="imageErr"> </span>

            <div class="form">
              <input
                id="country"
                value=""
                type="text"
                name="country"
                placeholder="Country"
              />

              <input
                id="city"
                type="text"
                name="city"
                placeholder="City / District"
              />

              <input
                id="profession"
                type="text"
                name="profession"
                placeholder="Profession"
              />

              <input
                id="school"
                type="text"
                name="school"
                placeholder="School / College"
              />
            </div>
            <input type="submit" class="lets_go_btn" value="Continue" />
          </div>
        </form>
        <br />
      </center>
      <script src="js/jquery.min.js"></script>
      <script>
        //  IMAGE VIEWS FOR PROFILE PICTURE

        function previewFile(input) {
          var file = $("input[type=file]").get(0).files[0];
          console.log(file);
          if (file) {
            var reader = new FileReader();
            reader.onload = function () {
              $("#preview").attr("src", reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
        $(document).ready(function () {
          $("#myfrm").on("submit", function (e) {
            e.preventDefault();
            var form_data = new FormData(this);

            var country = $("#country").val();
            var city = $("#city").val();
            var profession = $("#profession").val();
            var school = $("#school").val();
            var file = $("input[type=file]").get(0).files[0];

            if (
              !file ||
              country == "" ||
              city == "" ||
              profession == "" ||
              school == ""
            ) {
              $("#imageErr").fadeIn("slow");
              $("#imageErr")
                .addClass("error")
                .html("Please Fill Out This Form");
              setTimeout(function () {
                $("#imageErr").hide();
              }, 3000);
            } else if (
              country.includes("hii") ||
              country.includes("</>") ||
              country.includes("<") ||
              country.includes(">") ||
              country.includes("/") ||
              country.includes("alert") ||
              country.includes("=") ||
              country.includes("|") ||
              country.includes("&") ||
              country.includes("?") ||
              country.includes(";") ||
              country.includes("*") ||
              country.includes("@") ||
              country.includes("(") ||
              country.includes(")") ||
              country.includes("[") ||
              country.includes("]") ||
              country.includes("{") ||
              country.includes("}") ||
              country.includes("_")
            ) {
              $("#imageErr").fadeIn("slow");
              $("#imageErr").addClass("error").html("Invalid Country Name");
              setTimeout(function () {
                $("#imageErr").hide();
              }, 3000);
            } else if (
              city.includes("hii") ||
              city.includes("</>") ||
              city.includes("<") ||
              city.includes(">") ||
              city.includes("/") ||
              city.includes("alert") ||
              city.includes("=") ||
              city.includes("|") ||
              city.includes("&") ||
              city.includes("?") ||
              city.includes(";") ||
              city.includes("*") ||
              city.includes("@") ||
              city.includes("(") ||
              city.includes(")") ||
              city.includes("[") ||
              city.includes("]") ||
              city.includes("{") ||
              city.includes("}") ||
              city.includes("_")
            ) {
              $("#imageErr").fadeIn("slow");
              $("#imageErr").addClass("error").html("Invalid city Name");
              setTimeout(function () {
                $("#imageErr").hide();
              }, 3000);
            } else if (
              profession.includes("hii") ||
              profession.includes("</>") ||
              profession.includes("<") ||
              profession.includes(">") ||
              profession.includes("/") ||
              profession.includes("alert") ||
              profession.includes("=") ||
              profession.includes("|") ||
              profession.includes("&") ||
              profession.includes("?") ||
              profession.includes(";") ||
              profession.includes("*") ||
              profession.includes("@") ||
              profession.includes("(") ||
              profession.includes(")") ||
              profession.includes("[") ||
              profession.includes("]") ||
              profession.includes("{") ||
              profession.includes("}") ||
              profession.includes("_")
            ) {
              $("#imageErr").fadeIn("slow");
              $("#imageErr").addClass("error").html("Invalid profession Name");
              setTimeout(function () {
                $("#imageErr").hide();
              }, 3000);
            } else if (
              school.includes("hii") ||
              school.includes("</>") ||
              school.includes("<") ||
              school.includes(">") ||
              school.includes("/") ||
              school.includes("alert") ||
              school.includes("=") ||
              school.includes("|") ||
              school.includes("&") ||
              school.includes("?") ||
              school.includes(";") ||
              school.includes("*") ||
              school.includes("@") ||
              school.includes("(") ||
              school.includes(")") ||
              school.includes("[") ||
              school.includes("]") ||
              school.includes("{") ||
              school.includes("}") ||
              school.includes("_")
            ) {
              $("#imageErr").fadeIn("slow");
              $("#imageErr").addClass("error").html("Invalid school Name");
              setTimeout(function () {
                $("#imageErr").hide();
              }, 3000);
            } else {
              $.ajax({
                url: "server/function.php",
                type: "POST",
                data: form_data,
                contentType: false,
                processData: false,
                success: function (data) {
                  $("#myfrm").trigger("reset");
                  if (data == "1") {
    openNav('Profile');
                  } else {
                    $("#imageErr").fadeIn("slow");
                    $("#imageErr").addClass("error").html(data);
                  }
                },
              });
            }
          });
        });
      </script>

      <!---------------->
<?php
include("footer.php");
?>