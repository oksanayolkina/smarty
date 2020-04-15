{extends file='layout.tpl'}
{block name=main}
    <div class="form-group col-md-12">
        <h3>{{$type}}</h3>
    </div>
    <form action="/{{$action}}" method="POST" style="width: 600px">
        <div class="form-group col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary" value="{{$type}}"><br>
        </div>
    </form>
{/block}