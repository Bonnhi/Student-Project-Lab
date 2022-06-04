$(document).ready(function() {
    $("#signup").click(function(e) {
        e.preventDefault();
        var student_name = $("#name").val();
        var student_id = $("#student_id").val();
        var student_email = $("#email").val();
        var student_password = $("#pass").val();
        console.log(student_name, student_id, student_email, student_password);
        var student_info = { student_name: student_name, student_id: student_id, student_email: student_email, student_password: student_password };
        $.ajax({
            url: "registration.php",
            method: "POST",
            data: JSON.stringify(student_info),
            success: function(data) {
                if (data == 1) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success("Successfully registered");

                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(data);

                }

            }
        })

    })
    $("#login").click(function(e) {
        e.preventDefault();

        var user_id = $("#user_id").val();
        var user_password = $("#user_pass").val();
        console.log(user_id, user_password);
        var user_info = { user_id: user_id, user_password: user_password };
        $.ajax({
            url: "login.php",
            method: "POST",
            data: JSON.stringify(user_info),
            success: function(data) {
                if (data == 1) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success("Login successfully");

                    setTimeout(function() {
                        // location.replace("./teacher/teacher.php");
                    }, 5000);
                } else if (data == 2) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success("Login successfully");
                    // window.location.href = "http://localhost/Student-Project-Lab/student.php";
                    setTimeout(function() {
                        // location.replace("student.php");
                        window.location.href = "./student.php";
                        return false;
                    }, 5000);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(data);

                }
                console.log(data);

            }
        })

    })


})