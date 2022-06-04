
   
<!-- <?php include 'connection.php'; ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learn Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

    <div class="container">
        <h2>Enter Group Info</h2>
        <div class="row">
            <div class="col-md-6"> 
                <form action="">
                    <div class="form-group">
                    <label for="">Project Title</label>
                        <input type="text" class="form-control" name="project-name" id="project-name">
                    </div>
                    <div class="form-group">
                        <label for="">Project Details</label>
                        <input type="text" class="form-control" name="details" id="details">
                    </div>
                    <div class="form-group">
                        <label for="">Group Name</label>
                        <input type="text" class="form-control" name="group-name" id="group-name">
                    </div>
                    <div class="form-group">
                        <label for="">Select Group Members</label>
                        <select name="total_members" id="total_members" class="form-control">
                            <option value="">SELECT No of Members</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                    </div>
                    <div id="members">

                    </div>
                </form>
            </div>
        </div>
        <br>
        <!-- <h2>Enter Member Info</h2>
        <div>
            <form action="" id="members">

            </form>
        </div> -->
       
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#total_members").change(function() {
                $("#members").empty()
                var total_members = $(this).val();
                console.log(total_members);
                for (var i=0; i<total_members; i++) {
                    var str = `
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Student ID" class="form-control" name="id[]" id="">
                                    </div>
                                    
                               `;
                                $("#members").append(str);
                }

                var btn = '<button type="submit" name="submit" class="btn btn-primary mt-2" id="submit">Submit</button>';

                $("#members").append(btn);
            })
            
        })
    </script>
    <script>

        $(document).ready(function(){
            $("form").submit(function(e){
                console.log("Submit Button Clicked");
                e.preventDefault();
                var project_name=$("#project-name").val();
                var project_details=$("#details").val();
                var project_group_name=$("#group-name").val();
                var idArr = $.map($('input[type=text][name="id[]"]'), function(el) { return el.value; });
            console.log(idArr.length);
            console.log(idArr[0]);
            if(idArr.length==1) {
                var student1 =parseInt(idArr[0]);
                var student2 = null;
                var student3 = null;
                console.log(student1, student2, student3);
                console.log(typeof (student1));
                var group_project_info={project_name : project_name,project_details:project_details,project_group_name:project_group_name,student1: student1,student2: student2,student3: student3};
            }
            else if(idArr.length==2){
                var student1 =parseInt(idArr[0]);
                var student2 = parseInt(idArr[1]);
                var student3 = null;
                console.log(student1, student2, student3);
                var group_project_info={project_name : project_name,project_details:project_details,project_group_name:project_group_name,student1: student1,student2: student2,student3: student3};
            }
            else if(idArr.length==3){
                var student1 =parseInt(idArr[0]);
                var student2 = parseInt(idArr[1]);
                var student3 =parseInt(idArr[2]);
                console.log(student1, student2, student3);
                var group_project_info={project_name : project_name,project_details:project_details,project_group_name:project_group_name,student1: student1,student2: student2,student3: student3};
            }
            
            // var project_id=idArr.values();
            // for(var value of project_id){
            //     console.log(value.);
            // }
                // console.log(project_id);
                console.log(project_name,project_details,project_group_name);


                })

        })
    </script>
    <!-- <script>
        $("form").submit(function(e){
            e.preventDefault();

            const idArr = $.map($('input[type=text][name="id[]"]'), function(el) { return el.value; });
            console.log(idArr);

            const nameArr = $.map($('input[type=text][name="name[]"]'), function(el) { return el.value; });
            console.log(nameArr);

            const emailArr = $.map($('input[type=text][name="email[]"]'), function(el) { return el.value; });
            console.log(emailArr);

            const phoneArr = $.map($('input[type=text][name="phone[]"]'), function(el) { return el.value; });
            console.log(phoneArr);
        })
    </script> -->
</body>
<?php 
    // if(ISSET($_POST['submit'])){
    //     echo 'submitted'
    // }

?>
</html>

