<?php

const USERS_FILE = "users.json";

function getLoginView()
{
    global $smarty;

    $smarty->assign( 'type', 'Login' );
    $smarty->assign( 'action', 'login' );
    $smarty->display( 'form.tpl' );
}

function getRegisterView()
{
    global $smarty;

    $smarty->assign( 'type', 'Register' );
    $smarty->assign( 'action', 'register' );
    $smarty->display( 'form2.tpl' );
}

function getDeafaultPage()
{
    global $smarty;

    $smarty->display( 'index.tpl' );
}

function createUser( string $name, string $email, bool $gender, string $password ): bool
{
    $newUser = [
        'name'     => $name,
        'email'    => $email,
        'gender'   => $gender,
        'password' => md5( $password ),
    ];


    $users   = readJsonFile( USERS_FILE );
    $users[] = $newUser;
    writeJsonFile( $users, USERS_FILE );

    $_SESSION['data']['user'] = $newUser;
    header( "Location: /" );

    return true;
}

function loginUser( string $email, string $password )
{
    $users = readJsonFile( USERS_FILE );

    foreach( $users as $user )
    {
        if( $user['email'] === $email && $user['password'] === md5( $password ) )
        {
            echo "User found {$user['email']}";
            $_SESSION['data']['user'] = $user;
            header( "Location: /" );

            return;
        }
    }

    header( "Location: /?action=login&error=User not found" );
}

function readJsonFile( string $fileName ): array
{
    return json_decode( ( file_get_contents( $fileName ) ?? '[]' ), true ) ?? [];
}

function writeJsonFile( array $data, string $fileName ): void
{
    $jsonString = json_encode( $data );
    file_put_contents( $fileName, $jsonString );
}