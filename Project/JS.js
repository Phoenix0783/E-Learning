function check() {
        var x = document.forms["frm1"]["name"].value;
        var regname = "^[a-zA-Z0-9]{5,18}";
        if (x == null || x == "") {
                alert("Please enter a name");
                return false;
        }
        if (!x.match(regname)) {
                alert("Must contain alphanumeric character and length between 5-18");
                return false;
        }

        var x = document.forms["frm1"]["email"].value;
        var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (x == null || x == "") {
                alert("Please enter your email");
                return false;
        }
        if (!x.match(reg)) {
                alert("Please enter a valid email address");
                return false;
        }

        var x = document.forms["frm1"]["password"].value;
        var regemail = "^(?=.*[0-9])"
                + "(?=.*[a-z])(?=.*[A-Z])"
                + "(?=.*[@#$%^&+=])"
                + "(?=\\S+$).{8,20}$";
        if (x == null || x == "") {
                alert("Please enter a password");
                return false;
        }
        if (!x.match(regemail)) {
                alert("password must contain at least eight character,one number and both lowercase and uppercase letters and special characters");
                return false;
        }
}