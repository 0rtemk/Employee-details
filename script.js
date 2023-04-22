function getEmployee() {
    const request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("app").innerHTML = this.responseText;
        }
    };
    request.open("GET", "getEmployee.php");
    request.send();
}

window.onload = getEmployee()