var username = document.querySelector(".username");
var password = document.querySelector(".password");
var form = document.querySelector("form");
form.addEventListener("submit", function(e)
{
    e.preventDefault();
    var check = false;
    // check username/password is null
    if (username.value =='')
    {
        alert("Missing username!");
    }

    else if (password.value == '')
    {
        alert("Missing password!");
    }
    else if (!check)
    {
        // check username
        const username_regex = /^[a-zA-Z0-9_.]+$/
        if (!username_regex.test(username.value))
        {
            alert("Username must not contain special characters beside - and _");
        }
    }
})
