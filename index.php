<?php  
include 'template/header.php';
?>
    

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например, покупки в магазине, цели, задачи и многое другое. Делиться списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>
            
            <td class="right-collum-index">
				
				<div class="project-folders-menu">
					<ul class="project-folders-v">
    					<li class="project-folders-v-active"><a href="#">Авторизация</a></li>
    					<li><a href="#">Регистрация</a></li>
    					<li><a href="#">Забыли пароль?</a></li>
					</ul>
				    <div class="clearfix"></div>
				</div>
                
                
				<div class="index-auth">
                    <?php 
                    if ($success) {
                        include 'include/success.php';  
                    } elseif ($error) {
                        include 'include/error.php';
                    };
                    if ($form) {?>
                    <form action="/?login=yes" method="POST">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="iat">
                                    <?=($_COOKIE['login'] ?? '') ? '' : '<label for="login_id">Ваш e-mail:</label>'?>
                                    <input id="login_id" <?=($_COOKIE['login'] ?? '') ? 'type="hidden"' : ''?>size="30" name="login" value="<?=$_COOKIE['login'] ?? $_POST['login'] ?? ''?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value="<?=$_POST['password'] ?? ''?>">
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Войти"></td>
                            </tr>
                        </table>
                    </form>
                    <?}?>
				</div>
			
			</td>
            
        </tr>
    </table>
    
<?php 
include 'template/footer.php'; 
?>