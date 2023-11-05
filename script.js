function changeColor() {
    var username = document.getElementById("usernameInput").value;
    var colorName = document.getElementById("colorNameInput").value;
    // Set background color based on color name input
    document.body.style.backgroundColor = colorName;

    // Sending data to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "colorChange.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            // Optionally, update UI or provide feedback to the user here
        }
    };
    xhr.send("username=" + username + "&colorName=" + colorName);
}
