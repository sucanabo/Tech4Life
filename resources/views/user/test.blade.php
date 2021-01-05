@if(Auth:: check())
    <h1>Đăng nhập thành công</h1>
    @if(isset($user))
    {{"Tên :". $user->username}}
    </br>
    {{"Mật khẩu :". $user->password}}
    @endif
@endif

