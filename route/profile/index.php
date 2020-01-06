<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';
?>
<h1><?=returnHeadline($menu);?></h1>
<ul style = "color: white">
	<?php
	$login = $_SESSION['login'];
	$userProfile = mysqli_query(connect(), "select * from users where email = '$login'");
	$userGroups = mysqli_query(connect(), "select groups.name from users
		left join group_user on users.id = group_user.user_id
		left join groups on group_user.group_id = groups.id
		where email = '$login'");
	$userProfileRow = mysqli_fetch_assoc($userProfile);
	foreach ($userProfileRow as $key => $value) {?>
	    <li><?="$key: $value"?></li>
	 	<?}?>
	 	<li>groups: 
	 		<ul>
	 			<?php 
	 			while ($userGroupsRow = mysqli_fetch_assoc($userGroups)) {
	 				foreach ($userGroupsRow as $key) { ?>
	 			<li><?="$key"?></li>
	 				<?}
	 			}?>	
			</ul>
		</li>	
</ul>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'; 
?>