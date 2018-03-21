/**
 * Created by LuNeR on 10/25/2017.
 */

$("#registerUser").on("submit", function (event) {
    event.preventDefault();

    var Name = $("#exampleInputName_1").val();
    var Email = $("#exampleInputEmail_2").val();
    var Password = $("#exampleInputpwd_2").val();
    var Contact = $("#exampleInputContact").val();
    var Address = $("#exampleInputAddress").val();

    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: "name=" + Name + "&email=" + Email + "&password=" + Password + "&contact=" + Contact + "&address=" + Address + "&RegisterUser=" + "TRUE",
        success: function (text) {
            if (text == "success") {
                $("#registerUser")[0].reset();
                submitMSG(true, "Registration Successful");
            } else {
                submitMSG(false, text);
            }
        }
    });

});


$("#UpdateBookingVassel").on("submit", function (event) {
    event.preventDefault();

    var NumbeOfBays = $("#exampleInputBays").val();
    var InputCompanyname = $("#exampleInputCompany").val();
    var InputVasselId = $("#exampleInputVasselID").val();
    var AvailableVassel = $("#exampleInputAvailableVassel").val();

    console.log(NumbeOfBays);
    console.log(AvailableVassel);


    if(+NumbeOfBays>+AvailableVassel){
        alert("Available vassel is less then your input vassel");
        return;
    }




    // var  data=  "NumbeOfBays=" + NumbeOfBays + "&InputCompanyname=" + InputCompanyname + "&InputVasselId=" + InputVasselId + "&RegisterUserVassel=" + "TRUE";
    // console.log(data);
    //
      $.ajax({
          type: "POST",
          url: "Class/UserData.php",
          data: "NumbeOfBays=" + NumbeOfBays + "&AvailableVassel=" + AvailableVassel+ "&InputCompanyname=" + InputCompanyname + "&InputVasselId=" + InputVasselId + "&RegisterUserVassel=" + "TRUE",
          success: function (text) {
              if (text == "success") {
                  alert("Successfull Updated !!!");
                  window.location = "index.php";
              } else {
                  alert("Successfull Updated !!!");
              }
          }
      });

});


$("#registerUserAdmin").on("submit", function (event) {
    event.preventDefault();

    var Name = $("#exampleInputName_1").val();
    var Email = $("#exampleInputEmail_2").val();
    var Password = $("#exampleInputpwd_2").val();
    var Contact = $("#exampleInputContact").val();
    var Address = $("#exampleInputAddress").val();
    var UserRole = $("#exampleInputUserRole").val();


    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: "name=" + Name + "&email=" + Email + "&password=" + Password + "&contact=" + Contact + "&address=" + Address + "&userRole=" + UserRole + "&RegisterUserAdmin=" + "TRUE",
        success: function (text) {
            if (text == "success") {
                $("#registerUserAdmin")[0].reset();
                submitMSG(true, "Registration Successful");
                setTimeout(function () {
                    window.location = "index.php";
                }, 1000);
            } else {
                submitMSG(false, text);
            }
        }
    });

});


$("#registerUserPage").on("submit", function (event) {
    event.preventDefault();

    var Name = $("#exampleInputName_1").val();
    var Email = $("#exampleInputEmail_2").val();
    var Contact = $("#exampleInputContact").val();
    var Address = $("#exampleInputAddress").val();

    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: "name=" + Name + "&email=" + Email + "&contact=" + Contact + "&address=" + Address + "&RegisterUserCustomerPage=" + "TRUE",
        success: function (text) {
            if (text == "success") {
                $("#registerUserPage")[0].reset();
                submitMSG(true, "Registration Successful");
                setTimeout(function () {
                    window.location = "index.php";
                }, 1000);
            } else {
                submitMSG(false, text);
            }
        }
    });

});


$("#UpdateUserAdmin").on("submit", function (event) {
    event.preventDefault();

    var Name = $("#exampleInputName_1").val();
    var Email = $("#exampleInputEmail_2").val();
    var Password = $("#exampleInputpwd_2").val();
    var Contact = $("#exampleInputContact").val();
    var Address = $("#exampleInputAddress").val();
    var UserRole = $("#exampleInputUserRole").val();
    var UserID = $("#UserID").val();
    var UserStatus = $("#exampleInputUserStatus").val();


    var sentData = "name=" + Name + "&email=" + Email + "&password=" + Password + "&contact=" + Contact + "&address=" + Address + "&userRole=" + UserRole + "&userID=" + UserID + "&userStatus=" + UserStatus + "&UpdateUserAdmin=" + "TRUE";


    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: sentData,
        success: function (text) {
            if (text == "success") {
                alert("Successfull Updated !!!")
                window.location = "ViewUserAdmin.php";
            } else {
                alert(text);
            }
        }
    });

});


$("#LoginUser").on("submit", function (event) {
    event.preventDefault();


    var Email = $("#exampleInputEmail_2").val();
    var Password = $("#exampleInputpwd_2").val();


    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: "email=" + Email + "&password=" + Password + "&LoginUser=" + "TRUE",
        success: function (text) {
            if (text == "success") {
                $("#LoginUser")[0].reset();
                submitMSG(true, "Login Successful");
                setTimeout(function () {
                    window.location = "index.php";
                }, 1000);

            } else {
                submitMSG(false, text);
            }
        }
    });

});


function submitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "text-center fadeInUp animated text-success";
    } else {
        var msgClasses = "text-center fadeInUp animated text-danger";
    }
    $("#result").removeClass().addClass(msgClasses).text(msg);
}


function deleteUser(UserID) {

    var confimation = confirm("Are you sure you want to block this user?");
    if (confimation) {

        $.ajax({
            type: "POST",
            url: "Class/UserData.php",
            data: "UserID=" + UserID + "&DeleteUser=" + "TRUE",
            success: function (text) {
                if (text == "success") {
                    alert("Successfully Deleted !!!");
                    window.location = "ViewUserAdmin.php";

                } else {
                    alert(text);
                }
            }
        });

    }
}


$("#addCollectionItem").on(" submit", function (event) {
    event.preventDefault();


    var userID = $("#useridCollection").val();
    var paper = $("#paper").val();
    var cookingOil = $("#cookingoil").val();
    var plastic = $("#plastic").val();

    if (IsNumeric(paper) == false || IsNumeric(cookingOil) == false || IsNumeric(plastic) == false) {
        alert("Please, Input valid information");
        return false;
    }
    else {

        var actionstring = "userID=" + userID + "&paper=" + paper + "&cookingoil=" + cookingOil + "&plastic=" + plastic + "&saveintoCollection=" + 'TRUE';
        $.ajax({
            type: "POST",
            url: "Class/UserData.php",
            data: actionstring,
            success: function (text) {
                if (text == "success") {
                    alert("SUCCESSFULL !!! Added in the Database, Waiting for Approval");
                    window.location = "index.php";


                } else {
                    alert(text);
                }
            }
        });

    }


});


function IsNumeric(input) {
    var RE = /^-{0,1}\d*\.{0,1}\d+$/;
    return (RE.test(input));
}


function cookingPointCount() {


    var x = document.getElementById("cookingoil");
    var y = document.getElementById("cookingOilVal");

    if (IsNumeric(x.value)) {

        y.innerText = x.value * .3;
    }
    else {
        alert("Please Input valid input");
    }
}


function PlasticPointCount() {


    var x = document.getElementById("plastic");
    var y = document.getElementById("PlasticVal");

    if (IsNumeric(x.value)) {

        y.innerText = x.value * .4;
    }
    else {
        alert("Please Input valid input");
    }
}


function PaperPointCount() {


    var x = document.getElementById("paper");
    var y = document.getElementById("paperVal");

    if (IsNumeric(x.value)) {

        y.innerText = x.value * .5;
    }
    else {
        alert("Please Input valid input");
    }
}


function deleteUserCollection(id) {
    var confimation = confirm("Are you sure you want to block this user?");
    if (confimation) {

        $.ajax({
            type: "POST",
            url: "Class/UserData.php",
            data: "ConfirmID=" + id + "&DeleteCollection=" + "TRUE",
            success: function (text) {
                if (text == "success") {
                    alert("Successfully Deleted !!!");
                    window.location = "ShowCollectionUserList.php";

                } else {
                    alert(text);
                }
            }
        });

    }
}


function UpdateUserCollection(id) {

    $("#useridCollection").val(id);


    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: "ConfirmIDAjax=" + id + "&getCollectionTrash=" + "TRUE",
        success: function (text) {
            var res = text.split("|");
            $("#paper").val(res[0]);
            $("#cookingoil").val(res[2]);
            $("#plastic").val(res[1]);


        }
    });


}


$("#UpdateCollectionItem").on(" submit", function (event) {
    event.preventDefault();


    var userID = $("#useridCollection").val();
    var paper = $("#paper").val();
    var cookingOil = $("#cookingoil").val();
    var plastic = $("#plastic").val();

    if (IsNumeric(paper) == false || IsNumeric(cookingOil) == false || IsNumeric(plastic) == false) {
        alert("Please, Input valid information");
        return false;
    }
    else {

        var actionstring = "userID=" + userID + "&paper=" + paper + "&cookingoil=" + cookingOil + "&plastic=" + plastic + "&UpdateintoCollection=" + 'TRUE';

        $.ajax({
            type: "POST",
            url: "Class/UserData.php",
            data: actionstring,
            success: function (text) {
                if (text == "success") {
                    alert("SUCCESSFULL !!! Updated In the Database");
                    window.location = "ShowCollectionUserList.php";


                } else {
                    alert(text);
                }
            }
        });

    }


});


function ApproveCollection(CollectionID) {
    $("#useridCollection").val(CollectionID);


    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: "ConfirmIDAjax=" + CollectionID + "&getCollectionTrash=" + "TRUE",
        success: function (text) {
            var res = text.split("|");
            $("#paper").val(res[0]);
            $("#cookingoil").val(res[2]);
            $("#plastic").val(res[1]);


        }
    });
}


$("#UpdateCollectionItemForAdmin").on(" submit", function (event) {
    event.preventDefault();


    var userID = $("#useridCollection").val();
    var paper = $("#paper").val();
    var cookingOil = $("#cookingoil").val();
    var plastic = $("#plastic").val();
    var action = $("#action").val();

    if (IsNumeric(paper) == false || IsNumeric(cookingOil) == false || IsNumeric(plastic) == false) {
        alert("Please, Input valid information");
        return false;
    }
    else {

        var actionstring = "userID=" + userID + "&paper=" + paper + "&cookingoil=" + cookingOil + "&plastic=" + plastic + "&actionstatus=" + action + "&UpdateintoCollectionForAdmin=" + 'TRUE';

        $.ajax({
            type: "POST",
            url: "Class/UserData.php",
            data: actionstring,
            success: function (text) {
                if (text == "success") {
                    alert("SUCCESSFULL !!! Updated In the Database");
                    window.location = "RewardPointAdmin.php";


                } else {
                    alert(text);
                }
            }
        });

    }


});


$("#submitReedempoint").on(" submit", function (event) {
    event.preventDefault();


    var RedeemPoint = $("#inputRedeem").val();
    var currentPoint = $("#totalPoint").val();
    var CurrentUserID = $("#CurrentUserID").val();


    if (+currentPoint < 100) {
        alert("Please maintain at least 100 Points in your account, and your current point is: " + currentPoint);
        return false;
    }
    else if (+RedeemPoint > +currentPoint) {
        alert("Redeem point must be less than the Current Point,");
        // alert("Current "+currentPoint+ " and ReedmPoint: "+RedeemPoint);
        return false;
    }
    else if (+RedeemPoint == 0 || +RedeemPoint < 100) {
        alert("Please, Input a valid redeem point more than 100,");
        return false;
    }
    else {
        var RedeemPointString = "userID=" + CurrentUserID + "&RedeemPoint=" + RedeemPoint + "&RedeemPointUser=" + 'TRUE';

        $.ajax({
            type: "POST",
            url: "Class/UserData.php",
            data: RedeemPointString,
            success: function (text) {
                if (text == "success") {
                    alert("SUCCESSFULL !!! Added in the Database, Waiting for Approval");
                    window.location = "index.php";


                } else {
                    alert(text);
                }
            }
        });
    }
});


$("#UpdateUserCustomer").on("submit", function (event) {
    event.preventDefault();

    var Name = $("#exampleInputName_1").val();
    var Password = $("#exampleInputpwd_2").val();
    var Contact = $("#exampleInputContact").val();
    var Address = $("#exampleInputAddress").val();
    var UserID = $("#UserID").val();


    var sentData = "name=" + Name + "&password=" + Password + "&contact=" + Contact + "&address=" + Address + "&userID=" + UserID + "&UpdateUserCustomerPage=" + "TRUE";


    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: sentData,
        success: function (text) {
            if (text == "success") {
                alert("Successfull Updated !!!")
                window.location = "index.php";
            } else {
                alert(text);
            }
        }
    });

});


function UpdateColelctionPointStatus(id, status) {


    var sentData = "UserID=" + id + "&status=" + status + "&UpdateCollectionStation=" + "TRUE";
    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: sentData,
        success: function (text) {
            if (text == "success") {
                alert("Successfull Updated !!!")
                window.location = "index.php";
            } else {
                alert(text);
            }
        }
    });
}


function callCollectionTeam() {
    var sentData = "CallCollectionTeam=" + "TRUE";
    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: sentData,
        success: function (text) {
            if (text == "success") {
                alert("Successfull Called.... !!!")
                window.location = "index.php";
            } else {
                alert(text);
            }
        }
    });
}


function activeUserTrash(id) {
    $("#idofThis").val(id);

}


function updateTheValue() {
    var id = $("#idofThis").val();

    var sentData = "PostID=" + id + "&CallCollectionTeamOut=" + "TRUE";

    $.ajax({
        type: "POST",
        url: "Class/UserData.php",
        data: sentData,
        success: function (text) {
            if (text == "success") {
                alert("Successfull Done.... !!!")
                window.location = "index.php";
            } else {
                alert(text);
            }
        }
    });
}


function readUserFeedback(feedbackID) {
    var confimation = confirm("Is the feedback well noted?");
    if (confimation) {

        $.ajax({
            type: "POST",
            url: "Class/UserData.php",
            data: "feedbackID=" + feedbackID + "&UpdateFeedback=" + "TRUE",
            success: function (text) {
                if (text == "success") {
                    alert("Successfully Updated !!!");
                    window.location = "viewFeedback.php";

                } else {
                    alert(text);
                }
            }
        });

    }
}

function setBookingVasel(vasselId, availableBay) {
    console.log(vasselId);
    console.log(availableBay);
    $("#exampleInputVasselID").val(vasselId);
    $("#exampleInputAvailableVassel").val(availableBay);

}