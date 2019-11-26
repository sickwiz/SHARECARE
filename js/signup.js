function valid() {
    var name = document.getElementById('name').value;
    var e = document.getElementById('email').value;
    var h = document.getElementById('home').value;
    if (name == "") {
        alert("name can't be empty");
        return false;
    }
    if (!name.match(/^[a-zA-z][\w]+$/)) {
        alert("name must  contain alphabets only");
        return false;
    }
    var p = document.getElementById('password').value;
    var p1 = document.getElementById('password1').value;
    if (p == "") {
        alert("password can't be empty");
        return false;
    }
    if (p.length < 5 || p.length > 20) {
        alert("password must be between the length 5-20");
        return false;
    }
    if (e == "") {
        alert("email can't be empty");
        return false;
    }
    if (h == "") {
        alert("enter hometown");
        return false;
    }
    var reg = /^[\wa-zA-z]+[0-9]+$/;
    if (!reg.test(p)) {
        alert("password must contain alphabets,digits and special symbols");
        return false;
    }
    if (!p1.match(p)) {
        alert("passwords do not match");
        return false;
    }
    var mobi = document.getElementById('mobile').value;
    if (mobi.length < 10 || mobi.lenght > 12) {
        alert('invalid mobile number');
        return false;
    }

    var cnf = confirm("Are you sure you want to signup for SHARECARE?");
    if (cnf)
        return true;
    else
        return false;

    return true;
}