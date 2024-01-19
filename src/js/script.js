function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

function addTag() {
    var newTag = document.getElementById("newTag").value;
    if (newTag) {
        var link = document.createElement("a");
        link.href = newTag + ".php"; // タグによって遷移するページを指定
        link.appendChild(document.createTextNode(newTag));
        document.getElementById("mySidebar").insertBefore(link, document.getElementById("mySidebar").lastChild);
    }
}