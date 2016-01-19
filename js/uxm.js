// JavaScript source code

function toggle() {
    var ele = document.getElementById("toggleText");
    var imageEle = document.getElementById("imageDivLink");
    if (ele.style.display == "block") {
        ele.style.display = "none";
        imageEle.innerHTML = '<img class="help-caret" src="images/arrow-down.png">This is an example of displaying help using progressive disclosure.';
    }
    else {
        ele.style.display = "block";
        imageEle.innerHTML = '<img class="help-caret" src="images/arrow-up.png">This is an example of displaying help using progressive disclosure.';
    }
}

function ddlProgDisclSelect() {
    // Hide the optional questions
    var list = document.getElementById('ddlProgDiscl');
    var chosenItemText = list.value;
    if (chosenItemText == 'Other') {
        document.getElementById('txtProgDisclDDDiv').style.display = 'inline';
    }
    else {
        document.getElementById('txtProgDisclDDDiv').style.display = 'none';
        document.getElementById('txtProgDisclDD').value = '';
    }
}

function rbProgDisclSelect() {
    if (document.getElementById('rbYes').checked) {
        document.getElementById('txtProgDisclRBDiv').style.display = 'block';
    }
    else {
        document.getElementById('txtProgDisclRBDiv').style.display = 'none';
        document.getElementById('txtProgDisclRB').value = '';
    }
}

function validateLimit(obj, divID, maxchar, caller) {
    objDiv = get_object(divID);
    if (this.id) obj = this;
    var remaningChar = maxchar - trimEnter(obj.value).length;

    if (objDiv.id) {
        objDiv.innerHTML = "(" + remaningChar + " characters remaining)";
    }
    if (remaningChar < 10) {
        if (objDiv.id) {
            objDiv.style.color = '#ff0000';
        }
    }
    else {
        if (objDiv.id) {
            objDiv.style.color = '#000000';
        }
    }
    if (remaningChar <= 0) {
        obj.value = obj.value.substring(maxchar, 0);
        if (objDiv.id) {
            objDiv.innerHTML = "0 characters left";
        }
        if (caller != 'focus') {
            alert('0 characters left');
        }
        return false;
    }
    else { return true; }
}

function lostfocus(obj, divID, maxchar) {
    objDiv = get_object(divID);
    if (this.id) obj = this;
    if (objDiv.id) {
        objDiv.innerHTML = "(" + maxchar + " characters maximum)";
    }
}
function get_object(id) {
    var object = null;
    if (document.layers) {
        object = document.layers[id];
    } else if (document.all) {
        object = document.all[id];
    } else if (document.getElementById) {
        object = document.getElementById(id);
    }
    return object;
}
function trimEnter(dataStr) {
    return dataStr.replace(/(\r\n|\r|\n)/g, "");
}