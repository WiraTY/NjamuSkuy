<form action="{{ route('postLogin') }}" method="POST">
    @csrf
    <input type="text" name="email" id=""><br>
    <input type="password" name="password" id="">
    <button>login</button>
</form>