function toggleList(i) {
    const targetListId = `sub-${i}`;
    const targetList = document.getElementById(targetListId);
    
    if (targetList) {
        const lists = document.querySelectorAll('.admin-sub-list');
        
        lists.forEach(list => {
            if (list === targetList) {
            list.classList.add('show');
            } else {
            list.classList.remove('show');
            }
        });
    }
}
var toogle = 0
function openNav() {
    if(toogle == 0) {
        document.getElementById("mySidenav").style.transform = "translate(-10px,0px)";
        toogle = 1;
    } else {
        document.getElementById("mySidenav").style.transform = "translate(-300px,0px)"; 
        toogle = 0;
    }   
}