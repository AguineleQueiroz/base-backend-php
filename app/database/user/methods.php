<?php

function findAllByEmail($param) {
    return findBy('users', "email", $param);
}