<?php
// ���������� ���������� RedBeanPHP
require "libs/rb-mysql.php";

// ������������ � ��
R::setup( 'mysql:host=localhost;dbname=srv50908_users',
        'srv50908_ht58769', 'vVKoq83W' );

// �������� ����������� � ��
if(!R::testConnection()) die('No DB connection!');

session_start(); // ������� ������ ��� �����������
?>