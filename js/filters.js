function search(){
    var filter=document.getElementById("filter").value.toUpperCase();
    var myTable=document.getElementById("myTable");
    var tr=myTable.getElementsByTagName('tr');
    for(var i=0;i<tr.length;i++){
        var td=tr[i].getElementsByTagName('td')[0];
        if(td){
            var name= td.textContent || td.innerHTML;
        if(name.toUpperCase().indexOf(filter)>-1){
            console.log(name);
            tr[i].style.display="";
        }else{
            tr[i].style.display="none";
        }
    }}
}