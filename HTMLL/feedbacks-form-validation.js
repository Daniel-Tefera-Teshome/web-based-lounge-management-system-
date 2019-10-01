function formValidation()
{
var fname1 = document.registration.fname;
var lname1 = document.registration.lname;
var udepartment = document.registration.Department;
if(fname_validation(fname1,5,12))
{
if(lname_validation(lname1,5,12))
{
if(departmentselect(udepartment))
{

}
}
}
return false;

} 
function fname_validation(fname1,mx,my)
{
var fname1_len = fname1.value.length;
if (fname1_len == 0 || fname1_len >= my || fname1_len < mx)
{
alert("first name should not be empty / length be between "+mx+" to "+my);
fname1.focus();
return false;
}
return true;
//fname1.focus();
}
function lname_validation(lname1,hx,hy)
{
var lname1_len = lname1.value.length;
if (lname1_len == 0 || lname1_len >= hy || lname1_len < hx)
{
alert("Last name should not be empty / length be between "+hx+" to "+hy);
lname1.focus();
return false;
}
return true;
}
function Departmentselect(udepartment)
{
if(udepartment.value == "Default")
{
alert("Select your Department from the list");
udepartment.focus();
return false;
}
else
{
return true;
}
}


