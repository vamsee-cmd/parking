function search(){
    var filter=document.getElementById("filter").value.toUpperCase();
    var myTable=document.getElementById("myTable");
    var tr=myTable.getElementsByTagName('tr');
    for(var i=0;i<tr.length;i++){
        var tdname=tr[i].getElementsByTagName('td')[0];
        var tdvehicle=tr[i].getElementsByTagName('td')[1];
        if(tdname || tdvehicle){
            var name= tdname.textContent || tdname.innerHTML;
            var vehile=tdvehicle.textContent || tdvehicle.innerHTML;
        if(name.toUpperCase().indexOf(filter)>-1 || vehile.toUpperCase().indexOf(filter)>-1){
            tr[i].style.display="";
        }else{
            tr[i].style.display="none";
        }
    }}
}