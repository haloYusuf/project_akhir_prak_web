<div class="wrapper">
    <div class="form-box login">
        <h2>Login</h2>
        <form action="<?=BASE_URL; ?>/login/onLogin" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="text" name="email" autocomplete="off" required />
                <label>Email/username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" name="pass" required />
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label> <input type="checkbox"/>Remember me </label>
                <a href="<?=BASE_URL; ?>/forgotpass">Forgot Password</a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="login-register">
                <p>
                    Don't have an account?
                    <a href="<?=BASE_URL; ?>/register" class="register-link">Register</a>
                </p>
            </div>
        </form>
    </div>
</div>