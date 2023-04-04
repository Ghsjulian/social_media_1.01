function fetchPost() {
  fetch("server/reaction.php", {
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

fetchPost();
