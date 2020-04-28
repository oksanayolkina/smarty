{extends file='layout.tpl'}
{block name=main}
    <h3>{{$type}}</h3>
    {if isset($smarty.get.error)}
        <div class="alert alert-danger" role="alert">{$smarty.get.error}</div>
    {/if}

    <form action="/{{$action}}" method="POST" style="width: 300px">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-primary" value="{{$type}}"><br>
    </form>
{/block}