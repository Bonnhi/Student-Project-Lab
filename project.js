$(document).ready(function() {
    $("#add_project").click(function(e) {
        console.log("Submit Button Clicked");
        e.preventDefault();
        var project_name = $("#project-name").val();
        var project_details = $("#details").val();
        var project_group_name = $("#group-name").val();
        var idArr = $.map($('input[type=text][name="id[]"]'), function(el) { return el.value; });
        console.log(idArr.length);
        if (idArr.length == 1) {
            var student1 = parseInt(idArr[0]);
            var student2 = null;
            var student3 = null;

            var group_project_info = { project_name: project_name, project_details: project_details, project_group_name: project_group_name, student1: student1, student2: student2, student3: student3 };
            console.log(group_project_info);
            $.ajax({
                url: "project_insert.php",
                method: "POST",
                data: JSON.stringify(group_project_info),
                success: function(data) {
                    console.log(data);

                    // if (data == 1) {
                    //     alertify.set('notifier', 'position', 'top-right');
                    //     alertify.success("Successfully Inserted");


                    // } else {
                    //     alertify.set('notifier', 'position', 'top-right');
                    //     alertify.error(data);

                    // }

                }
            })
        } else if (idArr.length == 2) {
            var student1 = parseInt(idArr[0]);
            var student2 = parseInt(idArr[1]);
            var student3 = null;

            var group_project_info = { project_name: project_name, project_details: project_details, project_group_name: project_group_name, student1: student1, student2: student2, student3: student3 };
            $.ajax({
                url: "project_insert.php",
                method: "POST",
                data: JSON.stringify(group_project_info),
                success: function(data) {
                    console.log(data);

                    // if (data == 1) {
                    //     alertify.set('notifier', 'position', 'top-right');
                    //     alertify.success("Successfully Inserted");


                    // } else {
                    //     alertify.set('notifier', 'position', 'top-right');
                    //     alertify.error(data);

                    // }

                }
            })
        } else if (idArr.length == 3) {
            var student1 = parseInt(idArr[0]);
            var student2 = parseInt(idArr[1]);
            var student3 = parseInt(idArr[2]);

            var group_project_info = { project_name: project_name, project_details: project_details, project_group_name: project_group_name, student1: student1, student2: student2, student3: student3 };
            $.ajax({
                url: "project_insert.php",
                method: "POST",
                data: JSON.stringify(group_project_info),
                success: function(data) {
                    console.log(data);

                    // if (data == 1) {
                    //     alertify.set('notifier', 'position', 'top-right');
                    //     alertify.success("Successfully Inserted");


                    // } else {
                    //     alertify.set('notifier', 'position', 'top-right');
                    //     alertify.error(data);

                    // }

                }
            })
        }

        // var project_id=idArr.values();
        // for(var value of project_id){
        //     console.log(value.);
        // }
        // console.log(project_id);


    })

})