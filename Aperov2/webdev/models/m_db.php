<?php// MODELclass MainModel extends PDO{    private $arr_executed_sql = [];    function __construct()    {        parent::__construct('mysql:host=' . DB_HOST . ';port=3306;dbname=' . DB_NAME . ';charset=UTF8;', DB_LOGIN, DB_PASS);        $this->query('SET NAMES utf8;');    }//    function connect($username, $pass)//    {//        $username = $this->quote($username);//        $pass = $this->quote($pass);//        return $this->execQuery('SELECT count(*) as nb,id FROM account WHERE username=' . $username . ' AND password=' . $pass . ' AND status = 2;');//    }    function execQuery($request)    {        $rest = $this->query($request)->fetchAll(PDO::FETCH_ASSOC);        $this->arr_executed_sql[] = $request;        return $rest;    }    function execInsert($request)    {        $rest = $this->exec($request);        $this->arr_executed_sql[] = $request;        return $rest;    }    function getLastQuery()    {        return end($this->arr_executed_sql);    }    function setStatusTo($id, $table, $status = 2)    {        $this->execQuery('UPDATE `' . $table . '` SET `status`= ' . $status . '  WHERE `id`=' . $id . ';');    }    // account part    function accountCreate($username, $pwd, $email)    {        $username = $this->quote($username);        $pwd = $this->quote($pwd);        $email = $this->quote($email);        return $this->execInsert('INSERT INTO `account`(`username`, `password`, `email`, `created_at`, `updated_at`, `status`) VALUES (' . $username . ',' . $pwd . ',' . $email . ',NOW(),NOW(),2);');    }    function accountRead($id = null)    {        if ($id == null) {            return $this->execQuery('SELECT * FROM account WHERE status != 0;');        } else {            $id = $this->quote($id);            return $this->execQuery('SELECT * FROM account WHERE id=' . $id . ' AND status != 0;');        }    }    function accountUpdate($id)    {        // TODO    }    function accountDeleteHard($id = 0)    {        $id = $this->quote($id);        $this->execQuery('DELETE FROM `account` WHERE id = ' . $id . ';');    }    function accountDeleteSoft($id = 0)    {        $id = $this->quote($id);        $this->setStatusTo($id, 'account', 0);    }    // blog part    function blogCreate($idAccount, $title, $description)    {        $idAccount = $this->quote($idAccount);        $title = $this->quote($title);        $description = $this->quote($description);        return $this->execInsert('INSERT INTO `blog`(`id_account`,`title`, `description`, `created_at`, `updated_at`, `status`) VALUES (' . $idAccount . ',' . $title . ',' . $description . ',NOW(),NOW(),2);');    }    function blogRead($id = null)    {        if ($id == null) {            return $this->execQuery('SELECT * FROM blog WHERE status != 0;');        } else {            $id = $this->quote($id);            return $this->execQuery('SELECT * FROM blog WHERE id=' . $id . ' AND status != 0;');        }    }    function blogUpdate($id)    {        // TODO    }    function blogDeleteHard($id = 0)    {        $id = $this->quote($id);        $this->execQuery('DELETE FROM `blog` WHERE id = ' . $id . ';');    }    function blogDeleteSoft($id = 0)    {        $id = $this->quote($id);        $this->setStatusTo($id, 'blog', 0);    }    // contact part    function contactCreate($email, $message)    {        $email = $this->quote($email);        $message = $this->quote($message);        return $this->execInsert('INSERT INTO `contact`(`email`, `message`, `created_at`, `updated_at`, `status`) VALUES (' . $email . ',' . $message . ',NOW(),NOW(),2);');    }    function contactRead($id = null)    {        if ($id == null) {            return $this->execQuery('SELECT * FROM contact WHERE status != 0;');        } else {            $id = $this->quote($id);            return $this->execQuery('SELECT * FROM contact WHERE id=' . $id . ' AND status != 0;');        }    }    function contactUpdate($id)    {        // TODO    }    function contactDeleteHard($id = 0)    {        $id = $this->quote($id);        $this->execQuery('DELETE FROM `contact` WHERE id = ' . $id . ';');    }    function contactDeleteSoft($id = 0)    {        $id = $this->quote($id);        $this->setStatusTo($id, 'contact', 0);    }    // creation part    function creationCreate($id_account, $name, $description, $img_url)    {        $id_account = $this->quote($id_account);        $name = $this->quote($name);        $description = $this->quote($description);        $img_url = $this->quote($img_url);        return $this->execInsert('INSERT INTO `creation`(`id_account`, `name`, `description`,`img_url`, `created_at`, `updated_at`, `status`) VALUES (' . $id_account . ',' . $name . ',' . $description . ',' . $img_url . ',NOW(),NOW(),2);');    }    function creationRead($id = null, $admin = false)    {        $where = 'status = 2';        if ($admin) {            $where = 'status != 0';        }        if ($id == null) {            return $this->execQuery('SELECT * FROM creation WHERE ' . $where . ';');        } else {            $id = $this->quote($id);            return $this->execQuery('SELECT * FROM creation WHERE id=' . $id . ' AND ' . $where . ';');        }    }    function creationUpdate($id, $name, $description)    {        $id = $this->quote($id);        $name = $this->quote($name);        $description = $this->quote($description);        var_dump($this->execQuery('UPDATE `creation` SET `name`=' . $name . ',`description`=' . $description . ',`updated_at`= NOW() WHERE `id`=' . $id . ';'));        pr($this->getLastQuery());        return false;    }    function creationDeleteHard($id = 0)    {        $id = $this->quote($id);        $this->execQuery('DELETE FROM `creation` WHERE id = ' . $id . ';');    }    function creationDeleteSoft($id = 0)    {        $id = $this->quote($id);        $this->setStatusTo($id, 'creation', 0);    }    // event part    function eventCreate($title, $description, $img_url, $date)    {        $title = $this->quote($title);        $description = $this->quote($description);        $img_url = $this->quote($img_url);        $date = $this->quote($date);        return $this->execInsert('INSERT INTO `evenement`(`title`, `description`, `img_url`, `date`, `created_at`, `updated_at`, `status`, `id_account`) VALUES (' . $title . ',' . $description . ',' . $img_url . ',' . $date . ',NOW(),NOW(),2);');    }    function eventRead($id = null)    {        if ($id == null) {            return $this->execQuery('SELECT * FROM evenement WHERE status != 0;');        } else {            $id = $this->quote($id);            return $this->execQuery('SELECT * FROM evenement WHERE id=' . $id . ' AND status != 0;');        }    }    function eventUpdate($id)    {        // TODO    }    function eventDeleteHard($id = 0)    {        $id = $this->quote($id);        $this->execQuery('DELETE FROM `evenement` WHERE id = ' . $id . ';');    }    function eventDeleteSoft($id = 0)    {        $id = $this->quote($id);        $this->setStatusTo($id, 'evenement', 0);    }}