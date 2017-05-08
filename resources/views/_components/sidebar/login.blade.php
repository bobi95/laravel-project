<div class="col s12">
    <h3 class="center-align grey-text">Login</h3>
    <form action="{{ route('auth.login') }}" method="post" class="col s12" id="login-form">
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s12">
                <input type="email" id="login_email" name="email" class="validate @if ($errors->has('email')) invalid @endif" data-error=".error_email">
                <label for="login_email" @if ($errors->has('email')) data-error="{{ $errors->first('email') }}" @endif>Email</label>
                <div class="error_email"></div>
            </div>
            <div class="input-field col s12">
                <input type="password" id="login_password" name="password" class="validate @if ($errors->has('password')) invalid @endif" data-error=".error_password">
                <label for="login_password" @if ($errors->has('password')) data-error="{{ $errors->first('password') }}" @endif>Password</label>
                <div class="error_password"></div>
            </div>
            <div class="col s12 center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Login<i class="material-icons right">lock_open</i></button>
            </div>
        </div>
    </form>
</div>

@push('scripts-app')
<script type="text/javascript">
    $("#login-form").validate({
        rules: {
            email: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: 'Email is required.'
            },
            password: {
                required: 'Password is required.'
            }
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });
</script>
@endpush

{{-- @push('styles-app') --}}
<style type="text/css">
    .input-field div.error{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
</style>
{{-- @endpush --}}