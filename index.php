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
            <button class="employee-btn" onclick="displayPopup('add-popup')">Add new</button>
        </div>
        <div id="app"></div>
    </div>

    <div class="add-popup d-none" id="add-popup">
        <div class="add-popup-content">
            <div class="row-add">
                <div class="employee-h">Добавить пользователя</div>
                <button class="btn-exit" onclick="displayPopup('add-popup')">Х</button>
            </div>
            <form onsubmit="addSubmit(event)">
                <div class="text-field">
                    <div class="text-field__block">
                        <label class="text-field__label" for="Name">Name</label>
                        <input class="text-field__input" type="text" id="Name" 
                            name="Name" value="" pattern="[A-Za-zА-Яа-яЁё]{2,}" required 
                            title="-Поле не должно быть пустым &#013;-Минимум 2 символа &#013;-Только буквы кириллицы и латиницы">
                        </input>
                    </div>
                    <div class="text-field__block">
                        <label class="text-field__label" for="Name">Department</label>
                        <input class="text-field__input" type="text" id="Department" 
                            name="Department" value="" pattern="[A-Za-zА-Яа-яЁё]{6,}" required 
                            title="-Поле не должно быть пустым &#013;-Минимум 6 символов &#013;-Только буквы кириллицы и латиницы">
                        </input>
                    </div>
                    <div class="text-field__block">
                        <label class="text-field__label" for="Phone">Phone</label>
                        <input class="text-field__input" type="text" id="Phone" 
                            name="Phone" value="" pattern="^(\+7|8) \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}$" required 
                            title="-Поле не должно быть пустым &#013;-запись формата '+7 (XXX) XXX-XX-XX' &#013;-запись формата '8 (XXX) XXX-XX-XX'">
                        </input>
                    </div>
                </div>
                <button type="submit" class="btn-add">Сохранить</button>
            </form>
        </div>
    </div>

    <div class="add-popup d-none" id="update-popup">
        <div class="add-popup-content">
            <div class="row-add">
                <div class="employee-h">Редактировать пользователя</div>
                <button class="btn-exit" onclick="displayPopup('update-popup')">Х</button>
            </div>
            <form onsubmit="updateSubmit(event)">
                <div class="text-field">
                    <div class="text-field__block">
                        <label class="text-field__label" for="UpdateName">Name</label>
                        <input class="text-field__input" type="text" id="UpdateName" 
                            name="UpdateName" value="" pattern="[A-Za-zА-Яа-яЁё]{2,}" required 
                            title="-Поле не должно быть пустым &#013;-Минимум 2 символа &#013;-Только буквы кириллицы и латиницы">
                        </input>
                    </div>
                    <div class="text-field__block">
                        <label class="text-field__label" for="UpdateName">Department</label>
                        <input class="text-field__input" type="text" id="UpdateDepartment" 
                            name="UpdateDepartment" value="" pattern="[A-Za-zА-Яа-яЁё]{6,}" required 
                            title="-Поле не должно быть пустым &#013;-Минимум 6 символов &#013;-Только буквы кириллицы и латиницы">
                        </input>
                    </div>
                    <div class="text-field__block">
                        <label class="text-field__label" for="UpdatePhone">Phone</label>
                        <input class="text-field__input" type="text" id="UpdatePhone"
                            name="UpdatePhone" value="" pattern="^(\+7|8) \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}$" required 
                            title="-Поле не должно быть пустым &#013;-запись формата '+7 (XXX) XXX-XX-XX' &#013;-запись формата '8 (XXX) XXX-XX-XX'">
                        </input>
                    </div>
                </div>
                <button type="submit" class="btn-add" id="UpdateButton" value="">Сохранить</button>
            </form>
        </div>
    </div>

    <div class="add-popup d-none" id="delete-popup">
        <div class="delete-popup-content">
            <div class="employee-h2">Вы точно хотите удалить этот элемент?</div>
            <div class="pad">
                <button class="btn-delete" onclick="deleteEmployee(this.value), displayPopup('delete-popup')" id="DeleteButton" value="">Удалить</button>
                <button class="btn-leave" onclick="displayPopup('delete-popup')">Отмена</button>
            </div>
        </div>
    </div>
</body>

</html>