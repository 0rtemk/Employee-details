let widgetId1;
let widgetId2;

function onloadCallback(){
	const key = '6Ldc5a4lAAAAALuScAYwmFP0gA1GWErZyp0hoEEG';
	widgetId1 = grecaptcha.render('recaptcha-1', {
		'sitekey': key
	});
	widgetId2 = grecaptcha.render('recaptcha-2', {
		'sitekey': key
	});
};

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

    const params = `Name=${Name}&Department=${Department}&Phone=${encodeURIComponent(Phone)}`
    
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

function Update(Id) {
    displayPopup('update-popup')

    const request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const res = this.responseText.split(",")

            document.getElementById("UpdateButton").value = res[0]
            document.getElementById("UpdateName").value = res[1]
            document.getElementById("UpdateDepartment").value = res[2]
            document.getElementById("UpdatePhone").value = res[3]
        }
    };
    request.open("GET", "updateEmployee.php?ID=" + Id);
    request.send();
}

function updateEmployee(Id) {
    const Name = document.getElementById("UpdateName").value
    const Department = document.getElementById("UpdateDepartment").value
    const Phone = document.getElementById("UpdatePhone").value

    const params = `ID=${Id}&Name=${Name}&Department=${Department}&Phone=${encodeURIComponent(Phone)}`
    
    const request = new XMLHttpRequest();
    request.open("PUT", "updateEmployee.php", true);
    
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            getEmployee()
        }
    };
    
    request.send(params);
}

function deleteEmployee(Id){
    const request = new XMLHttpRequest();
    request.open("DELETE", "deleteEmployee.php", true);
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            getEmployee()
        }
    };

    request.send("ID=" + Id);
}

window.onload = getEmployee()

function displayPopup(elemId) {
    document.getElementById(elemId).classList.toggle("d-none")
}

function Delete(Id) {
    displayPopup('delete-popup')
    document.getElementById('DeleteButton').value = Id
}

function addSubmit(event) {
    event.preventDefault()

    const response = grecaptcha.getResponse(widgetId1);
    const addRecapchError = document.getElementById('add-recapch-error')

	if (response.length == 0) {
        addRecapchError.innerHTML = 'Вы не прошли проверку CAPTCHA, вы робот?'
		return false;
	} else {
        addRecapchError.innerHTML = ''
        grecaptcha.reset(widgetId1);

        addEmployee()
        displayPopup('add-popup')
    }
}

function updateSubmit(event) {
    event.preventDefault()

    const response = grecaptcha.getResponse(widgetId2);
    const updateRecapchError = document.getElementById('update-recapch-error')

	if (response.length == 0) {
        updateRecapchError.innerHTML = 'Вы не прошли проверку CAPTCHA, вы робот?'
		return false;
	} else {
        updateRecapchError.innerHTML = ''
        grecaptcha.reset(widgetId2);
        
        updateEmployee(document.getElementById('UpdateButton').value)
        displayPopup('update-popup')
    }
}