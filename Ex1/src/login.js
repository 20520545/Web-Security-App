var username = document.querySelector(".username");
var password = document.querySelector(".password");
var form = document.querySelector("form");
form.addEventListener("submit", function(e) {
    e.preventDefault();
    var check = false;
    // check username/password is null
    if (username.value =='') 
    {
        alert("Missing username!");
    } else if (password.value == '') 
    {
        alert("Missing password!");
    } 
    else if (!check) 
    {
        // check username
        const username_regex = /^[a-zA-Z0-9._-]+$/;
        if (!username_regex.test(username.value)) 
        {
            alert("Username must not contain special characters beside - and _!. Never");
        } 
        else 
        {
             // send form data to server
             var xhr = new XMLHttpRequest();
             xhr.open("POST", "login.php");
             xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             xhr.onreadystatechange = function() {
                 if (xhr.readyState == XMLHttpRequest.DONE) 
                 {
                     if (xhr.status == 200) {
                         // Load the HTML response in the current page
                         document.documentElement.innerHTML = xhr.responseText;
                     } 
                     else {
                         // Handle error response
                         alert("Request failed.  Returned status of " + xhr.status);
                     }
                 }
             };
             xhr.send("txtUsername=" + username.value + "&txtPassword=" + password.value);
        }
    }
}
);
