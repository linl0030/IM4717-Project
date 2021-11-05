function editAdd() {
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
    document.getElementById("changeAddress").innerHTML = "Finish";
    document.getElementById("changeAddress").onclick = confirmAdd;
}

function confirmAdd() {
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
    document.getElementById("changeAddress").innerHTML = "Edit";
    document.getElementById("changeAddress").onclick = editAdd;
}

function proceed(){
    document.getElementById("edit").innerHTML = "Pay";
    document.getElementById("edit").onclick = pay;
}

function pay(){
    document.getElementById("edit").innerHTML = "Edit";
    document.getElementById("edit").onclick = history.back;
    document.getElementById("clearCart").submit();
    window.location.assign("/f32ee/IM4717-Project/Hoffice");
    window.alert("Congratulation! You have made your order!");
}