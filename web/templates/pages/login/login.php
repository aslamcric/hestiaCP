<style>
    body {
        background-color: #1a1a1a !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        min-height: 100vh !important;
        margin: 0 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
    }

    .login-container {
        background: #ffffff !important;
        padding: 50px 70px !important; 
        border-radius: 15px !important;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3) !important;
        width: 100% !important; 
        max-width: 850px !important; 
        text-align: center !important;
        box-sizing: border-box !important;
        margin: 20px auto !important;
    }

    .login-header img {
        margin-bottom: 25px !important;
        max-width: 180px !important;
        height: auto !important;
    }

    .login-title {
        font-size: 28px !important; 
        color: #1E7E34 !important;
        margin-bottom: 35px !important;
        line-height: 1.4 !important;
        font-weight: 700 !important;
    }

    .login-title span {
        font-size: 27px !important;
        font-weight: 600 !important;
        color: #444 !important;
        display: block !important;
        margin-top: 5px !important;
		font-weight: 700 !important;
    }

    .form-group {
        text-align: left !important;
        margin-bottom: 25px !important;
    }

    .form-label {
        display: block !important;
        margin-bottom: 10px !important;
        font-weight: 600 !important;
        color: #555 !important;
        font-size: 16px !important;
    }

    .form-control {
        width: 100% !important;
        padding: 16px !important; 
        border: 2px solid #ddd !important;
        border-radius: 10px !important;
        box-sizing: border-box !important;
        font-size: 16px !important;
        background-color: #fff !important;
        color: #333 !important;
    }

    .form-control:focus {
        border-color: #145523 !important;
        outline: none !important;
        box-shadow: 0 0 10px rgba(243, 156, 18, 0.1) !important;
    }

    .password-wrapper {
        position: relative !important;
    }

    #togglePassword {
        position: absolute !important;
        right: 18px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        cursor: pointer !important;
        color: #777 !important;
        font-size: 18px !important;
        z-index: 10 !important;
    }

    .login-form-link {
        font-size: 14px !important;
        text-decoration: none !important;
        color: #145523 !important;
        float: right !important;
        font-weight: 600 !important;
    }

    .button {
        width: 100% !important;
        background: linear-gradient(#1e7e34 0%, #19692c 65%, #145523 100%), #145523 !important;
        color: white !important;
        padding: 18px !important;
        border: none !important;
        border-radius: 10px !important;
        font-size: 18px !important;
        font-weight: bold !important;
        cursor: pointer !important;
        margin-top: 15px !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        gap: 12px !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2) !important;
    }

    .button:hover {
        background: linear-gradient(#218838 0%, #1e7e34 65%, #19692c 100%), #19692c !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3) !important;
    }

    .error {
        background: #fff5f5 !important;
        color: #c00 !important;
        padding: 15px !important;
        border-radius: 8px !important;
        margin-bottom: 25px !important;
        font-size: 14px !important;
        text-align: left !important;
        border-left: 5px solid #c00 !important;
    }

	/* media query  */
	@media (max-width: 768px) {
        .login-container {
            padding: 30px 25px !important; 
            margin: 10px !important;
            max-width: 95% !important;
        }

        .login-title {
            font-size: 22px !important;
        }

        .login-title span {
            font-size: 20px !important;
        }

        .login-header img {
            max-width: 140px !important;
        }

        .button {
            padding: 15px !important; 
            font-size: 16px !important;
        }

        .form-control {
            padding: 12px !important; 
        }
    }

    
    @media (max-width: 380px) {
        .login-title {
            font-size: 18px !important;
        }
        
        .login-title span {
            font-size: 17px !important;
        }
        
        .login-form-link {
            float: none !important; 
            display: block !important;
            margin-top: 5px !important;
        }
    }
</style>

<div class="login-container">
    <div class="login-header">
        <a href="/">
            <img src="/images/shadhinHostingLogo.png" alt="Shadhin Hosting">
        </a>
        <h1 class="login-title">
            Welcome to<span>Shadhin Hosting Control Panel</span>
        </h1>
    </div>

    <form id="login-form" method="post" action="/login/">
        <input type="hidden" name="token" value="<?= $_SESSION["token"] ?>">

        <?php if (!empty($error)) { ?>
            <p class="error"><?= $error ?></p>
        <?php } ?>

        <div class="form-group">
            <label for="username" class="form-label"><?= _("Username") ?></label>
            <input type="text" class="form-control" name="user" id="username" autocomplete="username" required autofocus>
        </div>

        <div class="form-group">
            <label for="password" class="form-label">
                <?= _("Password") ?>
                <?php if ($_SESSION["POLICY_SYSTEM_PASSWORD_RESET"] !== "no") { ?>
                    <a class="login-form-link" href="/reset/"><?= _("Forgot Password") ?></a>
                <?php } ?>
            </label>
            <div class="password-wrapper">
                <input type="password" class="form-control" name="password" id="password" autocomplete="current-password" required>
                <i class="fas fa-eye" id="togglePassword"></i>
            </div>
        </div>

        <button type="submit" class="button">
            <i class="fas fa-right-to-bracket"></i> <?= _("Log In") ?>
        </button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const togglePassword = document.querySelector('#togglePassword');
        const passwordField = document.querySelector('#password');

        if (togglePassword && passwordField) {
            togglePassword.addEventListener('click', function () {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
            });
        }
    });
</script>