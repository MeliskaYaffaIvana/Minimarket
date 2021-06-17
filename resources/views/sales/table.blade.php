<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead>
            <tr>
                <th>Branch Store</th>
        <th>Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sales as $sale)
            <tr>
                <td>{!! $sale->customer_id !!}</td>
            <td>{!! $sale->total !!}</td>
                <td>
                    {!! Form::open(['route' => ['sales.destroy', $sale->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('sales.show', [$sale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('sales.edit', [$sale->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
