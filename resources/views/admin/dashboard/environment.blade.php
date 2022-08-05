<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cubes"></i> {{__('admin.home.environment')}}</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped">
                @foreach($envs as $env)
                <tr>
                    <td width="120px"><i class="fa fa-caret-right"></i> {{ $env['name'] }}</td>
                    <td><i class="MDI {{$env["icon"]}} {{$env["color"]}}"></i> {{ $env['value'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>
