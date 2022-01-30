<form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}
        <label>nom</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>adress</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>password</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>
        <label>role</label></br>
        <input type="text" name="role" id="role" class="form-control"></br>
        <label>img</label></br>
        <input type="text" name="img" id="img" class="form-control"></br>
       

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>