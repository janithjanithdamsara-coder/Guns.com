<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Login — School System</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* =============== RESET & BASE =============== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            background: url('classroom-blur.jpg') center/cover no-repeat fixed;
            background-color: #f5f7fa;
            min-height: 100vh;
            min-height: 100dvh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
        }

        /* =============== LOGIN BOX =============== */
        .login-container {
            width: 100%;
            max-width: 420px;
            margin: auto;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.96);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(8px);
            width: 100%;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #2c3e50;
            font-size: 1.75rem;
            font-weight: 700;
        }

        /* =============== FORM STYLING WITH ICONS =============== */
        .input-group {
            margin-bottom: 1.2rem;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #34495e;
            font-size: 0.9rem;
        }

        .input-wrapper {
            position: relative;
            width: 100%;
        }

        .input-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
            font-size: 1.1rem;
            pointer-events: none;
            transition: color 0.3s ease;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 0.85rem;
            padding-left: 45px;
            border: 1px solid #dfe6e9;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f9f9f9;
            color: #2d3436;
        }

        .input-group input:focus,
        .input-group select:focus {
            outline: none;
            border-color: #3498db;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(52, 152, 219, 0.15);
        }

        .input-wrapper:focus-within i {
            color: #3498db;
        }

        /* =============== reCAPTCHA RESPONSIVE FIX =============== */
        .g-recaptcha {
            display: flex;
            justify-content: center;
            margin: 1rem 0 1.5rem;
            width: 100%;
            overflow: hidden;
        }

        /* =============== BUTTON =============== */
        .login-box button {
            width: 100%;
            padding: 0.9rem;
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .login-box button:hover {
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
            transform: translateY(-1px);
        }

        .login-box button:active {
            transform: scale(0.98);
        }

        /* =============== REGISTER LINK =============== */
        .register-link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.2s ease;
        }

        .register-link:hover {
            color: #2980b9;
            text-decoration: underline;
        }

        /* =============== ERROR MESSAGE =============== */
        .error {
            color: #c0392b;
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
            padding: 0.8rem;
            background: #fadbd8;
            border-radius: 6px;
            border: 1px solid #f1948a;
        }

        /* =============== RESPONSIVE DESIGN =============== */
        @media (max-width: 768px) {
            .login-box {
                padding: 2rem;
            }
        }

        @media (max-width: 480px) {
            body {
                align-items: flex-start;
                padding: 20px 15px;
            }

            .login-container {
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .login-box {
                padding: 1.5rem;
            }

            .login-box h2 {
                font-size: 1.5rem;
            }

            .g-recaptcha {
                transform: scale(0.85);
                transform-origin: center;
                margin-bottom: 1rem;
            }
        }

        @media (max-width: 350px) {
            .login-box {
                padding: 1.2rem;
            }

            .g-recaptcha {
                transform: scale(0.75);
                margin: 0.5rem -15px 1rem;
            }

            .login-box h2 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>School Management System</h2>
            <form method="POST" action="login_process.php">

                <div class="input-group">
                    <label for="username">Username / User ID</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" required autocomplete="username"
                            placeholder="Enter your ID" />
                    </div>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" required autocomplete="current-password"
                            placeholder="Enter password" />
                    </div>
                </div>

                <div class="g-recaptcha-wrapper">
                    <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY_HERE"></div>
                </div>

                <button type="submit">
                    Login <i class="fas fa-right-to-bracket"></i>
                </button>

                <a href="../log/registration.php" class="register-link">
                    <i class="fas fa-user-plus"></i> Register Now
                </a>

                <?php if (!empty($_GET['error'])): ?>
                    <div class="error">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>

</html>