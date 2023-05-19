function scheduleTime() {
  var gname = document.getElementById("gname").value;
  var gemail = document.getElementById("gemail").value;
  var gmobile = document.getElementById("gmobile").value;
  var cname = document.getElementById("cname").value;
  var agegroup = document.getElementById("agegroup").value;
  var time = document.getElementById("time").value;
  var message = document.getElementById("message").value;

  var form = new FormData();

  form.append("gname", gname);
  form.append("gemail", gemail);
  form.append("gmobile", gmobile);
  form.append("cname", cname);
  form.append("agegroup", agegroup);
  form.append("time", time);
  form.append("message", message);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("You have successfully scheduled a meeting.");
        window.location = "home.php";
      }
    }
  };

  r.open("POST", "scheduleProcess.php", true);
  r.send(form);
}

function enroll() {


  var fathername = document.getElementById("fathername").value;
  var mothername = document.getElementById("mothername").value;
  var mobile = document.getElementById("mobile").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;
  var cname = document.getElementById("cname").value;
  var gender = document.getElementById("gender").value;
  var enrollprogram = document.getElementById("enrollprogram").value;

  var form = new FormData();

  form.append("fathername", fathername);
  form.append("mothername", mothername);
  form.append("mobile", mobile);
  form.append("email", email);
  form.append("address", address);
  form.append("cname", cname);
  form.append("gender", gender);
  form.append("enrollprogram", enrollprogram);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      alert(t);
      if (t == "Success") {
        alert("You have successfully enrolled your child in Kids PreSchool.");
        window.location = "home.php";
      }
    }
  };

  r.open("POST", "enrollProcess.php", true);
  r.send(form);
}
