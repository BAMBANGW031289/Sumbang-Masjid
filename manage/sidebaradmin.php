<div class="bd-block clearfix">
    <?php if (!$_SESSION['login']['status']): ?>
        <div class="bd-blockheader">
            <h3 class="t">Login Form</h3>
        </div>
        <div class="bd-blockcontent">

            <form action="proseslogin.php" method="POST">
                <fieldset class="input" style="border: 0 none;">
                    <p id="form-login-username">
                        <label for="modlgn_username">Username</label>
                        <br />
                        <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username" style="width:100%" required />
                    </p>
                    <p id="form-login-password">
                        <label for="modlgn_passwd">Password</label>
                        <br />
                        <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" alt="password" style="width:100%" required />
                    </p>
                    <p>&nbsp;</p>
                    <input type="submit" value="Login" name="Submit" class="bd-button" />    
                </fieldset>
            </form>
        </div>
    <?php else: ?>
        <div class="bd-blockheader">
            <h3 class="t">Informasi</h3>
        </div>
        <div class="bd-blockcontent"><p><span style="font-weight: bold;"><?php echo $_SESSION['login']['nama']; ?></span></p>
            <br>
            <p>Login Terkahir:<br><?php echo $_SESSION['login']['last']; ?></p>
            <br>
            <p align="center"><a href="logout.php" class="bd-button">Keluar</a></p>
        </div>
    <?php endif; ?>
</div>