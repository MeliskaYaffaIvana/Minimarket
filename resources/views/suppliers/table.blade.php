<div class="table-responsive">
    <table class="table" id="suppliers-table">
        <thead>
            <tr>
                <th>Company Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>Region</th>
        <th>Postalcode</th>
        <th>Country</th>
        <th>Fax</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{!! $supplier->company_name !!}</td>
            <td>{!! $supplier->phone !!}</td>
            <td>{!! $supplier->address !!}</td>
            <td>{!! $supplier->city !!}</td>
            <td>{!! $supplier->region !!}</td>
            <td>{!! $supplier->postalcode !!}</td>
            <td>{!! $supplier->country !!}</td>
            <td>{!! $supplier->fax !!}</td>
            <td>{!! $supplier->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['suppliers.destroy', $supplier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('suppliers.show', [$supplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('suppliers.edit', [$supplier->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
