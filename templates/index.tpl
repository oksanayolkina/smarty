{extends file='layout.tpl'}
{block name=main}
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">GENDER</th>
        </tr>
    </thead>
    <tbody>
        {foreach $data as $row}
            <tr>
                <td>{{$row['name']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['gender']}}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{/block}
