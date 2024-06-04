@extends('components.layout')

@section('content')
    <div class="login-container">
        <h1>Login</h1>
        <p>Doesn’t have an account yet? <a href="register.php">Sign Up</a></p>
        <form class="login-form" action="login.php" method="POST">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <a href="resetpassword.php" class="forgot-password">Forgot password?</a>

            <button type="submit">LOGIN</button>
        </form>
    </div>
@endsection
