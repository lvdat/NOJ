<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cubes"></i> {{__('admin.home.dependencies')}}</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body dependencies">
        <div class="table-responsive">
            <table class="table table-striped">
                @foreach($dependencies as $dependency => $version)
                <tr>
                    <td width="280px"><i class="fa fa-cube"></i> {{ $dependency }}</td>
                    <td><span class="label label-success">{{ $version }}</span></td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>

<script>
    $('.dependencies').slimscroll({height:'78vh',size:'3px'});
</script>
