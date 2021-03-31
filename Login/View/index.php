<h1>Danh sách học sinh</h1>
<?php
require("../Models/User.php");
$users = [
    new User('Toan', '12a1', '25/01/1998'),
    new User('Giang', '12a2', '01/01/1998'),
    new User('Mao', '12a3', '09/04/1994'),
];
foreach ($users as $user) {
    ?>

  <table border=1 cellspacing=0 cellpading=0>
    <tr>
      <td><font color=red>Tên</td>
      <td> <?=$user->name?> </font></td>
    </tr>
    <tr>
      <td><font color=blue>Lớp</td>
      <td> <?=$user->class?> </font></td>
    </tr>
    <tr>
      <td><font color=blue>Ngày</td>
      <td> <?=$user->date?> </font></td>
    </tr>
  </table>
    <?php
}
?>
