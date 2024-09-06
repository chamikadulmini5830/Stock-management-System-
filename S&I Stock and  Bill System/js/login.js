function check(form)
{

if(form.userid.value == "s&isoft" && form.pwd.value == "S&i$0f!t")
{
        return true;
}
else
{
        alert("Login Error Invalid Credentials. Check your Username and Password again")
        return false;
}
}
  