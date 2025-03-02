<?php

function redirect($location): bool {
    header('Location: ' . $location);
    return true;
}