<?php

function setFlash($key, $message): void {
    if(!isset($_SESSION['flash_messages'][$key])) {
        $_SESSION['flash_messages'][$key] = $message;
    }
}

function getFlash($key, $style = 'color:red'): string {
    if(isset($_SESSION['flash_messages'][$key])) {
        $flash = $_SESSION['flash_messages'][$key];
        unset($_SESSION['flash_messages'][$key]);
        return '<span class="flash-messages" style="font-size:12px;'.$style.'">'.$flash.'</span>';
    }
    return '';
}