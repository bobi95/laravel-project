<div class="col s12">
    <div class="row">
        <h3 class="center-align grey-text">Profile</h3>
        <div class="col s12 center-align">
            <img class="circle responsive-img" src="{{ getOrDefault($user->avatar, 'http://lorempixel.com/300/300/people/') }}">
        </div>
        <div class="col s12 card-panel white">
            <p><span class="grey-text text-darken-1 text-bold">Name: </span><span class="truncate">{{ $user->name }}</span></p>
            <p><span class="grey-text text-darken-1 text-bold">Email: </span><span class="truncate">{{ $user->email }}</span></p>
        </div>
        <div class="col s12 center-align">
            <form action="{{ route('auth.logout') }}" method="post" class="col s12" id="logout-form">
                {{ csrf_field() }}
                <div class="col s12 center-align">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Logout<i class="material-icons right">lock_outline</i></button>
                </div>
            </form>
        </div>
    </div>
</div>
