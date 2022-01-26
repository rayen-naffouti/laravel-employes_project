<form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}
        <label>nom</label></br>
        <input type="text" name="PERS_MAT_ACT" id="PERS_MAT_ACT" class="form-control"></br>
        <label>adress</label></br>
        <input type="text" name="PERS_NOM" id="PERS_NOM" class="form-control"></br>
        <label>password</label></br>
        <input type="text" name="PERS_PRENOM" id="PERS_PRENOM" class="form-control"></br>
        <label>img</label></br>
        <input type="text" name="PERS_DATE_NAIS" id="PERS_DATE_NAIS" class="form-control"></br>
       

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>