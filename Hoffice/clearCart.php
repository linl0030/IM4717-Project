<?php
session_start();
unset($_SESSION['itemList']);
unset($_SESSION['qty']);
header('Location: /f32ee/IM4717-Project/Hoffice');
