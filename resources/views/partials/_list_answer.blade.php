<a href="{{ url('',[$url,'create']) }}" class="btn btn-default" aria-label="Left Align">New Answer</a>
<br/>
<br/>
<table class="table table-bordered table-hover table-condensed">
    <thead>
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">ID</th>
        <th class="text-center">Answer</th>
        <th class="text-center">Update</th>
        <th class="text-center">Delete</th>
        <th class="text-center">Time Created</th>
    </tr>
    </thead>
    <tbody>
    <?php  $count = 0; ?>
    <?php  $count = (( $lists->currentPage() - 1)* $lists->perPage()) + $count; ?>
    @foreach ($lists as $list)
        <tr>
            <td class="text-center">{{ ++$count }}</td>
            <td class="text-center">{{ $list->id }}</td>
            <td class="text-center">{{ $list->answer }}</td>
            <td class="text-center"><a href="{{ url('',[$url, $list->id, 'edit']) }}">Edit</a></td>
            <td class="text-center">
                {!! Form::model($list, ['method' => 'DELETE','action' => [$controller, $list->id]]) !!}
                @include('partials._form_delete')
                {!! Form::close() !!}
            </td>
            <td class="text-center">{{ $list->created_at }}</td>
        </tr>
    @endforeach

    </tbody>
</table>

{!! $lists->render() !!}