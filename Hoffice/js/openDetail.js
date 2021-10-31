function submit(target) {
    const abs_path = target.children[0].src;
    const path = abs_path.split("Hoffice/")[1];
    document.getElementById("imgSrc").setAttribute("value", path);
    console.log(document.getElementById("imgSrc").value);
    document.getElementById("submit").submit();
}

function changeColor($num){
    const curPath = document.getElementById("mainImg").src;
    const relPath = curPath.split("Hoffice/")[1];
    //dirPath is the color to be directed
    const dirPath1 = relPath.substr(0,15);
    const dirPath2 = relPath.substr(16,4);
    const finalPath = dirPath1.concat($num).concat(dirPath2);
    console.log(finalPath);
    document.getElementById("color").setAttribute("value", finalPath);
    document.getElementById("changeColor").submit();
}

