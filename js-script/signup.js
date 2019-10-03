function valid()
{
    var name =document.getElementById('name').value;
    var e= document.getElementById('email').value;
    var h=document.getElementById('home').value;
   if(name=="")
    {
        alert("name can't be empty");
    return false;
    }
   if(!name.match(/^[a-zA-z]+$/))
    {
        alert("name must be contain alphabets only");
        return false;
    }
    var p = document.getElementById('password').value;
    if(p=="")
    {
        alert("password can't be empty");
        return false;
    }
    if(p.length<5||p.length>20)
    {
        alert("password must be between the length 5-20");
        return false;
    }
    if(e=="")
    {
        alert("email can't be empty");
    return false;
    }
    if(h=="")
    {
        alert("enter hometown");
    return false;
    }
    var reg=/^[a-zA-z]+[0-9]+$/;
   if(!reg.test(p))
    {
        alert("password must contain alphabets,digits and special symbols");
        return false;
    }
   
}