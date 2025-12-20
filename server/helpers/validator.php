<?php
function clean($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
