<div class="wrapper">
    <div class="form-box forgot">
        <h2>Forgot Password</h2>
        <form action="<?= BASE_URL; ?>/forgotpass/onUpdatePass" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="email" name="email" autocomplete="off" required />
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" name="pass" required />
                <label>New Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Process</button>
            <div class="login-register">
                <p>
                    Remember Password?
                    <a href="<?= BASE_URL; ?>/login" class="register-link">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>