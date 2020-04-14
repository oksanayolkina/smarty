{extends file='layout.tpl'}
{block name=main}
    <div class="form-group col-md-12">
        <h3>{{$type}}</h3>
    </div>
    <form action="/{{$action}}" method="POST" style="width: 600px">
        <div class="form-group col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <label class="col-form-label col-sm-2 pt-0">Gender</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                            <label class="form-check-label" for="gridRadios1">male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">female</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary" value="{{$type}}"><br>
        </div>
    </form>
{/block}