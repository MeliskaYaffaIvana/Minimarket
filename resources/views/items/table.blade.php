<div class="table-responsive">
    <table class="table" id="items-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Picture</th>
        <th>Category Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{!! $item->name !!}</td>
            <td>{!! $item->price !!}</td>
            <td>{!! $item->description !!}</td>
            <td>{!! $item->stock !!}</td>
            <td><img src="{{ asset('images').'/'.$item->picture }}" width="100" height="100"></td>
            <td>{!! $item->category_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('items.show', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('items.edit', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
