<form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="signup-div"> 
        <h3>Sign up </h3>
        <ul>
            <li>
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required/>
                @if ($errors->has('name'))
                    <div class="span-fp-error">{{ $errors->first('name') }}</div>
                @endif
            </li>
            <li>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Please enter your Email here" required/>
                @if ($errors->has('email'))
                    <div class="span-fp-error">{{ $errors->first('email') }}</div>
                @endif
            </li>
            <li>
                <input type="password" name="password" placeholder="Password"/>
                @if ($errors->has('password'))
                    <div class="span-fp-error">{{ $errors->first('password') }}</div>
                @endif
            </li>
            <li>
                <input type="password" name="password_confirmation" placeholder="Password Confirmation" required>
                @if($errors->has('password_confirmation'))
                    <div class="span-fp-error">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </li>
            <li>
                <input type="submit" name="signup" Value="Signup for Twitty">
            </li>
        </ul>
    </div>
</form>