<style>
    h1 {
        font-size: 24px;
        color: #333333;
        margin-bottom: 20px;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #555555;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .message {
        margin-bottom: 20px;
    }

    .signature {
        margin-top: 20px;
    }
</style>

<div class="container">
    <h1>Forget Password</h1>

    <div class="message">
        <p>Dear user,</p>
        <p>We have received your request to reset your password. We understand the importance of keeping your account secure, and we are here to assist you with regaining access to your account.</p>
        <p>To proceed with resetting your password, please click on the following link:</p>
        <p><a href="{{ route('reset.password.get', $token) }}">Reset Password</a></p>
        <p>This link will direct you to the password reset page, where you can enter a new password of your choice. Please note that for security reasons, the link will expire after a certain period of time. If the link has expired, please visit our website and initiate the "Forgot Password" process again.</p>
        <p>If you did not request a password reset, please ignore this email. Your account will remain secure, and no action is required on your part.</p>
        <p>Should you encounter any difficulties during the password reset process or have any further questions, please do not hesitate to reach out to our customer support team. We are available [mention customer support hours] and will be happy to assist you.</p>
        <p>Thank you for choosing our services, and we apologize for any inconvenience caused.</p>
    </div>

    <div class="signature">
        <p>Best regards,</p>
        <p>Web Admin</p>
    </div>
</div>
