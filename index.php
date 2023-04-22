<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <title>Employee details</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="employee-h">Employee <strong>details</strong></div>
            <button class="employee-btn" onclick="addPopup()">Add new</button>
        </div>
        <div id="app"></div>
    </div>

    <div class="add-popup d-none" id="add-popup">
        <div class="add-popup-content">
            <div class="row-add">
                <div class="employee-h">Добавить пользователя</div>
                <button class="btn-exit" onclick="addPopup()">Х</button>
            </div>
            <div class="text-field">
                <div class="text-field__block">
                    <label class="text-field__label" for="Name">Name</label>
                    <input class="text-field__input" type="text" id="Name" name="Name" 
                    value=""></input>
                </div>
                <div class="text-field__block">
                    <label class="text-field__label" for="Name">Department</label>
                    <input class="text-field__input" type="text" id="Department" name="Department" 
                    value=""></input>
                </div>
                <div class="text-field__block">
                    <label class="text-field__label" for="Phone">Phone</label>
                    <input class="text-field__input" type="text" id="Phone" name="Phone" 
                    value=""></input>
                </div>
            </div>
            <button class="btn-add" onclick="addEmployee(), addPopup()">Сохранить</button>
        </div>
    </div>
</body>

</html>