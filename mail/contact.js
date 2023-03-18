$("#contact").submit(function () {
  var name = $("#name").val();
  var email = $("#email").val();
  var subject = $("#subject").val();
  var message = $("#message").val();
  var dataString =
    "name=" +
    name +
    "&email=" +
    email +
    "&subject=" +
    subject +
    "&message=" +
    message;
  $.ajax({
    type: "POST",
    url: "save.php",
    data: dataString,
    cache: false,
    success: function () {
      $("#contact_form").fadeOut(300);
      $("#notice").fadeIn(400);
    },
  });
  return false;
});
