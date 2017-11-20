<div class="login-div">
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <ul>
            <li>
            <input type="text" name="email" value="{{ old('email') }}" placeholder="Please enter your Email here"/>
            @if ($errors->has('email'))
                <div class="span-fp-error">{{ $errors->first('email') }}</div>
            @endif
            </li>
            <li>
            <input type="password" name="password" placeholder="password"/><input type="submit" name="login" value="Log in"/>
            @if ($errors->has('password'))
                <div class="span-fp-error">{{ $errors->first('password') }}</div>
            @endif
            </li>
            <li>
            <input type="checkbox" {{ old('remember') ? 'checked' : '' }} Value="Remember me">Remember me
            </li>
        </ul>
	</form>
</div>