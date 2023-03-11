function KtraForm()
{
    event.preventDefault();
    var TaiKhoan = document.getElementById("username").value;
    var MatKhau = document.getElementById("password").value;

    var DieuKien = /^[a-zA-Z0-9_-]*$/;

    if(TaiKhoan=="" || MatKhau=="")
    {
        alert("Không được để trống tài khoản hoặc mật khẩu");
    }
    else if((TaiKhoan.includes(" ")) == true)
    {
        alert("Tài khoản không được chứa khoản trắng");
    }
    else if (DieuKien.test(TaiKhoan) == false)
    {
        alert("Không được chứa ký tự đặc biệt trừ - và _");
    }
}
