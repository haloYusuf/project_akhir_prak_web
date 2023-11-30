<div class="wrapper">
    <div class="form-box register">
        <h2>Sign Up</h2>
        <form action="<?=BASE_URL; ?>/register/onRegist" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="email" name="email" autocomplete="off" required />
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" name="pass" required />
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label> <input type="checkbox" required /> agree to the terms & conditions</label>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <div class="login-register">
                <p>
                    Already have an account?
                    <a href="<?=BASE_URL; ?>/login" class="login-link">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>