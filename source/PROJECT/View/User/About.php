<!-- Article -->
<div class="all-products container shortcode-heading-wrapper">
  <?php
  echo '<div class="card info-user">';
	echo '<i class="card-img-top fas fa-user-circle img-user"  alt="Card image" style="font-size: 60px;"> </i>';
	echo '<div class="card-body">';
	echo '<table class="card-text">';
		echo "<tr><td>Họ tên:</td><td> $row[FullName]</td></tr>";
		echo "<tr><td>Tên đăng nhập:</td><td>$row[UserName]</td></tr>";
		echo "<tr><td>Email:</td><td>$row[Email]</td></tr>  </table>";
	echo "<a href=\"index.php?mod=user&act=changepassword\" class=\"btn btn-primary changepass\">Đổi mật khẩu</a>";
	echo "<a href=\"index.php?mod=user&act=update\" class=\"btn btn-primary\">Thay đổi thông tin</a>";
	echo "</div>";
	echo "</div>";

  ?>
  
<hr class="noscreen">