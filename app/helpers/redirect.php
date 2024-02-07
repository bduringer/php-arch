<?php

function redirect($to){
    return header('location: '.$to);
}

function setErrorMessageAndRedirect($index,$message,$to){
    setFlash("$index","$message");
    return redirect("$to");
}