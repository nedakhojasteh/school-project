<?php

namespace App\Enums;

enum RoleNameEnum: string
{
    case MANAGER = 'MANAGER';
    case TEACHER = 'TEACHER';
    case WAITER = 'WAITER';
    case VICE = 'VICE';
}