<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../login/group-1.html");
  exit;
}