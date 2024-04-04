<?php
    include_once '../load/load.php';
    get_file('meta');
    ?>
    <div class="nav justify-content-end">
        <select name="shift" id="shift-get" class="m-3" onchange="show_name(this.value)" required>
            <option value="">select...</option>
            <option value="M">Morning</option>
            <option value="E">Evening</option>
            <option value="all">M/E</option>
        </select>
    </div>
<div class="container my-5" id="shift">
<script>
    function show_name(str){
        if(str.length == 0){
            document.getElementById("shift").innerHTML="";
            return;
        }else{
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById("shift").innerHTML=this.responseText;
                }
            };
            xmlhttp.open("get","search.php?shift="+str,true);
            xmlhttp.send();
        }
    }
</script>
</div>