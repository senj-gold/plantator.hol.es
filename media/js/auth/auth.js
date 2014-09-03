$(document).ready(function () {

    $("#authorization .pop_up_enter").on("click", authSendLogin);
    $("#remind_password .pop_up_enter").on("click", authSendRemm);
    $("#registration .pop_up_enter").on("click", authSendReg);
    
    $("#privat p").on("click", authorization);
    $("#close_pop_up").on("click", close_authorization);
    $("#go_registration").on("click", function() {  $("#registration").show(); $("#authorization").slideUp(); });
    $("#go_authorization").on("click", function() { $("#authorization").slideDown(400, function() {$("#registration").hide(); }); });
    $("#send_password").on("click", function() { $("#authorization").slideDown(400, function() {$("#registration").hide(); }); });
    $("#leave_remind_password").on("click", function() { $("#authorization").show(); $("#remind_password").slideUp(); });
    $("#go_remind_password").on("click", function() { $("#remind_password").slideDown(400, function() {$("#authorization").hide(); }); });
    
    });
    function authorization() {
    $("#overlap").show();
    $("#pop_up").show();
    $("#close_pop_up").show();
}

function authSendRemm() {
    document.getElementById('formrem').submit();
}
function authSendReg() {
    document.getElementById('formreg').submit();
}
function authSendLogin() {
    document.getElementById('formlogin').submit();
}
function close_authorization() {
    $("#overlap").hide();
    $("#pop_up").hide();
    $("#close_pop_up").hide();
}
