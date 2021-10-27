function editProfile() {
    var text = document.getElementById("name");
    var val = text.innerHTML;
    text.innerHTML = "<input type = 'text' id = n value=" + val + ">"
    // + "<input type='button' id='btn_2' data-key='2' value='confirm' onclick='confirm()'>"
    var text1 = document.getElementById("birthDate");
    var val1 = text1.innerHTML;
    text1.innerHTML = "<input type = 'date' id = n1 value=" + val1 + ">"

    var text2 = document.getElementById("gender");
    var val2 = text2.innerHTML;
    text2.innerHTML = "<select id = n2><option value=\"Male\">Male</option><option value=\"Female\">Female</option></select>"

    var text3 = document.getElementById("phone");
    var val3 = text3.innerHTML;
    text3.innerHTML = "<input type = 'text' id = n3 value=" + val3 + ">"

    document.getElementById("editProfile").innerHTML = "Finish";
    document.getElementById("editProfile").onclick = confirmProfile;
    // document.getElementById("editProfile").onclick = confirm;
}

// function cancel(){
//     var text = document.getElementById("name");
//     var val = text.innerHTML;
//     document.getElementById("btn_1").addEventListener("click",function(){
//         text.innerHTML = val;
//     });
// }

function confirmProfile(e) {
    const text = document.getElementById("name");
    var target = e.target;
    var input = document.getElementById("n");
    text.innerHTML = input.value;

    var text1 = document.getElementById("birthDate");
    var input1 = document.getElementById("n1");
    text1.innerHTML = input1.value;

    var text2 = document.getElementById("gender");
    var input2 = document.getElementById("n2");
    text2.innerHTML = input2.value;

    var text3 = document.getElementById("phone");
    var input3 = document.getElementById("n3");
    text3.innerHTML = input3.value;
    // updatefile(target.dataset.key, input.value)
    document.getElementById("editProfile").innerHTML = "Edit";
    document.getElementById("editProfile").onclick = editProfile;

}


function editAddress() {
    let val;
    const addNameArr = document.getElementsByClassName("addName");
    for (let i = 0; i < addNameArr.length; i++) {
        val = addNameArr[i].innerHTML;
        addNameArr[i].innerHTML = "<input type = 'text' id ='addInName" + i + "' value='" + val + "'>"
    }

    const addPhoneArr = document.getElementsByClassName("addPhone");
    for (let i = 0; i < addPhoneArr.length; i++) {
        val = addPhoneArr[i].innerHTML;
        addPhoneArr[i].innerHTML = "<input type = 'text' id ='addInPhone" + i + "' value='" + val + "'>"
    }

    const addDetailArr = document.getElementsByClassName("addDetail");
    for (let i = 0; i < addDetailArr.length; i++) {
        val = addDetailArr[i].innerHTML;
        addDetailArr[i].innerHTML = "<input type = 'text' id ='addInDetail" + i + "' value='" + val + "'>"
    }
    document.getElementById("editAddress").innerHTML = "Finish";
    document.getElementById("editAddress").onclick = confirmAddress;
}

function confirmAddress() {
    let val;
    let input;
    const addNameArr = document.getElementsByClassName("addName");
    for (let i = 0; i < addNameArr.length; i++) {
        input = addNameArr[i];
        val = document.getElementById("addInName"+ i);
        input.innerHTML = val.value;
    }

    const addPhoneArr = document.getElementsByClassName("addPhone");
    for (let i = 0; i < addPhoneArr.length; i++) {
        input = addPhoneArr[i];
        val = document.getElementById("addInPhone"+ i);
        input.innerHTML = val.value;
    }

    const addDetailArr = document.getElementsByClassName("addDetail");
    for (let i = 0; i < addDetailArr.length; i++) {
        input = addDetailArr[i];
        val = document.getElementById("addInDetail"+ i);
        input.innerHTML = val.value;
    }
    // updatefile(target.dataset.key, input.value)
    document.getElementById("editAddress").innerHTML = "Edit";
    document.getElementById("editAddress").onclick = editAddress;
}

function addAddress(){

}

function editPayment(){
    let val;
    const cardNoArr = document.getElementsByClassName("cardNo");
    for (let i = 0; i < cardNoArr.length; i++) {
        val = cardNoArr[i].innerHTML;
        cardNoArr[i].innerHTML = "<input type = 'text' id ='cardInNo" + i + "' value='" + val + "'>"
    }

    document.getElementById("editPayment").innerHTML = "Finish";
    document.getElementById("editPayment").onclick = confirmPayment;
}

function confirmPayment(){
    const cardNoArr = document.getElementsByClassName("cardNo");
    for (let i = 0; i < cardNoArr.length; i++) {
        const input = cardNoArr[i];
        const val = document.getElementById("cardInNo"+ i);
        input.innerHTML = val.value;
    }

    document.getElementById("editPayment").innerHTML = "Edit";
    document.getElementById("editPayment").onclick = editPayment;
}

function editPassword(){
    const newPass = document.getElementById("newPassIn");
    const confirmPass = document.getElementById("confirmPassIn");

    newPass.removeAttribute("disabled");
    confirmPass.removeAttribute("disabled");

    document.getElementById("editPassword").innerHTML = "Finish";
    document.getElementById("editPassword").onclick = confirmPassword;
}

function confirmPassword(){
    const newPass = document.getElementById("newPassIn");
    const confirmPass = document.getElementById("confirmPassIn");

    newPass.setAttribute("value", newPass.value);
    confirmPass.setAttribute("value", confirmPass.value);

    newPass.setAttribute("disabled", "");
    confirmPass.setAttribute("disabled", "");

    document.getElementById("editPassword").innerHTML = "Edit";
    document.getElementById("editPassword").onclick = editPassword;
}
