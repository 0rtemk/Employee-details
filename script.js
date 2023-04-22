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

function addEmployee() {
    const Name = document.getElementById("Name").value
    const Department = document.getElementById("Department").value
    const Phone = document.getElementById("Phone").value

    const params = `Name=${Name}&Department=${Department}&Phone=${Phone}`
    
    const request = new XMLHttpRequest();
    request.open("POST", "addEmployee.php", true);
    
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            getEmployee()
        }
    };
    
    request.send(params);
}

window.onload = getEmployee()

function addPopup() {
    document.getElementById("add-popup").classList.toggle("d-none")
}