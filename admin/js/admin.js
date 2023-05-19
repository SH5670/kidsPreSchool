function changeView() {
  var signin = document.getElementById("signin");
  var forgot = document.getElementById("forgot-pw");

  signin.classList.toggle("d-none");
  forgot.classList.toggle("d-none");
}

function loginAdmin() {
  var user = document.getElementById("loginUser").value;
  var password = document.getElementById("loginPassword").value;

  form = new FormData();

  form.append("user", user);
  form.append("pw", password);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        window.location = "adminDashboard.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "adminLoginProcess.php", true);
  r.send(form);
}

function addSubadmin() {
  var user = document.getElementById("u").value;
  var name = document.getElementById("n").value;
  var email = document.getElementById("e").value;
  var mobile = document.getElementById("m").value;
  var user = document.getElementById("u").value;
  var password = document.getElementById("p").value;

  form = new FormData();

  form.append("user", user);
  form.append("name", name);
  form.append("email", email);
  form.append("mobile", mobile);
  form.append("pw", password);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Subadmin added Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "addSubadminsProcess.php", true);
  r.send(form);
}
function updateSubadmin(id) {
  var user = document.getElementById("u").value;
  var name = document.getElementById("n").value;
  var email = document.getElementById("e").value;
  var mobile = document.getElementById("m").value;
  var user = document.getElementById("u").value;
  var password = document.getElementById("p").value;

  form = new FormData();

  form.append("user", user);
  form.append("name", name);
  form.append("email", email);
  form.append("mobile", mobile);
  form.append("pw", password);
  form.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Subadmin updated Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "updateSubadminsProcess.php", true);
  r.send(form);
}
function deleteSubadmin(id) {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Subadmin deleted Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "deleteSubadminProcess.php?id=" + id, true);
  r.send();
}

function addTeacher() {
  var name = document.getElementById("n").value;
  var email = document.getElementById("e").value;
  var mobile = document.getElementById("m").value;
  var gender = document.getElementById("g").value;

  form = new FormData();

  form.append("name", name);
  form.append("email", email);
  form.append("mobile", mobile);
  form.append("gender", gender);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Teacher added Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "addTeacherProcess.php", true);
  r.send(form);
}
function updateTeacher(id) {
  var name = document.getElementById("n").value;
  var email = document.getElementById("e").value;
  var mobile = document.getElementById("m").value;

  form = new FormData();

  form.append("name", name);
  form.append("email", email);
  form.append("mobile", mobile);
  form.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Teacher updated Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "updateTeacherProcess.php", true);
  r.send(form);
}
function deleteTeacher(id) {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Teacher deleted Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "deleteTeacherProcess.php?id=" + id, true);
  r.send();
}

function addStudent() {
  var f = document.getElementById("f").value;
  var mn = document.getElementById("mn").value;
  var e = document.getElementById("e").value;
  var m = document.getElementById("m").value;
  var a = document.getElementById("a").value;
  var s = document.getElementById("s").value;
  var g = document.getElementById("g").value;

  form = new FormData();

  form.append("fname", f);
  form.append("mname", mn);
  form.append("email", e);
  form.append("mobile", m);
  form.append("address", a);
  form.append("sname", s);
  form.append("gender", g);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Student added Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "addStudentProcess.php", true);
  r.send(form);
}
function updateStudent(id) {
  var f = document.getElementById("f").value;
  var mn = document.getElementById("mn").value;
  var e = document.getElementById("e").value;
  var m = document.getElementById("m").value;
  var a = document.getElementById("a").value;
  var s = document.getElementById("s").value;

  form = new FormData();

  form.append("fname", f);
  form.append("mname", mn);
  form.append("email", e);
  form.append("mobile", m);
  form.append("address", a);
  form.append("sname", s);
  form.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Student updated Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "updateStudentsProcess.php", true);
  r.send(form);
}
function deleteStudent(id) {
  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Student deleted Successfully.");
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "deleteStudentProcess.php?id=" + id, true);
  r.send();
}

function submit(id) {
  var status = document.getElementById("status").value;
  var message = document.getElementById("message").value;

  form = new FormData();

  form.append("status", status);
  form.append("message", message);
  form.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        var m = document.getElementById("takeAction");
        var bm = new bootstrap.Modal(m);
        bm.hide();
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "takeAction.php", true);
  r.send(form);
}

function updateVistors(id) {
  var state = document.getElementById("state").value;
  var remarks = document.getElementById("remarks").value;

  form = new FormData();

  form.append("state", state);
  form.append("remarks", remarks);
  form.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        var m = document.getElementById("myModal");
        var bs = new bootstrap.Modal(m);
        bs.hide();
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "visitorsStatusProcess.php", true);
  r.send(form);
}

function updateAdimin(id) {
  var name = document.getElementById("n").value;
  var email = document.getElementById("e").value;
  var mobile = document.getElementById("m").value;

  form = new FormData();

  form.append("name", name);
  form.append("email", email);
  form.append("mobile", mobile);
  form.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "updateProfileProcess.php", true);
  r.send(form);
}
function changePassword(id) {

  var cpassword = document.getElementById("cpw").value;
  var npassword1 = document.getElementById("npw1").value;
  var npassword2 = document.getElementById("npw2").value;

  form = new FormData();

  form.append("cpw", cpassword);
  form.append("npw1", npassword1);
  form.append("npw2", npassword2);
  form.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "changePasswordProcess.php", true);
  r.send(form);
}
