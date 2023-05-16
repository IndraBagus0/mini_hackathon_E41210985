<!-- resources/views/auth/register.blade.php -->
<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">Nama</label>
    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Password</label>
    <input id="password" type="password" name="password" required>

    <label for="password_confirmation">Konfirmasi Password</label>
    <input id="password_confirmation" type="password" name="password_confirmation" required>

    @error('name')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    @error('email')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    @error('password')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <button type="submit">Register</button>
</form>
