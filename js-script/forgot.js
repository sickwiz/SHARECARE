function valid()
        {
            var answer=document.getElementById('ans').value;
            if(answer=="")
            {
                alert('please enter the security answer');
            }
            var p = document.getElementById('np').value;
    var p1= document.getElementById('np1').value;
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
    var reg=/^[a-zA-z]+[0-9]+$/;
    if(!reg.test(p))
     {
         alert("password must contain alphabets,digits and special symbols");
         return false;
     }
    if(!p1.match(p))
    {
      alert("passwords do not match");
        return false;
    }
    var cnf=confirm("Are you sure you want to change your password?");
    if(cnf)
    return true;
    else
    return false;
           return true;
    }