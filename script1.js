
const profile = document.getElementById("profile");
const profile_menu = document.getElementById("profile_menu");

profile.onclick= function()
{
    if(profile_menu.style.display == "" || profile_menu.style.display == "none")
    {
        profile_menu.style.display = "block";
    }

    else
    {
        profile_menu.style.display = "none";
    }
}