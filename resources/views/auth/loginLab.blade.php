@extends('layouts.logAuth')

@section('content')
<div class="sub-header w-100">
    <h3>log in today</h3>
</div>
<div class="form">
    <div class="card">
        <form method="POST" action="{{ route('save.lab.login') }}" >
            @csrf
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <label for="password"><b>Password</b></label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password" name="password" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <a href="xx" style="color: white">
            <label for="forget-password" class="forget d-flex justify-content-end ">Forget Password?</label>
            </a>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
</body>

</html>
