@extends('admin.layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-3">
                <div class="card-header">Webhook End Point</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="get" action="testWebhook">
                        <div class="form-group">
                            <label for="webhookUrl">URL</label>
                            <input id="webhookUrl" type="text" class="form-control" name="webhook_url"
                                   value="" />
                        </div>
                         <input type="hidden" class="form-control" name="csrf"
                                   value="{{ csrf_token() }}" />
                        

                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
