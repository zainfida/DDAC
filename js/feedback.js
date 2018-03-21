

$("#SendFeedback").on("submit", function (event) {
    event.preventDefault();

    var Name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var feedback = $("#message").val();



    var sentData = "name=" + Name + "&email=" + email + "&subject=" + subject + "&feedback=" + feedback;


    $.ajax({
        type: "POST",
        url: "Dashboard/Class/UserData.php",
        data: sentData,
        success: function (text) {
            if (text == "success") {
                $("#SendFeedback")[0].reset();
                alert("Feedback Successfully Send");
            } else {
                alert(text);
            }
        }
    });

});


