<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .form {
        width: 500px;
        height: 700px;
        /* border: 1px solid black; */
        /* border-radius: 30px; */
        box-shadow: blue 0px 0px 0px 2px inset, rgb(255, 255, 255) 10px -10px 0px -3px, rgb(31, 193, 27) 10px -10px, rgb(255, 255, 255) 20px -20px 0px -3px, rgb(255, 217, 19) 20px -20px, rgb(255, 255, 255) 30px -30px 0px -3px, rgb(255, 156, 85) 30px -30px, rgb(255, 255, 255) 40px -40px 0px -3px, rgb(255, 85, 85) 40px -40px;
        
    }
    .border-content-hahaha {
        margin: 10px 10px 10px 10px !important;
    }

    .border-button-hahaha {
        width: 100%;
        display: flex ;
        justify-content: center;
        align-items: center;
    }

    input, label {
        margin-top: 10px!important;
    }
</style>
<?php

    echo '
    <div class="form">

        <div class="border-content-hahaha">
            <label class="form-label">scode</label>
            <input class="form-control" type="text" name="scode" placeholder="Enter scode " aria-label="default input example">
            <label class="form-label">sname</label>
            <input class="form-control" type="text"  name="snam" placeholder="Enter sname " aria-label="default input example">
            <label class="form-label">class</label>
            <input class="form-control" type="text"  name="class" placeholder="Enter class " aria-label="default input example">
            <label class="form-label">age</label>
            <input class="form-control" type="text"  name="age" placeholder="Enter age " aria-label="default input example">
        </div>
        <div class="border-button-hahaha">
            <button type="button" class="btn btn-success">ADD STUDENT</button>
        </div>
    </div>
    
    
    '

?>
<script>
    let btnBtnSuccess = document.querySelector(".btn.btn-success");
    btnBtnSuccess.addEventListener("click", function() {

        let valueSSS=[];
        let sss = document.querySelectorAll(".form-control");
        sss.forEach(element => {
            valueSSS.push(element.value);
        });
        console.log("processAdd.php?valueSSS="+JSON.stringify(valueSSS));
        location.href = "processAdd.php?valueSSS="+JSON.stringify(valueSSS) ;
    });

</script>